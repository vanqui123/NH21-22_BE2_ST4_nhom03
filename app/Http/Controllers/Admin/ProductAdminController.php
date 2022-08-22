<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Product;


class ProductAdminController extends Controller
{
    private $products;
    public function __construct()
    {
        $this->products = new Product();
    }
    public function show(Request $request)
    {
        $title = 'Danh sách sản phẩm';
        $filters = [];
        $keywords = "";

        if (!empty($request->type_id)) {
            $type_id = $request->type_id;
            $filters[] = ['product.type_id', '=', $type_id];
        }

        if (!empty($request->keywords)) {
            $keywords = $request->keywords;
        }

        //Xử lí sắp xếp 
        $sortType = $request->input('sort-type');

        $sortBy = $request->input('sort-by');

        $allowSort = ['asc', 'desc'];

        if (!empty($sortType) && in_array($sortType, $allowSort)) {


            if ($sortType == 'desc') {
                $sortType = 'asc';
            } else {
                $sortType = 'desc';
            }
        } else {
            $sortType = 'asc';
        }

        $sortByArr = [
            'sortBy' => $sortBy,
            'sortType' => $sortType
        ];

        $productList = $this->products->getAllProducts($filters, $keywords,$sortByArr);
        $productType = $this->products->getAllProtypes();
        return view('admin.productadmin', compact('title', 'productList', 'productType', 'sortType'));
    }
    public function add()
    {
        $title = 'Thêm sản phẩm';
        $products = new Product();
        $productList = $products->getAllProducts();
        $productType = $this->products->getAllProtypes();
        return view('admin.addproduct', compact('title', 'productList', 'productType'));
    }
    public function postAdd(Request $request)
    {
        // $request->validate([
        //     'name' => 'required||min:3',
        //     'description' => 'required'
        // ], [
        //     'name.required' => 'Bắt buộc phải nhập tên sản phẩm',
        //     'name.min' => 'Tên sản phẩm phải nhiều hơn :min kí tự',
        //     'description.required' => 'Mô tả bắt buộc phải nhập'
        // ]);
        $title = 'Thêm sản phẩm';
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('images/', $filename);
        };
        $dataInsert = [
            $request->product_name,
            $request->product_description,
            $request->type_id,
            $image = $filename,
            $request->product_price,
            $request->discount,
            $request->quantity,
            date('Y-m-d H:i:s'),
            $request->date_expire
        ];
        $this->products->addProduct($dataInsert);
        return view('admin.addproduct', compact('title'))->with('msg', 'Thêm sản phẩm thành công');
    }
    public function editProduct(Request $request, $id = 0)
    {
        $title = 'Cập nhật sản phẩm';
        $id = $request->id;
        $productType = $this->products->getAllProtypes();
        if (!empty($id)) {
            $productDetail = $this->products->detail($id);
            if (!empty($productDetail[0])) {
                $request->session()->put('id', $id);
                $productDetail = $productDetail[0];
            } else {
                return redirect()->route('admin.productadmin')->with('msg', 'Người dùng không tồn tại!!');
            }
        } else {
            return redirect()->route('admin.productadmin')->with('msg', 'Liên kết không tồn tại!!');
        }
        return view('admin.editproduct', compact('title', 'productDetail', 'productType'));
    }
    public function postEdit(Request $request)
    {

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('images/', $filename);
        };
        $id = session('id');
        if (empty($id)) {
            return back();
        }
        $type_id = $request->type_id;
        if (!empty($request->type_id)) {
            $type_id = 1;
        }
        $dataUpdate = [
            $request->product_name,
            $request->product_description,
            $type_id,
            $image = $filename,
            $request->product_price,
            $request->discount,
            $request->quantity,
            date('Y-m-d H:i:s'),
            $request->date_expire
        ];
        $this->products->updateProduct($dataUpdate, $id);
        return back();
    }
    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        if (!empty($id)) {
            $productDetail = $this->products->detail($id);
            if (!empty($productDetail[0])) {
                $deleteStatus = $this->products->deleteProduct($request);
                if ($deleteStatus) {
                    $msg = 'Xoá thành công';
                } else {
                    $msg = 'Xoá sản phẩm không thành công !! ';
                }
            } else {
                $msg = 'Người dùng không tồn tại!!';
            }
        } else {
            $msg = 'Liên kết không tồn tại!!';
        }
        return redirect()->route('admin.productadmin');
    }
    public function getAllProtypes()
    {
        $protype = new Protype();
        $type = $protype->getAllProtypes();
        return $type;
    }
}

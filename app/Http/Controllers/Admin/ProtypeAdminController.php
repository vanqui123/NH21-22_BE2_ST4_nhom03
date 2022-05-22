<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Product;
class ProtypeAdminController extends Controller
{
    private $protypes;
    public function __construct()
    {
        $this->protypes = new Protype();
    }
    public function show(Request $request)
    {
        $title = 'Danh sách loại sản phẩm';
        $protypeList = $this->protypes->getAll();
        return view('admin.protypeadmin', compact('title', 'protypeList'));
    }
    public function add()
    {
        $title = 'Thêm loại sản phẩm';
        $protypes = new Protype();
        $protypeList = $protypes->getAll();

        return view('admin.addprotype', compact('title', 'protypeList'));
    }
    public function postAdd(Request $request)
    {
        $title = 'Thêm loại sản phẩm';
        $dataInsert = [
            $request->type_name,
        ];
        $this->protypes->addProtype($dataInsert);
        return view('admin.addprotype', compact('title'))->with('msg', 'Thêm loại sản phẩm thành công');
    }
     public function editProtype(Request $request,$id = 0)
    {
        $title = 'Cập nhật loại sản phẩm';
        $id = $request->id;
     
        if(!empty($id)){
            $protypeDetail = $this->protypes->detail($id);
            if(!empty($protypeDetail[0])){
                $request->session()->put('id',$id);
                $protypeDetail = $protypeDetail[0];
            }
            else{
                return redirect()->route('admin.protypeadmin')->with('msg','Loại sản phẩm không tồn tại!!');
            }
        }else {
            return redirect()->route('admin.protypeadmin')->with('msg','Liên kết không tồn tại!!');
        }
        return view('admin.editprotype', compact('title','protypeDetail'));
    }
    public function postEdit(Request $request){
        $id = session('id');
        if(empty($id)){
            return back();
        }
        $dataUpdate = [
            $request->type_name
        ];
        $this->protypes->updateProtype($dataUpdate,$id);
        return back();
    }
    public function deleteProtype(Request $request)      
    {
       
        $id = $request->id;
        if(!empty($id)){
            $protypeDetail = $this->protypes->detail($id);
            if(!empty($protypeDetail[0])){
                $deleteStatus = $this->protypes->deleteProtype($request);
                if($deleteStatus){
                    $msg = 'Xoá thành công';
                }else{
                    $msg = 'Xoá loại sản phẩm không thành công !! ';
                }
            }
            else{
                $msg = 'Loại sản phẩm không tồn tại!!';
            }
        }else {
            $msg = 'Liên kết không tồn tại!!';
        }
        return redirect()->route('admin.protypeadmin');
    }
}

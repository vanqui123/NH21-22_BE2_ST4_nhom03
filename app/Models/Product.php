<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Product extends Model
{

    protected $table = 'product';
    protected $primaryKey = 'product_id';
    public function protype()
    {
        return $this->belongsTo(Protype::class, "type_id");
    }
    public function getAllProtypes()
    {
        $products = DB::table('protypes')
            ->get();
        return $products;
    }
    public function getAllProducts($filters = [], $keywords = "", $sortByArr = null)
    {
        $products = DB::table($this->table)
            ->select('product.*', 'protypes.type_name as type_name')
            ->join('protypes', 'product.type_id', '=', 'protypes.type_id');

        $orderBy= 'created_at';
        $orderType='desc';

        if (!empty($sortByArr) && is_array($sortByArr)) {
            if (!empty($sortByArr['sortBy']) && !empty($sortByArr['sortType'])) {
                $orderBy = trim($sortByArr['sortBy']); 
                $orderType = trim($sortByArr['sortType']);
            }
        }

        $products = $products->orderBy($orderBy, $orderType);

        if (!empty($filters)) {
            $products = $products->where($filters);
        }

        if (!empty($keywords)) {
            $products = $products->where(function ($query) use ($keywords) {
                $query->orWhere('name', 'like', '%' . $keywords . '%');
                $query->orWhere('description', 'like', '%' . $keywords . '%');
            });
        }

        $products = $products->paginate(10);
        return $products;
    }
    public function addProduct($data)
    {
        DB::insert('INSERT INTO ' . $this->table . ' (name,description,type_id,image,price,discount,product_quanity,created_at,date_expire) 
        values(?,?,?,?,?,?,?,?,?)', $data);
    }
    public function detail($id)
    {
        return DB::select('SELECT * FROM ' . $this->table . ' WHERE product_id=?', [$id]);
    }
    public function updateProduct($data, $id)
    {
        $data[] = $id;
        return DB::update('UPDATE ' . $this->table . ' SET name=?,description=?,type_id=?,image=?,price=?,discount=?,product_quanity=?,created_at=?,date_expire=?  WHERE product_id=?', $data);
    }
    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        $product = Product::where('product_id', $id)->first();
        return $product->delete();
    }
}

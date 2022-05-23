<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $guarded = []; 
    protected $table = "wishlist"; 

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function product(){
        
        return $this->belongsTo(Product::class,'product_id');
    }
  
}

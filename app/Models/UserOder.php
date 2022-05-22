<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOder extends Model
{
    use HasFactory;
    protected $table = 'user_order';
    public function users(){
        
        return $this->belongsTo(User::class,'user_id');
    }
    public function voucher(){
        
        return $this->belongsTo(Voucher::class,'voucher_id');
    }
}

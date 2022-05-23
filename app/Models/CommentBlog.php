<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentBlog extends Model
{
    use HasFactory;
    protected $guarded = []; 
    protected $table = "blog_comments";
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}

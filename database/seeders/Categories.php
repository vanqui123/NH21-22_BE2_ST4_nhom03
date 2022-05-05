<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('categories')->insert([
            'title'=>'Organic foods is good for your health',
            'slug' =>'abc',
            'image' =>'hinhanh.jpg',
            'created_at' =>'2022-4-1',
            
        ]);
    }
}

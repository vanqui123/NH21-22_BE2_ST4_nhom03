<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Categoris extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('categoris')->insert([
            'title'=>'Organic foods is good for your health',
            'slug' =>'abc',
            'image' =>'hinhanh.jpg',
            'created_at' =>'2022-4-1',
            
        ]);
    }
}

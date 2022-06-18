<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                'name' => "Nguyễn Quốc Việt",
                'email' => "admin@gmail.com",
                'password' => Hash::make('admin'),
                'role' => 'admin',
            ]);
        
    }
}

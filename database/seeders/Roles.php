<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin','user'];
        foreach($roles as $value){
        DB::table('roles')->insert([
            'roles_name'=> $value,

        ]);
    }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Protypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $protypes = ['Fruits','Vegatables','Juices','Dried'
          
        ];
        foreach($protypes as $value){
        DB::table('protypes')->insert([
            'type_name'=> $value,

        ]);
    }
    }
}

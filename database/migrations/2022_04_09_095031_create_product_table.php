<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description',3000);
            $table->Integer('type_id');
            $table->string('image');
            $table->double('price');
            $table->double('discount');
            $table->Integer('product_quanity');
            $table->timestamp('created_at');
            $table->timestamp('date_expire')->useCurrent();
            
               });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}

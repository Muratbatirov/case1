<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
               $table->unsignedBigInteger('category_id');
               $table->unsignedBigInteger('postavshik_id');
            
              $table->char('name', 50); 
               $table->integer('price');
             $table->integer('quantity');
            $table->longText('opisanie'); 
             
             $table->foreign('postavshik_id')->references('id')->on('postavshiks');  
             $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

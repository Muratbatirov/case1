<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostavshiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postavshiks', function (Blueprint $table) {
            $table->id();
             $table->char('name', 50); 
              $table->char('phone', 50); 
               $table->char('contact_men', 50); 
               $table->char('sayt', 50); 
                 $table->longText('opisanie'); 
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
        Schema::dropIfExists('postavshiks');
    }
}

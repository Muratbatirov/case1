<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('direction_id');
              $table->char('surname', 100);
            $table->char('name', 100);
            $table->char('patronymic', 100);
            $table->char('gender',20);
            $table->date('birthdate');
            $table->char('phonenum', 20);
            $table->char('passportnum', 20);
            $table->longText('position'); 
            $table->integer('wages');
            $table->tinyInteger('dismissed')->default(0);
            $table->date('comedate');
            $table->date('exitdate')->nullable();
            $table->foreign('direction_id')->references('id')->on('directions');

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
        Schema::dropIfExists('employees');
    }
}

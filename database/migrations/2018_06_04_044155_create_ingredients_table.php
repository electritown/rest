<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            ingredient->id
                      ->Name
                      ->description
                      ->quantity

        */
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('ing_id');
            $table->string('ing_name');
            $table->string('ing_desc');
            $table->integer('ing_quantity');     
            $table->integer('ingcat_id')->unsigned();
            $table->foreign('ingcat_id')->references('id')->on('ingcategories');
   
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
        Schema::dropIfExists('ingredients');
    }
}

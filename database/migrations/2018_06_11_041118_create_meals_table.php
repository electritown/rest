<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Meal->id
                ->Name
                ->description
                ->Category

        */

        Schema::create('meals', function (Blueprint $table) {
            $table->increments('item_id');
            $table->integer('cat_id')->unsigned();
            $table->string('item_name');
            $table->string('item_describtion');
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
        Schema::dropIfExists('meals');
    }
}

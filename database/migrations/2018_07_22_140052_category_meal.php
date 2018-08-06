<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryMeal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_meal', function (Blueprint $table) {
            $table->integer('item_id')->unsigned();
            $table->integer('cat_id')->unsigned();
            $table->foreign('item_id')->references('item_id')->on('meals');
            $table->foreign('cat_id')->references('cat_id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

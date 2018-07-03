<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
            Menu->id
                ->Name
                ->description
                ->Category

        */

        Schema::create('menus', function (Blueprint $table) {
            $table->increments('item_id');
            $table->string('item_name');
            $table->string('item_describtion');
            $table->string('item_category');
            $table->string('category');
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
        Schema::dropIfExists('menus');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('parent_id')->nullable();
            $table->string('title',50);
            $table->string('url',200);
            $table->string('icon',100)->nullable();
            $table->bigInteger('roleid');
            $table->string('order')->nullable();
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

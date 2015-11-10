<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBottleTreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bottle_tree', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('nameNormal');
            $table->string('nameScience');
            $table->text('info');
            $table->string('img');
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
        Schema::drop('bottle_tree');
    }
}

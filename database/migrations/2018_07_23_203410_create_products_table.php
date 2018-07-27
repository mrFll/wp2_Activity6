<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            //$table->charset = 'utf8';
            $table->increments('id');
            $table->string('name', 50);
            //$table->string('imageName',50);
            $table->integer('comID');
            $table->integer('catID');
            $table->integer('price');
            /**
             * 0 -> Mojood
             * 1 -> na mojood
             * 2 -> tolid tavaghof
             * 3 -> be zoodi
             */
            $table->string('status', 2);
            $table->longText('details');
            //$table->timestamps();
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

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
            $table->charset = 'utf8';
            $table->increments('id');
            $table->string('name', 50);
            $table->string('imageName',50);
            $table->integer('comID', 'false');
            $table->integer('catID','false');
            $table->integer('price', 'false');
            $table->string('status', 2);
            $table->longText('details');
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

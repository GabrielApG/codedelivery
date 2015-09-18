<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned(); //relacioanmento
            $table->foreign('category_id')->references('id')->on('categories'); //relacionamento

            $table->string('name');
            $table->text('description');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}

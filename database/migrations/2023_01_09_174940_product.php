<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id', true);
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('idCompany')->unsigned();
            $table->integer('idCategory')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('product', function(Blueprint $table) {
            $table->foreign("idCompany")->references("id")->on("company");
            $table->foreign("idCategory")->references("id")->on("category");
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
        Schema::dropIfExists('product');
    }
}

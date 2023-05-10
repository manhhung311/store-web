<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImportBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('import_bill', function (Blueprint $table) {
            $table->increments('id', true);
            $table->dateTimeTz('date');
            $table->integer('price');
            $table->integer('quantity');
            $table->integer("idProduct")->unsigned();
            $table->integer("idUser")->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('import_bill', function(Blueprint $table) {
            $table->foreign("idProduct")->references("id")->on("product");
            $table->foreign("idUser")->references("id")->on("users");
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

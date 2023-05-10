<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExportBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('export_bill', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer("price");
            $table->dateTimeTz('date');
            $table->integer('quantity');
            $table->integer("idProduct")->unsigned();
            $table->integer("idUser")->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        Schema::table('export_bill', function(Blueprint $table) {
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
        Schema::dropIfExists('export_bill');
    }
}

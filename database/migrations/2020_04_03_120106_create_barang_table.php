<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('size')->nullable();
            $table->bigInteger('price');
            $table->string('warna')->nullable();
            $table->unsignedTinyInteger('rating')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('media_id')->nullable();
            $table->unsignedBigInteger('promo_id')->nullable();
            $table->enum('status',['ACTIVE','INACTIVE']);
            $table->timestamps();
        });
        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('media_id')->references('id')->on('media');
            $table->foreign('promo_id')->references('id')->on('promo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_text2')->nullable();
            $table->string('title2')->nullable();
            $table->string('subtitle2')->nullable();
            $table->enum('status', \App\Enums\StatusType::getValues());
            $table->string('content_type');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->unsignedBigInteger('media2_id')->nullable();
            $table->unsignedBigInteger('media3_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->unsignedBigInteger('fitur_id')->nullable();
            $table->unsignedBigInteger('model_id')->nullable();
            $table->timestamps();
        });
        Schema::table('homepages', function (Blueprint $table) {
            $table->foreign('media_id')->references('id')->on('media');
            $table->foreign('media2_id')->references('id')->on('media');
            $table->foreign('media3_id')->references('id')->on('media');
            $table->foreign('category_id')->references('id')->on('category');
            $table->foreign('barang_id')->references('id')->on('barang');
            $table->foreign('fitur_id')->references('id')->on('fitur');
            $table->foreign('model_id')->references('id')->on('model');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepages');
    }
}

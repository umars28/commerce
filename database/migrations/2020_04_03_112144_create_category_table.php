<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->enum('status', \App\Enums\StatusType::getValues());
            $table->timestamps();
        });
        Schema::table('category', function (Blueprint $table) {
            $table->foreign('media_id')->references('id')->on('media');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}

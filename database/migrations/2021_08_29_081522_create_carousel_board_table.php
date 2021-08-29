<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselBoardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel_board', function (Blueprint $table) {
            $table->bigIncrements('sn');
            $table->string('page', 30)->unique();
            $table->string('content', 255);
            $table->text('images');
            $table->text('px');
            $table->enum('is_enable', ['true', 'false']);
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
        Schema::dropIfExists('carousel_board');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavBaritemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_baritems', function (Blueprint $table) {
            $table->bigIncrements('sn');
            $table->string('page', 30)->unique();
            $table->string('content', 255);
            $table->string('link', 255);
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
        Schema::dropIfExists('nav_baritems');
    }
}

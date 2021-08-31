<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('sn');
            $table->string('account', 30)->unique();
            $table->string('password');
            $table->string('nickname', 30);
            $table->string('phone', 30);
            $table->string('Email')->nullable();
            $table->text('note')->nullable();
            $table->enum('role', ['agent', 'member', 'emp']);
            $table->enum('status', ['normal', 'lock', 'delete', 'auth']);
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
        Schema::dropIfExists('users');
    }
}

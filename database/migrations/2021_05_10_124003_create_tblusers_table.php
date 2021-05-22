<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 50)->nullable();
            $table->string('username', 30)->unique();
            $table->integer('status')->default(1);
            $table->string('api_token', 60)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('password_status')->default('0');
            $table->rememberToken();
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
        Schema::dropIfExists('tblusers');
    }
}

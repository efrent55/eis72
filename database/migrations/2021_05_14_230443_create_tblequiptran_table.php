<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblequiptranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblequiptran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('pid');
            $table->string('sn', 30);
            $table->string('tranid',15);
            $table->string('issued',1);
            $table->timestamp('dt_turnin')->nullable();
            $table->string('incident',1)->nullable();
            $table->string('incidentid',15)->nullable;
            $table->string('signature,254')->nullable;

        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblequiptran');
    }
}

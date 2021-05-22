<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbleartranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbleartran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->timestamp('dt_tm_issue');
            $table->string('issuepurpose', 254);
            $table->string('remarks', 254);
            $table->string('issuer_id', 15);
            $table->string('signature', 254);
            
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbleartran');
    }
}

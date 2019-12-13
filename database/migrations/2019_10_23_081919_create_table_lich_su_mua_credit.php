<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLichSuMuaCredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LichSuMuaCredit', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguoi_choi_id'); 
            $table->unsignedInteger('goi_credit_id');
            $table->integer('credit');
            $table->integer('so_tien');
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoichoi')->onDelete('cascade');
            $table->foreign('goi_credit_id')->references('id')->on('goicredit')->onDelete('cascade');
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
        Schema::dropIfExists('LichSuMuaCredit');
    }
}

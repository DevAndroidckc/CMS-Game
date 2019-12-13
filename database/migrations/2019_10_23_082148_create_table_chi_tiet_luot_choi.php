<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChiTietLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietLuotChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('luot_choi_id');
            $table->unsignedInteger('cau_hoi_id');
            $table->string('phuong_an');
            $table->integer('diem');
            $table->foreign('luot_choi_id')->references('id')->on('luotchoi')->onDelete('cascade');
            $table->foreign('cau_hoi_id')->references('id')->on('cauhoi')->onDelete('cascade');
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
        Schema::dropIfExists('ChiTietLuotChoi');
    }
}

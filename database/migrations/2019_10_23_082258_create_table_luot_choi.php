<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLuotChoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LuotChoi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nguoi_choi_id');
            $table->integer('so_cau');
            $table->text('diem');
            $table->text('ngay_gio');
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoichoi')->onDelete('cascade');
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
        Schema::dropIfExists('LuotChoi');
    }
}

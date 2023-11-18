<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('logo');
            $table->string('province_id');
            $table->string('province');
            $table->string('city_id');
            $table->string('city');
            $table->string('postal_code');
            $table->text('address');
            $table->text('email');
            $table->string('phone');
            $table->string('url')->nullable();
            $table->integer('jumlah_karyawan');
            $table->integer('tahun_pendirian');
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
        Schema::dropIfExists('perusahaans');
    }
};

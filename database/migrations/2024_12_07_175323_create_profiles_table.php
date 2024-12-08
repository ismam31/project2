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
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('nama_restoran');
        $table->string('alamat_restoran');
        $table->string('telepon_restoran');
        $table->text('pesan_bawah')->nullable();
        $table->timestamps();
    });
}

};

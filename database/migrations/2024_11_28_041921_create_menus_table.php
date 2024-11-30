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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('jumlah_barang');
            $table->enum('category', ['Makanan', 'Minuman', 'Snack', 'Kopi'])->after('nama_barang');
            $table->decimal('harga_modal', 10, 2);
            $table->decimal('harga_jual', 10, 2);
            $table->decimal('persenan', 5, 2); // Menyimpan persentase margin harga
            $table->string('gambar')->nullable(); // Untuk menyimpan path gambar
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
        Schema::table('menus', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};

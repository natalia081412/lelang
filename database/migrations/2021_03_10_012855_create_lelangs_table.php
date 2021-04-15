<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id');
            $table->foreign('barang_id')->references('id')->on('barangs');
            $table->date('tgl_lelang');
            $table->double('harga_pemenang');
            $table->foreignId('masyarakat_id');
            $table->foreign('masyarakat_id')->references('id')->on('users');
            $table->foreignId('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('users');
            $table->enum('status',['dibuka','ditutup']);
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
        Schema::dropIfExists('lelangs');
    }
}

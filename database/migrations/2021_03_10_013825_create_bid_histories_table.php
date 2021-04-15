<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lelang_id');
            $table->foreign('lelang_id')->references('id')->on('lelangs');
            $table->foreignId('masyarakat_id');
            $table->foreign('masyarakat_id')->references('id')->on('users');
            $table->double('penawaran_harga');
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
        Schema::dropIfExists('bid_histories');
    }
}

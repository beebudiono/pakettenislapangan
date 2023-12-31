<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger("main_trainer_id");
            $table->string('metode_pemb')->nullable();
            $table->string('status_pemb')->default('belum-bayar');
            $table->string('status_bo')->default('waiting');
            $table->string('bukti_bayar');
            $table->string('lap_lat');
            $table->string('type_lapangan');
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            // $table->date('tgl_transaksi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('tgl_transaksi')->useCurrent();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('paket_id')->references('id')->on('paket_latihans')->onDelete('cascade');
            $table->foreign('main_trainer_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};

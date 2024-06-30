<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penduduk_id');
            $table->string('bayar_tahun')->nullable();
            $table->string('bayar_bulan')->nullable();
            $table->decimal('nominal', 13, 0)->nullable(); // $table->decimal('amount', $precision = 8, $scale = 2); | $table->decimal('your_field_name', 13, 4); | 13 = Jumlah digit. Contoh - $99.999.999.999,99 | 4 = nilai setelah desimal. Contoh - $999.999.999. 9999
            $table->string('bukti_bayar')->nullable();
            $table->date('tgl_bayar')->nullable();
            $table->string('keterangan')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('iurans');
    }
}

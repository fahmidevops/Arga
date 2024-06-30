<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('komponen_id');
            $table->string('NIK')->unique();
            $table->string('nama')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->date('tgl_lahir');
            $table->string('jk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('RW')->nullable();
            $table->string('RT')->nullable();
            $table->string('agama')->nullable();
            $table->string('telp')->nullable();
            $table->string('is_kepala_keluarga')->default(false);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('penduduks');
    }
}

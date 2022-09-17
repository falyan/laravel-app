<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengajuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nip');
            $table->string('alat');
            $table->string('lokasi');
            $table->date('tanggal');
            $table->text('kendala');
            $table->string('evidence');
            $table->timestamps();
          });
    }

    
    public function down()
    {
        Schema::drop('pengajuan');
    }
}

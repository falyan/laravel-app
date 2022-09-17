<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama1');
            $table->string('catatan1');
            $table->string('catatan2');
            $table->string('catatan3');
            $table->date('tanggal');
            $table->date('tangga2');
            $table->date('tangga3');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->timestamps();
          });
    }

    
    public function down()
    {
        Schema::drop('proses');
    }
}



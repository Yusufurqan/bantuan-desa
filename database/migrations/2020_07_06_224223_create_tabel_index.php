<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('desa_id')->unsigned();
            // $table->foreign('desa_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('tanggal');
            $table->bigInteger('coa_id')->nullable()->unsigned();
            $table->foreign('coa_id')->references('id')->on('coa')->onDelete('cascade');
            $table->string('keterangan');
            $table->integer('debet');
            $table->integer('kredit');
            $table->integer('saldo');
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
        Schema::dropIfExists('index');
    }
}

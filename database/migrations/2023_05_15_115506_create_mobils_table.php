<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $collection) {
            $collection->index('kendaraan_id');
            $collection->foreign('kendaraan_id')->references('_id')->on('kendaraan');

            $collection->string('mesin');
            $collection->integer('kapasitas_penumpang');
            $collection->string('tipe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}

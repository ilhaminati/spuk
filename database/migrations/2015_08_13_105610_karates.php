<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Karates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_urut');
            $table->string('nama');
            $table->string('ttl');
            $table->string('ranting');
            $table->integer('kyu_lama');
            $table->integer('kyu_baru');
            $table->string('sabuk');
            $table->softDeletes();
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
        //
    }
}

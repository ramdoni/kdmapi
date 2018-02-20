<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekeningBankUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekening_bank_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_akun', 255);
            $table->string('no_rekening', 100);
            $table->integer('bank_id');
            $table->text('cabang');
            $table->integer('user_id');
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
        Schema::dropIfExists('rekening_bank_user');
    }
}
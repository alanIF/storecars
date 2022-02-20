<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaragemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garagem', function (Blueprint $table) {
            $table->id();
            $table->integer("id_veiculo");
            $table->unsignedBigInteger('user_id');
            
            $table->text("data_aquisicao");
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_veiculo')->references('id')->on('veiculo');

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
        Schema::dropIfExists('garagem');
    }
}


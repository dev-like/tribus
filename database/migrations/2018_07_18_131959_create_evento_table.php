<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id');
            $table->text('textoevento')->nullable();
            $table->text('visao')->nullable();
            $table->text('missao')->nullable();
            $table->text('valores')->nullable();
            
            $table->string('whatsapp',30)->nullable();
            $table->string('email',30)->nullable();
            $table->string('endereco',500)->nullable();
            $table->string('instagram',250)->nullable();
            $table->string('facebook',250)->nullable();
            $table->string('youtube',250)->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
}

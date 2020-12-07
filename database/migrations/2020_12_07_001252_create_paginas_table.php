<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('leyenda');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->longText('descripcion');

            $table->string('icono1');
            $table->string('icono2');
            $table->string('icono3');

            $table->string('icondes1',500);
            $table->string('icondes2',500);
            $table->string('icondes3',500);
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
        Schema::dropIfExists('paginas');
    }
}

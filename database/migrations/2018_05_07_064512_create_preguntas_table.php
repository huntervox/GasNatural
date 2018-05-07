<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TBL_Preguntas', function (Blueprint $table) {
            $table->increments('PK_id');
            $table->text('pregunta');
            $table->integer('valorPregunta');
            $table->text('respuesta');
            $table->integer('FK_IndicadorId')->unsigned();
            $table->integer('FK_TipoPreguntaId')->unsigned();
            $table->timestamps();

            $table->foreign('FK_IndicadorId')->references('PK_id')
            ->on('TBL_Indicadores')->onDelete('cascade');

            $table->foreign('FK_TipoPreguntaId')->references('PK_id')
            ->on('TBL_TipoPregunta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TBL_Preguntas');
    }
}

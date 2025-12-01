<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('deportistas', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->foreignId('pais_id')->constrained('paises')->onDelete('cascade');
        $table->foreignId('disciplina_id')->constrained('disciplinas')->onDelete('cascade');
        $table->date('fecha_nacimiento');
        $table->integer('estatura');
        $table->integer('peso');
        $table->timestamps();
    });
}

};

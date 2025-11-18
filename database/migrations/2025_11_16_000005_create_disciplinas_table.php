<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->integer('aulas');

            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('cursos');

            $table->softdeletes();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disciplinas');
    }
};

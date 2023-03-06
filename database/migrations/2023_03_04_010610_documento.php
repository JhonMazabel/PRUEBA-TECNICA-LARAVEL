<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_documento', function (Blueprint $table) {
            $table->id('doc_id');
            $table->string('doc_nombre');
            $table->string('doc_codigo');
            $table->string('doc_contenido');
            $table->foreignId('doc_id_tipo') ->constrained();  
            $table->foreignId('doc_id_proceso')->constrained();
         
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
        Schema::dropIfExists('doc_documento');
    }
};

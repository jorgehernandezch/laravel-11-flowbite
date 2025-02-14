<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('igrejas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNullable();
            $table->string('cnpj')->notNullable();
            $table->string('email')->unique()->notNullable();
            $table->string('telefone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('website')->nullable();
            $table->bigInteger('pastor')->unsigned();
            $table->foreign('pastor')->references('id')->on('users');
            $table->bigInteger('pastora')->unsigned();
            $table->foreign('pastora')->references('id')->on('users');
            $table->bigInteger('administrador_1')->unsigned();
            $table->foreign('administrador_1')->references('id')->on('users');
            $table->bigInteger('administrador_2')->unsigned()->nullable();
            $table->foreign('administrador_2')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('igrejas');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelegadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegado', function (Blueprint $table) {
            $table->unsignedInteger('id_pessoa');
            $table->string('nome');  
            $table->date('data_nascimento');
            $table->smallInteger('sexo');
            $table->smallInteger('estado_civil');
            $table->string('bilhete')->unique(); 
            $table->string('local_emissao');
            $table->date('data_emissao');
            $table->date('data_validade');
            $table->string('provincia'); 
            $table->string('municipio'); 
            $table->string('bairro'); 
            $table->string('cartao_eleitoral'); 
            $table->integer('grupo'); 
            $table->string('municipio_actual'); 
            $table->string('distrito'); 
            $table->string('bairro_actual'); 
            $table->string('rua'); 
            $table->string('casa'); 
            $table->string('whatsapp')->unique(); 
            $table->string('email')->unique();            
            $table->string('habilitacoes');            
            $table->string('especializacao');            
            $table->string('profissao');            
            $table->string('local_trabalho');            
            $table->string('cargo');            
            $table->string('municipio_militancia');
            $table->date('data_ingresso');   
            $table->string('cartao_militante')->unique();        
            $table->string('cap');        
            $table->integer('tempo_militancia'); 
            
            $table->foreign('id_pessoa')->references('id')->on('pessoa')->onDelete('cascade'); 
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
        Schema::dropIfExists('delegado');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();                           // não-nulo
            
            // Campos não-nulos e o nome pode repetir
            $table->string("name");                         // não-nulo
            $table->string("technicalDescription", 1000);   // não-nulo
            $table->string("informalDescription", 1000);    // não-nulo
            
            // Criar um campo chamado URIResources (id e URI) que armazenará um JSON com as URIs (método json() não está 
            // funcionando devido ao MySQL)
            $table->text("uriResources");                   // não-nulo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resources');
    }
}

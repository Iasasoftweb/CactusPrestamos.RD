<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
                    Schema::create('clientes', function (Blueprint $table) {
                        $table->id();
                        $table->string('nombres', 255);
                        $table->string('apellidos', 255);
                        $table->enum('sexo', ['MASCULINO','FEMENINO'])->default('MASCULINO');
                        $table->string('nidentidad', 25);
                        $table->string('apodo', 255)->nullable();
                        $table->text('direccion', 500);
                        $table->string('phone1', 15)->nullable();
                        $table->string('phone2', 15)->nullable();
                        $table->date('fecha_nac')->unullable();
                        $table->string('email', 255)->nullable();
                        $table->unsignedBigInteger('idavata')->nullable();
                        $table->foreign('idavata')->references('id')->on('avata_clientes');
                        $table->string('fotocedula', 100)->nullable();
                        $table->unsignedBigInteger('idciudad')->nullable();
                        $table->foreign('idciudad')->references('id')->on('ciudads');
                        $table->unsignedBigInteger('idrutas')->nullable();
                        $table->foreign('idrutas')->references('id')->on('rutas');
                        $table->enum('estado', ['ACTIVO','INACTIVO'])->default('ACTIVO');
                        $table->unsignedBigInteger('idnacionalidad')->nullable();
                        $table->timestamps();
                        $table->foreign('idnacionalidad')->references('id')->on('nacionalidads');
                    
                    });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}

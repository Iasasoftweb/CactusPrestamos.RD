<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;

class Clientes extends Component
{

 
    public $ComponentName = 'Clientes';
    public $PageTitle = 'Editar';
    public $DetalleComponent = 'Mantenimiento de Clientes';
    public $accion = 'Listado';

    public $nombres, $apellidos, $apodo, $sexo, $nidentidad, $direccion, $phone1, $phone2, $fecha_nac, $email, $avata, $fotocedula, $estado, $idnacionalidad;
     
    public function render()
    {   
      
        return view('livewire.clientes.clientes')->extends('layouts.theme');
    }
}

<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
use App\Models\Nacionalidad;


class Clientes extends Component
{

 
    public $ComponentName = 'Clientes';
    public $PageTitle = 'Editar';
    public $DetalleComponent = 'Mantenimiento de Clientes';
    public $accion = 'Listado';

    public $nombres, $apellidos, $apodo, $idciudad, $idrutas, $sexo, $nidentidad, $direccion, $phone1, $phone2, $fecha_nac, $email, $idavata, $fotocedula, $estado, $idnacionalidad, $btnSaveEdit = true;
     
    public function render()
    {   
      
        return view('livewire.clientes.clientes', [
          'nacionalities' => Nacionalidad::orderBy('nacionalidad', 'asc')->get()  
        ])->extends('layouts.theme');
    }
}

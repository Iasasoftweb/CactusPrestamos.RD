<?php

namespace App\Http\Livewire\Clientes;

use Livewire\Component;
use App\Models\Nacionalidad;
use App\Models\Ciudad;
use App\Models\Cliente;
use App\Models\Rutas;
use GuzzleHttp\Client;
use Livewire\WithPagination;
class Clientes extends Component
{

    use WithPagination;
    public $ComponentName = 'Clientes';
    public $PageTitle = 'Editar';
    public $DetalleComponent = 'Mantenimiento de Clientes';
    public $accion = 'Listado';
   

    public $nombres, $apellidos, $apodo, $idciudad, $idrutas, $sexo, $nidentidad, $direccion, $phone1, $phone2, $fecha_nac, $email, $idavata, $fotocedula, $estado, $idnacionalidad, $btnSaveEdit = true;
    public $search;
   
   public function Reseting()
   {
             
        $this->search ='';

      // $cieentes = Cliente::orderBy('id', 'asc')->paginate(8); 
      //    dd($clientes);
   }


    public function loadClientes()
    {
      if(strlen($this->search)) {
         $clientes = Cliente::where('nombres', 'like', "%{$this->search}%")
        ->orWhere('apellidos', 'like', "%{$this->search}%")
        ->paginate(8);
      } else {
        $clientes = Cliente::orderBy('id', 'asc')->paginate(8); 
         
      }
     
      
      return $clientes; 
    }
    public function paginationView()
    {
      return 'vendor.livewire.bootstrap';
    }
    public function render()
    {   
      $nacionalities = Nacionalidad::orderBy('nacionalidad', 'asc')->get();
      $vrutas        = Rutas::orderBy('rutas', 'asc')->get();    
      $vciudad       = Ciudad::orderBy('ciudad', 'asc')->get();
      $vclientes     = $this->loadClientes();
      
      
        return view('livewire.Clientes.Clientes', [ 

         
          'nacionalities' => $nacionalities,
          'vrutas' =>$vrutas, 
          'vciudad'=>$vciudad,
          'vclientes' => $vclientes])->extends('layouts.theme');
    }


    public function Store()
    {
      
    }

    public function resetUI()
    {
      
    }

    protected $listeners = ['searching'];

    public function searching($textValue)
    {
       $this->search = $textValue;
    }


}

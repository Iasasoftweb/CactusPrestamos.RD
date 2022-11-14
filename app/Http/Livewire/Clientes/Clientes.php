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
    public $action = 'Listado';
   

    public $nombres, $apellidos, $apodo, $idciudad, $idrutas, $sexo, $nidentidad, $direccion, $phone1, $phone2, $fecha_nac, $email, $idavata, $fotocedula, $estado, $idnacionalidad, $btnSaveEdit = true;
    public $search, $selected_id = 0;
   
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


    public function Edit(Cliente $cliente)
    {
      $this->selected_id = $cliente->id;
      $this->nombres = $cliente->nombres;
      $this->apellidos = $cliente->apellidos;
      $this->sexo = $cliente->sexo;
      $this->nidentidad =$cliente->nidentidad;
      $this->apodo =$cliente->apodo;
      $this->direccion = $cliente->direccion;
      $this->phone1 = $cliente->phone1;
      $this->phone2 = $cliente->phone2;
      $this->fecha_nac = $cliente->fecha_nac;
      $this->email = $cliente->email;
      $this->idavata = $cliente->idavata;
      $this->idciudad = $cliente->idciudad;
      $this->idrutas = $cliente->idrutas;
      $this->fotocedula = $cliente->fotocedula;
      $this->estado = $cliente->estado;
      $this->idnacionalidad = $cliente->idnacionalidad;
      $this->action ='Editar';
      $this->dispatchBrowserEvent('modal-open');
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

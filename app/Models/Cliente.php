<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'sexo',
        'nidentidad',
        'apodo',
        'direccion',
        'phone1',
        'phone2',
        'fecha_nac',
        'email',
        'idavata',
        'idciudad',
        'idrutas',
        'fotocedula',
        'estado',
        'idenacionalidad'];


      public static function rules($id) {

       return ['nidentidad' => "requered|min:13|max:20|unique:clientes, nidentidad,{$id}"];

         
      } 

      public static $messages = [
          'nidentidad.required' => 'No. de Identidad requerida',
          'nidentidad.min'      => 'El no. de Identidad al menos 13 digitos',
          'nidentidad.max'      => 'El no. de Identidad máximo 20 digitos',
          'nidentidad.unique'   => 'El no. de Identidad ya existe en el sistema',

      ];


      public function avata()
      {
         return $this->morphOne(avata_clientes::class, 'id')->withDefault();
      }

      public function getImgAtribute()
      {
         return $img = $this->avata->avata;
            if($img !=null) {
                if(file_exists('sotorage/clientes' .  $img))
                return 'storage/clientes' . $img;
                else
                return 'storage/clientes/avatanofound.png';
            } 
               
            return 'storage/clientes/noimg.png';

      }
    
}

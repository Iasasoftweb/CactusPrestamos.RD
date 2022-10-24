<?php

namespace App\Http\Livewire\Prestamos;

use Livewire\Component;

class Prestamos extends Component
{
    public function render()
    {
        return view('livewire.prestamos.prestamos')->extends('layouts.theme');
    }
}

<?php

namespace App\Livewire\Obras;

use Livewire\Component;

class ObraComponent extends Component
{
    public function render()
    {
        return view('livewire.obras.obra-component')->extends('layouts.adminlte');
    }

    public function prueba() {
        return "Entro";
    }
}

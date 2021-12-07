<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\Component;

class MostrarMaterias extends Component
{
    public Materia $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.materias.mostrar-materias');
    }
}

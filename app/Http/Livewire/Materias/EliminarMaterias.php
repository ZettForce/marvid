<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class EliminarMaterias extends Component
{
    public Materia $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.materias.eliminar-materias');
    }
    public function eliminar(){
        $this->agregar->delete();
        Storage::disk('public')->delete($this->agregar->foto);
        return redirect(route('materias.index'));
    }
}

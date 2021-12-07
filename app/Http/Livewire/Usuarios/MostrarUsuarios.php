<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class MostrarUsuarios extends Component
{
    public Usuario $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.mostrar-usuarios');
    }
    
}

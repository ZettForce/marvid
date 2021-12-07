<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AgregarUsuarios extends Component
{

    use WithFileUploads;
    public Usuario $agregar;
    public $foto;
    public function mount()
    {
        $this->agregar = new Usuario();
    }
    public function render()
    {
        return view('livewire.usuarios.agregar-usuarios');
    }

    public function crear()
    {
        //dd('Hola estas aqui en crear');
    
        $this->validate();
        if($this->foto != null){
            $this->agregar->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
       
        $this->agregar->save();
        return redirect(route('usuarios.index'));
    }

    protected function rules()
    {
        return RulesUsuarios::Reglas();
    }
}

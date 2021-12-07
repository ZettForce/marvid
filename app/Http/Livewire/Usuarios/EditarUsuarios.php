<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarUsuarios extends Component
{
    use WithFileUploads;
    public Usuario $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.editar-usuarios');
    }
    public function editar()
    {
        $this->validate();
        if ($this->foto != null){
            if($this->agregar->foto != null){
                Storage::disk('public')->delete($this->agregar->foto);
            }
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

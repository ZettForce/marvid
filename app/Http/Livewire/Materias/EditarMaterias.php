<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarMaterias extends Component
{
    use WithFileUploads;
    public Materia $agregar;
    public $foto;
    public function render()
    {
        return view('livewire.materias.editar-materias');
    }
    public function editar()
    {
        $this->validate();
        if ($this->foto != null){
            if($this->agregar->foto != null){
                Storage::disk('public')->delete($this->agregar->foto);
            }
            $this->agregar->foto = Storage::disk('public')->put('images/materias', $this->foto);
        }
        $this->agregar->save();
        return redirect(route('materias.index'));
    }
    protected function rules()
    {
        return RulesMaterias::Reglas();
    }
}

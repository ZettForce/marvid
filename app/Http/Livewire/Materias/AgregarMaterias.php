<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AgregarMaterias extends Component
{
    use WithFileUploads;
    public Materia $agregar;
    public $foto;
    public function mount()
    {
        $this->agregar = new Materia();
    }
    public function render()
    {
        return view('livewire.materias.agregar-materias');
    }
    public function crear()
    {
        //dd('Hola estas aqui en crear');
    
        $this->validate();
        if($this->foto != null){
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

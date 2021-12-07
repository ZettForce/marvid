<?php

namespace App\Http\Livewire\Materias;

use App\Models\Materia;
use Livewire\Component;
use Livewire\WithPagination;

class IndexMaterias extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargando = false;
    public function render()
    {
        $materias = ($this->cargando == true) ?  Materia::where('nombre_materia','LIKE','%' .$this->search . '%')
        ->orwhere ('cuatrimestre', 'LIKE','%' .$this->search . '%')
        ->orwhere ('codigo', 'LIKE','%' .$this->search . '%')
        ->paginate(10) : [] ;

        return view('livewire.materias.index-materias', compact('materias'));
    }
    public function cargando()
    {
        $this->cargando = true;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}

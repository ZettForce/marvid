<?php
namespace App\Http\Livewire\Materias;

class RulesMaterias{
    public static function Reglas(){
        return[
            'agregar.nombre_materia'=> 'required|string',
            'agregar.cuatrimestre'=> 'required|string',
            'agregar.codigo'=> 'required',
            'foto'=>'nullable|image' 
        ];
    }
}
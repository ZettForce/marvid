<?php
namespace App\Http\Livewire\Usuarios;

class RulesUsuarios{
    public static function Reglas(){
        return[
            'agregar.nombre'=> 'required|string',
            'agregar.apellidoPaterno'=> 'required|string',
            'agregar.direccion'=> 'required',
            'agregar.telefono'=> 'numeric|nullable',
            'agregar.email'=> 'required|email|unique:usuarios,email',
            'agregar.password'=> 'nullable|min:8',
            'confirmar_password'=> 'same: password',
            'foto'=>'nullable|image'
        ];
    }
}

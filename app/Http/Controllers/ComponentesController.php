<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ComponentesController extends Controller
{
    public function consultar(){
        return view('consultarComponente')
        ->with('componentes', array('Memoria RAM 16GB', 'Monitor', 'Tarjeta Gráfica'));
    }

    public function agregar(){
        return view('agregarComponentes');
    }

    public function actualizar(){
        return view('actualizarComponentes');
    }

    public function borrar(){
        return view('borrarComponentes');
    }

    public function componente(){
        return view('componente');
    }
    
}

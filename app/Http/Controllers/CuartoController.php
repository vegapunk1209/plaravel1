<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cuarto;

class CuartoController extends Controller
{
    public function CuartosListar()
    {
    	$cuartos = Cuarto::Listar_Cuartos();
    	return view('cuartos.listar', compact('cuartos'));
    }
}

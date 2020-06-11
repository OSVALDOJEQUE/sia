<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\ocorrencia;

class AdminController extends Controller
{
    public function home(){

 
    	$users = User::all();

    	$ocorrencias = ocorrencia::all();

    	$novasOcorrencias = ocorrencia::where('estado','Novo')->get();

    	$seguimentoOcorrencias = ocorrencia::where('estado','Em Seguimento')->get();

    	$resolvidasOcorrencias = ocorrencia::where('estado','Resolivido')->get();

    	return view('home' ,compact('users','ocorrencias','novasOcorrencias','seguimentoOcorrencias','resolvidasOcorrencias'));
    }
}

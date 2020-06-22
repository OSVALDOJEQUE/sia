<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\evidencia;
use App\Models\cordenada;

class Ocorrencia extends Model
{
    protected $fillable= [
    	'nome','celular','descricao','nivel','latitude','longitude','img_URL','estado'
    ];

}

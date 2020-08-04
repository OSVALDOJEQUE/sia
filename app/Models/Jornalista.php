<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ocorrencia;

class Jornalista extends Model
{
    protected $fillable =[
    	'nome','celular','email','estado','contacto','entidade'
    ];

    public function ocorrencias(){

    	return $this->hasMany(Ocorrencia::class);
    }
}

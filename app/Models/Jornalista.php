<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ocorrencia;

class Jornalista extends Model
{
    protected $fillable =[
    	'estado'
    ];

    public function ocorrencias(){

    	return $this->hasMany(Ocorrencia::class);
    }
}

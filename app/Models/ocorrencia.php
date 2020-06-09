<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\evidencia;
use App\Models\cordenada;

class ocorrencia extends Model
{
    protected $fillable= [
    	'nome_josrnalista','celular','descricao','nivel','cordenadas','estado'
    ];

    public function evidencias(){
    	return $this->hasMany(evidencias::class);
    }

    public function cordenadas(){
    	return $this->hasOne(cordenada::class);
    }
}

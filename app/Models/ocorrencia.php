<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Jornalista;
use App\Models\User;
use App\Models\Provincia;


class Ocorrencia extends Model
{
    protected $fillable= [
    	'jornalista_id','provincia_id','nome','celular','descricao','nivel','latitude','longitude','provincia','imgURL','estado'
    ];

    protected $casts=[
        'provincial_encaminhado' =>'array',
    ];


    public function juristas(){

    	return $this->belongsToMany(User::class);
    }

    public function provincia(){

    	return $this->belongsTo(Provincia::class);
    }

     public function jornalista(){

        return $this->belongsTo(Jornalista::class);
    }

    public function casos($nivel){
      return $this->where('nivel',$nivel)->toSql();
    }

}

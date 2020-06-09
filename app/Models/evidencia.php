<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ocorrencia;

class evidencia extends Model
{
    protected $fillable[
    	'foto'
    ];

    public function ocorrencia(){
    	return $this->belongsTo(ocorrencia::class);
    }
}

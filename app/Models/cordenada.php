<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ocorrencia;

class cordenada extends Model
{
   protected $fillable = [
        'name',
        'localizacao',
        'latitude',
        'longitude',
    ];

   public function ocorrencia(){
   	 return $this->belongsTo(ocorrencia::class);
   }
}

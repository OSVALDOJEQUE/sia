<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OcorrenciaUser extends Model
{
     protected $fillable= [
    	'user_id','ocorrencia_id'
    ];
}

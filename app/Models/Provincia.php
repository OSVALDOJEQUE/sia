<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ocorrencia;

class Provincia extends Model
{

    public function ocorrencias(){
        return $this->hasMany(ocorrencia::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estatistica extends Model
{
    protected $fillable=[
    	'provincia','nivel','casos'
    ];
}

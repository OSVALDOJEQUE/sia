<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Ocorrencia;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','category','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Ocorrencias(){

        return $this->belongsToMany(Ocorrencia::class);
    }


    // public function getCategoryAttribute($value){
    //     switch ($value) {
    //         case '0': return 'Central'; break;
    //         case '1': return 'Maputo Cidade';break;
    //         case '2': return 'Maputo Província'; break;
    //         case '3': return 'Gaza';break;
    //         case '4': return 'Inhambane'; break;
    //         case '5': return 'Manica'; break;
    //         case '6': return 'Beirra'; break;
    //         case '7': return 'Tete'; break;
    //         case '8': return 'Zambézia'; break;
    //         case '9': return 'Nampula'; break;
    //         case '10': return 'Niassa'; break;
    //         case '11': return 'Cabo Delegado'; break;
    //         case '12': return 'Jurista'; break;
    //     }
    // }


    public function getCategory($category){
        switch ($category) {
            case '0': return 'Central'; break;
            case '1': return 'Gaza';break;
            case '2': return 'Maputo Cidade';break;
            case '3': return 'Maputo Província'; break;
            case '4': return 'Inhambane'; break;
            case '5': return 'Manica'; break;
            case '6': return 'Beirra'; break;
            case '7': return 'Tete'; break;
            case '8': return 'Zambézia'; break;
            case '9': return 'Nampula'; break;
            case '10': return 'Niassa'; break;
            case '11': return 'Cabo Delegado'; break;
            case '12': return 'Jurista'; break;
      
        }
    }


}
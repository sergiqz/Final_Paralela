<?php

namespace App;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Notifications\Notifiable;
class Manifest 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manifest_code', 'document_type', 'sector','document_code','client',
    ];
    
   
}

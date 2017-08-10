<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function admin(){
        return $this->type === "admin";
    }

    public function Hoteles(){
        return $this->type === "Hoteles";
    }

    public function Aerolineas(){
        return $this->type === "Aerolineas";
    }

    public function Viajero(){
        return $this->type === "Viajero";
    }

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

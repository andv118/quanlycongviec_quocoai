<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    protected $dateFormat = 'd-m-Y';

    protected $fillable = [
        'id', 
        'code',
        'name',
        'birth',
        'email',
        'phone',
        'password',
        'role',
        'base',
        'id_room',
        'id_position'
    ];
}



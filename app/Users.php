<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $fillable = [
        'name_user', 'email_user', 'password_user','address_user',
    ];
    protected $primaryKey = 'id_user';
}

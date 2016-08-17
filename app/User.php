<?php

namespace App;

/*use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{ */

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Undocumented variable
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'forgot'
    ];


}

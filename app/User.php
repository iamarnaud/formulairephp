<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected  $table = 'user';

    protected $fillable = [
        'firstname', 'lastname', 'gender', 'newsletter', 'mood'
    ];
}

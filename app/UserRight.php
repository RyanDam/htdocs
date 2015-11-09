<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRight extends Model
{
    protected $table = 'user_right';
    protected $fillable = [
    	'code',
    	'name',
    	'info'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'consultation';
    protected $fillable = [
    	'question',
    	'answer'
    ];
}

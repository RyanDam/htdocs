<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BottleTree extends Model
{
    protected $table = 'bottle_tree';
    protected $fillable = [
    	'code',
    	'nameNormal',
    	'nameScience',
    	'info',
    	'area',
    	'img'
    ];
}

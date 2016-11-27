<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    public $table = "suggestions";

    protected $fillable = [
    	'name', 'email', 'message'
   	];
}

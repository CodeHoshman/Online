<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table="post";
    public $timestamps=false;
    protected $casts=[
        'sizes'=>'array'
    ];
}

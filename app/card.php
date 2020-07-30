<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    //
    protected $table="card";
    protected $casts=[
        'sizes'=>'array'
    ];
}

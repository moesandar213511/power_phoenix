<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['id','photo','name','position','detail','fb_link'];
}

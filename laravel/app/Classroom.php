<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = [];

    protected $primaryKey = 'id';

    public $incrementing = false;
}

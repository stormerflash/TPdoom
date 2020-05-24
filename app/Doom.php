<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doom extends Model
{
    protected $fillable = ['nom', 'desc', 'fonction'];
}

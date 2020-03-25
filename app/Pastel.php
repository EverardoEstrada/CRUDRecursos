<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pastel extends Model
{
    protected $table='pastel';
    protected $fillable=['id','sabor','precio'];
}

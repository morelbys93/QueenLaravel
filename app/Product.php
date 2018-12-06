<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = []; //Para que permita la carga masiva de todos los campoos. Se puede usar $fillabe que es el opuesto.
}

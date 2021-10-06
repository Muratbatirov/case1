<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postavshik extends Model
{
    use HasFactory;

     public function productsPerPostavshik() {
    return $this->hasMany('App\Models\Product','postavshik_id');
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat_equipos_trabajos_tipo extends Model
{
    use HasFactory;
    protected $fillable = [
      'tipo',
      'descripcion'
];
}

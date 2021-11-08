<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'ejercicios';


    public function fuentes()
    {
        return $this->hasMany(Fuente::class);
    }

}
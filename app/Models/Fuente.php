<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuente extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'fuentes';

    public function getComprometidoAttribute()
    {

        return $this->obras()->sum('monto_original');

    }


    /* Tiene */

    public function obras()
    {
        return $this->hasMany(Obra::class);
    }

    /* Pertenece */

    public function ejercicio()
    {
        return $this->belongsTo(Ejercicio::class);
    }

}

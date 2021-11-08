<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'obras';


    /* Pertenece */

    public function fuente()
    {
        return $this->belongsTo(Fuente::class);
    }

    public function modalidadContratacion()
    {
        return $this->belongsTo(ModalidadContratacion::class,'modalidadcontratacion_id', 'id');
    }


    /* Tiene */
    public function presupuestoOriginal()
    {
        return $this->hasOne(PresupuestoOriginal::class);
    }

}

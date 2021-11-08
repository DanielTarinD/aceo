<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadContratacion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'modalidades_contratacion';

    /* Tiene */
    public function obras()
    {
        return $this->hasMany(Obra::class,'modalidadcontratacion_id');
    }

    /* Pertenece */
    

}
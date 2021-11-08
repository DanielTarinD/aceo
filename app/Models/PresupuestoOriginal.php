<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresupuestoOriginal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'presupuestos_originales';

    public function obra()
    {
        return $this->belongsTo(Obra::class);
    }
}
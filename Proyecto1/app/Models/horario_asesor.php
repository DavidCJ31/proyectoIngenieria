<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario_asesor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'dia',
        'hora_inicio',
        'hora_final',
        'asesor_id'
    ];

    public function asesor()
    {
        return $this->belongsTo('App\Models\asesor','id');
    }
}

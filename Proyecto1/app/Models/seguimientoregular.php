<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seguimientoregular extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'estudiante_id',
        'situacion',
        'estado'
    ];

    public function estudiante()
    {
        return $this->belongsTo('App\Models\estudiante', 'id');
    }
}

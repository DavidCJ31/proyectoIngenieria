<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id',
        'clase_id',
        'estudiante_id',
    ];

    public function clase()
    {
        return $this->belongsTo('App\Models\clase');
    }
    public function estudiante()
    {
        return $this->belongsTo('App\Models\estudiante');
    }
}

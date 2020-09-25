<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesor extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    public $timestamps = false;
    protected $fillable = [
        'id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function lista_asesor_estudiante()
    {
        return $this->hasMany('App\Models\lista_asesor_estudiante');
    }
    public function horario_asesor()
    {
        return $this->hasMany('App\Models\horario_asesor');
    }

}

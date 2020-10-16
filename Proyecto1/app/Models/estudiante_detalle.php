<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante_detalle extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;

    public $timestamps = false;
    protected $fillable = [
        'id',
    ];

    public function estudiante()
    {
        return $this->belongsTo('App\Models\estudiante', 'id');
    }
}

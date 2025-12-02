<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    protected $fillable = [
        'nombre', 'pais_id', 'disciplina_id',
        'fecha_nacimiento', 'estatura', 'peso'
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }
}

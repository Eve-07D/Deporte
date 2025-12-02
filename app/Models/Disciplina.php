<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nombre'];

    public function deportistas()
    {
        return $this->hasMany(Deportista::class);
    }
}


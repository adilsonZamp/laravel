<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $primaryKey = 'id_disciplina';
    
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'id_curso');
    }
}

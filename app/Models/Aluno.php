<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use \App\Models\Curso;

class Aluno extends Model
{
    use SoftDeletes;

    public function curso(): belongsTo {
        return $this->belongsTo(Curso::class);
    }
} 

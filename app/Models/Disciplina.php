<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use \App\Models\Curso;

class Disciplina extends Model
{
    use SoftDeletes;

    public function curso() {
        return $this->belongsTo(Curso::class);
    }
}

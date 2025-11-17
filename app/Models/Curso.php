<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use \App\Models\Aluno;


class Curso extends Model
{
    use SoftDeletes;

    public function alunos(): hasMany {
        return $this->hasMany(Aluno::class);
    }
}

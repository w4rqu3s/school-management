<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // PROFESSOR - CURSO
            ["role_id" => 1, "resource_id" => 1, "permission" => 0],    // ver cursos
            ["role_id" => 1, "resource_id" => 2, "permission" => 0],    // criar curso
            ["role_id" => 1, "resource_id" => 3, "permission" => 0],    // ver um curso
            ["role_id" => 1, "resource_id" => 4, "permission" => 0],    // editar curso
            ["role_id" => 1, "resource_id" => 5, "permission" => 0],    // deletar curso
            ["role_id" => 1, "resource_id" => 6, "permission" => 0],    // ver alunos do curso
            ["role_id" => 1, "resource_id" => 7, "permission" => 0],    // ver disciplinas do curso
            // PROFESSOR - ALUNO
            ["role_id" => 1, "resource_id" => 8, "permission" => 1],    // ver alunos
            ["role_id" => 1, "resource_id" => 9, "permission" => 1],    // criar aluno
            ["role_id" => 1, "resource_id" => 10, "permission" => 1],   // ver um aluno
            ["role_id" => 1, "resource_id" => 11, "permission" => 1],   // editar aluno
            ["role_id" => 1, "resource_id" => 12, "permission" => 0],   // deletar aluno
            ["role_id" => 1, "resource_id" => 13, "permission" => 1],   // gerar pdf de aluno
            // PROFESSOR - DISCIPLINA
            ["role_id" => 1, "resource_id" => 14, "permission" => 0],   // ver disciplinas
            ["role_id" => 1, "resource_id" => 15, "permission" => 0],   // criar disciplina
            ["role_id" => 1, "resource_id" => 16, "permission" => 0],   // ver uma disciplina
            ["role_id" => 1, "resource_id" => 17, "permission" => 0],   // deletar disciplina
            // COORDERNADOR - CURSO
            ["role_id" => 2, "resource_id" => 1, "permission" => 1],    // ver cursos
            ["role_id" => 2, "resource_id" => 2, "permission" => 1],    // criar curso
            ["role_id" => 2, "resource_id" => 3, "permission" => 1],    // ver um curso
            ["role_id" => 2, "resource_id" => 4, "permission" => 1],    // editar curso
            ["role_id" => 2, "resource_id" => 5, "permission" => 1],    // deletar curso
            ["role_id" => 2, "resource_id" => 6, "permission" => 1],    // ver alunos do curso
            ["role_id" => 2, "resource_id" => 7, "permission" => 1],    // ver disciplinas do curso
            // COORDENADOR - ALUNO
            ["role_id" => 2, "resource_id" => 8, "permission" => 1],    // ver alunos
            ["role_id" => 2, "resource_id" => 9, "permission" => 1],    // criar aluno
            ["role_id" => 2, "resource_id" => 10, "permission" => 1],   // ver um aluno
            ["role_id" => 2, "resource_id" => 11, "permission" => 1],   // editar aluno
            ["role_id" => 2, "resource_id" => 12, "permission" => 1],   // deletar aluno
            ["role_id" => 2, "resource_id" => 13, "permission" => 1],   // gerar pdf de aluno
            // COORDENADOR - DISCIPLINA
            ["role_id" => 2, "resource_id" => 14, "permission" => 1],   // ver disciplinas
            ["role_id" => 2, "resource_id" => 15, "permission" => 1],   // criar disciplina
            ["role_id" => 2, "resource_id" => 16, "permission" => 1],   // ver uma disciplina
            ["role_id" => 2, "resource_id" => 17, "permission" => 1],   // deletar disciplina
        ];
        DB::table('permissions')->insert($data);
    }
}

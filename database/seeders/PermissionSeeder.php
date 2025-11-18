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
            ["role_id" => 1, "resource_id" => 1, "permission" => 0],
            ["role_id" => 1, "resource_id" => 2, "permission" => 0],
            ["role_id" => 1, "resource_id" => 3, "permission" => 0],
            ["role_id" => 1, "resource_id" => 4, "permission" => 0],
            ["role_id" => 1, "resource_id" => 5, "permission" => 0],
            ["role_id" => 1, "resource_id" => 6, "permission" => 0],
            ["role_id" => 1, "resource_id" => 7, "permission" => 0],
            // PROFESSOR - ALUNO
            ["role_id" => 1, "resource_id" => 8, "permission" => 1],
            ["role_id" => 1, "resource_id" => 9, "permission" => 1],
            ["role_id" => 1, "resource_id" => 10, "permission" => 1],
            ["role_id" => 1, "resource_id" => 11, "permission" => 1],
            ["role_id" => 1, "resource_id" => 12, "permission" => 1],
            ["role_id" => 1, "resource_id" => 13, "permission" => 1],
            // PROFESSOR - DISCIPLINA
            ["role_id" => 1, "resource_id" => 14, "permission" => 2],
            ["role_id" => 1, "resource_id" => 15, "permission" => 2],
            ["role_id" => 1, "resource_id" => 16, "permission" => 2],
            ["role_id" => 1, "resource_id" => 17, "permission" => 2],
            // COORDERNADOR - CURSO
            ["role_id" => 2, "resource_id" => 1, "permission" => 0],
            ["role_id" => 2, "resource_id" => 2, "permission" => 0],
            ["role_id" => 2, "resource_id" => 3, "permission" => 0],
            ["role_id" => 2, "resource_id" => 4, "permission" => 0],
            ["role_id" => 2, "resource_id" => 5, "permission" => 0],
            ["role_id" => 2, "resource_id" => 6, "permission" => 0],
            ["role_id" => 2, "resource_id" => 7, "permission" => 0],
            // COORDENADOR - ALUNO
            ["role_id" => 2, "resource_id" => 8, "permission" => 1],
            ["role_id" => 2, "resource_id" => 9, "permission" => 1],
            ["role_id" => 2, "resource_id" => 10, "permission" => 1],
            ["role_id" => 2, "resource_id" => 11, "permission" => 1],
            ["role_id" => 2, "resource_id" => 12, "permission" => 1],
            ["role_id" => 2, "resource_id" => 13, "permission" => 1],
            // COORDENADOR - DISCIPLINA
            ["role_id" => 2, "resource_id" => 14, "permission" => 2],
            ["role_id" => 2, "resource_id" => 15, "permission" => 2],
            ["role_id" => 2, "resource_id" => 16, "permission" => 2],
            ["role_id" => 2, "resource_id" => 17, "permission" => 2],
        ];
        DB::table('permissions')->insert($data);
    }
}

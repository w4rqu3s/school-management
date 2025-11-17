<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $foto_v = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.petlove.com.br%2Fhusky-siberiano%2Fr&psig=AOvVaw0ZECqixcZ-GvusGQNoRZ1B&ust=1763426188663000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCNjt49v495ADFQAAAAAdAAAAABAE";
        $foto_l = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fpremierpet.com.br%2Ftutor%2Fpug-tudo-o-que-voce-precisa-saber%2F&psig=AOvVaw3tGjcnYOUR29oaV_yfQBJj&ust=1763426261184000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCJCxvfH495ADFQAAAAAdAAAAABAM";
        $data = [
            ["nome" => "VICTOR PECINE MARQUES", "ano" => 3, "foto" => "$foto_v",  "curso_id" => 1],
            ["nome" => "LUCAS PECINE MARQUES", "ano" => 4, "foto" => $foto_l, "curso_id" => 2]
        ];
        DB::table('alunos')->insert($data);
    }
}

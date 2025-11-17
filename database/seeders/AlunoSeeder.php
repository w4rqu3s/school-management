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
        $foto_g = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.polipet.com.br%2Fracas%2Frough-collie%3Fsrsltid%3DAfmBOooUiRiGHV8OK7GfXytZTnc3VBXfWmOWRT7Ps3zm-R02rhdTPxsr&psig=AOvVaw0ZPXnLPsz94Wba3Z4CwtHw&ust=1763435564657000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCJiO48mb-JADFQAAAAAdAAAAABAE";
        $foto_a = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.petlove.com.br%2Fbuldogue-ingles%2Fr&psig=AOvVaw0OSN_nEi27PdYJbhQd4Oli&ust=1763435595790000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCPj0vNWb-JADFQAAAAAdAAAAABAE";

        $data = [
            ["nome" => "VICTOR PECINE MARQUES", "ano" => 3, "foto" => "$foto_v",  "curso_id" => 1],
            ["nome" => "LUCAS PECINE MARQUES", "ano" => 1, "foto" => $foto_l, "curso_id" => 2],
            ["nome" => "GRACIELLE GASPAR PECINE", "ano" => 1, "foto" => $foto_g, "curso_id" => 6],
            ["nome" => "ASAFE ELIAS MARQUES", "ano" => 3, "foto" => $foto_a, "curso_id" => 1],
        ];
        DB::table('alunos')->insert($data);
    }
}

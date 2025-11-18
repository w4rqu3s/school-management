<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ["name" => "PROFESSOR"],        // 1
            ["name" => "COORDENADOR"],      // 2
        ];
        DB::table('roles')->insert($data);
    }
}

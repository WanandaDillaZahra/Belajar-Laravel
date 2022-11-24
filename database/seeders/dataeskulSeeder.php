<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class dataeskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataeskul')->insert([
            "namaleskul" => "IT CLUB",
            "namapembina" => "Egi Nugraha",
            "jumlahanggota" => "40",
        ]);

        DB::table('dataeskul')->insert([
            "namaleskul" => "BASKET",
            "namapembina" => "Fahmi Ibrahim",
            "jumlahanggota" => "40",
        ]);

        DB::table('dataeskul')->insert([
            "namaleskul" => "PRAMUKA",
            "namapembina" => "Cahya",
            "jumlahanggota" => "40",
        ]);
    }
}

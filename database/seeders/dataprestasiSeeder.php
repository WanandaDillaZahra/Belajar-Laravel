<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class dataprestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataprestasi')->insert([
            "namaprestasi" => "WEB TECHNOLOGIES",
            "tingkat" => "Kabupaten",
            "juarake" => 1,
            "namapeserta" => "MUHAMMAD ARIFIN HABIBI",
        ]);

        DB::table('dataprestasi')->insert([
            "namaprestasi" => "LOMBA WEB HIMASI UNSUB",
            "tingkat" => "Kabupaten",
            "juarake" => 2,
            "namapeserta" => "RIFQI IKHSAN",
        ]);

        DB::table('dataprestasi')->insert([
            "namaprestasi" => "OACtion",
            "tingkat" => "Provinsi",
            "juarake" => 1,
            "namapeserta" => "HASNA MAULIA KHAIRUNNISSA",
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class datapesertadidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datapesertadidik')->insert([
            "nis" => 12100283,
            "namalengkap" => "Wananda Dilla Zahra",
            "jk" => "P",
            "kelas" => "11 RPL 1",
            "alamat" => "Dawuan, Subang",
            "status" => "Pelajar",
        ]);

        DB::table('datapesertadidik')->insert([
            "nis" => 12345678,
            "namalengkap" => "Nurul Eka Maryafa",
            "jk" => "P",
            "kelas" => "11 RPL 1",
            "alamat" => "Subang",
            "status" => "Pelajar",
        ]);

        DB::table('datapesertadidik')->insert([
            "nis" => 12100232,
            "namalengkap" => "Tasya Amelia",
            "jk" => "P",
            "kelas" => "11 RPL 1",
            "alamat" => "Subang",
            "status" => "Pelajar",
        ]);
    }
}

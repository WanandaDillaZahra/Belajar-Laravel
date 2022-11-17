<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert([
            "namalengkap" => "Wananda Dilla Zahra",
            "nis" => 12345678,
            "jk" => "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('student')->insert([
            "namalengkap" => "Tasya Amelia",
            "nis" => 12131415,
            "jk" => "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('student')->insert([
            "namalengkap" => "Jung Jaehyun",
            "nis" => 14221997,
            "jk" => "L",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
    }
}

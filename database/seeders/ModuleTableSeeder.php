<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("modules")->insert([ 
            [
                "kod_module"=> "TP1152",
                "nama_module"=>"RPH - SAINS KOMPUTER TINGKATAN 4 KSSM",
                "harga_module"=>"RM 25.00",
                "bil_ms"=>"50 pages",
                "jenis_bahasa"=>"Bahasa ",
                "paper_kategori_subjek_id" => 590,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                "kod_module"=> "TP1155",
                "nama_module"=>"RPH - ASAS SAINS KOMPUTER TINGKATAN 3 KSSM",
                "harga_module"=>"RM 25.00",
                "bil_ms"=>"43 pages",
                "jenis_bahasa"=>"Bahasa ",
                "paper_kategori_subjek_id" => 590,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
        ]);
    }
}

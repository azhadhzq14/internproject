<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahapPendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if(DB::table("tahap_pendidikans")->count() == 0){

            DB::table("tahap_pendidikans")->insert([ 
                [
                    "tahap_pendidikan"=> "Pra-Sekolah",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    "tahap_pendidikan"=> "Sekolah Rendah",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
                [
                    "tahap_pendidikan"=> "Sekolah Menengah",
                    'created_at'=>date('Y-m-d H:i:s'),
                    'updated_at'=>date('Y-m-d H:i:s'),
                ],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TahapPendidikan;


class TahunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Fetch TahapPendidikan records
     $tahappendidikan = TahapPendidikan::where('tahap_pendidikan', 'Pra-Sekolah')->first();

     // Create Kurikulum records related to Pendidikan Dasar
     $tahappendidikan->tahuns()->createMany([
         ['tahun'=> '4 tahun', 'created_at' => now(), 'updated_at' => now()],
         ['tahun'=> '5 tahun', 'created_at' => now(), 'updated_at' => now()],
         ['tahun'=> '6 tahun', 'created_at' => now(), 'updated_at' => now()],
     ]);

     // Fetch TahapPendidikan records
     $tahappendidikan = TahapPendidikan::where('tahap_pendidikan', 'Sekolah Rendah')->first();

     // Create Kurikulum records related to Pendidikan Dasar
     $tahappendidikan->tahuns()->createMany([
         ['tahun'=> 'Tahun 1', 'peringkat'=> 'Tahap satu','created_at' => now(), 'updated_at' => now()],
         ['tahun'=> 'Tahun 2', 'peringkat'=> 'Tahap satu','created_at' => now(), 'updated_at' => now()],
         ['tahun'=> 'Tahun 3', 'peringkat'=> 'Tahap satu','created_at' => now(), 'updated_at' => now()],
         ['tahun'=> 'Tahun 4', 'peringkat'=> 'Tahap dua','created_at' => now(), 'updated_at' => now()],
         ['tahun'=> 'Tahun 5', 'peringkat'=> 'Tahap dua','created_at' => now(), 'updated_at' => now()],
         ['tahun'=> 'Tahun 6', 'peringkat'=> 'Tahap dua','created_at' => now(), 'updated_at' => now()],
     ]);

     // Fetch TahapPendidikan records
     $tahappendidikan = TahapPendidikan::where('tahap_pendidikan', 'Sekolah Menengah')->first();

     // Create Kurikulum records related to Pendidikan Dasar
     $tahappendidikan->tahuns()->createMany([
        ['tahun'=> 'Tahun 1', 'peringkat'=> 'Menengah Rendah','created_at' => now(), 'updated_at' => now()],
        ['tahun'=> 'Tahun 2', 'peringkat'=> 'Menengah Rendah','created_at' => now(), 'updated_at' => now()],
        ['tahun'=> 'Tahun 3', 'peringkat'=> 'Menengah Rendah','created_at' => now(), 'updated_at' => now()],
        ['tahun'=> 'Tahun 4', 'peringkat'=> 'Menengah Atas','created_at' => now(), 'updated_at' => now()],
        ['tahun'=> 'Tahun 5', 'peringkat'=> 'Menengah Atas','created_at' => now(), 'updated_at' => now()],
     ]);


    }

     
 }

    

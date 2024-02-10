<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TahapPendidikan;

class KurikulumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
            // Fetch TahapPendidikan records
            $tahappendidikan = TahapPendidikan::where('tahap_pendidikan', 'Pra-Sekolah')->first();

            // Create Kurikulum records related to Pendidikan Dasar
            $tahappendidikan->kurikulums()->createMany([
                ['kurikulum' => 'KSPK - Kurikulum Standard Pra Sekolah', 'created_at' => now(), 'updated_at' => now()],
            ]);

            // Fetch TahapPendidikan records
            $tahappendidikan = TahapPendidikan::where('tahap_pendidikan', 'Sekolah Rendah')->first();

            // Create Kurikulum records related to Pendidikan Dasar
            $tahappendidikan->kurikulums()->createMany([
                ['kurikulum' => 'KSSR Semakan - Kurikulum Standard Sekolah Rendah Semakan', 'created_at' => now(), 'updated_at' => now()],
                ['kurikulum' => 'KSRA - Kurikulum Sekolah Rendah Agama', 'created_at' => now(), 'updated_at' => now()],
                ['kurikulum' => 'KAFA - Kelas Fardhu Ain dan Alquran', 'created_at' => now(), 'updated_at' => now()],
            ]);

            // Fetch TahapPendidikan records
            $tahappendidikan = TahapPendidikan::where('tahap_pendidikan', 'Sekolah Menengah')->first();

            // Create Kurikulum records related to Pendidikan Dasar
            $tahappendidikan->kurikulums()->createMany([
                ['kurikulum' => 'KSSM - Kurikulum Standard Sekolah Menengah', 'created_at' => now(), 'updated_at' => now()],
                ['kurikulum' => 'KSKP - Kurikulum Standard Kelas Peralihan', 'created_at' => now(), 'updated_at' => now()],
                ['kurikulum' => 'KBD - Kurikulum Bersepadu Dini', 'created_at' => now(), 'updated_at' => now()],
                ['kurikulum' => 'KBT - Kurikulum Bersepadu Tahfiz', 'created_at' => now(), 'updated_at' => now()],
            ]);

    }
}

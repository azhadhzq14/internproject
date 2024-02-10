<?php

namespace Database\Seeders;

use App\Models\Kurikulum;
use App\Models\Subjek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubjekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // foreach([8] as $kurikulum_id){
        //     DB::table('subjeks')->insert([
        //             'subjek' => 'Bahasa Melayu',
        //             'kategori' => 'Teras',
        //             'sub_kategori' => '',
        //             'kurikulum_id' => $kurikulum_id,
        //             'paper_kategori_id' => 1,
        //             'created_at' => now(),
        //             'updated_at' => now(),
        //     ]);
        //}
        
        //     // Fetch Kurikulum records
        //     $kurikulum1 = Kurikulum::where('kurikulum', 'KSPK - Kurikulum Standard Pra Sekolah')
        //     ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum1->subjeks()->createMany([
        //         ['subjek' => 'Bahasa Melayu', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Inggeris', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Cina', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Tamil', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Matematik Awal', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sains Awal', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Islam', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Moral', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Keterampilan Diri', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Perkembangan Fizikal dan Kesihatan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Kreativiti dan Estetika', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Kemanusiaan', 'created_at' => now(), 'updated_at' => now()],
        //     ]);

        //     // Fetch Kurikulum records
        //     $kurikulum2 = Kurikulum::where('kurikulum', 'KSSR Semakan - Kurikulum Standard Sekolah Rendah Semakan')
        //     ->where('tahap_pendidikan_id', '2')
        //    ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum2->subjeks()->createMany([
        //         ['subjek' => 'Bahasa Melayu', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Inggeris', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Cina', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Tamil', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Matematik', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sains', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Islam', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Moral', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Jasmani', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Kesihatan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Muzik', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sejarah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Reka Bentuk dan Teknologi', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Teknologi Maklumat dan Komunikasi', 'created_at' => now(), 'updated_at' => now()],
        //     ]);

        //     // Fetch Kurikulum records
        //     $kurikulum3 = Kurikulum::where('kurikulum', 'KSRA - Kurikulum Sekolah Rendah Agama')
        //     ->where('tahap_pendidikan_id', '3')
        //    ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum3->subjeks()->createMany([
        //         ['subjek' => 'Tilawah Al-Quran', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Tauhid', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Feqah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sirah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Akhlak', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Arab', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Jawi', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Khat', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Tajwid', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Imlak', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Hafazan', 'created_at' => now(), 'updated_at' => now()],
        //     ]);

        //     // Fetch Kurikulum records
        //     $kurikulum4 = Kurikulum::where('kurikulum', 'KAFA - Kurikulum Fardhu Ain dan Alquran')
        //     ->where('tahap_pendidikan_id', '2')
        //    ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum4->subjeks()->createMany([
        //         ['subjek' => 'Al-Quran', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Akidah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Ibadah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sirah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Adab', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Arab', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Jawi dan Khat', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Tahfiz Al-Quran', 'created_at' => now(), 'updated_at' => now()],
        //     ]);
        //     // Fetch Kurikulum records
        //     $kurikulum5 = Kurikulum::where('kurikulum', 'KSSM - Kurikulum Standard Sekolah Menengah')
        //     ->where('tahap_pendidikan_id', '3')
        //    ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum5->subjeks()->createMany([
                    //Teras
        //         ['subjek' => 'Bahasa Melayu', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Inggeris', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Cina', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Tamil', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Matematik', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sains', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sejarah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Islam', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Moral', 'created_at' => now(), 'updated_at' => now()],
                    //Elektif Sains Tulen
        //         ['subjek' => 'Biologi', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Kimia', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Fizik', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Matematik Tambahan', 'created_at' => now(), 'updated_at' => now()],
                    //Elektif Sains Gunaan & Tambahan
        //         ['subjek' => 'Sains Sukan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Ekonomi Rumah Tangga', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Sains Komputer', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pertanian', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Grafik Komunikasi Teknikal', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Reka Cipta', 'created_at' => now(), 'updated_at' => now()],
                    //Elektif Sastera
        //         ['subjek' => 'Perniagaan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Ekonomi', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Prinsip Perakaunan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pengajian Keusahawanan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Seni Visual', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Muzik', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Geografi', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Kesusasteraan Melayu', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Kesusasteraan Cina', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Kesusasteraan Tamil', 'created_at' => now(), 'updated_at' => now()],
         //         ['subjek' => 'Kesusasteraan Inggeris', 'created_at' => now(), 'updated_at' => now()],
                    // Elektif Pengajian Islam
        //         ['subjek' => 'Pendidikan Al-Quran & Al-Sunnah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Syariah Islamiah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Tasawwur Islam', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Arab', 'created_at' => now(), 'updated_at' => now()],
        
                    // Elektif Sekolah Seni
        //         ['subjek' => 'Muzik', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Seni Halus', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Teater', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Tari', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Komunikasi Visual', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Reka Bentuk', 'created_at' => now(), 'updated_at' => now()],
                    //Elektif Bahasa
        //         ['subjek' => 'Bahasa Cina', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Tamil', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Iban', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Kadazandusun', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Semai', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Perancis', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Jerman', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Arab', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Korea', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Jepun', 'created_at' => now(), 'updated_at' => now()],

        //     ]);

        //     // Fetch Kurikulum records
        //     $kurikulum6 = Kurikulum::where('kurikulum', 'KSKP - Kurikulum Standard Kelas Peralihan')
        //     ->where('tahap_pendidikan_id', '3')
        //    ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum6->subjeks()->createMany([
        //         ['subjek' => 'Bahasa Melayu', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Amalan Bahasa Melayu', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Inggeris', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Tamil', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Bahasa Cina', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Jasmani dan Kesihatan', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Pendidikan Seni Visual', 'created_at' => now(), 'updated_at' => now()],
        //     ]);

        //     // Fetch Kurikulum records
        //     $kurikulum7 = Kurikulum::where('kurikulum', 'KBD- Kurikulum Bersepadu Dini')
        //     ->where('tahap_pendidikan_id', '3')
        //    ->get();

        //     // Create Kurikulum records related to Pendidikan Dasar
        //     $kurikulum7->subjeks()->createMany([
                    // Teras
        //         ['subjek' => 'Al-Lughah Al-Arabiah Al-Muarisah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Manahij Al-Ulum Al-Islamiah', 'created_at' => now(), 'updated_at' => now()],
                    //Elektif
        //         ['subjek' => 'Al-Adab Al-Muarisah', 'created_at' => now(), 'updated_at' => now()],
        //         ['subjek' => 'Al-Adab Wa Al-Balaghah', 'created_at' => now(), 'updated_at' => now()],
        //     ]);

        //     // Fetch Kurikulum records
        //     $kurikulum8 = Kurikulum::where('kurikulum', 'KBT- Kurikulum Bersepadu Tahfiz')
        //     ->where('tahap_pendidikan_id', '3')
        //    ->get();

            // Create Kurikulum records related to Pendidikan Dasar
            // Kurikulum::find(8)->subjeks()->create([
               
               
                
            // ]); 

            //1 - KSPK - Kurikulum Standard PraSekolah Kebangsaan
            Subjek::create([
                'subjek' => 'Bahasa Melayu',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]); 
            Subjek::create([
                'subjek' => 'Bahasa Inggeris',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]); 
            Subjek::create([
                'subjek' => 'Bahasa Cina',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]); 
            Subjek::create([
                'subjek' => 'Bahasa Tamil',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Matematik Awal',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Sains Awal',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Pendidikan Islam',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Pendidikan Moral',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Keterampilan Diri',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Perkembangan Fizikal dan Kesihatan',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Kreativiti dan Estetika',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);
            Subjek::create([
                'subjek' => 'Kemanusiaan',
                'kurikulum_id' => 1,

            ])->paper_kategoris()->attach([1,4,6,7,10,11,12,13]);


            //2 - KSSR Semakan - Kurikulum Standard Sekolah Rendah Semakan
            Subjek::create([
                'subjek' => 'Bahasa Melayu',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Bahasa Inggeris',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Bahasa Cina',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Bahasa Tamil',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Matematik',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Sains',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Pendidikan Islam',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Pendidikan Moral',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Pendidikan Jasmani',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Pendidikan Kesihatan',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Muzik',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Sejarah',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Reka Bentuk dan Teknologi',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            Subjek::create([
                'subjek' => 'Teknologi Maklumat dan Komunikasi',
                'kurikulum_id' => 2,

            ])->paper_kategoris()->attach([2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17]);
            

            //3 - KSRA - Kurikulum Sekolah Rendah Agama
            Subjek::create([
                'subjek' => 'Tilawah Al-Quran',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]); 
            Subjek::create([
                'subjek' => 'Tauhid',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Feqah',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Sirah',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Akhlak',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Bahasa Arab',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Jawi',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Khat',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Tajwid',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Imlak',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);
            Subjek::create([
                'subjek' => 'Hafazan',
                'kurikulum_id' => 3,
            ])->paper_kategoris()->attach([4,14,18,19]);

            
            //4 - KAFA - Kelas Al-Quran dan Fardhu Ain
            Subjek::create([
                'subjek' => 'Al-Quran',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Akidah',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Ibadah',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Sirah',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Adab',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Bahasa Arab',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Jawi dan Khat',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);
            Subjek::create([
                'subjek' => 'Tahfiz Al-Quran',
                'kurikulum_id' => 4,
            ])->paper_kategoris()->attach([4,18,19]);


            //6 - KSSM - Kurikulum Standard Sekolah Menengah
            // kategori - Teras
            Subjek::create([
                'subjek' => 'Bahasa Melayu',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Bahasa Inggeris',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Bahasa Cina',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Bahasa Tamil',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Matematik',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Sains',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Sejarah',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pendidikan Islam',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pendidikan Moral',
                'kurikulum_id' => 6,
                'kategori' => 'Teras',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            
            // kategori - elektif, sub-kategori- sains tulen
            Subjek::create([
                'subjek' => 'Biologi',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Tulen',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Kimia',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Tulen',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Fizik',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Tulen',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Matematik Tambahan',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Tulen',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 

            //Elektif Sains Gunaan
            Subjek::create([
                'subjek' => 'Sains Sukan',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Sains Rumah Tangga',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Sains Komputer',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pertanian',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Grafik Komunikasi Teknikal',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Asas Kelestarian',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Reka Cipta',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sains Gunaan',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
           
            //Elektif Sastera 
            Subjek::create([
                'subjek' => 'Perniagaan',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Ekonomi',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Prinsip Perakaunan',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pengajian Keusahawanan',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pendidikan Seni Visual',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pendidikan Muzik',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Geografi',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Kesusasteraan Melayu',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Kesusasteraan Cina',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Kesusasteraan Tamil',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Kesusasteraan Inggeris',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sastera',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            
            // Elektif Pengajian Islam
            Subjek::create([
                'subjek' => 'Pendidikan Al-Quran & Al-Sunnah',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Pengajian Islam',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Pendidikan Syariah Islamiah',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Pengajian Islam',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Tasawwur Islam',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Pengajian Islam',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Arab',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Pengajian Islam',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);

            //Elektif Sekolah Seni
            Subjek::create([
                'subjek' => 'Muzik',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sekolah Seni',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Seni Halus',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sekolah Seni',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Teater',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sekolah Seni',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Tari',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sekolah Seni',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Komunikasi Visual',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sekolah Seni',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Reka Bentuk',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Sekolah Seni',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);

            //Elektif Bahasa
            Subjek::create([
                'subjek' => 'Bahasa Cina',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Tamil',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Iban',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Kadazandusun',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Semai',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Perancis',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Jerman',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Arab',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Korea',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);
            Subjek::create([
                'subjek' => 'Bahasa Jepun',
                'kurikulum_id' => 6,
                'kategori' => 'Elektif',
                'sub_kategori' => 'Bahasa',
            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]);


            //7 - KBD- Kurikulum Bersepadu Dini
            Subjek::create([
                'subjek' => 'Usul al-Din',
                'kurikulum_id' => 7,
                'kategori' => 'Teras',

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Al-Syariah',
                'kurikulum_id' => 7,
                'kategori' => 'Teras',

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Al-Lughah Al-Arabiah Al-Muarisah',
                'kurikulum_id' => 7,
                'kategori' => 'Teras',

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Manahij Al-Ulum Al-Islamiah',
                'kurikulum_id' => 7,
                'kategori' => 'Teras',

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Al-Adab Al-Muarisah',
                'kurikulum_id' => 7,
                'kategori' => 'Elektif',

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Al-Adab Wa Al-Balaghah',
                'kurikulum_id' => 7,
                'kategori' => 'Elektif',

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            

            //8 - KBT- Kurikulum Bersepadu Tahfiz
            Subjek::create([
                'subjek' => 'Hifz Al-Qurans',
                'kurikulum_id' => 8,

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 
            Subjek::create([
                'subjek' => 'Maharat Al-Quran',
                'kurikulum_id' => 8,

            ])->paper_kategoris()->attach([4,5,6,7,9,10,11,12,13,14,16,17,19]); 

            

            //  ['subjek' => 'Maharat Al-Quran', 'created_at' => now(), 'updated_at' => now()],

            

    }
}

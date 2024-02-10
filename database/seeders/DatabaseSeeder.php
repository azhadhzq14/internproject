<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kurikulum;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([AdminsTableSeeders::class]);
        $this->call([AuthorTableSeeders::class]);
        $this->call([TahapPendidikanTableSeeder::class]);
        $this->call([KurikulumTableSeeder::class]);
        $this->call([SubjekTableSeeder::class]);
        $this->call([PaperKatergoriTableSeeder::class]);

    }
}

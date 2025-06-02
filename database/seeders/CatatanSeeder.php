<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CatatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('catatans')->insert([
                'kegiatan' => $faker->sentence,
                'keterangan' => $faker->paragraph,
                'jumlah_mainhp' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}

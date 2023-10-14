<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WakasekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_wakasek')->insert([
            'nama' => 'Ani',
            'nomor_induk' => '1000',
            'alamat' => 'Bantul',
            'created_at' =>date('Y-m-d H:i:s')
        ]);


        DB::table('_wakasek')->insert([
            'nama' => 'Mikasa',
            'nomor_induk' => '1789',
            'alamat' => 'Azumabito',
            'created_at' =>date('Y-m-d H:i:s')
        ]);


        DB::table('_wakasek')->insert([
            'nama' => 'Kimi',
            'nomor_induk' => '1489',
            'alamat' => 'Kidul',
            'created_at' =>date('Y-m-d H:i:s')
        ]);
    }
}

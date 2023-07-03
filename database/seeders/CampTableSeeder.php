<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Camp;

use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $camps = [
        [
            'title' => 'Gila Belajar',
            'slug' => 'gila-belajar',
            'price' => 280,
            'created_at' => date('Y:m:d H:i:s', time()),
            'updated_at' => date('Y:m:d H:i:s', time()),
        ],
        [
            'title' => 'Baru Belajar',
            'slug' => 'baru-belajar',
            'price' => 140,
            'created_at' => date('Y:m:d H:i:s', time()),
            'updated_at' => date('Y:m:d H:i:s', time()),
        ]
        ];

        //2nd method
        Camp::insert($camps);
    }
}

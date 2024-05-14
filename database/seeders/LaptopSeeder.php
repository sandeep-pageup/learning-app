<?php

namespace Database\Seeders;

use App\Models\Laptop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laptop::insert([
            'name' => 'DELL',
            'developer_id' => 2
        ]);
    }
}

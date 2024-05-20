<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MechenicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mechanic::insert([
            'id' => 1001,
            'name' => 'Ram Bhai'
        ]);
    }
}

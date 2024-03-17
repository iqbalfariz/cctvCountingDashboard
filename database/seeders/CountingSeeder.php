<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Counting::factory(3)->create();

        $counting = \App\Models\Counting::factory()->create([
                'in' => 2,
                'out' => 1,
                'total' => 1
            ]);
    }
}

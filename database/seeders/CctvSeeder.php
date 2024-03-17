<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CctvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Cctv::factory(1)->create();

        $user = \App\Models\Cctv::factory()->create([
                'name' => 'test cctv',
                'amount' => 2,
                'active' => 'active',
            ]);
    }
}

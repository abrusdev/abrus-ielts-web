<?php

namespace Database\Seeders;

use App\Models\Passage;
use Illuminate\Database\Seeder;

class PassageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passage::create([
           "name" => "Speaking"
        ]);

        Passage::create([
            "name" => "Writing"
        ]);
    }
}

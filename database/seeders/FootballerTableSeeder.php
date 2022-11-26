<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Footballer;

class FootballerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // this resets the table, deleting all the data everytime the function called.
        Footballer::truncate();

        Footballer::create([
            'name' => 'Sadio Mane',
            'position' => 'Winger',
        ]);
        Footballer::create([
            'name' => 'Cristiano Ronaldo',
            'position' => 'Sayap Kanan',
        ]);
        Footballer::create([
            'name' => 'Bambang Pamungkas',
            'position' => 'Penyerang',
        ]);
        Footballer::create([
            'name' => 'De Gea',
            'position' => 'Kiper',
        ]);
        Footballer::create([
            'name' => 'Ferdinand',
            'position' => 'Defender',
        ]);
    }
}

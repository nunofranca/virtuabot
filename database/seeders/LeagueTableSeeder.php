<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leagues = [
            ['name' => 'Euro Cup'],
            ['name' => 'Camp. Mundial'],
            ['name' => 'Premiership'],
            ['name' => 'Superliga'],
        ];
        collect($leagues)->map(fn($league) => League::create($league));
    }

}

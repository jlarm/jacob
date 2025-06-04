<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Player;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Joe Lohr',
            'email' => 'emailme@joelohr.com',
            'password' => bcrypt('password'),
        ]);

        Player::create([
            'name' => 'Jacob Lohr',
            'birthdate' => '2014-03-26',
            'height' => 72,
            'weight' => 96,
            'city' => 'Island Lake',
            'state' => 'IL',
            'team' => 'McHenry Cobras',
            'number' => 26,
            'positions' => ['Pitcher', '3B'],
            'bats' => 'Right',
            'throws' => 'Right',
        ]);
    }
}

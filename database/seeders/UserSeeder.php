<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->create(
            new Sequence(
                [
                    'name' => 'JosueP',
                    'email' => '1930168@gmail.com',
                    'password' => Hash::make('josue'),
                ],
                [
                    'name' => 'JuanC',
                    'email' => '1930345@gmail.com',
                    'password' => Hash::make('juan'),
                ],
                [
                    'name' => 'JordyL',
                    'email' => '1930136@gmail.com',
                    'password' => Hash::make('jordy'),
                ],
            )
        );
    }
}

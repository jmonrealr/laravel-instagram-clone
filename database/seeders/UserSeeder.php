<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;

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

        Profile::factory()->count(3)->create(
            new Sequence(
                [
                    'url_image' => 'Josue',
                    'user_id' => '1',
                ],
                [
                    'url_image' => 'Juan',
                    'user_id' => '2',
                ],
                [
                    'url_image' => 'Jordy',
                    'user_id' => '3',
                ],
            )
        );
    }
}

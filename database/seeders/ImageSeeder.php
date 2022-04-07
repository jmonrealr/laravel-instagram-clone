<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::factory()->count(5)->create(
            new Sequence(
                ['post_id' => '1',],
                ['post_id' => '2',],
                ['post_id' => '3',],
                ['post_id' => '4',],
                ['post_id' => '5',],
            )
        );
    }
}

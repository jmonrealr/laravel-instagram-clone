<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Like;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Like::factory()->count(10)->create(
            new Sequence(
                ['user_id'=>'1','post_id'=>'1'],
                ['user_id'=>'1','post_id'=>'2'],
                ['user_id'=>'1','post_id'=>'4'],
                ['user_id'=>'2','post_id'=>'3'],
                ['user_id'=>'2','post_id'=>'4'],
                ['user_id'=>'3','post_id'=>'1'],
                ['user_id'=>'3','post_id'=>'2'],
                ['user_id'=>'3','post_id'=>'3'],
                ['user_id'=>'3','post_id'=>'4'],
                ['user_id'=>'3','post_id'=>'5'],
            )
        );
    }
}

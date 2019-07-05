<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
        	[
            'name' => 'Chanel',
            'slug' => 'chanel',
            'description' => Str::random(30),
            
        ],[
            'name' => 'D&G',
            'slug' => 'Dolce Gabbana',
            'description' => Str::random(30),
        ],
        [
            'name' => 'CK',
            'slug' => 'Calvin Klein',
            'description' => Str::random(30),
        ],
        [
            'name' => 'Polo',
            'slug' => 'Polo',
            'description' => Str::random(30),
        ],
        [
            'name' => 'Lacoste',
            'slug' => 'Lacoste',
            'description' => Str::random(30),
        ],
        [
            'name' => 'LV',
            'slug' => 'Louis Vuittion',
            'description' => Str::random(30),
        ]
    ]);
    }
}

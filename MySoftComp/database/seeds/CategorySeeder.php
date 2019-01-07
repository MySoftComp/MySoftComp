<?php

use Illuminate\Database\Seeder;
use Carbon\carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Source Code Editor',
        ]);

        DB::table('categories')->insert([
            'name' => 'Text Editor',
        ]);

        DB::table('categories')->insert([
            'name' => 'Video Editor',
        ]);

        DB::table('categories')->insert([
            'name' => 'Audio Editor',
        ]);

        DB::table('categories')->insert([
            'name' => 'Graphics Editor',
        ]);
    }
}

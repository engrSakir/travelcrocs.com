<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            'name' => 'বাংলা',
            'language' => 'bd',
        ]);

        DB::table('languages')->insert([
            'name' => 'Hindi',
            'language' => 'hi',
        ]);
    }
}

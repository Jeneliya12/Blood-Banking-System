<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
        	"id"=> Str::uuid(),
        ]);
    }
}

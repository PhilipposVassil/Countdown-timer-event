<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        'countdown_timer' => '2021-01-14 19:49:00',
        'disable' => '0',
        'image' => '1608036016.png',
        'created_at' => '2020-12-15 10:57:03',
        'updated_at' => '2020-12-15 10:57:03',
        ]);
    }
}

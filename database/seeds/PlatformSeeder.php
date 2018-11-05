<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
                    ['name' => 'Playstation 1'],
                    ['name' => 'Super Nintendo'],
                    ['name' => 'Game Boy'],
                    ['name' => 'MegaDrive'],
                    ['name' => 'Playstation 4'],
                    ['name' => 'Switch'],
    ];

        DB::table('platforms')->insert($list);
    }
}

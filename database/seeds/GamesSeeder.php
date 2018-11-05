<?php

use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
                 ['platform_id' => 1, 'name' => 'Metal Gear Solid', 'is_finished' => 0 , 'release_date' => '21/10/1998' , 'created_at' => '05/11/2018' ],
                 ['platform_id' => 1, 'name' => 'Crash Bandicoot 3 : Warped', 'is_finished' => 1 , 'release_date' => '31/10/1998' , 'created_at' => '05/11/2018' ],
                 ['platform_id' => 1, 'name' => 'Final Fantasy IX', 'is_finished' => 1 , 'release_date' => '16/02/2001' , 'created_at' => '05/11/2018'],
                 ['platform_id' => 1, 'name' => 'Tekken 3', 'is_finished' => 1 , 'release_date' => '12/09/1998' , 'created_at' => '05/11/2018' ],
                 ['platform_id' => 1, 'name' => 'Rayman', 'is_finished' => 0 , 'release_date' => '1995' , 'created_at' => '05/11/2018' ],
                 ['platform_id' => 1, 'name' => 'Spyro 2: Gateway to Glimmer', 'is_finished' => 1 , 'release_date' => '1999' , 'created_at' => '05/11/2018' ],
        ];

        DB::table('games')->insert($list);
    }
}

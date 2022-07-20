<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ToDOListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content' => 'touch with Mr.Mukunoki',
        ];

        DB::table('todolists')->insert($param);
        
    }
}

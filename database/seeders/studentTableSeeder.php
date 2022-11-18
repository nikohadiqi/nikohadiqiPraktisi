<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student')->insert(array(['name' => 'Nico','address' => 'Banyuwangi' , 
        'DateOfBirth' => '2 January 2003', 'Telephone' => '081928243508', 'Schooll' => 'Politeknik Negeri Banyuwangi']));
    }
}

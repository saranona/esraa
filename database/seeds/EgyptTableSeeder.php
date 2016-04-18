<?php

use Illuminate\Database\Seeder;

class EgyptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('Egypts')->insert([
       'name'=> str_random(10),
	'username'=> str_random(10),
         'email'=> str_random(10),
          'password'=>bcrypt(10),
]);
    }
}

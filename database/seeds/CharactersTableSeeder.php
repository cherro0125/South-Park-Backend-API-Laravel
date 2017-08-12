<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'name'          => 'Eric Cartman' ,
            'first_name'    => 'Eric',
            'last_name'     => 'Cartman',
            'age'           => 10,
            'imageUrl'      => 'http://localhost:8000/img/cartman.jpg',
            'isAlive'       => boolValue(true),
            'skin'          => 'white',
        ]);
        DB::table('characters')->insert([
            'name'          => 'Kenny McCormick' ,
            'first_name'    => 'Kenny',
            'last_name'     => 'McCormick',
            'age'           => 9,
            'imageUrl'      => 'http://localhost:8000/img/kenny.jpg',
            'isAlive'       => boolValue(false),
            'skin'          => 'white',
        ]);
        DB::table('characters')->insert([
            'name'          => 'Stan Marsh' ,
            'first_name'    => 'Stan',
            'last_name'     => 'Marsh',
            'age'           => 10,
            'imageUrl'      => 'http://localhost:8000/img/stanmarsh.jpg',
            'isAlive'       => boolValue(true),
            'skin'          => 'white',
        ]);
        DB::table('characters')->insert([
            'name'          => 'Token Black' ,
            'first_name'    => 'Token',
            'last_name'     => 'Black',
            'age'           => 10,
            'imageUrl'      => 'http://localhost:8000/img/tokenblack.jpg',
            'isAlive'       => boolValue(true),
            'skin'          => 'black',
        ]);
        DB::table('characters')->insert([
            'name'          => 'Randy Marsh' ,
            'first_name'    => 'Randy',
            'last_name'     => 'Marsh',
            'age'           => 45,
            'imageUrl'      => 'http://localhost:8000/img/randymarsh.jpg',
            'isAlive'       => boolValue(true),
            'skin'          => 'white',
        ]);
    }
}

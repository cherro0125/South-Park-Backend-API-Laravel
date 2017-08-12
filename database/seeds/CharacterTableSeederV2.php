<?php

use Illuminate\Database\Seeder;

class CharacterTableSeederV2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'miguel',
            'email' => 'miguel.barcenas@issste.gob.mx',
            'password' => bcrypt('12345678')
        ]);
    }
}

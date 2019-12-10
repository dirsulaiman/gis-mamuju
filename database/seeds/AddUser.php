<?php

use Illuminate\Database\Seeder;

class AddUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'       => 'sulesule',
            'email'      => 'sule@email.com',
            'password'   => bcrypt("sulesule"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

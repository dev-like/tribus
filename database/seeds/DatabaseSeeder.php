<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
         'id' => 1,
         'nome' => 'Like Admin',
         'email' => 'dev@likepublicidade.com',
         'password' => bcrypt('admin'),
         'nivel' => 1,
       ]);
    }
}

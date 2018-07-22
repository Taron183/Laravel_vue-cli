<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::insert([
            'name' => 'Taron Suvaryan',
            'email' => 'taronsuvaryan18@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

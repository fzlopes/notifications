<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'      => 'Fábio Lopes',
        	'email'     => 'fzlopes@gmail.com',
        	'password'  => bcrypt('123456'),
        ]);
    }
}

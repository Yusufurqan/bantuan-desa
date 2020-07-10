<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Desa Ciakar',
        	'email' => 'ciakar@email.com',
        	'password' =>  bcrypt('adminciakar')
        ]);
    }
}

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
        // $this->call(UsersTableSeeder::class);
        //USUARIOS
        factory(App\User::class, 1)->create([
        	'name' => 'admin',
	        'email' => 'admin',
	        'password' => Hash::make('1234')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Administrador',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)

        ]);


        App\User::create([
            'name' => 'Usuario 1',
            'email' => 'usuario1@usuario1.com',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10)
        ]);

        factory(App\User::class,50)->create();
    }
}

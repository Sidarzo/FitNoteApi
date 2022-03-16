<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\Role::factory(10)->create();
        User::create([
            'email'=>'cyprien@test.fr',
            'password'=>Hash::make('12345678'),
            'firstname' => 'Cyprien',
            'lastname' => 'Rimbaud',
        ]);
        User::create([
            'email'=>'alexis@test.fr',
            'password'=>Hash::make('12345678'),
            'firstname' => 'Dylan',
            'lastname' => 'Def',
        ]);

        User::factory(10)->create();



    }
}

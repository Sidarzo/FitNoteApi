<?php

namespace Database\Seeders;


use App\Models\Exercise;
use App\Models\Program;
use App\Models\ProgramExercise;
use App\Models\User;
use Database\Factories\ExerciseFactory;
use Database\Factories\ProgramExerciseFactory;
use Faker\Factory;
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
            'password'=>Hash::make('1234'),
            'firstname' => 'Cyprien',
            'lastname' => 'Rimbaud',
            'isAdmin'=>false,
        ]);
        User::create([
            'email'=>'alexis@test.fr',
            'password'=>Hash::make('12345678'),
            'firstname' => 'Dylan',
            'lastname' => 'Def',
            'isAdmin'=>false,
        ]);

        User::create([
            'email'=>'admin@fitweb.fr',
            'password'=>Hash::make('1234'),
            'firstname'=>'admin',
            'lastname'=>'admin',
            'isAdmin'=>true,
        ]);

        $counter = 0;


        $this->call(ExerciseSeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(DefaultExerciseSeeder::class);
        //$this->call(ProgramExerciseFactory::class);


    }
}

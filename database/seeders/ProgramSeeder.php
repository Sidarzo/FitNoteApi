<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'name'=>'Séance n°3',
            'user_id'=>1,
        ]);
        Program::create([
            'name'=>'Séance dimanche',
            'user_id'=>1,
        ]);
        Program::create([
            'name'=>'Séance cardio',
            'user_id'=>1,
        ]);
        Program::create([
            'name'=>'Séance hard',
            'user_id'=>1,
        ]);
        Program::create([
            'name'=>'LegDay',
            'user_id'=>1,
        ]);
        Program::create([
            'name'=>'Séance n°3',
            'user_id'=>1,
        ]);
    }
}

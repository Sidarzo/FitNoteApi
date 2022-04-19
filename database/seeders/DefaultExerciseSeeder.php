<?php

namespace Database\Seeders;

use App\Models\DefaultExercise;
use Illuminate\Database\Seeder;

class DefaultExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DefaultExercise::create([
            'title'=>'Développé couché',
            'description'=>'Travail des pectoraux, triceps',
            'weight'=>75,
            'serie'=>5,
            'restDuration'=>120,
            'type'=>'muscu',

        ]);

        DefaultExercise::create([
            'title'=>'Papillon',
            'description'=>'Travail des pectoraux',
            'weight'=>35,
            'serie'=>5,
            'restDuration'=>120,
            'type'=>'muscu',

        ]);
        DefaultExercise::create([
            'title'=>'Traction',
            'description'=>'Travail des trapèzes, biceps, et du dos',
            'repetition'=>10,
            'serie'=>5,
            'restDuration'=>120,
            'type'=>'muscu',
        ]);

        DefaultExercise::create([
            'title'=>'Abdos crunch',
            'description'=>'Travail des abdos',
            'repetition'=>40,
            'serie'=>5,
            'restDuration'=>45,
            'type'=>'muscu',
        ]);

        DefaultExercise::create([
            'title'=>'Traction',
            'description'=>'Travail des trapèzes, biceps, et du dos',
            'repetition'=>10,
            'serie'=>5,
            'restDuration'=>120,
            'type'=>'muscu',
        ]);

        DefaultExercise::create([
            'title'=>'Jumping Jack',
            'description'=>'Brule graisse',
            'duration'=>30,
            'serie'=>5,
            'restDuration'=>30,
            'type'=>'cardio',

        ]);
    }
}

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function() {

    Route::post('login', [\App\Http\Controllers\API\UserController::class, 'login'])->name('login');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('register', [\App\Http\Controllers\API\UserController::class, 'register'])->name('register');
        Route::post('getRegisteredUser', 'API\UserController@getRegisteredUser');
        Route::get('users',[\App\Http\Controllers\API\UserController::class,'index']);
        Route::get('user/{id}',[\App\Http\Controllers\API\UserController::class,'show']);

        Route::get('programs',[\App\Http\Controllers\ProgramController::class, 'index'])->name('index');
        Route::get('program/{id}',[\App\Http\Controllers\ProgramController::class, 'show']);
        Route::get('ProgramByExerciseId/{id}',[\App\Http\Controllers\ProgramController::class, 'getProgramByExerciseId'])->name('getProgramByExerciseId');
        Route::get('ProgramByUser/{id}',[\App\Http\Controllers\ProgramController::class, 'getProgramByUser'])->name('getProgramByUser');

        Route::get('exercises',[\App\Http\Controllers\ExerciseController::class, 'index'])->name('index');
        Route::get('exercise/{id}',[\App\Http\Controllers\ExerciseController::class, 'show'])->name('show');
        Route::get('exercise/delete/{id}',[\App\Http\Controllers\ExerciseController::class,'destroy']);

        Route::get('defaultExercises',[\App\Http\Controllers\DefaultExerciseController::class, 'index'])->name('index');
        Route::get('defaultExercise/{id}',[\App\Http\Controllers\DefaultExerciseController::class, 'show'])->name('show');
        Route::get('defaultExercise/delete/{id}',[\App\Http\Controllers\DefaultExerciseController::class,'destroy']);
        Route::post('storeDefaultExercise',[\App\Http\Controllers\DefaultExerciseController::class,'store']);
    });

});
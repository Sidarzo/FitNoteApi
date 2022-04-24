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


        Route::get('getProgramsWithUserId/{id}',[\App\Http\Controllers\ProgramController::class,'programWithUserId'])->name('programWithUserId');
        Route::post('createProgram/{id}',[\App\Http\Controllers\ProgramController::class,'create'])->name('createProgram');
        Route::get('deleteProgram/{id}',[\App\Http\Controllers\ProgramController::class,'delete'])->name('deleteProgram');
        Route::get('getExercisesWithProgramId/{id}',[\App\Http\Controllers\ExerciseController::class, 'getExercisesWithProgramId'])->name('getExercisesWithProgramId');
        Route::post('createExercise/',[\App\Http\Controllers\ExerciseController::class,'create'])->name('createExercise');
        Route::post('createTrainingSession/',[\App\Http\Controllers\TrainingSessionController::class,'create'])->name('createSession');

        Route::post('updateprogram/{id}',[\App\Http\Controllers\ProgramController::class,'update'])->name('updateProgram');
    });
});
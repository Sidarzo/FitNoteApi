<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDefaultExerciseRequest;
use App\Http\Requests\UpdateDefaultExerciseRequest;
use App\Models\DefaultExercise;

class DefaultExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return DefaultExercise[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return DefaultExercise::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDefaultExerciseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDefaultExerciseRequest $request)
    {
        dd($request);
        return DefaultExercise::create([
            'title'=>$request['title'],
            'duration'=>$request['duration'],
            'description'=>$request['description'],
            'weight'=>$request['weight'],
            'repetition'=>$request['repetition'],
            'serie'=>$request['serie'],
            'restDuration'=>$request['restDuration'],
            'type'=>$request['type'],
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DefaultExercise  $defaultExercise
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return DefaultExercise::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DefaultExercise  $defaultExercise
     * @return \Illuminate\Http\Response
     */
    public function edit(DefaultExercise $defaultExercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDefaultExerciseRequest  $request
     * @param  \App\Models\DefaultExercise  $defaultExercise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDefaultExerciseRequest $request, DefaultExercise $defaultExercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DefaultExercise  $defaultExercise
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = DefaultExercise::where('id',$id);
        return $exercise->delete();
    }
}

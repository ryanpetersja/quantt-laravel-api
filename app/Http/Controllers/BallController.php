<?php

namespace App\Http\Controllers;

use App\Models\Ball;
use Illuminate\Http\Request;

class BallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ball::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ball = Ball::create($request->all());
        return $ball;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function show(Ball $ball)
    {
        return Ball::find($ball->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function edit(Ball $ball)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ball $ball)
    {
        $ball = Ball::find($ball->id)->update($request->all());
        $ball->save();
        return $ball;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ball  $ball
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ball $ball)
    {
        $ball->destroy($ball->id);
        return "Ball Eliminated!";
    }
}

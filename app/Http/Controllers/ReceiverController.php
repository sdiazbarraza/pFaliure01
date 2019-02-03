<?php

namespace App\Http\Controllers;

use App\Models\Receiver;
use Illuminate\Http\Request;

class ReceiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receivers = Receiver::all();

        return view('views/receivers/index', compact('receivers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\receiver  $receiver
     * @return \Illuminate\Http\Response
     */
    public function show(receiver $receiver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\receiver  $receiver
     * @return \Illuminate\Http\Response
     */
    public function edit(receiver $receiver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\receiver  $receiver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, receiver $receiver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\receiver  $receiver
     * @return \Illuminate\Http\Response
     */
    public function destroy(receiver $receiver)
    {
        //
    }
}

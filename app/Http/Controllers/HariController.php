<?php

namespace App\Http\Controllers;

use App\Hari;
use Illuminate\Http\Request;

class HariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $haris = Hari::all();
        return view('hari.index',  [
            'haris' => $haris
        ]);
        
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
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function show(Hari $hari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function edit(Hari $hari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hari $hari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hari  $hari
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hari $hari)
    {
        //
    }
}

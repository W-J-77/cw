<?php

namespace App\Http\Controllers;

use App\Stall;
use Illuminate\Http\Request;

class StallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function show(Stall $stall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function edit(Stall $stall)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stall $stall)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stall $stall)
    {
        //
    }
    public function page()
    {
      return view('stalls.index');
    }
    public function apiIndex()
    {
      $stalls = Stall::all();
      return $stalls;
    }
    public function apiStore(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
      ]);
      $s = new Stall;
      $s->name = $request['name'];
      $s->save();
      return $s;
    }
}

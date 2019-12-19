<?php

namespace App\Http\Controllers;
use App\grape;
use App\Stall;
use App\Twitter;
use Request;

class GrapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grapes = grape::all();
        return view('grapes.index',['grapes'=>$grapes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$stalls = Stall::all();
        $stalls = Stall::orderBy('name','asc')->get();
        return view('grapes.create',['stalls' => $stalls]);
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
        $validatedData = $request->validate([
          'name' => 'required|max:255',
          'number' => 'required|integer',
          'color' => 'required|max:255',
          'stall_id' => 'required|integer',
        ]);
        //return "Passed Validation";

        $g =new grape;
        $g->name = $validatedData['name'];
        $g->number = $validatedData['number'];
        $g->color = $validatedData['color'];
        $g->stall_id = $validatedData['stall_id'];
        $g->save();

        session()->flash('message','Grape was created.');
        return redirect()->route('grapes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $grape = grape::findOrFail($id);
        return view('grapes.show',['grape' => $grape]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $grape = grape::findOrFail($id);
        return view('grapes.edit',compact ('grape','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        /*$validatedData = $request->validate([
          'name' => 'required|max:255',
          'number' => 'required|integer',
          'color' => 'required|max:255',
          'stall_id' => 'required|integer',
        ]);*/
        $g = grape::first();
        $g->name = Request::input('name');
        $g->number = Request::input('number');
        $g->color = Request::input('color');
        $g->stall_id = Request::input('stall_id');
        $g->save();

        session()->flash('message','Grape was updated.');
        return redirect()->route('grapes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $grape = grape::findOrFail($id);
        $grape->delete();

        //session()->flash('message','Grape was deleted.');
        return redirect()->route('grapes.index')->with('message','Grape was deleted.');
    }

    public function examoleMethod(Grape $foo,Twitter $t)
    {
      dd($t);
      return "The example method returned this";
    }
}

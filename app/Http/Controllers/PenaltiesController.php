<?php

namespace App\Http\Controllers;

use App\Penalties;
use Illuminate\Http\Request;

class PenaltiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penalties = Penalties::all();
        return view('Admin/penalties',compact('penalties'));
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
        $penalty = new Penalties;
        $penalty->name=$request->get('name');
        $penalty->penalty=$request->get('penalty');
        $penalty->reason=$request->get('reason');
        $penalty->date_charged=$request->get('date_charged');
        $penalty->timeline=$request->get('timeline');

        $penalty->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penalties  $penalties
     * @return \Illuminate\Http\Response
     */
    public function show(Penalties $penalties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penalties  $penalties
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $penalty = Penalties::find($id);
        return view('Admin/edit-penalties',compact('penalty'));

        return redirect('penalties');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penalties  $penalties
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $penalty = Penalties::find($id);
        $penalty->update([
            'name'=>$request->name,
            'penalty'=>$request->penalty,
            'reason'=>$request->reason,
            'date_charged'=>$request->date_charged,
            'timeline'=>$request->timeline,
        ]);
           return redirect('penalties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penalties  $penalties
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $penalty = Penalties::find($id);
        $penalty->delete();

        return redirect('penalties');
    }
}

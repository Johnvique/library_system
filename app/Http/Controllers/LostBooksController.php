<?php

namespace App\Http\Controllers;

use App\LostBooks;
use Illuminate\Http\Request;

class LostBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $losts = LostBooks::all();
        return view('Admin/lost-books',compact('losts'));
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
        $lost = new LostBooks;
        $lost->reg_no=$request->get('reg_no');
        $lost->book_name=$request->get('book_name');
        $lost->isbn=$request->get('isbn');
        $lost->date_lost=$request->get('date_lost');
        $lost->date_paid=$request->get('date_paid');

        $lost->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LostBooks  $lostBooks
     * @return \Illuminate\Http\Response
     */
    public function show(LostBooks $lostBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LostBooks  $lostBooks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $lost = LostBooks::find($id);
        return view('Admin/edit-lost-books',compact('lost'));

        return redirect('lost-books');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LostBooks  $lostBooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $lost = LostBooks::find($id);
        $lost->update([
            'reg_no'=>$request->reg_no,
            'book_name'=>$request->book_name,
            'isbn'=>$request->isbn,
            'date_lost'=>$request->date_lost,
            'date_paid'=>$request->date_paid,
        ]);
        return redirect('lost-books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LostBooks  $lostBooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lost = LostBooks::find($id);
        $lost->delete();

        return redirect('lost-books');
    }
}

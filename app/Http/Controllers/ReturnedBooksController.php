<?php

namespace App\Http\Controllers;

use App\ReturnedBooks;
use Illuminate\Http\Request;

class ReturnedBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $returns = ReturnedBooks::all();
        return view('Admin/returned-books',compact('returns'));
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
        $return = new ReturnedBooks;
        $return->reg_no=$request->get('reg_no');
        $return->book_name=$request->get('book_name');
        $return->isbn=$request->get('isbn');
        $return->date_returned=$request->get('date_returned');

        $return->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReturnedBooks  $returnedBooks
     * @return \Illuminate\Http\Response
     */
    public function show(ReturnedBooks $returnedBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReturnedBooks  $returnedBooks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $return = ReturnedBooks::find($id);
        return view('Admin/edit-returned-books',compact('return'));

        return redirect('returned-books');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReturnedBooks  $returnedBooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $return = ReturnedBooks::find($id);
        $return->update([
            'reg_no'=>$request->reg_no,
            'book_name'=>$request->book_name,
            'isbn'=>$request->isbn,
            'date_returned'=>$request->date_returned,
        ]);
        return redirect('returned-books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReturnedBooks  $returnedBooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $return = ReturnedBooks::find($id);
        $return->delete();
        return redirect('returned-books');
    }
}

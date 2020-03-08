<?php

namespace App\Http\Controllers;

use App\BorrowedBooks;
use Illuminate\Http\Request;

class BorrowedBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $borrows = BorrowedBooks::all();
        return view('Admin/borrowed-books',compact('borrows'));
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
        $borrow = new BorrowedBooks;
        $borrow->reg_no=$request->get('reg_no');
        $borrow->book_name=$request->get('book_name');
        $borrow->isbn=$request->get('isbn');
        $borrow->date_borrowed=$request->get('date_borrowed');

        $borrow->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BorrowedBooks  $borrowedBooks
     * @return \Illuminate\Http\Response
     */
    public function show(BorrowedBooks $borrowedBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BorrowedBooks  $borrowedBooks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $borrow = BorrowedBooks::find($id);
        return view('Admin/edit-borrowed-books',compact('borrow'));

        return redirect('borrowed-books');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BorrowedBooks  $borrowedBooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $borrow = BorrowedBooks::find($id);
        $borrow->update([
            'reg_no'=>$request->reg_no,
            'book_name'=>$request->book_name,
            'isbn'=>$request->isbn,
            'date_borrowed'=>$request->date_borrowed,
        ]);
            return redirect('borrowed-books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BorrowedBooks  $borrowedBooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $borrow = BorrowedBooks::find($id);
        $borrow->delete();
        return redirect('borrowed-books');
    }
}

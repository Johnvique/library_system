<?php

namespace App\Http\Controllers;
use File;
use App\LibraryBooks;
use Illuminate\Http\Request;

class LibraryBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = LibraryBooks::all();
        return view('admin/library-books',compact('books'));
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
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move(public_path('photos'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.jpg';
        }

        $book = new LibraryBooks;
        $book->isbn=$request->get('isbn');
        $book->book_name=$request->get('book_name');
        $book->quantity=$request->get('quantity');
        $book->price=$request->get('price');
        $book->author=$request->get('author');
        $book->image=$fileNameToStore;
        $book->category=$request->get('category');

        $book->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LibraryBooks  $libraryBooks
     * @return \Illuminate\Http\Response
     */
    public function show(LibraryBooks $libraryBooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LibraryBooks  $libraryBooks
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = LibraryBooks::find($id);
        return view('Admin/edit-library-books',compact('book'));

        return redirect('library-books');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LibraryBooks  $libraryBooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = LibraryBooks::find($id); 
        $book->update([
            'isbn'=>$request->isbn,
            'book_name'=>$request->book_name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'author'=>$request->author,
            'image'=>$request->image,
            'category'=>$request->category,
        ]);

        return redirect('library-books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LibraryBooks  $libraryBooks
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = LibraryBooks::find($id);
        file::delete('photos/'.$book->image);
        $book->delete();
        return redirect('library-books');

    }
}

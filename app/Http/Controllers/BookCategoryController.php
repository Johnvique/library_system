<?php

namespace App\Http\Controllers;

use App\BookCategory;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = BookCategory::all();
        return view('Admin/book-category',compact('categories'));
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
        $category = new BookCategory;
        $category->purpose=$request->get('purpose');
        $category->category=$request->get('category');

        $category->save();
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function show(BookCategory $bookCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $category = BookCategory::find($id);
        return view('Admin/edit-book-category',compact('category'));
        return redirect('book-category');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $category = BookCategory::find($id);
        $category->update([
            'purpose'=>$request->purpose,
            'category'=>$request->category,
        ]);
        return redirect('book-category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BookCategory  $bookCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = BookCategory::find($id);
        $category->delete();
        return redirect('book-category');
    }
}

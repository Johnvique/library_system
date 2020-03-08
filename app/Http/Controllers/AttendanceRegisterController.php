<?php

namespace App\Http\Controllers;
use File;
use App\AttendanceRegister;
use Illuminate\Http\Request;

class AttendanceRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registers = AttendanceRegister::all();
        return view('Admin/attendance-register',compact('registers'));
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

        $register = new AttendanceRegister;
        $register->username=$request->get('username');
        $register->Id_No=$request->get('Id_No');
        $register->visit_day=$request->get('visit_day');
        $register->image=$fileNameToStore;
        $register->book_required=$request->get('book_required');
        $register->purpose=$request->get('purpose');

        $register->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AttendanceRegister  $attendanceRegister
     * @return \Illuminate\Http\Response
     */
    public function show(AttendanceRegister $attendanceRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AttendanceRegister  $attendanceRegister
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $register = AttendanceRegister::find($id);
        return view('Admin/edit-attendance-register',compact('register'));

        return redirect('attendance-register');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AttendanceRegister  $attendanceRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $register = AttendanceRegister::find($id);
        $register->update([
            'username'=>$request->username,
            'Id_No'=>$request->Id_No,
            'visit_day'=>$request->visit_day,
            'image'=>$request->image,
            'book_required'=>$request->book_required,
            'purpose'=>$request->purpose,
        ]);
          return redirect('attendance-register');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AttendanceRegister  $attendanceRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $register = AttendanceRegister::find($id);
        file::delete('photos/'.$register->image);
        $register->delete();

        return redirect('attendance-register');
    }
}

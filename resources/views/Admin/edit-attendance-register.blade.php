@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('attendance-register.update', $register->id)}}" class="user" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="username" value="{{$register->username}}" class="form-control form-control-user" id="exampleUserName" placeholder="User Name" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="Id_No" value="{{$register->Id_No}}" class="form-control form-control-user" id="exampleIdNo" placeholder="ID Number" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select type="text" name="visit_day" value="--chose visiting day--" class="form-control" id="exampleAttendance" required>
                                <option>--Visiting Day--</option>
                                <option>Daily Visit</option>
                                <option>Weekend Visit</option>
                                <option>Holiday Visit</option>
                              </select>
                        </div>
                        <div class="col-sm-6">
                          <input type="file" name="image" value="{{$register->image}}" class="form-control form-control-user" id="exampleImage" 
                          onchange="return imageval()" required>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="book_required" value="{{$register->book_required}}" class="form-control form-control-user" id="exampleInputBookRequired" placeholder="Book To Read" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="purpose" value="{{$register->purpose}}" class="form-control form-control-user" id="examplePurpose" placeholder="Purpose" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                      Update Attendants Register
                    </button>
                  </form>
              </div>
          </div>  
        </div>
        <div class="col-md-4">
            
        </div>
    </div>
</div>
</div>
@endsection
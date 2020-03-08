@extends('layouts.master')
@section('master')
<div class="container-fluid">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
      Add attendant
      </button>
      <button type="button" class="btn btn-secondary">
        <i class="fa fa-file-excel" aria-hidden="true"></i>
      CSV
      </button>
      <button type="button" class="btn btn-secondary">
          <i class="fa fa-file-pdf" aria-hidden="true"></i>
       PDF
        </button>
        <button type="button" class="btn btn-secondary">
          <i class="fa fa-print" aria-hidden="true"></i>
       print
        </button>
     </button>

          <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Manage Attendance</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="card">
           <div class="card-body">
           <form action="{{route('attendance-register.store')}}" class="user" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleUserName" placeholder="User Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="Id_No" class="form-control form-control-user" id="exampleIdNo" placeholder="ID Number" required>
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
                      <input type="file" name="image" class="form-control form-control-user" id="exampleImage" 
                      onchange="return imageval()" required>
                    </div>
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="book_required" class="form-control form-control-user" id="exampleInputBookRequired" placeholder="Book To Read" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="purpose" class="form-control form-control-user" id="examplePurpose" placeholder="Purpose" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Attendants
                </button>
              </form>
           </div>
         </div>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
          <!-- Begin Page Content -->
          <div class="container-fluid">
  
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3  bg-secondary">
                <h6 class="m-0 font-weight-bold text-white">Manage Library Attendance</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>ID NO.</th>
                        <th>Visit Day</th>
                        <th>Visitor Image</th>
                        <th>Book Required</th>
                        <th>Purpose</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>ID NO.</th>
                        <th>Visit Day</th>
                        <th>Visitor Image</th>
                        <th>Book Required</th>
                        <th>Purpose</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($registers as $register)
                      <tr>
                      <td>{{$register->id}}</td>
                        <td>{{$register->username}}</td>
                        <td>{{$register->Id_No}}</td>
                        <td>{{$register->visit_day}}</td>
                        <td><img src="{{asset('photos/'.$register->image)}}" class="img-responsive" 
                        style="width:60px"></td>
                        <td>{{$register->book_required}}</td>
                        <td>{{$register->purpose}}</td>
                        <td>
                        <a href="{{action('AttendanceRegisterController@edit', $register->id)}}"
                        class="btn btn-info btn-sm fa fa-edit"></a>
                        <form action="{{action('AttendanceRegisterController@destroy', $register->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-sm fa fa-trash-alt"></button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  
          </div>
          <!-- /.container-fluid -->
</div>
@endsection
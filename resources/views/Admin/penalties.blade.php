@extends('layouts.master')
@section('master')
<div class="container-fluid">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
      Add penalty
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
          <h5 class="modal-title" id="exampleModalLabel">Manage Penalties</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="card">
           <div class="card-body">
           <form action="{{route('penalties.store')}}" class="user" method="POST">
            @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="name" class="form-control form-control-user" id="exampleName" placeholder="Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="penalty" class="form-control form-control-user" id="examplePenalty" placeholder="Penalty" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="textarea" name="reason" class="form-control form-control-user" id="exampleInputReason" placeholder="Reason for penalty" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="date" name="date_charged" class="form-control form-control-user" id="exampleInputDateCharged" placeholder="Date Penalized" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="timeline" class="form-control form-control-user" id="exampleTimeline" placeholder="Timeline" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Submit
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
                <h6 class="m-0 font-weight-bold text-white">Manage Library Penalties</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Penalty</th>
                        <th>Reason</th>
                        <th>Date Penalized</th>
                        <th>Timeline</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Penalty</th>
                        <th>Reason</th>
                        <th>Date Penalized</th>
                        <th>Timeline</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($penalties as $penalty)
                      <tr>
                      <td>{{$penalty->id}}</td>
                        <td>{{$penalty->name}}</td>
                        <td>{{$penalty->penalty}}</td>
                        <td>{{$penalty->reason}}</td>
                        <td>{{$penalty->date_charged}}</td>
                        <td>{{$penalty->timeline}}</td>
                        <td>
                        <a href="{{action('PenaltiesController@edit', $penalty->id)}}" 
                        class="btn btn-info btn-sm fa fa-edit"></a>
                        <form action="{{action('PenaltiesController@destroy', $penalty->id)}}" method="POST">
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
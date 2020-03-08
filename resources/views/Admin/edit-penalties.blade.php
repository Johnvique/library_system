@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('penalties.update', $penalty->id)}}" class="user" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="name" value="{{$penalty->name}}" class="form-control form-control-user" id="exampleName" placeholder="Name" required>
                      </div>
                      <div class="col-sm-6">
                      <input type="text" name="penalty" value="{{$penalty->penalty}}" class="form-control form-control-user" id="examplePenalty" placeholder="Penalty" required>
                      </div>
                    </div>
                    <div class="form-group">
                    <input type="textarea" name="reason" value="{{$penalty->reason}}" class="form-control form-control-user" id="exampleInputReason" placeholder="Reason for penalty" required>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="date" name="date_charged" value="{{$penalty->date_charged}}" class="form-control form-control-user" id="exampleInputDateCharged" placeholder="Date Penalized" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="timeline" value="{{$penalty->timeline}}" class="form-control form-control-user" id="exampleTimeline" placeholder="Timeline" required>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                      Update Penalties
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
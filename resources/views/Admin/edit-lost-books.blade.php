@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('lost-books.update', $lost->id)}}" class="user" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="reg_no" value="{{$lost->reg_no}}" class="form-control form-control-user" id="exampleRegNo" placeholder="Registration Number" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="book_name" value="{{$lost->book_name}}" class="form-control form-control-user" id="exampleBookName" placeholder="Book Name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="isbn" value="{{$lost->isbn}}" class="form-control form-control-user" id="exampleInputISBN" placeholder="ISBN" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="date" name="date_lost" value="{{$lost->date_lost}}" class="form-control form-control-user" id="exampleReDateLost" placeholder="Date Lost" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <input type="date" name="date_paid" value="{{$lost->date_paid}}" class="form-control form-control-user" id="exampleReDatePaid" placeholder="Date Paid" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                      Update Lost Books
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
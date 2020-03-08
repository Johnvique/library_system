@extends('layouts.master')
@section('master')
<div class="container-fluid">
  <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4">
        <div class="card">
            <div class="card-body">
              <form action="{{route('returned-books.update', $return->id)}}" class="user" method="POST">
                  @csrf
                  @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="reg_no" value="{{$return->reg_no}}" class="form-control form-control-user" id="exampleRegNo" placeholder="Registration Number">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="book_name" value="{{$return->book_name}}" class="form-control form-control-user" id="exampleBookName" placeholder="Book Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="isbn" value="{{$return->isbn}}" class="form-control form-control-user" id="exampleInputISBN" placeholder="ISBN">
                      </div>
                      <div class="col-sm-6">
                        <input type="date" name="date_returned" value="{{$return->date_returned}}" class="form-control form-control-user" id="exampleReDateBorrowed" placeholder="Date Borrowed">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-danger btn-user btn-block">
                      update Returned Books
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
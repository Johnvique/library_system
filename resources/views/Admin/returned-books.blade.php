@extends('layouts.master')
@section('master')
<div class="container-fluid">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
      Returned book
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
          <h5 class="modal-title" id="exampleModalLabel">Manage Books Returned</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="card">
           <div class="card-body">
           <form action="{{route('returned-books.store')}}" class="user" method="POST">
            @csrf
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="reg_no" class="form-control form-control-user" id="exampleRegNo" placeholder="Registration Number">
                </div>
                <div class="col-sm-6">
                  <input type="text" name="book_name" class="form-control form-control-user" id="exampleBookName" placeholder="Book Name">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" name="isbn" class="form-control form-control-user" id="exampleInputISBN" placeholder="ISBN">
                </div>
                <div class="col-sm-6">
                  <input type="date" name="date_returned" class="form-control form-control-user" id="exampleReDateBorrowed" placeholder="Date Borrowed">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Submit Returned Books
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
                <h6 class="m-0 font-weight-bold text-white">Manage Library Returned Books</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Reg.No.</th>
                        <th>Book Name</th>
                        <th>ISBN</th>
                        <th>Date Returned</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Reg.No.</th>
                        <th>Book Name</th>
                        <th>ISBN</th>
                        <th>Date Returned</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($returns as $return)
                      <tr>
                      <td>{{$return->id}}</td>
                        <td>{{$return->reg_no}}</td>
                        <td>{{$return->book_name}}</td>
                        <td>{{$return->isbn}}</td>
                        <td>{{$return->date_returned}}</td>
                        <td>
                        <a href="{{action('ReturnedBooksController@edit', $return->id)}}" 
                          class="btn btn-info btn-sm fa fa-edit"></a>
                        <form action="{{action('ReturnedBooksController@destroy', $return->id)}}" method="POST">
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

@endsection
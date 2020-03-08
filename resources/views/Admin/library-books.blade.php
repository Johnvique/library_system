@extends('layouts.master')
@section('master')
<div class="container-fluid">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
      Add books
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
          <h5 class="modal-title" id="exampleModalLabel">Manage Books</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="card">
           <div class="card-body">
           <form action="{{route('library-books.store')}}" class="user" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="isbn" class="form-control form-control-user" id="exampleISBN" placeholder="ISBN" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="book_name" class="form-control form-control-user" id="exampleBookName" placeholder="Book Name" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" name="quantity" class="form-control form-control-user" id="exampleInputQuantity" placeholder="Quantity" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="price" class="form-control form-control-user" id="examplePrice" placeholder="Price" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="author" class="form-control form-control-user" id="exampleInputAuthor" placeholder="Author" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="file" name="image" class="form-control form-control-user" id="exampleImage" placeholder="Book Image"
                    onchange="return imageval()" required>
                  </div>
                </div>
                <div class="form-group">
                  <select type="text" name="category" value="--chose category--" class="form-control" id="exampleCategory" required>
                    <option>--Book Category--</option>
                    <option>Mathematics</option>
                    <option>Science</option>
                    <option>Agriculture</option>
                    <option>Literature</option>
                    <option>Set Book</option>
                    <option>Story Book</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Books
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
                <h6 class="m-0 font-weight-bold text-white">Manage Library Books</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ISBN</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>ISBN</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($books as $book)
                      <tr>
                        <td>{{$book->id}}</td>
                          <td>{{$book->isbn}}</td>
                          <td>{{$book->book_name}}</td>
                          <td>{{$book->quantity}}</td>
                          <td>{{$book->price}}</td>
                          <td>{{$book->author}}</td>
                      <td><img src="{{asset('photos/'.$book->image)}}" class="img-responsive" style="width:60px"></td>
                          <td>{{$book->category}}</td>
                          <td>
                            <a href="{{action('LibraryBooksController@edit', $book->id)}}" class="btn btn-success fa fa-edit btn-sm"></a>
                            <form action="{{action('LibraryBooksController@destroy', $book->id)}}" method="POST">
                              @csrf
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
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
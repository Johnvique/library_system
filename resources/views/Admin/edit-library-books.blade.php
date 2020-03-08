@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                <form action="{{route('library-books.update', $book->id)}}" class="user" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" name="isbn" value="{{$book->isbn}}" class="form-control form-control-user" id="exampleISBN" placeholder="ISBN" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" name="book_name" value="{{$book->book_name}}" class="form-control form-control-user" id="exampleBookName" placeholder="Book Name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="number" name="quantity" value="{{$book->quantity}}" class="form-control form-control-user" id="exampleInputQuantity" placeholder="Quantity" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" name="price" value="{{$book->price}}" class="form-control form-control-user" id="examplePrice" placeholder="Price" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="text" name="author" value="{{$book->author}}" class="form-control form-control-user" id="exampleInputAuthor" placeholder="Author" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="file" name="image" value="{{$book->image}}" class="form-control form-control-user" id="exampleImage" placeholder="Book Image"
                          onchange="return imageval()" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <select type="text" name="category" value="{{$book->category}}" class="form-control" id="exampleCategory" required>
                          <option>--Book Category--</option>
                          <option>Mathematics</option>
                          <option>Science</option>
                          <option>Agriculture</option>
                          <option>Literature</option>
                          <option>Set Book</option>
                          <option>Story Book</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-danger btn-user btn-block">
                        Update Books
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
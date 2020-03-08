@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                <form action="{{route('book-category.update', $category->id)}}" class="user" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" name="purpose" value="{{$category->purpose}}" class="form-control form-control-user" id="exampleBookPurpose" placeholder="Book Purpose">
                          </div>
                          <div class="col-sm-6">
                            <input type="text" name="category" value="{{$category->category}}" class="form-control form-control-user" id="exampleBookCategory" placeholder="Book Category">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-danger btn-user btn-block">
                          Update Category
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
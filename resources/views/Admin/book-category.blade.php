@extends('layouts.master')
@section('master')
<div class="container-fluid">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
      Add category
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
          <h5 class="modal-title" id="exampleModalLabel">Manage categories</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <div class="card">
           <div class="card-body">
           <form action="{{route('book-category.store')}}" class="user" method="POST">
            @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="purpose" class="form-control form-control-user" id="exampleBookPurpose" placeholder="Book Purpose">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="category" class="form-control form-control-user" id="exampleBookCategory" placeholder="Book Category">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Category
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
                <h6 class="m-0 font-weight-bold text-white">Manage Book Categories</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Purpose</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Purpose</th>
                        <th>Category</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      @foreach ($categories as $category)
                      <tr>
                      <td>{{$category->id}}</td>
                        <td>{{$category->purpose}}</td>
                        <td>{{$category->category}}</td>
                        <td>
                        <a href="{{action('BookCategoryController@edit', $category->id)}}" 
                          class="btn btn-info btn-sm fa fa-edit"></a>
                        <form action="{{action('BookCategoryController@destroy', $category->id)}}" method="POST">
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
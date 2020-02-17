@extends('layouts.master')
@section('master')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Library Data</h1>
                <a href="{{url('/#')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Book Circulation Report</a>
                <a href="{{url('/#')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-bars fa-sm text-white-50"></i> Attendance Register</a>
                <a href="{{url('/system-settings')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-cogs fa-sm text-white-50"></i> General System Settings</a>
                </div>
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Library users</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{url('/library-officials')}}">(20) users</a></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Available books</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{url('/library-books')}}">(2,500) books</a></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Borrowed Books</div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><a href="{{url('/borrowed-books')}}">(60) borrowed</a></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Returned Books</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{url('/returned-books')}}">(18) returned</a></div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-folder fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

            <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-danger shadow h-100 py-2">
                                          <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                              <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Lost Books</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{url('/lost-books')}}">(35) lost</a></div>
                                              </div>
                                              <div class="col-auto">
                                                <i class="fas fa-file fa-2x text-gray-300"></i>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
      
                <!-- Content Row -->
      
                <div class="row">
      
                  <!-- Area Chart -->
                  <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                      <!-- Card Header - Dropdown -->
                      <div class="card-header bg-secondary py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-white">Monthly Library Analysis</h6>
                        <div class="dropdown no-arrow">
                          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                        <div class="chart-area">
                          <canvas id="myAreaChart"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
      

                </div>
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Content Column -->
                  <div class="col-lg-6 mb-4">
      
      

      
                  </div>
      
                  <div class="col-lg-6 mb-4">
      

      

      
                  </div>
                </div>
      
              </div>
              <!-- /.container-fluid -->
      
            </div>
            <!-- End of Main Content -->
@endsection
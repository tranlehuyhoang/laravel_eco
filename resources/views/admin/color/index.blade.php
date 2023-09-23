@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
           @if (session('message'))
                <h2>{{session('message')}}</h2>
           @endif
               
              </div>
           
            </div>
            <div class="d-flex justify-content-between align-items-end flex-wrap">
              <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                <i class="mdi mdi-download text-muted"></i>
              </button>
              <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                <i class="mdi mdi-clock-outline text-muted"></i>
              </button>
              <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                <i class="mdi mdi-plus text-muted"></i>
              </button>
              <a  href="{{ url('admin/color/create', []) }}" class="btn btn-primary mt-2 mt-xl-0">Add Color</a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Color Table</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Color
                          </th>
                          <th>
                            Status
                          </th>
                          
                          <th>
                            Action
                          </th>
                       
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($colors as $color)
                        <tr>
                          <td class="py-1">
                            {{ $color->id }}
                          </td>
                          <td>
                            {{ $color->name }}
                          </td>
                          <td class="py-1" style="color: {{$color->code}}">
                            {{ $color->code }}
                          </td>
                         
                          <td>
                            <div class="py-1">
                              {{ $color->status ==1  ? 'hidden' :'visible' }}
                            </div>
                          </td>
                          <td>
                          <a href="{{ url('admin/color/'. $color->id . '/edit', []) }}" class="btn btn-primary">Edit</a>
                          <a href="{{ url('admin/color/'. $color->id .'/delete', []) }}" onclick="return  confirm('Bạn có chắc chắn muốn xóa color?')"  class="btn btn-danger">Delete</a>
                          </td>
                       
                        </tr>
                    @endforeach
                                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
    
      </div>
   
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard  </a> templates</span>
    </div>
    </footer>
    <!-- partial -->
  </div>
@endsection
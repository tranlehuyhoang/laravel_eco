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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
              </button>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Brand Table</h4>
                 
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
                            Status
                          </th>
                          <th>
                            Actions
                          </th>
                       
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach($categories as $category)
                        <tr>
                          <td class="py-1">
                            {{ $category->id }}
                          </td>
                          <td>
                            {{ $category->name }}
                          </td>
                          <td>
                            <div class="py-1">
                              {{ $category->status ==1  ? 'hidden' :'visible' }}
                            </div>
                          </td>
                          <td>
                          <a href="{{ url('admin/category/'. $category->id . '/edit', []) }}" class="btn btn-primary">Edit</a>
                          <a href="{{ url('admin/category/'. $category->id .'/delete', []) }}" onclick="return  confirm('Bạn có chắc chắn muốn xóa category?')"  class="btn btn-danger">Delete</a>
                          </td>
                       
                        </tr>
                    @endforeach --}}
                       
                  
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
  <!-- Button trigger modal -->


<!-- Modal -->
 
<form action="{{ route('brand.create')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label> 
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Slug</label> 
    <input type="text" class="form-control" name="slug" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label> <input type="checkbox" name="status"/>
  </div>
  <input type="submit"  class="btn btn-primary" value="Save changes">

</form>
 
@endsection
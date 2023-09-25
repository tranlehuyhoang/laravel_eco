@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
           
                <h2>Slider Edit</h2>
              </div>
          
            </div>
          
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
           
                <form action="{{ url('admin/slider/' . $slider->id, []) }}" class="forms-sample" enctype="multipart/form-data" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" value="{{$slider->title}}" name="title" id="name" placeholder="Name">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="meta_keyword">Description</label>
                    <textarea type="text" class="form-control" name="description" id="meta_keyword"  >
                      {{$slider->title}}  
                    </textarea> @error('meta_keyword')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div>  
                  <div class="form-group">
                    <label for="image"> Image</label>
                    <input type="file" class="form-control" name="image" id="image"  >
                    <img src="{{ asset($slider->image, []) }}" alt="" srcset="" width="100px" height="50px">
                    @error('image')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div> 
                  <div class="form-group">
                    <label for="status"> Status</label>
          <input type="checkbox"  name="status" id="status"> @error('status')
          <small class="text-danger">{{$message}}</small>
      @enderror
                  </div>
            
               
                  <button   class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
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
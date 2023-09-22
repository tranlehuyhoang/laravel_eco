@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
           
                <h2>Category Edit</h2>
              </div>
          
            </div>
          
          </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
           
                <form action="{{ url('admin/category/' . $category->id, []) }}" class="forms-sample" enctype="multipart/form-data" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}" id="name" placeholder="Name">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="slug"> Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug"  value="{{$category->slug}}" placeholder="Slug"> @error('slug')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="description"> Description</label>
                    <textarea type="text" class="form-control" name="description" id="description"  >
                      {{$category->name}}</textarea> @error('description')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="status"> Status</label>
          <input type="checkbox"  {{$category->status =='1'? 'checked':''}} name="status" id="status"> @error('status')
          <small class="text-danger">{{$message}}</small>
      @enderror
                  </div>
                  <div class="form-group">
                    <label for="image"> Image</label>
                    <img src="{{ asset('uploads/category/' . $category->image) }}" alt="" srcset="" width="100px" height="100px">
                    <input type="file" class="form-control" name="image" id="image"  >  @error('image')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div> 
                   <div class="form-group">
                    <label for="meta_title"> Meta Title</label>
                    <textarea type="text" class="form-control" name="meta_title" id="meta_title"  >{{$category->meta_title}}</textarea> @error('meta_title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div>  
                   <div class="form-group">
                    <label for="meta_keyword"> Meta Keyword</label>
                    <textarea type="text" class="form-control" name="meta_keyword" id="meta_keyword"  >{{$category->meta_keyword}}</textarea> @error('meta_keyword')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                  </div>  
                  <div class="form-group">
                    <label for="meta_description"> Meta Description</label>
                    <textarea type="text" class="form-control" name="meta_description" id="meta_description"  >{{$category->meta_description}}</textarea> @error('meta_description')
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
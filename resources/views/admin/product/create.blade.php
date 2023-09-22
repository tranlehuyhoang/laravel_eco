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
              <a class="btn btn-primary mt-2 mt-xl-0">Add Product</a>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body"> 
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Seo Tags</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Details</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="home1-tab" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home1" aria-selected="false">Product Image</button>
                        </li>
                      </ul>
                      <form action="{{ url('admin/product') }}" class="forms-sample" enctype="multipart/form-data" method="POST">
                        @csrf
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="form-group  mt-3">
                                <label for="category_id"> Select Category</label>
                                    <select name="category_id" id="category_id"  class="form-control" >
                                    @foreach ($categories as $category)
                                        
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="name"> Product Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name"> @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="slug">Product Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"> @error('slug')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                                 <div class="form-group">
                                <label for="brand"> Select Brand</label>
                                    <select name="brand" id="brand"  class="form-control" >
                                    @foreach ($brands as $brand)
                                        
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                                @error('brand')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="small_description">Small Description</label>
                                <textarea type="text" class="form-control" name="small_description" id="small_description"  ></textarea> @error('small_description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="description"> Description</label>
                                <textarea type="text" class="form-control" name="description" id="description"  ></textarea> @error('description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                        
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label for="meta_title" class=" mt-3">Meta Title</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Slug"> @error('meta_title')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
              
                              <div class="form-group">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea type="text" class="form-control" name="meta_keyword" id="meta_keyword"  ></textarea> @error('meta_keyword')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="meta_description"><Meta></Meta> Description</label>
                                <textarea type="text" class="form-control" name="meta_description" id="meta_description"  ></textarea> @error('meta_description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>

                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                <label for="original_price" class=" mt-3">original_price</label>
                                <input type="number" class="form-control" name="original_price" id="original_price" placeholder="Slug"> @error('original_price')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                            <div class="form-group">
                                <label for="selling_price" class=" mt-3">selling_price</label>
                                <input type="number" class="form-control" name="selling_price" id="selling_price" placeholder="Slug"> @error('selling_price')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                            <div class="form-group">
                                <label for="quantity" class=" mt-3">quantity</label>
                                <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Slug"> @error('quantity')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                            <div class="form-group">
                                <label for="trending" class=" mt-3">trending</label>
                                <input type="checkbox" style="width: 50px ; height: 50px;" name="trending" id="trending" > @error('trending')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
              
                            <div class="form-group">
                                <label for="status" class=" mt-3">status</label>
                                <input type="checkbox" name="status" id="status"  style="width: 50px ; height: 50px;" > @error('status')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
              
                             
                        </div>
                        <div class="tab-pane fade " id="home1" role="tabpanel" aria-labelledby="home1-tab">

                            <div class="form-group mt-3">
                                <label for="image"> Product Images</label>
                                <input type="file" multiple class="form-control" name="image[]" id="image" > 
                              </div>
                        
                        </div>
                        
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
@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
         
                <h2>Edit Product</h2>
          
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
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="home2-tab" data-bs-toggle="tab" data-bs-target="#home2" type="button" role="tab" aria-controls="home2" aria-selected="false">Product Color</button>
                        </li>
                      </ul>
                      <form action="{{ url('admin/product/'. $product->id .'') }}" class="forms-sample" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="form-group  mt-3">
                                <label for="category_id"> Select Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                  @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                      {{ $category->name }}
                                    </option>
                                  @endforeach
                                </select>
                                @error('category_id')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="name"> Product Name</label>
                                <input type="text" class="form-control" value="{{$product->name}}" name="name" id="name" placeholder="Name"> @error('name')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="slug">Product Slug</label>
                                <input type="text" class="form-control" value="{{$product->slug}}" name="slug" id="slug" placeholder="Slug"> @error('slug')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                                 <div class="form-group">
                                <label for="brand"> Select Brand</label>
                                <select name="brand" id="brand" class="form-control">
                                  @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $brand->id == $product->brand ? 'selected' : '' }}>
                                      {{ $brand->name }}
                                    </option>
                                  @endforeach
                                </select> 
                                @error('brand')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="small_description">Small Description</label>
                                <textarea type="text" class="form-control" name="small_description" id="small_description"  >{{$product->small_description}}   
                                </textarea> @error('small_description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="description"> Description</label>
                                <textarea type="text" class="form-control" name="description" id="description"  >{{$product->description}}</textarea> @error('description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                        
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label for="meta_title" class=" mt-3">Meta Title</label>
                                <input value="{{$product->meta_title}}" type="text" class="form-control" name="meta_title" id="meta_title" placeholder="Slug"> @error('meta_title')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
              
                              <div class="form-group">
                                <label for="meta_keyword">Meta Keyword</label>
                                <textarea type="text" class="form-control" name="meta_keyword" id="meta_keyword"  >{{$product->meta_keyword}}</textarea> @error('meta_keyword')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                              <div class="form-group">
                                <label for="meta_description"><Meta></Meta> Description</label>
                                <textarea type="text" class="form-control" name="meta_description" id="meta_description"  >{{$product->meta_description}}</textarea> @error('meta_description')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>

                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="form-group">
                                <label for="original_price" class=" mt-3">original_price</label>
                                <input value="{{$product->original_price}}" type="number" class="form-control" name="original_price" id="original_price" placeholder="Slug"> @error('original_price')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                            <div class="form-group">
                                <label for="selling_price" class=" mt-3">selling_price</label>
                                <input value="{{$product->selling_price}}" type="number" class="form-control" name="selling_price" id="selling_price" placeholder="Slug"> @error('selling_price')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                            <div class="form-group">
                                <label for="quantity" class=" mt-3">quantity</label>
                                <input value="{{$product->quantity}}" type="number" class="form-control" name="quantity" id="quantity" placeholder="Slug"> @error('quantity')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
                            <div class="form-group">
                                <label for="trending" class=" mt-3">trending</label>
                                <input {{$product->trending == '1' ?'checked':''}} type="checkbox" style="width: 50px ; height: 50px;" name="trending" id="trending" > @error('trending')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
              
                            <div class="form-group">
                                <label for="status" class=" mt-3">status</label>
                                <input {{$product->status == '1' ?'checked':''}} type="checkbox" name="status" id="status"  style="width: 50px ; height: 50px;" > @error('status')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                              </div>
              
                             
                        </div>
                        <div class="tab-pane fade " id="home1" role="tabpanel" aria-labelledby="home1-tab">

                            <div class="form-group mt-3">
                                <label for="image"> Product Images</label>
                                <input type="file" multiple class="form-control" name="image[]" id="image" > 
                             <div style="display: flex">
                              @if ($product->productImage)
                              {{-- {{@dd($product->productImage)}} --}}
                                  @foreach ($product->productImage as $img)
                                     <div style="display: flex ;align-items: center; flex-direction: column ">
                                      <img src="{{ asset($img->image) }}" style="width: 50px;" height="50px" alt="" srcset="">
                                      <a href="{{ url('admin/product-image/'.$img->id.'/delete') }}">X</a>
                                     </div>
                                  @endforeach
                              @endif
                            </div>
                              </div>
                        
                        </div>
                        <div class="tab-pane fade " id="home2" role="tabpanel" aria-labelledby="home2-tab">

                          <div class="form-group mt-3">
                              <label for="colors"> Product Color</label>
                              @foreach ($colors as $color)
                                  <br>
                            
                              <input value="{{$color->id}}" type="checkbox" style="background-color: {{$color->code}}"  name="colors[{{$color->id}}]" id="colors{{$color->id}}" > 
                              <label style=" color: {{$color->code}}" for="colors{{$color->id}}">  <span style="  color: {{$color->code}} ;background-color: {{$color->code}}" >COLOR</span></label>
                              <label   for="colorquantity[{{$color->id}}]">quantity</span></label>
                              <input  type="number"    name="colorquantity[{{$color->id}}]" id="colorquantity[{{$color->id}}]" > 
                              @endforeach
                            </div>
                            <div class="card-body">
                              <h4 class="card-title">Brand Table</h4>
                             
                              <div class="table-responsive">
                                <table class="table table-striped">
                                  <thead>
                                    <tr>
                                    
                                      <th>
                                        Color Name
                                      </th>
                                      <th>
                                        quantity
                                      </th>
                                      <th>
                                        Actions
                                      </th>
                                   
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if ($product->productColor )
                                    @foreach ($product->productColor as $pdcolor)
                                        
                                    <tr class="prd_qty">
       
              <td style="background: {{$pdcolor->color->code}}; color:{{$pdcolor->color->code}}">
                color
              </td>
              <td>
             <input type="number" class=" productColorQuantity{{$pdcolor->id}}" value="{{$pdcolor->quantity}}"> 
              </td>
         
              <td>
              <button type="button" value="{{$pdcolor->id}}"  class=" updateProductColorButon btn btn-primary">Update</button>
              <button  type="button" value="{{$pdcolor->id}} " class="deleteProductColorButon btn btn-danger">Delete</button>
              </td>
           
            </tr>
                                    @endforeach
                                    @else
                                    <tr>
                            <td colspan="3">
  
  Color Not Found
</td>
                                    </tr>
                                    @endif
                                    
                                                       
                                                  
                                  </tbody>
                                </table>
                              </div>
                            </div>
                      </div>
                        
                    </div>
                    <button  type="submit" class="btn btn-primary me-2  text-while">Update</button>
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
 @section('script');
 <script>
  $(document).ready(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(document).on('click', '.updateProductColorButon', function () {
      var prd_color_id = $(this).val();
      var product_id = '{{$product->id}}';
      var qty = $('.productColorQuantity' + prd_color_id).val();
      console.log(product_id, qty, prd_color_id);

      var data = {
        'product_id': product_id,
        'qty': qty,
      };

      $.ajax({
        type: "POST",
        url: "/admin/product-color/" + prd_color_id,
        data: data,
        dataType: "json", // Specify the data type expected in the response
        success: function (response) {
          alert(response.message);
        },
        error: function (xhr, status, error) {
          console.log(xhr.responseText); // Log the error response
        }
      });
    });
    $(document).on('click', '.deleteProductColorButon', function () {
      var prd_color_id = $(this).val();
    
      var product_id = '{{$product->id}}';

    
      var data = {
        'product_id': product_id,
         
      };

      $.ajax({
        type: "POST",
        url: "/admin/product-color/" + prd_color_id + '/delete',
        data: data,
        dataType: "json", // Specify the data type expected in the response
        success: function (response) {
          alert(response.message);
        },
        error: function (xhr, status, error) {
          console.log(xhr.responseText); // Log the error response
        }
      });
    });
  });
</script>
 @endsection
@endsection
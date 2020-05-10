@extends('admin.master')



@section('body')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
            {{ Form::open(['route'=>'update-product', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editProductForm']) }}

            <div class="form-group">
                <label for="exampleFormControlSelect1" class="control-label col-md-4">Category Name</label>
                <div class="col-md-8">
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                  <option>---Select Category Name---</option>
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category -> category_name }}</option>
                  @endforeach
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="control-label col-md-4">Brand Name</label>
                <div class="col-md-8">
                <select class="form-control" id="exampleFormControlSelect1" name="brand_id">
                  <option>---Select Brand Name---</option>
                  @foreach($brands as $brand)
                  <option value="{{ $brand->id }}">{{ $brand -> brand_name }}</option>
                  @endforeach
                </select>
                </div>
            </div>


            <div class="form-group">
              <label class="control-label col-md-4">Product Name</label>
              <div class="col-md-8">
                <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control"/>
                <input type="hidden" name="product_id" value="{{$product->id}}" class="form-control"/>
                <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Product Price</label>
              <div class="col-md-8">
                <input type="number" name="product_price" value="{{$product->product_price}}" class="form-control"/>
                <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Product Quantity</label>
              <div class="col-md-8">
                <input type="number" name="product_quantity" value="{{$product->product_quantity}}" class="form-control"/>
                <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Short Description</label>
              <div class="col-md-8">
                <textarea class="form-control" name="short_description">{{$product->short_description}}</textarea>
                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Long Description</label>
              <div class="col-md-8">
                <textarea class="form-control" id="editor"  name="long_description">{{$product->long_description}}</textarea>
                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Product Image</label>
              <div class="col-md-8">
                <input type="file" name="product_image" accept="image/*"><br>
                <img src="{{ asset($product->product_image) }}" alt="" height="80" width="80">
                <span class="text-danger">{{ $errors->has('product_image') ? $errors->first('product_image') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Publication Status</label>
              <div class="col-md-8 radio">
                <label><input type="radio" name="publication_status" {{ $product->publication_status ==1 ? 'checked' : '' }} value="1">Published</label>
                <label><input type="radio" name="publication_status" {{ $product->publication_status ==0 ? 'checked' : '' }} value="0">Unpublished</label>
              <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8">
                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Product Info">
              </div>
            </div>
            {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
  <script>
      document.forms['editProductForm'].elements['category_id'].value='{{$product->category_id}}';
      document.forms['editProductForm'].elements['brand_id'].value='{{$product->brand_id}}';
  </script>

@endsection

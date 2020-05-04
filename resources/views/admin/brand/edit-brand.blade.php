@extends('admin.master')



@section('body')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
            {{ Form::open(['route'=>'update-brand', 'method'=>'POST', 'class'=>'form-horizontal']) }}
            <div class="form-group">
              <label class="control-label col-md-4">Brand Name</label>
              <div class="col-md-8">
                <input type="text" name="brand_name"  class="form-control" value="{{ $brand->brand_name }}"/>
                <input type="hidden" name="brand_id" class="form-control" value="{{ $brand->id }}">
                <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Brand Description</label>
              <div class="col-md-8">
                <textarea class="form-control" name="brand_description">{{ $brand->brand_description }}</textarea>
                <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>

              </div>

            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Publication Status</label>
              <div class="col-md-8 radio">
                <label><input type="radio" name="publication_status" {{ $brand->publication_status ==1 ? 'checked' : '' }} value="1">Published</label>
                <label><input type="radio" name="publication_status" {{ $brand->publication_status ==0 ? 'checked' : '' }} value="0">Unpublished</label>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8">
                <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Brand Info">
              </div>
            </div>
            {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>

@endsection

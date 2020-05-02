@extends('admin.master')



@section('body')

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
          <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
          <form action="{{ Route('update-category') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-4">Category Name</label>
              <div class="col-md-8">
                <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
                <input type="hidden" name="category_id" class="form-control" value="{{ $category->id }}">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Category Description</label>
              <div class="col-md-8">
                <textarea class="form-control" name="category_description"  >{{ $category->category_description }}</textarea>
              </div>

            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Publication Status</label>
              <div class="col-md-8 radio">
                <label><input type="radio" name="publication_status" {{ $category->publication_status ==1 ? 'checked' : '' }} value="1">Published</label>
                <label><input type="radio" name="publication_status" {{ $category->publication_status ==0 ? 'checked' : '' }} value="0">Unpublished</label>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8">
                <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Category Info">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

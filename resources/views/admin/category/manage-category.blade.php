@extends('admin.master')

@section('body')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">

      <div class="panel-body">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
          <table class="table table-borderd">
            <tr class="bg-success">
              <th>Sl No</th>
              <th>Category Name</th>
              <th>Category Description</th>
              <th>Publication Status</th>
              <th>Action</th>
            </tr>
            @php($i=1)
            @foreach ($categories as $category):
            <tr >
              <td>{{ $i++ }}</td>
              <td>{{ $category->category_name }}</td>
              <td>{{ $category->category_description }}</td>
              <td>{{ $category->publication_status ==1 ? 'Published' : 'Unpublished' }}</td>
              <td>
                @if($category->publication_status ==1)
                  <a href="{{ Route('unpublished-category',['id'=>$category->id]) }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-arrow-up"></span>
                  </a>
                @else
                  <a href="{{ Route('published-category',['id'=>$category->id]) }}" class="btn btn-warning btn-xs">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                  </a>
                @endif
                <a href="{{ Route('edit-category',['id'=>$category->id]) }}" class="btn btn-success btn-xs">
                  <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ Route('delete-category',['id'=>$category->id]) }}" class="btn btn-danger btn-xs">
                  <span class="glyphicon glyphicon-trash"></span>
                </a>
              </td>
            </tr>
            @endforeach
          </table>
      </div>
    </div>
  </div>
</div>
</div>


@endsection

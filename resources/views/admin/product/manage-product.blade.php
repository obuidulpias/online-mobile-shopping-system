@extends('admin.master')

@section('body')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">

      <div class="panel-body">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
          <div class="table-responsive">
            <table class="table table-borderd">
              <tr class="bg-success">
                <th>Sl No</th>
                <th>Category Name</th>
                <th>Brand Name</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Product Image</th>
                <th>Publication Status</th>
                <th>Action</th>
              </tr>

              @php($i=1)
              @foreach($products as $product)
              <tr >
                  <td>{{ $i++ }}</td>
                  <td>{{ $product->category_name }}</td>
                  <td>{{ $product->brand_name }}</td>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->product_price }}</td>
                  <td>{{ $product->product_quantity }}</td>
                  <td>
                    <img src="{{ asset($product->product_image) }}" alt="" width="100" height="100">
                  </td>
                  <td>{{ $product->publication_status }}</td>
                  <td></td>
              </tr>
              @endforeach

            </table>
          </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection

@extends('front-end.master')

@section('title')
    Shipping
@endsection

@section('body')
    <hr/>
    <div class="container">
        <div class="row">
            <h3>Dear {{ Session::get('customerName') }}. You have to give us product shipping info to complete your valiuable order.
            </h3></div>
        <hr/>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 well">
                <h3 class="text-center">Shipping Info here.....</h3>
                <hr/>
                <div class="well box box-primary">
                    {!! Form::open(['route'=>'new-shipping', 'method'=>'POST']) !!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" value="{{ $customer->first_name.' '.$customer->last_name }}" name="full_name" class="form-control" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input type="email" value="{{ $customer->email_address }}" name="email_address" class="form-control" placeholder="Email Address">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="number" value="{{ $customer->phone_number }}" name="phone_number" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea name="address" class="form-control" placeholder="Enter Address">{{ $customer->address }}</textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block">Save Shipping Info</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
@endsection


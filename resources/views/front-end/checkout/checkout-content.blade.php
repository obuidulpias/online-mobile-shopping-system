@extends('front-end.master')

@section('title')
Checkout
@endsection

@section('body')
<hr/>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well lead text-center text-success">You have to login to complete your valuable order. If you are not registered then please Sign Up first.</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h3 class="text-center">Registration Form Here</h3>
            <hr/>
            <div class="well box box-primary">
                {!! Form::open(['route'=>'customer-sign-up', 'method'=>'POST']) !!}
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
                    </div>
                  </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-lg-6">
            <h3 class="text-center">Login Form Here</h3>
            <hr/>
            <div class="well box box-primary">
                {!! Form::open(['route'=>'customer-login', 'method'=>'POST',]) !!}
                <div class="box-body">

                    {{csrf_field()}}


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" name="emailAddress" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection

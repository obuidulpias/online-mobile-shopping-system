@extends('front-end.master')

@section('title')
    Shipping
@endsection

@section('body')
    <hr/>
    <div class="container">
        <div class="row">
            <h3>Dear {{ Session::get('customerName') }}. You have to give us product payment method.
            </h3>
        </div>
        <hr/>
        <div class="row">
            <div class="col-lg-8 col-md-12 well">
                {{ Form::open(['route'=>'new-order', 'method'=>'POST']) }}
                    <table>
                        <tr>
                            <th>Cash on Delivery</th>
                            <td><input type="radio" name="payment_type" value="Cash">Cash on Delivery</td>
                        </tr>
                        <tr>
                            <th>Paypal</th>
                            <td><input type="radio" name="payment_type" value="Paypal">Paypal</td>
                        </tr>
                        <tr>
                            <th>Bkash</th>
                            <td><input type="radio" name="payment_type" value="Bkash">Bkash</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" name="btn" value="Confirm Order"></td>
                        </tr>
                    </table>
                {{ Form::close() }}
            </div>

        </div>
    </div>

@endsection



@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trendding-wrapper">
                <h4>My Orders</h4>
                @foreach ($orders as $product)
                    <div class=" row searched-item cart-list-divider">
                        <div class="col-sm-3" style="margin:20px;>
                            <a href="detail/{{ $product->id }}">
                                <img class="trendinng-img"  src="{{ $product->gallery }}" alt="">
                        </div>
                            <a/>

                        <div class="col-sm-4" style="margin-bottom:50px;">
                                <div class="">
                                    <h3>Name: {{ $product->name }}</h3>
                                    <h5>Delivery Status: {{ $product->status }}</h5>
                                    <h5>Address: {{ $product->address }}</h5>
                                    <h5>Payment Status: {{ $product->payment_status }}</h5>
                                    <h5>Payment Method: {{ $product->payment_method }}</h5>

                                </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>



</div>




@endsection

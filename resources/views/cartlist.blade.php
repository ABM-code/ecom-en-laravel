@extends('master')
@section('content')
<div class="custom-product">
    <div class="row">
        <div class="col-sm-10">
            <div class="trendding-wrapper">
                <h4>Result For Products</h4>
                @foreach ($products as $product)
                    <div class=" row searched-item cart-list-divider">
                        <div class="col-sm-3" style="margin-bottom:50px;">
                            <a href="detail/{{ $product->id }}">
                                <img class="trendinng-img" src="{{ $product->gallery }}" alt="">
                        </div>
                            <a/>

                        <div class="col-sm-4" style="margin-bottom:50px;">
                                <div class="">
                                    <h2>{{ $product->name }}</h2>
                                    <h5>{{ $product->description }}</h5>
                                    <h3>Price : {{ $product->price }}</h3>

                                </div>
                        </div>
                        <div class="col-sm-3" style="margin:50px; " >
                            <a href="/removecart/{{ $product->cart_id }}" class="btn btn-warning">Remove From Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



</div>




@endsection

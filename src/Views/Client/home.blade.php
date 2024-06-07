@extends('layouts.masterr')

@section('title')
    Reader
@endsection

@section('namepage')
    Shop
@endsection

@section('content')
    @foreach ($products as $product)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden">

                <span class="badge badge-primary">NEW</span>
                <a href="{{ url('products/' . $product['id']) }}">
                    <img src="{{ asset($product['img_thumbnail']) }}" alt="" height="200px"
                        class="card-img-top rounded-0">
                </a>
                <div class="card-body">
                    <h4 class="text-uppercase mb-3">
                        <a href="{{ url('products/' . $product['id']) }}">
                            {{ $product['name'] }}
                        </a>
                    </h4>

                    <p class="h4">
                        {{ $product['price_regular'] }}
                    </p>


                    <a href="{{ url('cart/add') }}?quantity=1&productID={{ $product['id'] }}" class="btn btn-primary">
                        ADD TO CART
                    </a>


                </div>

            </div>
        </div>
    @endforeach
@endsection

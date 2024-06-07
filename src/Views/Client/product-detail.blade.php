@extends('layouts.masterr')

@section('title')
    Reader
@endsection

@section('content')


<div class="">
    <div class="card border-0 rounded-0 text-center shadow-none overflow-hidden" style="display: flex">
       
            <span class="badge badge-primary">NEW</span>
            <img src="{{ asset($product['img_thumbnail']) }}" alt="" height="200px" width="200px" class="card-img-top rounded-0">
            <div class="card-body" >
                <h4 class="text-uppercase mb-3">{{ $product['name'] }}</h4>
           
                <p class="h4">{{ $product['price'] }}</p>
              
                <form action="{{ url('cart/add') }}" method="get">
                    <input type="hidden" name="productID" value="{{ $product['id'] }}">
                    <input type="number" min="1" name="quantity" value="1">
                    <button type="submit"  class="btn btn-primary">Thêm vào giỏ hàng</button>
                </form>
               
            </div>
      
    </div>
</div>
@endsection

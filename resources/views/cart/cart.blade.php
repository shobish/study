@extends('layout.default')
@section('content')
<div class="header-bk">
    <h3>Your Cart Products</h3>
    
</div>
<div class="product-container">
    @forelse ( $cart_products as $cart_product )
        @if (isset($cart_product->product))      
            
            <div class="product">
                <img src="{{asset('assets/image/image.png')}}" alt="Product Image" />
                <div class="product-info">
                    <div class="product-name">{{$cart_product->product->name}}</div>
                    <div class="product-price">{{$cart_product->product->price}}</div>
                </div>  
                <a class="btn btn-danger remove-product" value='{{$cart_product->product->name}}'>remove</a>             
            </div>
           
        @endif
    @empty        
    @endforelse 
        
    
    
</div>
<script>

</script>
    
    <a class="btn btn-danger" href="distroy/{{$cart_product->cart_id}}">clear Cart</a>
@stop
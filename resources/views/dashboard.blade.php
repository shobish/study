
@extends('layout.default')
@section('content')
<div class="cart">
    <i class="fa fa-shoping-cart"></i>  

    <div class="search btn btn-success">
            <form action="/search" role="search">                
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" name="q"
                        placeholder="Search users"> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
            </form>
    </div>
</div>
<div class="product-container">
    @forelse ($products as $product )
    
    <div class="product">
        <img src="product1.jpg" alt="Product Image">
        <div class="product-info">
            <div class="product-name">{{$product->name}}</div>
            <div class="product-price">{{$product->price}}</div>
        </div>
        <form action="addproduct/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="product_id" value="{{$product->id}}">            
            <input type="number" name="qty" class="quantity-input" value="1" min="1">
            <button type="submit" class="add-to-cart">Add to Cart</button>
        </form>
    </div>
    @empty
        <h2>No data available</h2>
    @endforelse
    
</div>
@stop
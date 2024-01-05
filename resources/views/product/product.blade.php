@extends('layout.default')
@section('content')


<table class="table table-sripped" id="product_table">
  <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Name</th>
        <th scope="col"> Description</th>
        <th scope="col"> Price</th>
      </tr>
  </thead>
  
       
  <tbody>
    @php
      $i=0
    @endphp
    @forelse ($products as $product )
        <tr>
        <td scope="col">{{$product->id}}</td>
        <td scope="col"> {{$product->productName}}</td>
        <td scope="col"> {{$product->productDescription}}</td>
        <td scope="col">{{$product->buyPrice}}</td>
      </tr>

    @empty
        <h2>No data is available</h2>
    @endforelse
  </tbody>
</table>

@stop
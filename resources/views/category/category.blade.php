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
    @forelse ($categories as $category )
        <tr>
        <td scope="col">{{$category->id}}</td>
        <td scope="col"> {{$category->category_id}}</td>
        <td scope="col"> {{$category->name}}</td>
        
      </tr>

    @empty
        <h2>No data is available</h2>
    @endforelse
  </tbody>
</table>

@stop
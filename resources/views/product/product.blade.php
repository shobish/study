@extends('layout.default')
@section('content')

<div class="add-product ">
    <button class="btn btn-success float-start mb-3"  data-bs-toggle="modal" data-bs-target="#addproduct">Add Product</button> 
</div>
<table class="table table-light table-sripped" id="product_table">
  <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Name</th>
        <th scope="col"> Description</th>
        <th scope="col"> Price</th>
        <th scope="col"> Action</th>
      </tr>
  </thead>
  
       
  <tbody>
   
    @forelse ($products as $i => $product )
   
      <tr>
        <td scope="col">{{$i+1}}</td>
        <td scope="col">{{$product->name}}</td>
        <td scope="col"> {{$product->description}}</td>
        <td scope="col">{{$product->price}}</td>
        <td scope="col">
          <button value="{{$product->id}}" id="delete-btn" class="btn btn-danger ">delete</button> |
          <button value="{{$product->id}}" id="edit-btn" class="btn btn-primary ">Edit</button> |
        </td>

      </tr>

    @empty
        <h2>No data is available</h2>
    @endforelse
  </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function(){    
    $(document).on('click','#delete-btn',function(){
      
      var product=$(this).val();   
      var csrfToken = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
        type:'delete',
        method:'delete',
        url:'products/'+product,
        headers: {
                'X-CSRF-TOKEN': csrfToken
            },
          dataType: 'json',
        success:function(response){
         console.log('asddasd');
        }
      });
      
      
    });
    
    $(document).on('click','#edit-btn',function(){
      var product_id=$(this).val();     
      var url='products/'+product_id;
      
      $('#editproduct').modal('show');
     
      $.ajax({
        type:'GET',
        url:url,      
        datatype:'json',
        success:function(response){
        console.log(response);
           $('#name').val(response.product.name);
           $('#description').val(response.product.description);
           $('#price').val(response.product.price);
           $('#category_id').val(response.product.category_id);
        }
      });
      
    });
  });
</script>

@stop

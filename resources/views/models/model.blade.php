<!-- add product Modal -->
<div class="modal fade" id="addproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/products" id="addproduct" method="post" enctype="multipart/form-data" class="modal-content">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control"  name="name" placeholder="Product Name">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="description" placeholder="Product Description">
        </div>
        <div class="mb-3">
            <label for="product Price" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="price" placeholder="Product  Price">
        </div>
         <div class="mb-3">
            <label for="product Price" class="form-label">Category id</label>
            <input type="text" class="form-control" name="category_id" placeholder="Product  Price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>

  </div>
</div>
<!-- edit product Modal -->
<div class="modal fade" id="editproduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/products" id="editproducts" method="post" enctype="multipart/form-data" class="modal-content">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

       <div class="mb-3">
            <label for="productName" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name"   name="name" placeholder="Product Name">
        </div>
        <div class="mb-3">
            <label for="productDescription" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Product Description">
        </div>
        <div class="mb-3">
            <label for="product Price" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Product  Price">
        </div>
         <div class="mb-3">
            <label for="product Price" class="form-label">Category id</label>
            <input type="text" class="form-control" id="category_id" name="category_id" placeholder="Product  Price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>

  </div>
</div>
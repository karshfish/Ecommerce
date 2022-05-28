<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <style>

    .title{
      color:white; 
      padding-top:25px;
       font-size:25px;
    }
    label{
      display: inline-block;
      width: 200px;
    }
    </style>
  </head>
  <body>
  @include('admin.sidebar')
      <!-- partial -->
@include('admin.navbar')

        <!-- partial -->
    <div class="container-fluid page-body-wrapper">  
      <div class="container" align="centre">     
        <h1 class="title">Add Product</h1>
        <form action="{{route('upload.product.post')}}" method="POST" enctype="multipart/form-data"  >
        @csrf
        <div style="padding:15px">
          <label>Product title</label>
          <input type="text" name="title" placeholder="Give a product title" required="">
        </div>
        <div style="padding:15px">
          <label>Price</label>
          <input type="number" name="price" placeholder="Give a product price" required="">
        </div>
        <div style="padding:15px">
          <label>Product description</label>
          <input type="text" name="description" placeholder="Give a product description" required="">
        </div>
        <div style="padding:15px">
          <label>Quantity</label>
          <input type="text" name="quantity" placeholder="Give a product quantity" required="">
        </div>
        <div style="padding:15px">
          <input type="file" name="file">
        </div>
        <div style="padding:15px">
        <button type="submit">Add</button>
        </div>
        </form>
      </div>
    </div>
@include('admin.script')
  </body>
</html>
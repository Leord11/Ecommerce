<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

   <style type="text/css">

       .title {
        color:white; padding-top: 25px; font-size:25px;
       }

       label {
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
            <div class="container" align="center">
                <h1 class="title">Add Product</h1>
            
                @if(session()->has('message'))

                <div class="alert alert-success">
                    
                    {{ session()->get('message') }}                    
                    <button type="button" class="close" data-bs-dismiss="alert">x</button>    

                </div>    
                @endif
                <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf
                <div style="padding:15px;">
                <label>Product Title:</label>
                <input style=" background:none;"type="text" name="title" placeholder="Give a product title">
                </div>

                <div style="padding:15px;">
                <label>Price:</label>
                <input style=" background:none;" type="number" name="price" placeholder="Give a product price">
                </div>

                <div style="padding:15px;">
                <label>Description:</label>
                <input style=" background:none;"type="text" name="description" placeholder="Give a product description">
                </div>

                <div style="padding:15px;">
                <label>Qty:</label>
                <input style=" background:none;"type="text" name="quantity" placeholder="Product quantity">
                </div>
                
                <div style="padding:15px;">
                
                <input style=" background:none;"type="file" name="file">
                </div>

                <div style="padding:15px;">
                <input type="submit" class="btn btn-success" >
                </div>

                </form>
            </div>

            

        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>
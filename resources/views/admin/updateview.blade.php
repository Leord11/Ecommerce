<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
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
                <h1 class="title">Update Product</h1>
            
                @if(session()->has('message'))

                <div class="alert alert-success" style="display:flex; justify-content:space-between;">
                    
                    {{ session()->get('message') }}                    
                    <button type="button" class="close" data-bs-dismiss="alert">x</button>    

                </div>    
                @endif
                <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                <div style="padding:15px;">
                <label>Product Title:</label>
                <input style=" background:none;" type="text" name="title" value="{{ $data->title }}" placeholder="Give a product title">
                </div>

                <div style="padding:15px;">
                <label>Price:</label>
                <input style=" background:none;" type="number" name="price" value="{{ $data->price }}">
                </div>

                <div style="padding:15px;">
                <label>Description:</label>
                <input style=" background:none;"type="text" name="description" value="{{ $data->description }}">
                </div>

                <div style="padding:15px;">
                <label>Qty:</label>
                <input style=" background:none;"type="text" name="quantity" value="{{ $data->quantity }}">
                </div>
                

                <div style="padding:15px;">
                <label>Old Image</label>
                <img height="100" width="100" src="/productimage/{{$data->image}}" >
                </div>
                <div style="padding:15px;">
                <label>Change Image</label>
                <input style="background:none;"type="file" name="file">
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
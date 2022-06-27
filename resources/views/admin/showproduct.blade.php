<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      

      
      <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">


            @if(session()->has('message'))

            <div class="alert alert-success">
                
                {{ session()->get('message') }}                    
                <button type="button" class="close" data-bs-dismiss="alert">x</button>    

            </div>    
            @endif
            <table>
                <tr>
                    <td style="padding:20px;">Title</td>
                    <td style="padding:20px;">Description</td>
                    <td style="padding:20px;">Quantity</td>
                    <td style="padding:20px;">Price</td>
                    <td style="padding:20px;">Image</td>
                    <td style="padding:20px;">Update</td>
                    <td style="padding:20px;">Delete</td>
                </tr>
                @foreach($data as $product)
                <tr style="background-color:black; text-align:center; border:1px solid gray; padding:5px; ">
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <img height="100" width="100" src="/productimage/{{ $product->image }}" >
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>
                    </td>
                    <td>
                        <a href="{{url('deleteproduct',$product->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>


            </div>

            </div>     
          <!-- partial -->
        @include('admin.script')
  </body>
</html>
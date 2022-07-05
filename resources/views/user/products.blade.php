

<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="#">view all products <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float:right; padding:10px;">
                @csrf
                <input type="search" name="search" placeholder="search . . ." class="form-control">

                <input type="submit" placeholder="Search" value="Search" class="btn btn-success">
              </form>
            </div>
          </div>

          @foreach($data as $product)

          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="productimage/{{ $product->image }}" style="width:250px; height:250px; object-fit: contain;"alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{ $product->title }}</h4></a>
                <h6>${{ $product->price }}</h6>
                <p>{{ $product->description }}</p>
              
                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf
                  <div class="flex-wrapper">
                    <input type="number" value="1" min="1" name="quantity" class="form-control qty">
                    <input type="submit" class="btn btn-primary" value="Add Cart">
                  </div>
                </form>
              </div>
            </div>
          </div>

          @endforeach

          @if(method_exists($data,'links'))
          <div class="d-flex justify-content-center">

          {!! $data->links() !!}


          </div>
          @endif

        </div>
      </div>
    </div>

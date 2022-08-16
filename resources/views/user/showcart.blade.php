<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">


    <style>

      .btn-success {
        margin-top: 20px;
        background: none;
        color: black ; 
      }
    </style>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{url('/')}}"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
            
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
              </li>

              <li class="nav-item">
              @if (Route::has('login'))
                
                    @auth
                    <li class="nav-item">
                <a class="nav-link" href="{{url('showcart')}}">
                <i class="fa-solid fa-cart-shopping"></i> 
                Cart[{{ $count }}]</a>
              </li>

                    <x-app-layout>

                    </x-app-layout>
                   
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
                
                @endif
                </li>
            </ul>
          </div>
        </div>
      </nav>

      
    </header>

    

    <div style="padding:100px;" align="center">
    @if(session()->has('message'))

    <div class="alert alert-success">

    {{ session()->get('message') }}                    
    
    <a href="{{url('showcart')}}">
      <button type="button" class="close" data-bs-dismiss="alert">x</button>    
    </a> 
    </div>    
    @endif
        <table style="border:1px solid #272525; width:100%;">
            <tr style="background-color: #272525; color:white; border:1px solid #272525;"> 
                <td style="padding:10px; font-size:20px;">Image</td>
                <td style="padding:10px; font-size:20px;">Product Name</td>
                <td style="padding:10px; font-size:20px;">Quantity</td>
                <td style="padding:10px; font-size:20px;">Price</td>
                <td style="padding:10px; font-size:20px;">Action</td>
            </tr>

        <form action="{{url('order')}}" method="POST">

        @csrf
            @foreach($cart as $carts)
            <tr style="border:1px solid #272525;">
                <td style="padding:10px;">
                <input type="text" name="productimage[]" value="{{ $carts->image}}" hidden="">
                <img src="productimage/{{ $carts->image }}" style="width:150px; height:100px; object-fit: contain;"alt="">
                </td>  
                <td style="padding:10px;">
                <input type="text" name="productname[]" value="{{ $carts->product_title}}" hidden="">
                {{ $carts->product_title}}
                </td>
                <td style="padding:10px;">
                <input type="text" name="quantity[]" value="{{ $carts->quantity}}" hidden="">
                {{ $carts->quantity}}
                </td>
                <td style="padding:10px;">
                <input type="text" name="price[]" value="{{ $carts->price}}" hidden="">
                {{ $carts->price}}
                </td>
                <td style="padding:10px;">
                    <a href="{{url('delete',$carts->id)}}" class="btn btn-danger">Remove</a>
                </td>
            </tr>

            @endforeach
        
            
        </table>

        @if($count == 0 ) 
                
                  <h1>  Nothing in Cart Yet  </h1>
                  
        @endif
        @if($count != 0)
        <button class="btn btn-success" type="submit">Complete Order</button>
        @endif
        </form>
    </div>

  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>

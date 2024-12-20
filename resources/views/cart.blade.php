<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WATCH - Store</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Product Landing Page" name="keywords">
        <meta content="Product Landing Page" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400|Quicksand:500,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Start -->
        <div id="nav">
            <div class="container-fluid">
                <div id="logo" class="pull-left">
                    <a href="index.html"><img src="img/logo.png" alt="Logo" /></a>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Home</a></li>
                        <li><a href="{{url('/products')}}">Products</a></li>
                        <li><a href="{{url('/about')}}">About</a></li>
                        <li><a href="#testimonials">Reviews</a></li>
                        <li><a href="{{url('/cart')}}">Cart</a></li>
                    
                    </ul>
            </div>
        </div>
        <!-- Nav End -->




    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="container">
        
             

    <section class="cart container mt-2 my-3 py-5">
        <div class="container mt-2">
            <h4>Your Cart</h4>
        </div>

        <table class="pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            @if(Session::has('cart'))
    @foreach(Session::get('cart') as $product)           
        <tr>
            <td>
                <div class="product-info">
                    <img src="{{asset('img/' .$product['image'])}}" alt="{{ $product['name'] }}">
                    <div>
                        <p>{{ $product['name'] }}</p>
                        <small><span>$</span>{{ $product['price'] }}</small>
                        <br>
                        <form> 
                            <input type="submit" name="remove_btn" class="remove-btn" value="remove">
                        </form>
                    </div>
                </div>
            </td>

            <td>
                <form>
                    <input type="number" name="quantity" value="1">
                    <input type="submit" value="edit" class="edit-btn" name="edit_product_quantity_btn">
                </form>
            </td>

            <td>
                <span class="product-price">$199</span>
            </td>
        </tr>
    @endforeach
@endif

        </table>


        <div class="cart-total">
            <table>
      
                <tr>
                    <td>Total</td>
                    <td>$199</td>
                </tr>
           
            </table>
        </div>
        

        <div class="checkout-container">
       
            <form >
                <input type="submit" class="btn checkout-btn" value="Checkout" name="">
            </form>
          
        
        </div>





    </section>

              
        
        </div>
    </div>
    <!-- Cart End -->







       
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/menuspy/menuspy.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
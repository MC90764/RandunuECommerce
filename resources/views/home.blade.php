<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randunu Super Center</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">



</head>
<body>

<!-- header section starts  -->

<header class="header">

<div style="height:100px;width:100px;">
    <a href="{{url('/')}}" class="logo"> <img src="./image/LOGO.png"></a>
</div>


<nav class="navbar">

       <!--dropdown menu-->
       <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Category
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <li><a class="dropdown-item" href="{{url('/grocery')}}">Grocery</a> </li>
          <br>
          <li><a class="dropdown-item" href="{{url('/household')}}">Household</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/beverages')}}">Beverages</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/vagetables')}}">Vegetables</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/dairyproducts')}}">Dairy Products</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/frozen')}}">Frozen</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/personalcare')}}">Personal Care</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/babycare')}}">Baby Care</a></li>
          <br>
        </ul>
      </div>

    <ul>

        <li class="active"><a href="#"><i class="fa fa-home" ></i>Home</a></li>
        <li><a href="#products"><i class="fa fa-tags" aria-hidden="true"></i>Products</a></li>
        <li> <a href="#features"><i class="fa fa-certificate" aria-hidden="true"></i>Features</a></li>
        <li><a href="#review"><i class="fa fa-comments" aria-hidden="true"></i>Reviews</a></li>








    </ul>
    <!--end of dropdown menu-->
</nav>



    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>



    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>



        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="checkout.html" class="btn">checkout</a>
    </div>

    <form action="" method="POST" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box" name="email">
        <input type="password" placeholder="your password" class="box" name="password">
        <p>forgot your password? <a href="pwreset.html">click here</a></p>
        <p>don't have an account <a href="{{url('/register')}}">create now</a></p>
        <a href="#" class="btn">Login now</a>
    </form>


</header>

<!-- header section ends -->

<!-- home section starts  -->

   <!--------------------------------SLIDER----------------------------------------->

   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img src="./image/Nestamolt.png" class="d-block w-100" >
      </div>
      <div class="carousel-item">
        <img src="./image/Kotmale cheese.png" class="d-block w-100" >
      </div>
      <div class="carousel-item">
        <img src="./image/Kist souce.jpg" class="d-block w-100" >
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

         <!--------------------------------END OF SLIDER----------------------------------------->

<!-- home section ends -->
<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"><span> Shop by Category</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="./image/Grocery.jpg" alt="">
            <h3>Grocery</h3>
            <a href="#" class="btn">shop now</a>
        </div>


        <div class="box">
            <img src="./image/beverages.jpg" alt="">
            <h3>Beverages</h3>
            <a href="{{url('/beverages')}}" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/Vegitables.jpg" alt="">
            <h3>Vegetables</h3>
            <a href="{{url('/vegetables')}}" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/dairy.jpg" alt="">
            <h3>Dairy products</h3>
            <a href="{{url('/dairy-products')}}" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/frozen.jpg" alt="">
            <h3>Frozen</h3>
            <a href="{{url('/frozen')}}" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/Personal Care.jpg" alt="">
            <h3>Personal Care</h3>
            <a href="{{url('/personal-care')}}" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/Baby Care pro.jpg" alt="">
            <h3>Baby Care</h3>
            <a href="{{url('/baby-care')}}" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/household.jpg" alt="">
            <h3>Household</h3>
            <a href="{{url('/household')}}" class="btn">shop now</a>
        </div>


    </div>

</section>

<!-- categories section ends -->
<!--brand section sarts-->

<section class="brand" id="brand">

    <h1 class="heading"><span> Shop by Brand</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="./image/Unilever logo.webp" alt="">
            <a href="unilever.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/CBL.png" alt="">
            <a href="CBL.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/maliban logo.webp" alt="">
            <a href="maliban.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/raigam logo.jpg" alt="">
            <a href="raigam.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/magic logo.jpg" alt="">
            <a href="magic.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/elephant house logo.jpg" alt="">
            <a href="elephantHouse.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/araliya rice logo.png" alt="">
            <a href="araliyaRice.html" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="./image/prima logo.png" alt="">
            <a href="prima.html" class="btn">shop now</a>
        </div>


    </div>

</section>
<!--brand section ends-->



<!--  product section section starts  -->

<section class="products" id="products">

    <h1 class="heading"> <span>our products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="./image/marmite.jpeg" alt="">
                <h3>Marmite</h3>
                <div class="price"> Rs.1,275.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="./image/maggi noodles.jpeg" alt="">
                <h3>Maggi Noodles Chicken 73G</h3>
                <div class="price">Rs.130.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Raigam soya.jpeg" alt="">
                <h3>Raigam Soya Meat Fried & Devilled Kalukum 110G</h3>
                <div class="price">Rs.195.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Kist Sweet And Sour Sauce.jpeg" alt="">
                <h3>Kist Sweet And Sour Sauce 395G</h3>
                <div class="price"> Rs.370.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="./image/Marina.jpeg" alt="">
                <h3>Marina Coconut Milk Powder 150G</h3>
                <div class="price"> Rs.250.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Luvesence Mandarin Blossom Hand.jpeg" alt="">
                <h3>Luvesence Mandarin Blossom Hand & Body Lotion 250Ml</h3>
                <div class="price">Rs.1095.00</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Daily Milk Faluda 180Ml.jpeg" alt="">
                <h3>Daily Milk Faluda 180Ml</h3>
                <div class="price">Rs.120.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="./image/Ratthi The Musuwa Bib 250G.jpeg" alt="">
                <h3>Ratthi The Musuwa Bib 250G</h3>
                <div class="price"> Rs.815.00 </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- product section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span> our features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="./image/Best Prices & Offers.jpg" alt="">
            <h3>Best Prices & Offers</h3>
            <p>Enjoy the same lowest prices as your local Express & Food Hall store!</p>
        </div>

        <div class="box">
            <img src="./image/free delivery.png" alt="">
            <h3>free delivery</h3>
            <p>We deliver where ever you are!</p>
        </div>

        <div class="box">
            <img src="./image/images.png" alt="">
            <h3>easy payments</h3>
            <p>You can easily pay by cash/credit or debit cards!</p>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">  <span>customer's review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/customer_rv.jpg" alt="">
                <p>Your service is awesome!
                    But it's better if more products are availabale in the online store.
                </p>
                <h3>Jenny</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/CR2.jpg" alt="">
                <p>Happy with your fast delivery and friendlly service!</p>
                <h3>Sam</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/CR3.jpg" alt="">
                <p>Good quality products!</p>
                <h3>Emma</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/CR4.jpg" alt="">
                <p>It's better to make avaiable some high end products too!</p>
                <h3>Harry</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->


<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <div style="height:200px;width:200px;">
                <a href="#" class="logo"> <img src="./image/LOGO.png"></a>
            </div>

            <div class="share">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact Info</h3>

            <a href="#" class="links"> <i class="fas fa-phone"></i>+94474130012</a>
            <a href="#" class="links"> <i class="fab fa-whatsapp"></i> 0767676760</a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Tissamaharama,Sri Lanka </a>
            <a href="randunusuperonline@gmail.com" class="links"> <i class="fas fa-envelope"></i><p style=" text-transform: lowercase;">randunusuperonline@gmail.com</p></a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Minosha Warnasuriya</span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

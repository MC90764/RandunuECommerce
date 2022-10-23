<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frozen|Randunu Super Center</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

<div style="height:100px;width:100px;">
    <a href="{{url('/')}}" class="logo"> <img src="./image/LOGO.png"></a>
</div>
<h1 class="heading"> <span>Frozen</span> </h1>
<nav class="navbar">  
    <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
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
          <li><a class="dropdown-item" href="{{url('/parsonalcare')}}">Personal Care</a></li>
          <br>
          <li><a class="dropdown-item" href="{{url('/babycare')}}">Baby Care</a></li>
          <br>
        </ul>
      </div>
          
          
        <!--end of dropdown menu--> 
        <a href="index.html">Home</a>
        <a href="#features">Features</a>
        <a href="#products">Products</a>
        <a href="#review">Reviews</a>
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
        <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn">
    </form>
    
</header>

<!-- header section ends -->

<!--product section starts-->

<section class="grocery" id="grocery">
    <div class="swiper product-slider">
        
        <div class="swiper-wrapper">

            <div class=" box">
                <img src="./image/Marina.jpeg" alt="">
                <h3>Marina Coconut Milk Powder 150G</h3>
                <div class="price"> Rs.250.00 </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class=" box">
                <img src="./image/Luvesence Mandarin Blossom Hand.jpeg" alt="">
                <h3>Luvesence Mandarin Blossom Hand & Body Lotion 250Ml</h3>
                <div class="price">Rs.1095.00</div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class=" box">
                <img src="./image/Daily Milk Faluda 180Ml.jpeg" alt="">
                <h3>Daily Milk Faluda 180Ml</h3>
                <div class="price">Rs.120.00 </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class=" box">
                <img src="./image/Ratthi The Musuwa Bib 250G.jpeg" alt="">
                <h3>Ratthi The Musuwa Bib 250G</h3>
                <div class="price"> Rs.815.00 </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>
<!--product section ends-->

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

    <div class="credit"> created by <span> mr. web designer </span> | all rights reserved </div>

</section>

<!-- footer section ends -->















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
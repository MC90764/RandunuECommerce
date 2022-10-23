<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  
  <link href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- custom css file link  -->
    
    
    <link href="{{ asset('css/paymentform.css') }}" rel="stylesheet">
    

</head>
<body>
        

<div class="container mt-5 px-5">

            <div class="mb-4">

                <h2>Confirm order and pay</h2>
            <span>please make the payment, after that you can enjoy all the features and benefits.</span>
                
            </div>

        <div class="row">

            <div class="col-md-8">
                

                <div class="card p-3">

                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3"> <input type="text" name="name" class="form-control" required="required"> <span>Name on card</span> </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span> 


                            </div>
                            

                        </div>

                        <div class="col-md-6">

                             <div class="d-flex flex-row">


                                 <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Expiry</span> </div>

                              <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>CVV</span> </div>
                                 

                             </div>
                            

                        </div>
                        

                    </div>



                    <div class="mt-4 mb-4">

                        <h6 class="text-uppercase">Billing Address</h6>


                        <div class="row mt-3">

                            <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Street Address</span> </div>
                                

                            </div>


                             <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>City</span> </div>
                                

                            </div>


                            

                        </div>


                        <div class="row mt-2">

                            <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>State/Province</span> </div>
                                

                            </div>


                             <div class="col-md-6">

                                <div class="inputbox mt-3 mr-2"> <input type="text" name="name" class="form-control" required="required"> <span>Zip code</span> </div>
                                

                            </div>


                            

                        </div>

                    </div>

                </div>


                <div class="mt-4 mb-4 d-flex justify-content-between">


                            <span>Previous step</span>


                            <button class="btn btn-success px-3">Pay $00</button>


                            

                        </div>

            </div>

            <div class="col-md-4">

                <div class="card card-blue p-3 text-white mb-3">

                   <span>You have to pay</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
                    </div>

                    <span>Enjoy all the features and perk after you complete the payment</span>
                    <a href="#" class="yellow decoration">Know all the features</a>

                    <div class="hightlight">

                        <span>100% Guaranteed support and update for the next 5 years.</span>
                        

                    </div>
                    
                </div>
                
            </div>
            
        </div>
          

      </div>
    <script>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link href= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
      
    </body>
</html>

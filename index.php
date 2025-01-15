<?
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magnolia Aesthetic Clinic</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="css/home.css">
  <link href="css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>

  
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="inner-width">
      <a href="" class="logo">Magnolia</a>
      <button class="menu-toggler">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-menu">
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="treatments.php">Treatments</a>
        <a href="booking.php">Book Now</a>
        <a href="products.php">Products</a>
        <a href="contact.php">Contact</a>
        
        <?php
        if (isset($_SESSION['cid'])){
          ?>
          <!-- <a href="profile.php"> <i class='fa fa-user'></i></a> -->
              <a href="Logout.php"> Logout</a>
       <?php }
        else{?>
          <a href="signup.php">Login</a>
       <?php }
        ?>
          <!-- <a href="profile.php"> <i class='fa fa-user'></i></a> -->
             
        <a class="nav-link text-decoration-none " href="cart.php">
          <i class='bx bx-cart bx-sm position-relative'></i>
          <span class="position-absolute bottom-10 start-100 translate-middle badge rounded-circle bg-danger cartTotal"></span>
      </a>
      </div>
    </div>
  </nav>

  <!-- Home -->
  <section id="home">
    <div class="inner-width">
      <div class="content">
        <h1></h1>
        
        <div class="buttons">
          <a href="signup.php">Get Started</a>
          <a href="booking.php">Book Now</a>
        </div>
      </div>
    </div>
  </section>
<!---------------------------------About Us------------------------------->
<div class="section-container">
    <div class="columns image">
       &nbsp;
    </div>
    <div class="columns content">
       <div class="content-container">
          <h1>Magnolia Aesthetic Clinic</h1>
          <p>
            Magnolia Aesthetic Clinic is the clinic which specializes only in aesthetic and skin care.  We have a total of three clinics in the capital, Canberra, and the most populated cities like Sydney and Melbourne. 

        </p>
          <p>
            <a href="aboutus.php" class="review-link">More About Us<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </p>
       </div>
    </div>
 </div>

  <!-------------------------Slider ----------------------------------------------------------------->
<!-- Service Start -->
<div class="slider">
    <div class="row slider-container">
        <div class="col-lg-6">
            
            <h2>Top Picks for this Month</h2>
        </div>
    </div>
    <div class="owl-carousel service-carousel">
        <div class="product-slide">
            <img class="img-slide" src="images/serumskincare.jpg" alt="">
            <div class="slide-text">
                <div class="btnarea" >
                    <h4 class="productname">Moisturizing Serum</h4>
                
                    <a class="btn btn-p" href="productdetails.php?pid=3">See Details</a>
                </div>
            </div>
        </div>
        <div class="product-slide">
            <img class="img-slide" src="images/pinkserum.jpg" alt="">
            <div class="slide-text">
                <div class="btnarea" >
                    <h4 class="productname">Ampoule</h4>
                
                    <a class="btn btn-p" href="productdetails.php?pid=7">See Details</a>
                </div>
            </div>
        </div>
        <div class="product-slide">
            <img class="img-slide" src="images/vitamin-c-skin.jpg" alt="">
            <div class="slide-text">
                <div class="btnarea" >
                    <h4 class="productname">vitamin C essence</h4>
                
                    <a class="btn btn-p" href="productdetails.php?pid=6">See Details</a>
                </div>
            </div>
        </div>
        <div class="product-slide">
            <img class="img-slide" src="images/serum.jpg" alt="">
            <div class="slide-text">
                <div class="btnarea" >
                    <h4 class="productname">Clear Lotion</h4>
                
                    <a class="btn btn-p" href="productdetails.php?pid=4">See Details</a>
                </div>
            </div>
        </div>
        <div class="product-slide">
            <img class="img-slide" src="images/2317487.jpg" alt="">
            <div class="slide-text">
                <div class="btnarea" >
                    <h4 class="productname">Clay Mask</h4>
                
                    <a class="btn btn-p" href="productdetails.php?pid=6">See Details</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!--------------------------------------------------------------Treatment---------------------------------------------------------------->
<section id="txchoice">
  <form action="" method="post">
    <h1>What Is Your Concern?</h1>
    <p>At Clinic, our doctors use the best skincare, cosmetic technology, and medical science to address your specific skin, face, and body concerns. You can become your most attractive and self-assured self with the help of our high-quality, safe treatments.</p>
    <select name="txtconcern" id="concern">
      <option value="" >Choose Your Concern</option>
      <option value="eyes">Eyes</option>
      <option value="skin">Skin</option>
      <option value="hair">Hair</option>
      <option value="body">Body</option>
      <option value="face">Face</option>
    </select>
    <br><br>
    <a href="treatments.php" class="concernopt">Check Available Treatments</a>
  </form>
</section>

<!-- --------------------------------------------------------------------Testimonial-------------------------------------------------------------------------- -->
<div class="slider">
  <div class="row slider-container">
      <div class="col-lg-6">
          
          <h2>Our Patients' Feedback</h2>
      </div>
  </div>
  <br><br>
  <div class="owl-carousel service-carousel">
        <div class="testimonial-slide">
          <i class="fa fa-quote-left fa-3x"></i>
                 <p>The best skin service ever. I love team Magnolia</p>     
                 <h4 class="customername">Laura</h4>
                </div>
                <div class="testimonial-slide">
                  <i class="fa fa-quote-left fa-3x"></i>
                         <p>Their skincare products leave my skin more enegetic and smooth. 100% recommended </p>     
                         <h4 class="customername">Rebecca</h4>
                        </div>
                        <div class="testimonial-slide">
                          <i class="fa fa-quote-left fa-3x"></i>
                                 <p>Love their service and treatment. Customer since 2018.</p>     
                                 <h4 class="customername">Megan</h4>
                                </div>
                        <div class="testimonial-slide">
                                  <i class="fa fa-quote-left fa-3x"></i>
                                         <p>Very skillful doctors and warm and familiar staff</p>     
                                         <h4 class="customername">May</h4>
                        </div>
                        <div class="testimonial-slide">
                              <i class="fa fa-quote-left fa-3x"></i>
                              <p>Magnificent Service! My skin is like baby skin after receiving treatment</p>     
                             <h4 class="customername">Lily</h4>
                          </div>
  </div>

</div>

  <!-- <-----Footer------> 

  <footer>
    <div class="main-content">
      <div class="left box">
        <ul class="footer-list">
          <li><h2>Quick Links</h2></li>
          <br>
          <li><a href="index.php">Home</a></li>
         
          <li><a href="aboutus.php">About Us</a></li>
          <li> <a href="treatments.php">Treatments</a></li>
            <li><a href="booking.php">Book Now</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
     
      </div>
      <div class="center box">
        <h2>Address</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text"><ul class="address-list">
              <li>No.8, Parkes Way, Canberra, Australia</li>
              <li>No.3, Perry Street, Sydney, NSW</li>
              <li>No.12, Exhibition street, Melbourne, Vic</li>
            </ul>
            </span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+(613)-12345, 54321, 98765</span>
          </div>
          <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text">magnoliaaestheticcenter@gmail.com</span>
          </div>
        </div>
      </div>
      <div class="right box">
        <h2>Follow us</h2>
        <div class="content">
          <div class="social">
            <a href="#"><span class="fab fa-facebook-f"></span></a>
            <a href="#"><span class="fab fa-twitter"></span></a>
            <a href="#"><span class="fab fa-instagram"></span></a>
            <a href="#"><span class="fab fa-youtube"></span></a>
          </div>
        </div>
      </div>
      </div>
    
    <div class="bottom">  

        <p class="copyright-text">Copyright &copy;Magnolia Aesthetic Clinic </p>
      
    </div>
  </footer>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/slider/easing.min.js"></script>
    <script src="js/slider/waypoints.min.js"></script>
    <script src="js/slider/counterup.min.js"></script>
    <script src="js/slider/owl.carousel.min.js"></script>
    <script src="js/slider/moment.min.js"></script>
    <script src="js/slider/moment-timezone.min.js"></script>
    <script src="js/slider/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/slider/main.js"></script>
</body>
</html>
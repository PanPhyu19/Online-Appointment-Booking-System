<?php
include('connection.php');
if(isset($_POST['submit']))
    {
        $name=$_POST['txtname'];
        $email=$_POST['txtemail'];
        $message=$_POST['txtmessage'];
        $subject=$_POST['txtsubject'];
       
        $insert="INSERT INTO messages(name,email,message,subject)
        values('$name','$email','$message','$subject')";
        $query=mysqli_query($connection,$insert);
        if($query)
        {
            echo "<script>alert('Message Sent Successfully')</script>";
        
        }
        }
       
    

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
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/header.js"></script>

  
</head>
<body>
 <!-- Navbar -->
 <nav class="navbar sticky">
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
        <a href="signup.php" class="loginbtn">Get Started</a>
        <a class="nav-link text-decoration-none " href="cart.php">
          <i class='bx bx-cart bx-sm position-relative'></i>
          <span class="position-absolute bottom-10 start-100 translate-middle badge rounded-circle bg-danger cartTotal"></span>
      </a>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
<section id="newsletter" class="parallax-section">
	<div class="container border">
		<div class="row">

			<div class="wow fadeInUp col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10" data-wow-delay="0.9s">
				<h2 >Contact Us For Any Query</h2>
				<div class="newsletter_detail">
					<form action="contact.php" method="post" id="newsletter-signup">
						<div class="col-md-6 col-sm-12">
							<input name="txtname" type="text" class="form-control" id="name" placeholder="Name">
						  </div>
                         
						<div class="col-md-6 col-sm-12">
							<input name="txtemail" type="email" class="form-control" id="email" placeholder="Email">
						  </div>
                          <div class="col-md-12 col-sm-12">
							<input name="txtsubject" type="text" class="form-control" id="name" placeholder="Subject">
						  </div>
                          <div class="col-md-12 col-sm-12">
							<input name="txtmessage" type="text" class="form-control" id="name" placeholder="Any Message">
						  </div>
              <!-- <div class="col-md-12 col-sm-12">
							
              <input type="checkbox" name="txtpolicy" value="Agree">
                         <a href="PrivacyPolicy.html"> Agree Privacy and Policy</a>
						  </div> -->
                          
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="submit" type="submit" class="form-control" id="submit" value="SEND MESSAGE">
						</div>
					  </form>
				</div>
			</div>

		</div>
	</div>
 
</section>
<section id="price" class="parallax-section">
    <div class="container">
      <div class="row">
  
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.9s">
          <h2>Our Branches</h2>
        </div>
  <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1s">
          <div class="pricing__item">
                      <h4 class="pricing__title">Main Office</h3>
                        <br>
                        <span class="fas fa-map-marker-alt fa-3x"></span>
                    
                      <ul class="pricing__feature-list">
                        <li class="pricing__feature">No.8, Parkes Way, Canberra, Australia</li>
                        <li class="pricing__feature">+613-12345</li>
                        <li class="pricing__feature">magnoliacanberra@gmail.com</li>
                        <li class="pricing__feature">magnoliaaestheticcenter@gmail.com</li>
                    </ul>
                     
                    <a href="#map-bg" class="pricing__action">Show Location</a>
                  </div>
        </div>
  
        <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.3s">
          <div class="pricing__item">
                      <h4 class="pricing__title">Sydney Branch</h3>
                      
                        <br>
                        <span class="fas fa-map-marker-alt fa-3x"></span>        
                      <ul class="pricing__feature-list">
                         
                          <li class="pricing__feature">No.3, Perry Street, Sydney, NSW, Australia</li>
                          <li class="pricing__feature">+613-54321</li>
                          <li class="pricing__feature">magnoliasydney@gmail.com</li>
                          <li class="pricing__feature">magnoliaaestheticcenter@gmail.com</li>

                      </ul>
                      <a href="#map-bg" class="pricing__action">Show Location</a>
                  </div>
        </div>
  
        <div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="1.3s">
            <div class="pricing__item">
                        <h4 class="pricing__title">Melbourne clinic</h3>
                        
                          <br>
                          <span class="fas fa-map-marker-alt fa-3x"></span>        
                        <ul class="pricing__feature-list">
                           
                            <li class="pricing__feature">No.12, Exhibition street, Melbourne, Vic, Australia</li>
                            <li class="pricing__feature">+613-98765</li>
                            <li class="pricing__feature">magnoliamelbourne@gmail.com</li>
                            <li class="pricing__feature">magnoliaaestheticcenter@gmail.com</li>
  
                        </ul>
                        <a href="#map-bg" class="pricing__action">Show Location</a>
                    </div>
          </div>
  
      </div>
      
    </div>
</section>
<section id="map-bg" >
    <div class="container">
      <div class="row">
        <iframe src="https://www.google.com/maps/d/embed?mid=1BExN3YvsXLTM8akRHubxCap8szkIgUQ&ehbc=2E312F" allowfullscreen="" loading="lazy" class="map"></iframe>
      </div>
    </div>
    </section>
<!-- 
    Footer -->
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
</body>
</html>
<?php
include('footer.php');
?>
<?php
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
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
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
        
        <?php
        if (isset($_SESSION['cid'])){
          ?>
          <!-- <a href="profile.php"> <i class='fa fa-user'></i></a> -->
              <a href="Logout.php"> Logout</a>
       <?php }
        else{?>
          <a href="signup.php" class="loginbtn">Get Started</a>
       <?php }
        ?>
       
        
    
        <a class="nav-link text-decoration-none " href="cart.php">
          <i class='bx bx-cart bx-sm position-relative'></i>
          <span class="position-absolute bottom-10 start-100 translate-middle badge rounded-circle bg-danger cartTotal"></span>
      </a>
      </div>
    </div>
  </nav>
</body>
</html>
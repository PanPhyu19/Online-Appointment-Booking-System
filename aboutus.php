<?php

include('connection.php');
include('header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magnolia Aesthetic Clinic</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/home.css">
  <!-- <link rel="stylesheet" href="css/swiper-bundle.min.css"> -->
  <link href="css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">

</head>
<body>

<section class="review">
    <div class="about-section">
        <div class="inner-container">
          <h1>About Us</h1>
          <p class="text">
            Magnolia Aesthetic Clinic, founded in Sydney Australia in 2010, has three branches in different cities of Australia. We specialize in providing permium dermatological treatments and aesthetic skin care procedures. In addition, the dermatologists from Magnolia group produce and manufacture the skincare products, which are dermatologically and scientifically tested and proven.
          </p>
            <a href="treatments.php" class="review-link">Treatments available<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          
        </div>
      </div>
</section>
<!-------------------------Slider ----------------------------------------------------------------->
<!-- Service Start -->
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Our Dermatologists</h6>
            <h1>Meet Our Doctors</h1>
            <h5>Branch1 - Canberra Branch
                <br>
            Branch2 - Sydney Branch
            <br>
            Branch3 - Melbourne Branch
        </h5>
        </div>
    </div>
    <div class="owl-carousel service-carousel">
    <?php
        $query="SELECT * FROM doctor ORDER BY doctorid DESC";
        $ret=mysqli_query($connection,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Doctor Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM doctor  ORDER BY doctorid DESC LIMIT $a,1";
            $ret1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $id=$arr['doctorid'];
                $name=$arr['firstname'];
                $role=$arr['role'];
                $image=$arr['doctorimage'];
                $branch=$arr['branchid'];
                
            echo"
            <div class='service-item position-relative'>
            <img class='img-fluid' src='$image' alt=''>
            <div class='service-text text-center'>
                <h4 class='text-white font-weight-medium px-3'>Dr. $name</h4>
                <p class='text-white px-3 mb-3'>Resident Doctor at branch $branch</p>
                <div class='w-100 bg-white text-center p-4' >
                    <a class='btn btn-primary' href='booking.php'>Make Appointment</a>
                </div>
            </div>
        </div>
      ";
            }
        }
        ?>
       
        <!-- <div class="service-item position-relative">
            <img class="img-fluid" src="images/doctor 2.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Dr Ella</h4>
                <p class="text-white px-3 mb-3">Resident Doctor at Sydney Branch</p>
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="booking.php">Make Appointment</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="images/Dermatologist.png" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Dr. Mark</h4>
                <p class="text-white px-3 mb-3">Resident Doctor at Sydney Branch</p>
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="booking.php">Make Appointment</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="images/doctor5.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Dr. Richard</h4>
                <p class="text-white px-3 mb-3">Dermatologist</p>
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="booking.php">Make Appointment</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="images/doctor6.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Dr. Michael</h4>
                <p class="text-white px-3 mb-3">Resident Doctor at Melbourne branch</p>
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="booking.php">Make Appointment</a>
                </div>
            </div>
        </div>
        <div class="service-item position-relative">
            <img class="img-fluid" src="images/doctor8.jpg" alt="">
            <div class="service-text text-center">
                <h4 class="text-white font-weight-medium px-3">Dr. Caroline</h4>
                <p class="text-white px-3 mb-3">Dermatologist</p>
                <div class="w-100 bg-white text-center p-4" >
                    <a class="btn btn-primary" href="booking.php">Make Appointment</a>
                </div>
            </div>
        </div> -->
    </div>

</div>
<!-- Service End -->
<section>
  <div class="container about-container">
    <div class="row">
      <div class="col-md-7 sm-12">
        <img src="images/skintreatment.jpeg" alt="" class="aboutimg">
      </div>
      <div class="col-md-5 sm-12" >
        <p class="about-text">
          Having experienced and professional dermatologists and doctors, skilled aestheticians and friendly and caring staffs, Magnolia aesthetic clinics offer various types of aesthetic treatments for face, hair and the whole body. These treatments consist of non-invasive facial treatments, fillers, laser treatments, contouring procedures for body and other aesthetic treatments. 
        </p>
        <p class="about-text">
          We aspire to be a worldwide healthcare organization that combines the highest medical care with sustaining moral standards, a caring culture, and compassion.
        </p>
        <h5 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Opening Hours-9:00am-10:00pm</h5>
        <h5 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">We close on special holidays</h5>
      </div>
    </div>
  </div>
</section>

</body>
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
</html>
<?php
include('footer.php');
?>
<?php
// include('connection.php');
include('header.php');
if (isset($_REQUEST['tid']))
{
	$treatmentid=$_REQUEST['tid'];
	$query="SELECT * FROM treatment
    WHERE treatmentid='$treatmentid'";
    $ret=mysqli_query($connection,$query);
    $arr=mysqli_fetch_array($ret);

    $ID=$arr['treatmentid'];
    $Name=$arr['treatmentname'];
   
    $Price=$arr['price'];
   
    $Description=$arr['description'];
    $Image=$arr['treatmentimage'];
 
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Magnolia Aesthetic Clinic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/new.css">
     
  </head>
  <body>
 <!-- ======= Breadcrumbs ======= -->
 <!-- <section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2> Serum </h2>
            <ol>
                <li><a href="index.php">Home</a></li>
                <li><a href="category.php"></a></li>

                <li>$4000</li>
            </ol>
        </div>
    </div>
</section> -->
<!-- End Breadcrumbs -->
<section class="inner-page portfolio-details">
    <div class="container">
        
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider">
                <?php  echo"  <img src='$Image' alt=''>";?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-info">
                   <?php echo" <h3>$Name</h3>";?>
                    <ul>
                        
                       
                        <?php echo" <li><strong>Price</strong>: <h3 class='d-inline-block'> AUD $Price </h3> </li>";?>
                    </ul>

                    <div class="d-grid gap-2">
                        <a href="booking.php" class="add-to-cart buy-2 text-center" >
                            <i class='bx bxs-cart-add me-1' ></i> Book Now
                        </a>
                    </div>
                </div>
                <div class="portfolio-description">
                    <h2>Description:</h2>
                   <?php  echo"<p>
                        $Description
                    </p>";?>
                </div>
            </div>
        </div>
        
    </div>
</section>
</body>
</html>
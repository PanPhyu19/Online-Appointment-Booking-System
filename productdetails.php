<?php

include('header.php');
if (isset($_REQUEST['pid']))
{
	$productid=$_REQUEST['pid'];
	$query="SELECT * FROM products
    WHERE productid='$productid'";
    $ret=mysqli_query($connection,$query);
    $arr=mysqli_fetch_array($ret);

    $ID=$arr['productid'];
    $Name=$arr['productname'];
   
    $Price=$arr['price'];
   
    $Description=$arr['description'];
    $Image=$arr['productimage'];
}

if(isset($_POST['add_to_cart'])){
$name=$_POST['txtname'];
    $prid=$_POST['txtid'];
    $pname=$_POST['txtname'];
    $pprice=$_POST['txtprice'];
    $pimage=$_POST['txtimage'];
    
    $product_quantity = 1;
    $query="INSERT INTO cart(name, price, image, quantity, productid) VALUES('$pname', '$pprice', '$pimage', '$product_quantity','$prid')";
    $insert_product = mysqli_query($connection, $query);
      echo"<script>alert('Added to Cart Successfully!')</script>";
      echo"<script>window.location='cart.php'</script>";
   
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
        <form action="productdetails.php" method="POST">
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
                   <?php echo" <input type='hidden' value='$Name' name='txtname'>
                   <input type='hidden' value='$ID' name='txtid'>
                   <input type='hidden' value='$Image' name='txtimage'>
                   <input type='hidden' value='$Price' name='txtprice'>";?>
                    <input type="submit" class="button" value="add to cart" name="add_to_cart">
                            
                </div>
                <div class="portfolio-description">
                    <h2>Description:</h2>
                   <?php  echo"<p>
                        $Description
                    </p>";?>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>
</body>
</html>

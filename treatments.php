<?php

include('header.php');
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
   
    <div class="gallery">
    
    <?php
        $query="SELECT * FROM treatment ORDER BY treatmentid DESC";
        $ret=mysqli_query($connection,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Product Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM treatment  ORDER BY treatmentid DESC LIMIT $a,1";
            $ret1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $id=$arr['treatmentid'];
                $name=$arr['treatmentname'];
                $price=$arr['price'];
                $image=$arr['treatmentimage'];
                $description=$arr['description'];
                
            echo"
            <div class='content'>
        <img src='$image' class='image'>
        <h3>$name</h3>
        
        <p>AUD $price</p>
        
        <a href='bookingregister.php' class='buy-1 button'>Book Now </a>
        <a href='treatmentdetails.php?tid=$id' class='buy-2 button'> View details</a>
        </div>
      ";
            }
        }
        
        ?>
     
      
    </div>
  </body>
</html>
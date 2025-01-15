<?php
include('adminheader.php');
include('connection.php');
if(isset($_POST['btnregister'])){
   $supplier =  $_POST['txtsupplier'];
   $product = $_POST['txtproduct'];
   $price=  $_POST['txtprice'];
   $date=  $_POST['txtdate'];
   $qty=  $_POST['txtqty'];
      
       $insert_data = "INSERT INTO supplyrecords(supplierid,productid,price,supplieddate,quantity)
                       values('$supplier', '$product','$price', '$date','$qty')";
       $data_check = mysqli_query($connection, $insert_data);
       if ($data_check){

           echo"<script>window.alert('Registration Successful!')</script>";
           echo"<script>window.location='supply.php'</script>";
       }
   }
  
   
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/style1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/form.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
<body>
  
  <section class="formbody">
    <div class="formcontainer">
       <header>Supply Records</header>
     
       <div class="form-outer">
          <form action="supply.php" method="POST">
             <div class="page slide-page">

             <div class="field">
                   <div class="label">
                      Choose Supplier
                   </div>
                   <select name="txtsupplier" required>
                    <option value="" >Choose Supplier</option>
                    
                    <?php 
                     $query="SELECT * FROM supplier";
                     $ret=mysqli_query($connection,$query);
                     $count=mysqli_num_rows($ret);
                     if($count>1)
                     {
                        for ($a=0; $a <$count ; $a+=1) 
                        { 
                           $arr=mysqli_fetch_array($ret);
                           $supid=$arr['supplierid'];
                           $supname=$arr['suppliername'];
                            echo"<option value='$supid'>$supname</option>";
                            
                           }
                     }
                    
                        else{
                           echo "<p>No Supplier Data Found.</p>";
                           exit();
                        }
                       ?>       
                     </select>
                </div>
                <div class="field">
                   <div class="label">
                      Choose Products
                   </div>
                   <select name="txtproduct" required>
                    <option value="" >Choose Products</option>
                    
                    <?php 
                     $querys="SELECT * FROM products";
                     $rets=mysqli_query($connection,$querys);
                     $counts=mysqli_num_rows($rets);
                     if($counts>1)
                     {
                        for ($a=0; $a <$counts ; $a+=1) 
                        { 
                           $arrs=mysqli_fetch_array($rets);
                           $proid=$arrs['productid'];
                           $proname=$arrs['productname'];
                            echo"<option value='$proid'>$proname</option>";
                            
                           }
                     }
                    
                        else{
                           echo "<p>No Product Data Found.</p>";
                           exit();
                        }
                       ?>       
                     </select>
                </div>

               <div class="field">
                <div class="label">
                  Price
                </div>
                <input type="text" name="txtprice" required>
             </div>
             <div class="field">
                <div class="label">
                  Quantity
                </div>
                <input type="text" name="txtqty" required>
             </div>
             <div class="field">
                <div class="label">
                   Supplied Date
                </div>
                <input type="date" name="txtdate" required>
             </div>
               
                
                <div class="field">
                  <input type="submit" value="Register" class="firstNext next button" name="btnregister">
                </div>
             </div>
             </div>
          </form>
       </div>
    </div>
    </section>
  <script src="multiform.js"></script>
</body>
</html>

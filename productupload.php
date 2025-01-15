<?php
include('adminheader.php');
include('connection.php');
if(isset($_POST['btnregister'])){
   $name =  $_POST['txtname'];
   $description = $_POST['txtdescription'];
   $price =  $_POST['txtprice'];
   $qty =  $_POST['txtqty'];
   $date = $_POST['txtdate'];
   $category =  $_POST['txtcategory'];
   $photo = $_FILES['txtphoto'];

	$Image3=$_FILES['txtphoto']['name'];
    $Folder="images/";
    $filename=$Folder . '_' . $Image3; // Images/_a.jpg
    $image=copy($_FILES['txtphoto']['tmp_name'],$filename);
    if(!$image)
    {
    echo "<p>Cannot Upload  Product Image</p>";
    exit();
    }
  
      
      
       $insert_data = "INSERT INTO products (productname,description,price,quantity,expireddate,category,productimage)
                       values('$name', '$description','$price','$qty','$date', '$category','$filename')";
       $data_check = mysqli_query($connection, $insert_data);
       if ($data_check){

           echo"<script>window.alert('Registration Successful!')</script>";
           echo"<script>window.location='productupload.php'</script>";
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
       <header>Product Register</header>
     
       <div class="form-outer">
          <form action="productupload.php" method="POST" enctype="multipart/form-data">
             <div class="page slide-page">

                <div class="field">
                  <div class="label">
                    Product Name
                  </div>
                  <input type="text" name="txtname" required>
                  
               </div>
               <div class="field">
                <div class="label">
                  Description
                </div>
                <input type="text" name="txtdescription" required>
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
                   Expired Date
                </div>
                <input type="date" name="txtdate" required>
             </div>
             <div class="field">
                <div class="label">
                   Image
                </div>
                <input type="file" name="txtphoto" required>
             </div>
                <div class="field">
                   <div class="label">
                      Choose Category
                   </div>
                   <select name="txtcategory">
                    <option value="" >Choose Category</option>
                    <option value="skincare">Skincare</option>
                    <option value="makeup">Makeup</option>
					<option value="accessories">Other Accessories</option>
                  </select>
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

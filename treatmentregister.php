<?php
include('adminheader.php');
include('connection.php');
if(isset($_POST['btnregister'])){
   $name =  $_POST['txtname'];
   $description = $_POST['txtdescription'];
   $price =  $_POST['txtprice'];
   $concern =  $_POST['txtconcern'];
   
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
  
  
      
      
       $insert_data = "INSERT INTO treatment (treatmentname,description,price,concern,treatmentimage)
                       values('$name', '$description','$price', '$concern','$filename')";
       $data_check = mysqli_query($connection, $insert_data);
       if ($data_check){

           echo"<script>window.alert('Registration Successful!')</script>";
           echo"<script>window.location='treatmentregister.php'</script>";
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
       <header>Treatment Register</header>
     
       <div class="form-outer">
          <form action="treatmentregister.php" method="POST" enctype="multipart/form-data">
             <div class="page slide-page">

                <div class="field">
                  <div class="label">
                    Treatment Name
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
                   Image
                </div>
                <input type="file" name="txtphoto" required>
             </div>
                <div class="field">
                   <div class="label">
                      Choose Concern
                   </div>
                   <select name="txtconcern">
                    <option value="" >Choose Concern</option>
                    <option value="eye">Eye</option>
                    <option value="skin">Skin</option>
					<option value="hair">Hair</option>
					<option value="body">Body</option>
					<option value="face">Face</option>
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

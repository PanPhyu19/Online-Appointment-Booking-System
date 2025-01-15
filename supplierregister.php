<?php
include('adminheader.php');
include('connection.php');
if(isset($_POST['btnregister'])){
   $name =  $_POST['txtname'];
   $email = $_POST['txtemail'];
   $phno =  $_POST['txtphno'];
   $address =  $_POST['txtaddress'];


       $email_check = "SELECT * FROM supplier WHERE email = '$email'";
   $res = mysqli_query($connection, $email_check);
   $count=mysqli_num_rows($res);
   if($count>0){
       echo" <script>window.alert('This supplier already exists!')</script>";
       echo"<script>window.location='supplierregister.php'</script>";
   }
   else{
       
       $insert_data = "INSERT INTO supplier (suppliername,email,phno,address)
                       values('$name','$email','$phno','$address')";
       $data_check = mysqli_query($connection, $insert_data);
       if ($data_check){

           echo"<script>window.alert('Registration Successful!')</script>";
           echo"<script>window.location='supplierregister.php'</script>";
       }
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
       <header>Supplier Register</header>
     
       <div class="form-outer">
          <form action="supplierregister.php" method="POST">
             <div class="page slide-page">

                <div class="field">
                  <div class="label">
                    Supplier Name
                  </div>
                  <input type="text" name="txtname" required>
                  
               </div>
            
               <div class="field">
                <div class="label">
                   Email Address
                </div>
                <input type="email" name="txtemail" required>
             </div>
             <div class="field">
                <div class="label">
                   Phone Number
                </div>
                <input type="text" name="txtphno" required>
             </div>
             
             <div class="field">
                <div class="label">
                   Address
                </div>
                <input type="text" name="txtaddress" required>
             </div>
                <div class="field">
                  <input type="submit" value="Register" class="firstNext next button" name="btnregister">
                </div>
             </div>
          </form>
       </div>
    </div>
    </section>
  <script src="multiform.js"></script>
</body>
</html>

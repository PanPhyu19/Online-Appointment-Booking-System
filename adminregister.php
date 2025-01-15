<?php
include('adminheader.php');
include('connection.php');
if(isset($_POST['btnregister'])){
   $fname =  $_POST['txtfirstname'];
   $sname =  $_POST['txtsurname'];
   $email = $_POST['txtemail'];
   $phno =  $_POST['txtphno'];
   $address =  $_POST['txtaddress'];
   $branch =  $_POST['txtbranch'];
   $password =  $_POST['txtpassword'];
  
       $email_check = "SELECT * FROM staff WHERE email = '$email'";
   $res = mysqli_query($connection, $email_check);
   $count=mysqli_num_rows($res);
   if($count>0){
       echo" <script>window.alert('This email address already exists!')</script>";
       echo"<script>window.location='adminregister.php'</script>";
   }
   else{
       $encpass = password_hash($password, PASSWORD_BCRYPT);
       $insert_data = "INSERT INTO staff (firstname,surname, email,password,phno,address,branchid)
                       values('$fname', '$surname','$email', '$encpass','$phno','$address','$branch')";
       $data_check = mysqli_query($connection, $insert_data);
       if ($data_check){

           echo"<script>window.alert('Registration Successful!')</script>";
           echo"<script>window.location='adminhome.php'</script>";
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
       <header>Admin Register</header>
     
       <div class="form-outer">
          <form action="adminregister.php" method="POST">
             <div class="page slide-page">

                <div class="field">
                  <div class="label">
                    First Name
                  </div>
                  <input type="text" name="txtfirstname" required>
                  
               </div>
               <div class="field">
                <div class="label">
                  Surname
                </div>
                <input type="text" name="txtsurname" required>
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
                   Password
                </div>
                <input type="password" name="txtpassword" required>
             </div>
             <div class="field">
                <div class="label">
                   Address
                </div>
                <input type="text" name="txtaddress" required>
             </div>
                <div class="field">
                   <div class="label">
                      Choose Branch
                   </div>
                   <select name="txtbranch">
                    <option value="" >Choose Your Branch</option>
                    <option value="1">Canberra Branch</option>
                    <option value="2">Sydney Branch</option>
                    <option value="3">Melbourne Branch</option>
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

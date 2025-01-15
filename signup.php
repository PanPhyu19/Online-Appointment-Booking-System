<?php
// session_start();
// include('connection.php');
include ('header.php');
if(isset($_POST['btnsignup'])){
    $fname =  $_POST['txtfirstname'];
    $sname =  $_POST['txtsurname'];
    $email = $_POST['txtemail'];
    $password =  $_POST['txtpw'];
    $cpassword =  $_POST['txtconpw'];
    if($password == $cpassword){
        $email_check = "SELECT * FROM patient WHERE email = '$email'";
    $res = mysqli_query($connection, $email_check);
    $count=mysqli_num_rows($res);
    if($count>0){
        echo" <script>window.alert('This email address already exists!')</script>";
        echo"<script>window.location='signup.php'</script>";
    }
    else{
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $insert_data = "INSERT INTO patient (firstname,surname, email, password)
                        values('$fname', '$surname','$email', '$encpass')";
        $data_check = mysqli_query($connection, $insert_data);
        if ($data_check){

            $select="SELECT * FROM patient where email='$email' and password='$password'";

                $query=mysqli_query($connection,$select);
                $count=mysqli_num_rows($query);
		$data=mysqli_fetch_array($query);
                 $patientid=$data['patientid'];
                 $patientemail=$data['email'];
                 
                 $_SESSION['cid']=$patientid;
                 $_SESSION['cemail']=$patientemail;
            echo"<script>window.alert('Registration Successful!')</script>";
            echo"<script>window.location='index.php'</script>";
        }
    }
   
    }
    else{
        echo" <script>window.alert('Confirm password not matched!')</script>";
        echo"<script>window.location='signup.php'</script>";
    }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Magnolia Aesthetic Clinic</title> 
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body class="body">
<br>
    <br>
    <br>
    <br>
 <div class="container">
   
 	<div class="header">
 		<h1>Signup</h1>
 	</div>
 	<div class="main">
	 <form action="signup.php" method="POST">
			<span>
			<i class="fa fa-user"></i>
			<input type="text" placeholder="Username" name="txtfirstname" class="input" required >
		</span><br>
        <!-- <span>
			<i class="fa fa-user"></i>
			<input type="text" placeholder="Surname" name="txtsurname" class="input" required >
		</span><br> -->
		<span>
		   <i class="fa fa-mail-bulk"></i>
		   <input type="email" placeholder="Email" name="txtemail" class="input" required >
	   </span><br>
		<span>
			<i class="fa fa-lock"></i>
			<input type="password" placeholder="Password" name="txtpw" class="input">
		</span><br>
		<span>
		   <input type="password" placeholder="Confirm Password" name="txtconpw" class="input">
	   </span><br>
		<input type="submit" name="btnsignup" value="Sign up" class="button">

	   <div class="link"> Already have an account? <a href="login.php">Login</a></div>
 		</form>
 	</div>
 </div>
</body>
</html>
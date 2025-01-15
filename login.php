<?php
include('header.php');
include('connection.php');
if(isset($_POST['btnlogin']))
   {
        $email=$_POST['txtuemail'];
        $password=$_POST['txtupassword'];

        $select="SELECT * FROM staff where email='$email'";
        $query=mysqli_query($connection,$select);
        $count=mysqli_num_rows($query);
        if($count>0)
        {
         $data=mysqli_fetch_array($query);
         $fetch_pass = $data['password'];
         if(password_verify($password, $fetch_pass)){

            $adminid=$data['staffid'];
         $adminemail=$data['email'];
         
         $_SESSION['aid']=$adminid;
         $_SESSION['aemail']=$adminemail;
          echo "<script>alert('Admin Login Successfully')</script>";
         echo "<script>window.location='adminhome.php'</script>";    
         }
         else{
            if (isset($_SESSION['loginError']))
            {
              $countError=$_SESSION['loginError'];
              if ($countError==1)
               {
              $_SESSION['loginError']=2;
              echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
               }
            if ($countError==2)
               {
              echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
              echo "<script>window.location='LoginTimer.php'</script>";
               }
          
            }
            else
               {
              $_SESSION['loginError']=1;
              echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
                }
         }
        }

   
        else {

            $select1="SELECT * FROM doctor where email='$email' ";
            $query1=mysqli_query($connection,$select1);
            $count1=mysqli_num_rows($query1);
            if($count1>0)
            {
             $data=mysqli_fetch_array($query1);
             
             $fetch_pass = $data['password'];
             if(password_verify($password, $fetch_pass)){
               $doctorid=$data['doctorid'];
               $doctoremail=$data['email'];
               
               $_SESSION['did']=$doctorid;
               $_SESSION['demail']=$doctoremail;
                echo "<script>alert('Doctor Login Successfully')</script>";
               echo "<script>window.location='doctorhome.php'</script>";  
             }
             else{
               if (isset($_SESSION['loginError']))
            {
              $countError=$_SESSION['loginError'];
              if ($countError==1)
               {
              $_SESSION['loginError']=2;
              echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
               }
            if ($countError==2)
               {
              echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
              echo "<script>window.location='LoginTimer.php'</script>";
               }
            }
            else
               {
              $_SESSION['loginError']=1;
              echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
                }
             }
             
            }
            else{
                $select2="SELECT * FROM patient where email='$email'";
                $query2=mysqli_query($connection,$select2);
                $count2=mysqli_num_rows($query2);
                if($count2>0)
                {
                  $data=mysqli_fetch_array($query2);
            $fetch_pass = $data['password'];
            $id=$data['email'];
            if(password_verify($password, $fetch_pass)){
               $data=mysqli_fetch_array($query2);
               
               $_SESSION['cid']=$id;
                
                  echo "<script>alert('Patient Login Successfully')</script>";
                 echo "<script>window.location='index.php'</script>";       
                }
               
                else
                {
                  echo "<script>alert('Login failed!')</script>";
                }
               }
                 
            }
        }
      }
   //       {
   //    if (isset($_SESSION['loginError']))
   //    {
   //      $countError=$_SESSION['loginError'];
   //      if ($countError==1)
   //       {
   //      $_SESSION['loginError']=2;
   //      echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
   //       }
   //    if ($countError==2)
   //       {
   //      echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
   //      echo "<script>window.location='LoginTimer.php'</script>";
   //       }
    
   //    }
   //    else
   //       {
   //      $_SESSION['loginError']=1;
   //      echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
   //        }
      
   //  }
            
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body class="body">
 <div class="container">
 	<div class="header">
 		<h1>login</h1>
 	</div>
 	<div class="main">
 		<form action="login.php" method="POST">
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="email" placeholder="Email" name="txtuemail" class="input" required>
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password" placeholder="password" name="txtupassword" class="input" required>
 			</span><br>
			<input type="submit" name="btnlogin" value="Login" class="button">
			
			<div class="link">Don't have an account? <a href="signup.php">Signup now!</a></div>
 		</form>
 	</div>
 </div>
</body>
</html>
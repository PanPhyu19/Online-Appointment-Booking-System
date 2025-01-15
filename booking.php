<?php
include('header.php');

if(isset($_POST['btnregister'])){
   $doctor =  $_POST['txtdoctor'];
   $treatment = $_POST['txttreatment'];
   $hours=  $_POST['txthours'];
   $day=  $_POST['txtday'];
   $email= $_POST['txtemail'];
   $drname= $_POST['txtdrname'];
   $trname= $_POST['txttrname'];

   $select_data = "SELECT * from patient WHERE email='$email'";
                       
   $data_check = mysqli_query($connection, $select_data);
   $count=mysqli_num_rows($data_check);
   if ($count<1){
       echo"<script>alert('Please create an account first')</script>";
       echo"<script>window.location='signup.php'</script>";
   }
   else {
   
       $data=mysqli_fetch_array($data_check);
       $fetch_id = $data['patientid'];
       $insert_data = "INSERT INTO appointment(doctorid,appointmenthours,appointmentdays,patientid,treatmentid)
                       values('$doctor', '$hours','$day','$fetch_id','$treatment')";
       $data_check = mysqli_query($connection, $insert_data);
       if ($data_check){

           echo"<script>window.alert('Registration Successful!')</script>";
            echo "
            <div class='order-message-container'>
            <div class='message-container'>
               <h3>thank you for booking!</h3>
               <div class='order-detail'>
                  <span>$day</span>
                  <span class='total'> time : $".$hours."/-  </span>
               </div>
               <div class='customer-details'>
               <p> your treatment : <span>".$trname."</span> </p>
               <p> your doctor : <span>".$drname."</span> </p>
                  <p> your email : <span>".$email."</span> </p>

               </div>
                  <a href='index.php' class='btn'>continue browsing our website</a>
               </div>
            </div>
            ";
         
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
     <link rel="stylesheet" href="css/cart.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
<body>
  <br><br><br><br><br><br>
  <section class="formbody">
    <div class="formcontainer">
       <header>Booking
         
       </header>
     <h3>Please check the doctors and branches at AboutUs page</h3>
       <div class="form-outer">
          <form action="booking.php" method="POST">
             <div class="page slide-page">

             <div class="field">
                   <div class="label">
                      Choose Doctor
                   </div>
                   <select name="txtdoctor">
                    <option value="" >Choose Doctor</option>
                    
                    <?php 
                     $query="SELECT * FROM doctor";
                     $ret=mysqli_query($connection,$query);
                     $count=mysqli_num_rows($ret);
                     if($count>1)
                     {
                        for ($a=0; $a <$count ; $a+=1) 
                        { 
                           $arr=mysqli_fetch_array($ret);
                           $doctorid=$arr['doctorid'];
                           $doctorname=$arr['firstname'];
                            echo"<option value='$doctorid'>$doctorname
                            </option>";
                            
                           }
                     }
                    
                        else{
                           echo "<p>No Doctor Data Found.</p>";
                           exit();
                        }
                       ?>       
                     </select>
                </div>
                <?php echo"<input type='hidden' name='txtdrname' value='$doctorname'>";?>
                <div class="field">
                   <div class="label">
                      Choose Treatment
                   </div>
                   <select name="txttreatment">
                    <option value="" >Choose Treatment</option>
                    
                    <?php 
                     $query="SELECT * FROM treatment";
                     $ret=mysqli_query($connection,$query);
                     $count=mysqli_num_rows($ret);
                     if($count>1)
                     {
                        for ($a=0; $a <$count ; $a+=1) 
                        { 
                           $arr=mysqli_fetch_array($ret);
                           $trid=$arr['treatmentid'];
                           $trname=$arr['treatmentname'];
                            echo"<option value='$trid'>$trname</option>";
                            
                           }
                     }
                    
                        else{
                           echo "<option value=''>No Treatment Data Found.</option>";
                           exit();
                        }
                       ?>       
                     </select>
                </div>
               <?php echo"<input type='hidden' name='txttrname' value='$trname'>"; ?>
               <div class="field">
                <div class="label">
                  Email
                </div>
                <input type="email" name="txtemail" required>
             </div>
               
             <div class="field">
                   <div class="label">
                      Choose Days
                   </div>
                   <select name="txtday">
                    <option value="" >Choose Day for this week</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
               <option value="Thursday">Thursday</option>
               <option value="Friday">Friday</option>
               <option value="Saturday">Saturday</option>
               <option value="Sunday">Sunday</option>
                  </select>
                </div>
                <div class="field">
                   <div class="label">
                      Choose Hours
                   </div>
                   <select name="txthours">
                    <option value="" >Choose Hours</option>
                    <option value="9:00-11:00">9:00-11:00</option>
                    <option value="11:00-1:00">11:00-1:00</option>
					<option value="3:00-5:00">3:00-5:00</option>
               <option value="5:00-7:00">5:00-7:00</option>
               <option value="7:00-10:00">7:00-10:00</option>
               
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
<?php
include ('footer.php');
?>
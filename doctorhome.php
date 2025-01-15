<?php
include('connection.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/style1.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-heart'></i>
      <span class="logo_name">Magnolia</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <!-- <li>
          <a href="productupload.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="adminregister.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Staff Register</span>
          </a>
        </li> -->
        <li>
          <a href="doctorregister.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Doctor Register</span>
          </a>
        </li>
        <li>
          <a href="treatmentregister.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Treatments</span>
          </a>
        </li>
        <!-- <li>
          <a href="supplierregister.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Supplier Register</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="schedulemanage.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Manage Schedule</span>
          </a>
        </li> -->
        <li>
          <a href="doctorhome.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <!-- <li>
          <a href="supply.php">
          <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Supply Records</span>
          </a>
        </li> -->
        <!-- <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Doctor</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Order</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Sales</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent Sales</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Appointment Days</li>
              <?php
        $query="SELECT * FROM appointment ORDER BY appointmentid DESC";
        $ret=mysqli_query($connection,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Appointment Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM appointment ORDER BY appointmentid DESC LIMIT $a,1";
            $ret1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $id=$arr['appointmentid'];
                $pdays=$arr['appointmentdays'];
                $phrs=$arr['appointmenthours'];
                
                
            echo"
            <li><a href='#'>$pdays</a></li>
      ";
            }
        } ?>
            </ul>
            <ul class="details">
            <li class="topic">Hours</li>
            <?php
        $query="SELECT * FROM appointment ORDER BY appointmentid DESC";
        $ret=mysqli_query($connection,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Appointment Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM appointment ORDER BY appointmentid DESC LIMIT $a,1";
            $ret1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $id=$arr['appointmentid'];
                $pdays=$arr['appointmentdays'];
                $phrs=$arr['appointmenthours'];
                
                
            echo"
            <li><a href='#'>$phrs</a></li>
      ";
            }
        } ?>
          </ul>
          <ul class="details">
          <li class="topic">Treatments </li>
          <?php
        $query="SELECT * FROM appointment ORDER BY appointmentid DESC";
        $ret=mysqli_query($connection,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Appointment Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM appointment ORDER BY appointmentid DESC LIMIT $a,1";
            $ret1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $trid=$arr['treatmentid'];
                $pdays=$arr['appointmentdays'];
                $phrs=$arr['appointmenthours'];
                
                
            echo"
            <li><a href='#'>$trid</a></li>
      ";
            }
        } ?>
            
          </ul>
          <!-- <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">$204.98</a></li>
            <li><a href="#">$24.55</a></li>
            <li><a href="#">$25.88</a></li>
            <li><a href="#">$170.66</a></li>
            <li><a href="#">$56.56</a></li>
            <li><a href="#">$44.95</a></li>
            <li><a href="#">$67.33</a></li>
             <li><a href="#">$23.53</a></li>
             <li><a href="#">$46.52</a></li>
          </ul> -->
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Messages</div>
          <ul class="top-sales-details">
          <?php
        $query="SELECT * FROM messages ORDER BY messageid DESC";
        $ret=mysqli_query($connection,$query);
        $count=mysqli_num_rows($ret);
        if($count<1)
        {
            echo "<p>No Messages Data Found.</p>";
            exit();
        }
        for ($a=0; $a <$count ; $a+=1) 
        { 
            $query1="SELECT * FROM messages ORDER BY messageid DESC LIMIT $a,1";
            $ret1=mysqli_query($connection,$query1);
            $count1=mysqli_num_rows($ret1);
            
            for ($b=0; $b <$count1 ; $b++) 
            { 
                $arr=mysqli_fetch_array($ret1);
                $id=$arr['messageid'];
                $email=$arr['email'];
                $subject=$arr['subject'];
                $message=$arr['message'];
                
            echo"
            <li>
            <a href='#'>
             
              <span class='product'>$message</span>
            </a>
            <span class='price'>$subject</span>
          </li>
      ";
            }
        } ?>
            
          </ul>
        </div>
      </div>
    </div>
  </section>

 <script src="multiform.js"></script>
</body>
</html>


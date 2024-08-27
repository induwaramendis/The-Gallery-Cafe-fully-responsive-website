<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

      <a href="dashboard.php" class="logo"><b>Staff<span>Panel(The Gallery Cafe)</b></span></a>

      <nav class="navbar">
         <a href="staff_dashbord.php">Home</a>
         
         <a href="staff_placedorders.php">Orders</a>
         <a href="reservationstaff.php">Reservations</a>
        
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `staff` WHERE id = ?");
            $select_profile->execute([$staff_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
       <p><?= $fetch_profile['name']; ?></p>
         <div class="flex-btn">
            <a href="staff_login.php" class="option-btn">login</a>
            <a href="register_staff.php" class="option-btn">register</a>
         </div>
         <a href="../components/staff_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
      </div>

   </section>

</header>
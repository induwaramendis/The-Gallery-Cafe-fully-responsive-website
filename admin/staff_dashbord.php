<?php

include '../components/connect.php';

session_start();

$staff_id = $_SESSION['staff_id'];

if(!isset($staff_id)){
   header('location:staff_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_styles.css">

</head>
<body>

<?php include '../components/staff_header.php' ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="heading">dashboard</h1>

   <div class="box-container">

   

   <div class="box">
      <?php
         $total_pendings = 0;
         $select_pendings = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_pendings->execute(['pending']);
         while($fetch_pendings = $select_pendings->fetch(PDO::FETCH_ASSOC)){
            $total_pendings += $fetch_pendings['total_price'];
         }
      ?>
      <h3><span>Rs.</span><?= $total_pendings; ?><span>/-</span></h3>
      <p>total pendings</p>
      <a href="staff_placedorders.php" class="btn">see orders</a>
   </div>

   <div class="box">
      <?php
         $total_completes = 0;
         $select_completes = $conn->prepare("SELECT * FROM `orders` WHERE payment_status = ?");
         $select_completes->execute(['completed']);
         while($fetch_completes = $select_completes->fetch(PDO::FETCH_ASSOC)){
            $total_completes += $fetch_completes['total_price'];
         }
      ?>
      <h3><span>Rs.</span><?= $total_completes; ?><span>/-</span></h3>
      <p>total completes</p>
      <a href="staff_placedorders.php" class="btn">see orders</a>
   </div>

   <div class="box">
      <?php
         $select_orders = $conn->prepare("SELECT * FROM `orders`");
         $select_orders->execute();
         $numbers_of_orders = $select_orders->rowCount();
      ?>
      <h3><?= $numbers_of_orders; ?></h3>
      <p>total orders</p>
      <a href="staff_placedorders.php" class="btn">see orders</a>
   </div>

 

   



   <div class="box">
      <?php
        $select_reservation = $conn->prepare("SELECT * FROM `table_reservation`");
        $select_reservation->execute();
         $numbers_of_reservations = $select_reservation->rowCount();
      ?>
      <h3><?= $numbers_of_reservations; ?></h3>
      <p>new reservation</p>
      <a href="reservationstaff.php" class="btn">see reservations</a>
   </div>

   </div>

</section>

<!-- staff dashboard section ends -->









<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>
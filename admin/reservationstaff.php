<?php

include '../components/connect.php';

session_start();

$staff_id = $_SESSION['staff_id'];

if(!isset($staff_id)){
   header('location:staff_login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_reservation = $conn->prepare("DELETE FROM `table_reservation` WHERE id = ?");
   $delete_reservation->execute([$delete_id]);
   header('location:reservationstaff.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>placed reservations</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_styles.css">

</head>
<body>

<?php include '../components/staff_header.php' ?>

<!-- placed orders section starts  -->

<section class="placed-reservations">

   <h1 class="heading">placed-reservations</h1>

   <div class="box-container">

   <?php
      $select_reservation = $conn->prepare("SELECT * FROM `table_reservation`");
      $select_reservation->execute();
      if($select_reservation->rowCount() > 0){
         while($fetch_table_reservation = $select_reservation->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
      
      <p> name : <span><?= $fetch_table_reservation['full_name']; ?></span> </p>
      <p> email : <span><?= $fetch_table_reservation['email']; ?></span> </p>
      <p> number : <span><?= $fetch_table_reservation['phone']; ?></span> </p>
      <p> reservation date : <span><?= $fetch_table_reservation['reservation_date']; ?></span> </p>
      <p> No.of Guests : <span><?= $fetch_table_reservation['guests']; ?></span> </p>
      
      
      <form action="" method="POST">
         <input type="hidden" name="Reservation_ID" value="<?= $fetch_table_reservation['id']; ?>">
         <div class="flex-btn">
           
            <a href="reservationstaff.php?delete=<?= $fetch_table_reservation['id']; ?>" class="delete-btn" onclick="return confirm('delete this reservation?');">delete</a>
         </div> 
         
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">no reservations placed yet!</p>';
   }
   ?>

   </div>

</section>

<!-- placed orders section ends -->









<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>
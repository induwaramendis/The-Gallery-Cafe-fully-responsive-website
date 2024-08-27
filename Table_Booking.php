<?php
include_once 'components/connect.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation Menu</title>
    
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 90%;
    max-width: 600px;
    background-color: #f9d403;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 10px;
    padding: 20px;
}

header {
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    font-size: 2em;
    color: #333;
}

.reservation-form h2 {
    font-size: 1.5em;
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group input[type="date"],
.form-group input[type="time"],
.form-group input[type="number"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-group input[type="checkbox"] {
    margin-right: 10px;
}

button {
    background-color: #000000;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    width: 100%;
    margin-top: 10px;
}

button:hover {
    background-color: #0056b3;
}

#confirmation {
    display: none;
    text-align: center;
    margin-top: 20px;
}

#confirmation h2 {
    color: #28a745;
}

.hidden {
    display: none;
}

@media (max-width: 768px) {
    .container {
        padding: 10px;
    }
}

</style>    
</head>
<body>

    <div class="container">
        <header>
            <h1>Table Reservation</h1>
            <h3><b>The Gallery Cafe</b></h3>
        </header>
        <div class="reservation-form">


    
        
            <form id="reservation-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="date">Reservation Date</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                    <label for="time">Reservation Time</label>
                    <input type="time" id="time" name="time" required>
                </div>
                <div class="form-group">
                    <label for="guests">Number of Guests</label>
                    <input type="number" id="guests" name="guests" min="1" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="parking" name="parking">
                    <label for="parking">Do you need parking?</label>
                </div>
                <div class="form-group hidden" id="car-make-group">
                    <label for="car-make">Car Make</label>
                    <input type="text" id="car-make" name="car-make">
                </div>
                <div class="form-group hidden" id="car-model-group">
                    <label for="car-model">Car Model</label>
                    <input type="text" id="car-model" name="car-model">
                </div>
                <button type="submit">Reserve Table</button>
                <a href="home.php" class="btn2">Back to Home</a>
            </form>
            <div id="confirmation" class="hidden">
                <h2>Reservation Confirmed</h2>
                <p>Thank you for booking with us! Your reservation has been confirmed.</p>
            </div>
            <?php

try{
$sql = "INSERT INTO table_reservation (	Reservation_ID, Full_Name,	Phone_Number,Reseration_Date,Reservation_Time,Number_of_Guests,Parking,R_status)
                                                             VALUES ('','','' ,'' ,'' ,'' ,'','')";

 // Execute the query 
 $conn->exec($sql);
 //echo "New record created successfully";
} catch(PDOException $e) {
 echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
 ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>


<!--/*  $select_orders = $conn->prepare("SELECT * FROM `table_reservation`");
      $select_orders->execute();
      if($select_orders->rowCount() > 0){
         while($fetch_reservations = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   
    <div class="form-group">
      <p> ReservationID: <span><?= $fetch_reservations['Reservation_ID']; ?></span> </p>
      <p> Full Name : <span><?= $fetch_reservations['Full Name ']; ?></span> </p>
      <p> Phone Number : <span><?= $fetch_reservations['Phone Number']; ?></span> </p>
      <p> Reservation Date : <span><?= $fetch_reservations['Reseration_Date']; ?></span> </p>
      <p> Reservation Time : <span><?= $fetch_reservations['Reservation_Time']; ?></span> </p>
      <p> Number of Guests : <span><?= $fetch_reservations['Number_of_Guests']; ?></span> </p>
      <p> parking : <span><?= $fetch_reservations['	Parking']; ?></span> </p>
      <p> RESERVATION_STATUS : <span><?= $fetch_reservations['R_status']; ?></span> </p>
      
      <form action="" method="POST">
         <input type="hidden" name="Reservation_ID" value="<?= $fetch_reservations['Reservation_ID']; ?>">
         <select name="R_status" class="drop-down">
            <option value="" selected disabled><?= $fetch_reservations['R_status']; ?></option>
            <option value="cancel">cancel</option>
            <option value="completed">completed</option>
         </select>
         <div class="flex-btn">
            <input type="submit" value="update" class="btn" name="update_reservation">
            <a href="Table_Booking.php?delete=<?= $fetch_reservations['id']; ?>" class="delete-btn" onclick="return confirm('delete this reservation?');">delete</a>
         </div>
      </form>
   </div>
   <
      }
    }else{
        echo '<p class="empty">no reservation placed yet!</p>';
     }
     -->
</html>

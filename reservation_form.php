<?php

include 'components/connect.php';
session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Reservation - The Gallery Cafe</title>
    
    <style>
    body {
   font-family: Arial, sans-serif;
   background-image:url(https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
   background-repeat: no-repeat;
   background-size:cover;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   margin: 0;
}
.reservation-form {
  
   padding: 20px;
   border-radius: 8px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
   max-width: 500px;
   max-height: 800px;
}
.reservation-form h2 {
   margin-top: 0;
   color: black;
}
.reservation-form input,
.reservation-form select,
.reservation-form button {
   width: 100%;
   padding: 10px;
   margin: 10px 0;
   border-radius: 5px;
   border: 1px solid #ccc;
   box-sizing: border-box;
  
}

.reservation-form  {
   background-color:darksalmon;
   color: black;
   border: none;
}

    </style>

   
</head>
<body>


    <form class="reservation-form" action="reservation.php" method="post">
        <center><h2>Table Reservation</h2>
        <p>The Gallery Cafe</p></center>
        <input type="text" name="full_name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <input type="date" name="reservation_date" required>
        <input type="time" name="reservation_time" required>
        <input type="text" name="guests" placeholder="Number of Guests" required>
        <label>
            <input type="checkbox" name="parking"> Do you need parking?
        </label>
        <input type="submit" value="Reserve Table" name="send" class="button">
        <center><a href="home.php" class="button">Back to Menu</a></center>
    </form>
   
</body>
</html>

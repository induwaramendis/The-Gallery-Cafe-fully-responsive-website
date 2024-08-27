<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At The Gallery Cafe, we offer more than just a meal; we provide an experience that delights all your senses. Nestled in a vibrant and artistic setting, our cafe combines delicious, locally-sourced cuisine with an ambiance that inspires creativity and connection. Whether you're here for a casual coffee, a gourmet lunch, or a special evening out, our friendly staff and unique atmosphere ensure that every visit is memorable. Choose The Gallery Cafe for a dining experience that nourishes both body and soul.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

<h1 class="title">3 simple steps</h1>
 
 <div class="box-container">

    <div class="box">
       <img src="images/self-service.png" alt="">
       <h3>select food</h3>
       <p>Choose from our diverse menu, featuring fresh, locally-sourced ingredients and crafted to satisfy a variety of tastes.</p>
    </div>

    <div class="box">
       <img src="images/delivery-boy.png" alt="">
       <h3>30 minutes delivery</h3>
       <p>Enjoy the convenience of our fast and reliable delivery service, bringing your order to your doorstep within just 30 minutes.</p>
    </div>

    <div class="box">
       <img src="images/customer.png" alt="">
       <h3>enjoy food!</h3>
       <p> Our expertly prepared dishes, designed to provide a delightful dining experience in the comfort of your home.</p>
    </div>

 </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

      <div class="swiper-slide slide">
             <img src="images/male user.png" alt="">
             <p>"The Gallery Cafe is a hidden gem in Colombo 10! The ambiance is so inviting and the food is absolutely delicious. I loved the fresh ingredients and the unique flavor combinations. Will definitely be back!"</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Almeda</h3>
          </div>
 
          <div class="swiper-slide slide">
             <img src="images/male user.png" alt="">
             <p>"I had an amazing experience at The Gallery Cafe. The staff was friendly and attentive, and the food was delivered quickly. The best part? Everything tasted as good as it looked!"</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Sunil Alwis</h3>
          </div>
 
          <div class="swiper-slide slide">
             <img src="images/male user.png" alt="">
             <p>"A perfect spot for a casual meal or a special night out. The menu has something for everyone, and the quality is consistently top-notch. The 30-minute delivery is a game-changer for busy days."</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Heshan Sadun</h3>
          </div>
 
          <div class="swiper-slide slide">
             <img src="images/female user.png" alt="">
             <p>"The Gallery Cafe never disappoints. From their fantastic selection of dishes to the artistic decor, every visit feels special. Plus, the convenience of their quick delivery service is unbeatable."
 
             </p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Dinaji Rajapaksha</h3>
          </div>
 
          <div class="swiper-slide slide">
             <img src="images/male user.png" alt="">
             <p>"The Gallery Cafe offers an exceptional dining experience. The blend of a vibrant setting with delicious food makes it a must-visit. I especially love their commitment to using locally-sourced ingredients."</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Amila Herath</h3>
          </div>
 
          <div class="swiper-slide slide">
             <img src="images/male user.png" alt="">
             <p>"Impressed by the efficiency and quality at The Gallery Cafe. The food arrived hot and on time, and each dish was bursting with flavor. A great option for anyone in Colombo 10."</p>
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
             </div>
             <h3>Nimal Hewa</h3>
          </div>
 
       </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

    var swiper = new Swiper(".reviews-slider", {
       spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
       },
       breakpoints: {
          550: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
       },
    });
    
    </script>

</body>
</html>
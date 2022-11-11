<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/aboutimage.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are a hub where all types of gym supplements,gym attire, gym equipment and gym food</p>
         <p>Our goal is to ease our fellow gymrats so that they can easily access what they want and keep focus on their gains</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/man-muscles-tattoo-fitness-wallpaper-preview.jpg" alt="">
         <p>Man this website is like a blessing to me, everything is all in one place and not to mention how easy it is to navigate in the website</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Wan Muhammad Afiq</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>As a newbie in fitness and gym this website really helps to find what i need easier</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Amirul Zikri</h3>
      </div>

      <div class="box">
         <img src="images/3rd person.jpeg" alt="">
         <p>As a gymrat myself im very impressed that this website has everything that i need.Me as a almost full time body builder my time is very precious with this website i can save time buying these </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Luqman Hakim</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
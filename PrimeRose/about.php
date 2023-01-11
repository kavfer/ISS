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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>



<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/profile.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> My little craft business began in August 2021.
            We make dream catches,string arts and gift boxes for you. 
            <p>It's all made by hand.  
            We gave you valuable products. Also you can customize the product as they like.we work together to design,
            create and produce work that we are proud of for folks that we believe in. We have painstaking attention to quality.!</p>
         
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Our Services</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Ser - 1.png" alt="">
         <h3>Best Quality</h3>
         <p>We provide "superb" quality services in a wide range of products as we offer our partners the best from the best.</p>
      </div>

      <div class="box">
         <img src="images/Ser - 2.png" alt="">
         <h3>Customization</h3>
         <p>We offer customization options where you can get our products as per you likes.
         </p>
      </div>

      <div class="box">
         <img src="images/Ser - 3.jpg" alt="">
         <h3>Best Service</h3>
         <p>Our customers are very important to us. We try to provide our customers the best services we can.</p>
      </div>

   </div>

</section>


<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
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
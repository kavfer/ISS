<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="hero">

      <div class="swiper hero-slider">

         <div class="swiper-wrapper">

         <div class="swiper-slide slide">
               <div class="content">
                  
                  <h3>Dream catches</h3>
                  <span>Order online</span><br>
                  <span>Customize as your preference</span><br>
                  <a href="category.php?category=Dream catches" class="btn">Have a look</a>
               </div>
               <div class="image">
                  <img src="images/home drmctcher.jfif" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  
                  <h3>Gift Boxes</h3>
                  <span>Order Online </span><br>
                  <span>Customize as your preference</span><br>
                  <a href="category.php?category=Gift Boxes" class="btn">Have a look</a>
               </div>
               <div class="image">
                  <img src="images/Home giftbox.jpg" alt="">
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="content">
                  
                  <h3>String Arts</h3>
                  <span>Order online</span><br>
                  <span>Customize as your preference</span><br>
                  <a href="category.php?category=String Arts" class="btn">Have a look</a>
               </div>
               <div class="image">
                  <img src="images/home stringart.jpg" alt="">
               </div>
            </div>

           
            <div class="swiper-slide slide">
               <div class="content">
                  
                  <h3>Wall Hangers</h3>
                  <span>Order online</span><br>
                  <span>Customize as your preference</span><br>
                  <a href="category.php?category=Wall arts" class="btn">Have a look</a>
               </div>
               <div class="image">
                  <img src="images/crochet-wall-hanging-decor.jpg" alt="">
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <section class="category">

      <h1 class="title">Products category</h1>

      <div class="box-container">

         <a href="category.php?category=Dream catches" class="box">
            <img src="images/home drmctcher small.jpg" alt="">
            <h3>Dream catches</h3>
         </a>

         <a href="category.php?category=String Arts" class="box">
            <img src="images/home strngart small.png" alt="">
            <h3>String Arts</h3>
         </a>

         <a href="category.php?category=Gift Boxes" class="box">
            <img src="images/home gb small.png" alt="">
            <h3>Gift Boxes</h3>
         </a>

         <a href="category.php?category=Wall arts" class="box">
            <img src="images/Home wall hanger small.jpg" alt="">
            <h3>Wall Hangers</h3>
         </a>

      </div>

   </section>

   <section class="products">

      <h1 class="title">latest Products</h1>

      <div class="box-container">

         <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
               <form action="" method="post" class="box">
                  <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
                  <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
                  <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
                  <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
                  <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
                  <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                  <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
                  <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
                  <div class="name"><?= $fetch_products['name']; ?></div>
                  <div class="flex">
                     <div class="price"><span>Rs.</span><?= $fetch_products['price']; ?></div>
                     <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                  </div>
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>

      </div>

      <div class="more-btn">
         <a href="menu.php" class="btn">View All</a>
      </div>

   </section>


   <?php include 'components/footer.php'; ?>


   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".hero-slider", {
         loop: true,
         grabCursor: true,
         effect: "flip",
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
      });
   </script>

</body>

</html>
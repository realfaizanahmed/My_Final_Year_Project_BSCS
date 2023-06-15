<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include 'header.php'; ?>
    <section class="home">
        <div class="content">
            <h3>Hand Picked Book to your door</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
               Excepturi, quod? Reiciendis ut porro iste totam.</p>
        </div>
    </section>
   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/about-img.jpg" alt="">
         </div>

       <div class="content">
          <h3>About us?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias, reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere id officia assumenda temporibus?</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
          <a href="contact.php" class="btn">contact us</a>
       </div>
     </div>
  </section>
    <?php include 'footer.php'; ?>





    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>



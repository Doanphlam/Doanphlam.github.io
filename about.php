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
   <link rel="stylesheet" href="csss/Users.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">BACK TO HOME PAGE </a> </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/Whychoose-us.png" alt="">
      </div>

      <div class="content">
         <h3>why choose Porsche Studio ?</h3>
         <p>Welcome to the Porsche Studio ! We are one of the largest Porsche dealers in North Vietnam. Our dealer provides a wide range of cars and car parts . but our dealer mainly sells car modifications . From exhaust , trim level , carbon parts , spoiler , etc. So feel free to join one of us. We have a weekly car meet and our latest event is a track day special. </p>
         <p>Thank you for your purchase, and have fun with your lovely Porsche.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Owner's cars</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Owner's-car1.jpg" alt="">
         <p>espite a name derived from the French word for ‘illusion’, the GEMBALLA MIRAGE GT is very real, and is a limited edition series of 25 very special cars based on the legendary Porsche Carrera GT.
          Unique and desirable, each MIRAGE GT is made specifically for its owner, and sets aesthetic.</p>
         
         <h3>Phong Jaeger</h3>
      </div>

      <div class="box">
         <img src="images/Owner's-car2.jpg" alt="">
         <p>The Porsche 911® remastered by Gunther Werks is a modern and respectful homage to an icon - a high-performance, bespoke vehicle paying homage to the naturally aspirated automobiles of a quarter-century ago.</p>

         <h3>Duc City </h3>
      </div>

      <div class="box">
         <img src="images/Owner's-car3.jpg" alt="">
         <p>Brabus took to transforming the Porsche 911 Turbo S into a bonkers ride, creating the Brabus 820. The Brabus model can boast a whopping 820 hp thanks to its fine-tuning work. Now, its 0 to 60 mph time is 0.2 seconds quicker, putting it at 2.5 seconds on the strip.</p>
         
         <h3>Lam Daytona</h3>
      

   </div>

</section>

<section class="authors">

   <h1 class="title">Owners</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Owner.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Duc City</h3>
      </div>

      <div class="box">
         <img src="images/Owner 2.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Phong Jaeger</h3>
      </div>

      <div class="box">
         <img src="images/owner 3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
         </div>
         <h3>Lam Daytona</h3>
      </div>
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
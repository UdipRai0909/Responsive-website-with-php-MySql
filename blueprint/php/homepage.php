<!-- Global Variables -->
<?php

$myRoot = $_SERVER['DOCUMENT_ROOT'];
$myHost = 'http://localhost:8080/';
$projectName = "Responsive website with php & MySql";

$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
// $includesSrc = $myHost . $projectName . '/blueprint/php/includes';
$imageSrc = $myHost . $projectName . '/resources/images(royalty-free)/homepage';
?>

<!-- Include a header file -->
<?php
include($includesSrc . '/_header.php');
?>


<!-- Info Container -->
<div class="h-25 MyInfo-container">
 <h1>Welcome To Your Sales Journey</h1>
 <p>In this site, you can purchase and sell different items of your choice.
  <br />
  And oh! The delivery is quick so you will receive your item withing 2 hours at minimum on a regular working
  day.
  <br />
  Customer Satisfaction is our topmost priority. So feel free to suggest any feedbacks.
 </p>
 <button type="button" class="btn btn-primary btn-lg">Get Started Now</button>
</div>

<!-- Sliders Container -->
<div class="MySlider-container">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol id="homePage-myCarouselIndicators" class="carousel-indicators">
   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <div class="carousel-item active">
    <img class="d-block w-100" src="<?= $imageSrc; ?>/custom nike waffel racers.jpg" alt="custom nike waffel racers">
    <div class="carousel-caption d-none d-md-block special-card">
     <h3>Awesome Shoes & Sneakers</h3>
     <p>Custom Nike Waffel Racers</p>
    </div>
   </div>
   <div class="carousel-item">
    <img class="d-block w-100" src="<?= $imageSrc; ?>/dell laptops.jpg" alt="dell laptops">
    <div class="carousel-caption d-none d-md-block special-card">
     <h3>Variety of Laptops</h3>
     <p>Premium Dell Laptops</p>
    </div>
   </div>
   <div class="carousel-item">
    <img class="d-block w-100" src="<?= $imageSrc; ?>/gadgets.jpg" alt="gadgets">
    <div class="carousel-caption d-none d-md-block special-card">
     <h3>Different gadgets and Electronics</h3>
     <p>Connect with the world</p>
    </div>
   </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon PrevNext-icons" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
   <span class="carousel-control-next-icon PrevNext-icons" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
  </a>
 </div>
</div>

<!-- Business Goals Container -->
<div class="container goals-container mt-4 mt-lg-5">
 <div class="row">
  <div class="bg-success">
   <h1 class="color-creamywhite">
    <i class="fa fa-paper-plane" aria-hidden="true"></i>
    Speed
   </h1>
   <p class="min-line-4">The speed is insane. Like really insanely fast. You won't regret this ever, not today not tomorrow, not ever again.</p>
  </div>
  <div class="bg-primary">
   <h1 class="color-creamywhite">
    <i class="fa fa-wifi" aria-hidden="true"></i>
    Reliability
   </h1>
   <p class="min-line-4">Reliability is the big key. The customer should be satisfied and this happens when there is proper team management.</p>
  </div>
  <div class="bg-crimson">
   <h1 class="color-creamywhite">
    <i class="fa fa-star" aria-hidden="true"></i>
    Top Quality
   </h1>
   <p class="min-line-4">Hey Hey! Don't forget that the quality we offer is top-notch and with speed and reliability, I must say it is awesome.</p>
  </div>
  <div class="bg-teal">
   <h1 class="color-creamywhite">
    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
    Well Liked
   </h1>
   <p class="min-line-4">Customer satisfaction is our top priority so obv we are well liked by people. Our trademark is good.</p>
  </div>
 </div>
</div>

<!-- Contact Info Container -->
<div class="container contact-container mt-4 mb-5 mt-lg-5">
 <div class="row">
  <div class="bg-primary">
   <div class="homepage-quote bg-opac-white">
    <blockquote class="blockquote border-0 p-0">
     <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Experience a new journey to your dazzling future by choosing us.</p>
     <footer class="blockquote-footer color-crimson">
      Prof. Bernard Thatcher
      <cite title="Source Title">Md. Economist</cite>
     </footer>
    </blockquote>
   </div>
   <div class="celeb-pics">
    <img src="https://images.pexels.com/photos/5843451/pexels-photo-5843451.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
   </div>
  </div>

  <div class="bg-warning">
   <div class="info-pics">
    <button type="button" class="btn btn-danger mb-2">Contact us</button>
    <div class="card w-50 py-1 bg-facebook">
     <a class="text-white text-decoration-none" href="#">
      <i class="fa fa-facebook fa-3x d-flex justify-content-center" aria-hidden="true"></i>
     </a>
    </div>
    <div class="card w-50 py-1 bg-instagram">
     <a class="text-white text-decoration-none" href="#">
      <i class="fa fa-instagram fa-3x d-flex justify-content-center" aria-hidden="true"></i>
     </a>
    </div>
    <div class="card w-50 py-1 bg-twitter">
     <a class="text-white text-decoration-none" href="#">
      <i class="fa fa-twitter fa-3x d-flex justify-content-center" aria-hidden="true"></i>
     </a>
    </div>
   </div>
   <div class="celeb-pics">
    <img src="https://images.pexels.com/photos/4524369/pexels-photo-4524369.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
   </div>

  </div>
 </div>
</div>

<!-- Include a header file -->
<?php
include($includesSrc . '/_footer.php');
// include 'includes/_header.php';
?>
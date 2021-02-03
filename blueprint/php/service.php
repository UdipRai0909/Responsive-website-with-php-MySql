<!-- Global Variables -->
<?php

$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageSrc = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)/service';

$service4Name = "Kishimoto";
$service5Name = "Eiichiro";
$service6Name = "Kubo";
$service7Name = "Akira";


$service4 = "Masashi Kishimoto (岸本 斉史, Kishimoto Masashi, born November 8, 1974) is a Japanese manga artist. His best known work, Naruto, was in serialization from 1999 to 2014.";
$service5 = "Eiichiro Oda (Japanese: 尾田 栄一郎, Hepburn: Oda Eiichirō, born January 1, 1975) is a Japanese manga artist and the creator of the series One Piece (1997–present).";
$service6 = "Tite Kubo (久保 帯人, Kubo Taito, born June 26, 1977) is a Japanese manga artist. He is best known for his manga series Bleach, which had over 120 million copies in circulation as of 2018.";
$service7 = "Akira Toriyama (鳥山 明, Toriyama Akira, born April 5, 1955) is a Japanese manga artist and character designer.";
$service8 = "Trust me, it does not get any better than this. We operate at very high speed and we always make sure to hire a few people at the end of the month. It is no wonder that we are quick at what we do. Moreoverm the people we hire are very diligent and hard-working. Combine that with efficiency and oh yeah we are rocking the world.";
$service9 = "The products we sell are top notch and to top it off, they are actually simple to use. As a matter of fact, people tend to buy the same items over and over because they never get bored of them. They are always complimenting about the product on their blogs. When users are satisfied, we are also satisfied.";
$service10 = "Because we are fast, we make sure to deliver the goods within an hour of the order. We make sure that the customers got the items safely after we deliver them at their doorsteps. We ring the bell up to like 2 times so don't take your guns thinking we are some theives or robbers. Just chill for a bit before you make any hasty decisions.";

?>

<!-- Include header -->
<?php
include($includesSrc . '/_header.php');
?>


<div class="MyService-container container pt-2">
 <div id="myServiceCarousel" class="carousel slide mt-5" data-ride="carousel">
  <ol class="carousel-indicators">
   <li data-target="#myServiceCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myServiceCarousel" data-slide-to="1"></li>
   <li data-target="#myServiceCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <div class="carousel-item active">
    <img class="first-slide" src="<?= $imageSrc ?>/service-page1.jpg" alt="First slide">
    <div class="container">
     <div class="carousel-caption px-5 py-2 bg-opac-black text-center">
      <h1>Find opportunities</h1>
      <p>There are a lot of opportunities for the young people who are currently inactive.</p>
      <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
     </div>
    </div>
   </div>
   <div class="carousel-item">
    <img class="second-slide" src="<?= $imageSrc ?>/service-page2.jpg" alt="Second slide">
    <div class="container">
     <div class="carousel-caption px-5 py-2 bg-opac-black text-center">
      <h1>Meet your goals</h1>
      <p>You have come to the right place if you were searching for a stock market.</p>
      <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
     </div>
    </div>
   </div>
   <div class="carousel-item">
    <img class="third-slide" src="<?= $imageSrc ?>/service-page3.jpg" alt="Third slide">
    <div class="container">
     <div class="carousel-caption px-5 py-2 bg-opac-black text-center">
      <h1>One more for good measure.</h1>
      <p>Come along and join us. Everything is very swift and systematic in the company.</p>
      <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
     </div>
    </div>
   </div>
  </div>
  <a class="carousel-control-prev" href="#myServiceCarousel" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myServiceCarousel" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
  </a>
 </div>


 <!-- Marketing messaging and featurettes
      ================================================== -->
 <!-- Wrap the rest of the page in another container to center all the content. -->

 <div class="container mt-5 pl-5 marketing services-market">

  <!-- Three columns of text below the carousel -->
  <div class="row">

   <div class="col-lg-4">
    <div class="d-flex justify-content-center">
     <img class="rounded-circle" src="<?= $imageSrc ?>/service-page4.jpg" alt="Mashashi Kishimoto" width="140"
      height="140">
    </div>
    <h2 class="text-center"><?= $service4Name ?></h2>
    <p class="min-line-3"><?= $service4 ?></p>
    <p class="text-center"><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
   </div>

   <div class="col-lg-4">
    <div class="d-flex justify-content-center">
     <img class="rounded-circle" src="<?= $imageSrc ?>/service-page5.JPG" alt="Generic placeholder image" width="140"
      height="140">
    </div>
    <h2 class="text-center"><?= $service5Name ?></h2>
    <p class="min-line-3"><?= $service5 ?></p>
    <p class="text-center"><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
   </div>

   <div class="col-lg-4">
    <div class="d-flex justify-content-center">
     <img class="rounded-circle" src="<?= $imageSrc ?>/service-page6.jpg" alt="Generic placeholder image" width="140"
      height="140">
    </div>
    <h2 class="text-center"><?= $service6Name ?></h2>
    <p class="min-line-3"><?= $service6 ?></p>
    <p class="text-center"><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
   </div>

  </div>

  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
   <div class="col-md-7">
    <h2 class="featurette-heading">Swift and Reliable <span class="text-muted">It'll blow your mind.</span></h2>
    <p class="min-line-5 lead"><?= $service8 ?></p>
   </div>
   <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" src="<?= $imageSrc ?>/service-page8.jpg"
     alt="Generic placeholder image">
   </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
   <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Easy Access and Utility <span class="text-muted">See for yourself.</span></h2>
    <p class="min-line-5 lead"><?= $service9 ?></p>
   </div>
   <div class="col-md-5 order-md-1">
    <img class="featurette-image img-fluid mx-auto" src="<?= $imageSrc ?>/service-page9.png"
     alt="Generic placeholder image">
   </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
   <div class="col-md-7">
    <h2 class="featurette-heading">Delivery at your doorsteps! <span class="text-muted">Checkmate.</span></h2>
    <p class="min-line-5 lead"><?= $service10 ?></p>
   </div>
   <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" src="<?= $imageSrc ?>/service-page10.jpg"
     alt="Generic placeholder image">
   </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

 </div><!-- /.container -->
</div>


<!-- Include footer -->
<?php
include($includesSrc . '/_footer.php');
?>
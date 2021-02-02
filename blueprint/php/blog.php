<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive website with php & MySql";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageSrc = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)/blog';
?>

<!-- Include header -->
<?php
include($includesSrc . '/_header.php');
?>

<div class="MyBlog-container container mb-5">

 <div class="blog-navbar container pl-5 ml-5">
  <header>
   <!--- Navbar --->
   <nav class="navbar navbar-expand-lg pl-4">
    <div class="container">
     <a class="navbar-brand text-dark" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>BLOG</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
      <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="nvbCollapse">
      <ul class="navbar-nav ml-auto">
       <li class="nav-item pl-1">
        <a class="nav-link" href="#"><i class="fa fa-rss-square mr-1"></i>Daily Feeds</a>
       </li>
       <li class="nav-item active pl-1">
        <a class="nav-link" href="#"><i class="fa fa-connectdevelop fa-fw mr-1"></i>Latest</a>
       </li>
       <li class="nav-item pl-1">
        <a class="nav-link" href="#"><i class="fa fa-fire fa-fw mr-1"></i>Popular</a>
       </li>
       <li class="nav-item pl-1">
        <a class="nav-link" href="#"><i class="fa fa-rss fa-fw fa-rotate-180 mr-1"></i>Top Rated</a>
       </li>
       <li class="nav-item pl-1">
        <a class="nav-link" href="#"><i class="fa fa-tags fa-fw mr-1"></i>Categories</a>
       </li>
       <li class="nav-item pl-1">
        <a class="nav-link" href="#"><i class="fa fa-users fa-fw mr-1"></i>Connect with</a>
       </li>
      </ul>
     </div>
    </div>
   </nav>
   <!--# Navbar #-->
  </header>
 </div>

 <div class="blogpost-example container">
  <div class="blogpost-pic celeb-pics d-flex justify-content-center mb-3">
   <img src="<?= $imageSrc ?>/blog-title1.png" alt="Blog 1">
  </div>

  <h3 class="text-center">Amazon Wants to Make You an ML Practitioner— For Free</h3>
  <p class="text-center">By Anthony Agnone
   <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Aug 15, 2020</small>
  </p>
 </div>
 <hr />
</div>

<div class="blogpost-slider container my-4">
 <p class="font-italic">There are different categories of blogs which you can choose from. As you can see, there are a lot more than just categories to choose from.
 </p>

 <p>We will be updating the blogs every now and then so dont miss out any of the interesting blogs. Also, you can check this out.
  <a href="https://www.blogger.com/profile/04241142556619200895" target="_blank">Udip Rai's Blogs</a>.
 </p>
 <hr class="my-2">

 <!--Carousel Wrapper-->
 <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top d-flex justify-content-center">
   <a class="btn-floating text-white bg-primary p-3 rounded-circle" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left fa-lg"></i></a>
   <a class="btn-floating text-white bg-primary p-3 ml-2 rounded-circle" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right fa-lg"></i></a>
  </div>
  <!--/.Controls-->
  <hr class="my-2">
  <!--Indicators-->
  <ol class="carousel-indicators">
   <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
   <li data-target="#multi-item-example" data-slide-to="1"></li>
   <li data-target="#multi-item-example" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

   <!--First slide-->
   <div class="carousel-item active">

    <div class="row">
     <div class="col-md-4">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title2.jpeg" alt="Blog 2">
       </div>

       <div class="card-body">
        <h4 class="card-title">React Funtional Components</h4>
        <p class="card-text font-weight-normal">Look in here about the five different and new simple tips for readibility abd optimization.</p>
        <p class="font-weight-lighter">By Bikash Paneru
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Jan 11, 2021</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>

     <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title3.jpg" alt="Blog 3">
       </div>

       <div class="card-body">
        <h4 class="card-title">VS Code Tips</h4>
        <p class="card-text font-weight-normal">If we’re spending so much time working in IDEs, then we should at least feel comfortable while doing so.
         <p class="font-weight-lighter">By Ali Kamalizade
          <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Jan 15, 2020</small>
         </p>
         <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>

     <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title4.png" alt="Blog 4">
       </div>

       <div class="card-body">
        <h4 class="card-title">Life-enriching tips</h4>
        <p class="card-text font-weight-normal">A solid evening routine can help you decompress, improve mental clarity and ultimately empower you for the next morning.</p>
        <p class="font-weight-lighter">By Thomas Oppong
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Nov 2, 2020</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>
    </div>
   </div>
   <!--/.First slide-->

   <!--Second slide-->
   <div class="carousel-item">

    <div class="row">
     <div class="col-md-4">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title5.jpeg" alt="Blog 5">
       </div>

       <div class="card-body">
        <h4 class="card-title">Machine Learning</h4>
        <p class="card-text font-weight-normal">I left my career in Prestige Media because of the shitty men in-charge and they are still in-charge and still fucking up.</p>
        <p class="font-weight-lighter">By Jennifer Barnett
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Aug 15, 2020</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>

     <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title6.jpeg" alt="Blog 6">
       </div>

       <div class="card-body">
        <h4 class="card-title">Current Stock Market</h4>
        <p class="card-text font-weight-normal">The GameStop Fiasco proves that we are in a bubble of 'Meme Stock'. What the new dynamic between Redditors and Wall Street reveals about the stock market in 2021.</p>
        <p class="font-weight-lighter">By James Surowiecki
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Aug 15, 2020</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>

     <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title7.jpeg" alt="Blog 7">
       </div>

       <div class="card-body">
        <h4 class="card-title">Sports News</h4>
        <p class="card-text font-weight-normal">Akanna Rizzo announces that she is stepping away at SportsNet LA. This ia great news for all of us considering the recent pandemic.</p>
        <p class="font-weight-lighter">By Rowan Kavner
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Jan 28, 2021</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>
    </div>
   </div>
   <!--/.Second slide-->

   <!--Third slide-->
   <div class="carousel-item">

    <div class="row">
     <div class="col-md-4">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title8.jpg" alt="Blog 8">
       </div>

       <div class="card-body">
        <h4 class="card-title">Honeywell Humidifier</h4>
        <p class="card-text font-weight-normal">What’s Wrong With The Honeywell Humidifier? Wirecutter is obsessed with the humidifier that untold numbers of purchasers despise.</p>
        <p class="font-weight-lighter">By Angela Lashbrook
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Jan 28, 2021</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>

     <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">

       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title9.jpeg" alt="Blog 9">
       </div>

       <div class="card-body">
        <h4 class="card-title">Upgrade corona mask</h4>
        <p class="card-text font-weight-normal">Facing the more contagious coronovirus requires better fir and filtering, or doubling up, and watching out for fakes.</p>
        <p class="font-weight-lighter">By Robert Roy Britt
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Jan 28, 2021</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>

      </div>
     </div>

     <div class="col-md-4 clearfix d-none d-md-block">
      <div class="card mb-2">
       <div class="card-pic">
        <img class="card-img-top" src="<?= $imageSrc ?>/blog-title10.jpeg" alt="Blog 10">
       </div>
       <div class="card-body">
        <h4 class="card-title">Facism in America</h4>
        <p class="card-text font-weight-normal">Learn how you can recover from fascism. Recovering takes 3 things. America’s Not Doing Any of Them.
         umair haque</p>
        <p class="font-weight-lighter">By Umair Haque
         <i class="fa fa-share fa-fw" aria-hidden="true"></i><small class="text-muted mx-1">Jan 27, 2021</small>
        </p>
        <a class="btn btn-primary text-white">Read more</a>
       </div>
      </div>
     </div>
    </div>
    <!--/.Third slide-->

   </div>
   <!--/.Slides-->
  </div>
  <!--/.Carousel Wrapper-->
 </div>

</div>

<!-- Include footer -->
<?php
include($includesSrc . '/_footer.php');
?>
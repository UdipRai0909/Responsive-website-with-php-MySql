<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageSrc = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)';
?>

<!-- Include header -->
<?php
include($includesSrc . '/_header.php');
?>

<div class="MyExchange-container container">

 <div class="exchange-slider mask container-fluid m-0 p-0">
  <!-- Background image -->
  <div class="text-center bg-image">
   <div class="mask bg-opac-black">
    <div class="d-flex justify-content-center align-items-center h-100">
     <div>
      <h1 class="mb-3 text-white">This is where it all starts.</h1>
      <h4 class="mb-3 text-light font-weight-normal"><small>We have been working with some fine talents in the company to develop something.</small></h4>
      <a class="btn btn-outline-light btn-lg" href="#!" role="button">Find more</a>
     </div>
    </div>
   </div>
  </div>
  <!-- Background image -->
 </div>

 <div class="exchange-profile bg-image container">
  <div class="row p-5">

   <!--Profile Card 1-->
   <div class="col-md-3">
    <div class="card profile-card">
     <div class="background-block">
      <img src="https://images.pexels.com/photos/36717/amazing-animal-beautiful-beautifull.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="profile-sample1" class="background" />
     </div>
     <div class="profile-thumb-block">
      <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile" />
     </div>
     <div class="card-content">
      <h2>Udip Rai<small>Entrepreneur</small></h3>
       <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
     </div>
    </div>
   </div>

   <!--Profile Card 2-->
   <div class="col-md-3">
    <div class="card profile-card">
     <div class="background-block">
      <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background" />
     </div>
     <div class="profile-thumb-block">
      <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="profile-image" class="profile" />
     </div>
     <div class="card-content">
      <h2>Biraj Kun<small>Language Expert</small></h3>
       <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
     </div>
    </div>
   </div>

   <!--Profile Card 3-->
   <div class="col-md-3">
    <div class="card profile-card">
     <div class="background-block">
      <img src="https://images.pexels.com/photos/1072179/pexels-photo-1072179.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="profile-sample1" class="background" />
     </div>
     <div class="profile-thumb-block">
      <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="profile-image" class="profile" />
     </div>
     <div class="card-content">
      <h2>Abi Chitrakar<small>Pro Cameraman</small></h3>
       <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
     </div>
    </div>
   </div>

   <!--Profile Card 4-->
   <div class="col-md-3">
    <div class="card profile-card">
     <div class="background-block">
      <img src="https://images.pexels.com/photos/629167/pexels-photo-629167.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="profile-sample1" class="background" />
     </div>
     <div class="profile-thumb-block">
      <img src="https://randomuser.me/api/portraits/men/6.jpg" alt="profile-image" class="profile" />
     </div>
     <div class="card-content">
      <h2>Milan Mahat<small>Programmer</small></h3>
       <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
     </div>
    </div>
   </div>


  </div>
 </div>

</div>

<!-- Include footer -->
<?php
include($includesSrc . '/_footer.php');
?>
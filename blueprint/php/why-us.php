<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageSrc = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)/why-us';
?>

<!-- Include header -->
<?php
include($includesSrc . '/_header.php');
?>

<div class="container pt-3 MyWhyUs-container">
 <div class="row">
  <div class="col-12 col-sm-10 mx-auto">
   <div class="row">
    <div class="col-lg-12">
     <h1>Phenomenal Company Talents</h1>
     <p class="lead">Thanks to the company, some individuals have surprassed everyone's expectations.</p>
    </div>
    <div class="col-lg-6">

     <div class="card">
      <div class="col-12">
       <div class="row bg-primary text-center text-white">
        <div class="col-4 p-0 bg-success celeb-pics">
         <img src="<?= $imageSrc ?>/why-us_user1.jpg" alt="User 1">
        </div>
        <div class="col-4 p-0 bg-danger celeb-pics">
         <img src="<?= $imageSrc ?>/why-us_user2.jpg" alt="User 2">
        </div>
        <div class="col-4 p-0 bg-primary celeb-pics">
         <img src="<?= $imageSrc ?>/why-us_user3.jpg" alt="User 3">
        </div>
       </div>
       <div class="card-body">
        <h3>Save planet. Save humanity.</h3>
        <p>Now they are the ones giving back to the company and the community.</p>
        <a href="#" class="btn btn-outline-secondary">Learn more</a>
       </div>
      </div>
     </div>

     <br>

     <div class="card">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-7 celeb-pics border-dark p-0">
         <img src="<?= $imageSrc ?>/why-us_page-2.jpg" alt="Business Plan">
        </div>
        <div class="col-md-5 py-3">
         <h3 class="card-title">Plans</h3>
         <p class="card-text">With supporting roots below as a natural lead-in to additional content and then some more content that is here.</p>
         <a href="#" class="btn btn-outline-success btn-block">See more</a>
        </div>
       </div>

      </div>
     </div>

     <div class="row py-3">
      <div class="col-sm-6 py-3">
       <div class="card">
        <div class="card-body text-center">
         <h1 class="p-3 text-primary"><i class="fa fa-2x fa-flask"></i></h1>
        </div>
        <div class="card-footer text-center">45 Tests</div>
       </div>
      </div>
      <div class="col-sm-6 py-3">
       <div class="card">
        <div class="card-body text-center">
         <h1 class="p-3 text-danger"><i class="fa fa-2x fa-bullseye"></i></h1>
        </div>
        <div class="card-footer text-center">17 Targets</div>
       </div>
      </div>
      <div class="col-sm-6 py-3">
       <div class="card">
        <div class="card-body text-center">
         <h1 class="p-3 text-success"><i class="fa fa-2x fa-tree"></i></h1>
        </div>
        <div class="card-footer text-center">39 Views</div>
       </div>
      </div>
      <div class="col-sm-6 py-3">
       <div class="card">
        <div class="card-body text-center">
         <h1 class="p-3 text-warning"><i class="fa fa-2x fa-car"></i></h1>
        </div>
        <div class="card-footer text-center">4 Categories</div>
       </div>
      </div>
     </div>

     <div class="list-group py-2" id="card_list">
      <a href="#" class="list-group-item">
       Grapes
      </a>
      <a href="#" class="list-group-item">
       Milk
      </a>
      <a href="#" class="list-group-item">
       Apple Chips <i class="fa fa-heart-o float-right"></i>
      </a>
      <a href="#" class="list-group-item">
       Fried Dough
      </a>
      <a href="#" class="list-group-item">
       Salad
      </a>
      <div href="#" class="list-group-item">
       <button class="btn btn-primary btn-lg btn-block">Read More</button>
      </div>
     </div>

     <br>

     <div class="card">
      <div class="row m-0 no-gutters">
       <div class="col celeb-pics">
        <img src="<?= $imageSrc ?>/why-us_page-6.png" alt="Share your ideas">
       </div>
      </div>
     </div>

    </div>
    <div class="col-lg-6">
     <div class="card border-black2" id="card_sponsor">
      <div class="card-body">
       <div class="row p-3">
        <div class="col-12">
         <div class="bg-danger text-white py-3 d-flex justify-content-center">
          <h1>
           Sponsors
           <i class="fa fa-2x fa-heart-o"></i>
          </h1>
         </div>
         <hr>
         <p class="">Special thanks to all the sponsors who have been a part of our company for so long.</p>
         <button class="btn btn-secondary">See more</button>
        </div>
       </div>
      </div>
     </div>

     <br>

     <div class="row">
      <div class="col-sm-6">
       <div class="card text-white bg-dark text-center pt-2 mb-4">
        <div class="card-body card-title">
         <h1 class="m-b-2"><i class="fa fa-facebook display-2"></i></h1>
         <h6 class="text-light">56 Likes</h6>
        </div>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="card text-white bg-primary text-center pt-2 mb-4">
        <div class="card-body card-title">
         <h1 class="m-b-2"><i class="fa fa-twitter display-2"></i></h1>
         <h6 class="text-light">209 Followers</h6>
        </div>
       </div>
      </div>
      <div class="clearfix"> </div>
      <div class="col-sm-6">
       <div class="card text-white bg-snapchat text-center py-2 mb-4">
        <div class="card-body card-title">
         <h1 class="m-b-2"><i class="fa fa-snapchat-ghost display-2" aria-hidden="true"></i></h1>
         <h6 class="text-secondary;">20 Snaps</h6>
        </div>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="card text-white bg-danger text-center py-2 mb-4">
        <div class="card-body card-title">
         <h1 class="m-b-2"><i class="fa fa-youtube display-2"></i></h1>
         <h6 class="text-light">1,110 Views</h6>
        </div>
       </div>
      </div>
      <div class="clearfix"> </div>
      <div class="col-sm-6">
       <div class="card text-white bg-reddit text-center pt-2 mb-4">
        <div class="card-body card-title">
         <h1 class="m-b-2"><i class="fa fa-reddit display-2"></i></h1>
         <h6 class="text-light">90 Views</h6>
        </div>
       </div>
      </div>
      <div class="col-sm-6">
       <div class="card text-white bg-chrome text-center pt-2 mb-4">
        <div class="card-body card-title">
         <h1 class="m-b-2"><i class="fa fa-chrome display-2"></i></h1>
         <h6 class="text-light">44 Apps</h6>
        </div>
       </div>
      </div>
     </div>
     <!--/row-->

     <div class="card my-3">
      <div class="container-fluid">
       <div class="row bg-info py-5 border-black2">
        <div class="col-4 mx-auto">
         <img class="rounded-circle img-fluid border-white2" src="<?= $imageSrc ?>/why-us_page-3.jpg" alt="Michael Scott">
        </div>
        <div class="col-12 text-center">
         <h3>Michael Scott</h3>
        </div>
       </div>
       <div class="row mb-2">
        <div class="col-12 py-3">
         <p>The Regional Manager of Scranton branch of a paper distribution company, known as Dunder Mifflin Inc.</p>
        </div>
       </div>
       <div class="row mb-2 justify-content-center">
        <div class="col-sm text-center">
         <i class="fa fa-star"></i>
         <br> Saves
         <h4>17</h4>
        </div>
        <div class="col-sm text-center">
         <i class="fa fa-heart"></i>
         <br> Likes
         <h4>9</h4>
        </div>
        <div class="col-sm text-center">
         <i class="fa fa-file-o"></i>
         <br> Posts
         <h4>45</h4>
        </div>
        <div class="col-sm text-center">
         <i class="fa fa-user"></i>
         <br> Friends
         <h4>36</h4>
        </div>
       </div>
      </div>
     </div>

     <div class="card border-red2 mt-5">
      <div class="row m-0 no-gutters">
       <div class="col-6 p-3 ml-2">
        <h3>Contact us</h3>
        <p>We are always ready to help you in any way we can. Just give us a call.</p>
       </div>
       <div class="col bg-danger text-white celeb-pics">
        <img src="<?= $imageSrc ?>/why-us_page-5.jpg" alt="Jim from The Office">
       </div>
      </div>
     </div>

    </div>
   </div>
   <!--/row-->
  </div>
  <!--col-->
 </div>
 <!--row-->
 <div class="row py-2">
  <div class="col-12 col-sm-10 mx-auto">
   <div class="card">
    <div class="card-body">
     <div class="row align-items-center">
      <div class="col-lg-2 col-4 mx-auto text-nowrap text-center px-2">
       <a href="">
        <img class="d-block mx-auto rounded-circle img-fluid border-black2" src="<?= $imageSrc ?>/why-us_page-4.jpg">
       </a>
      </div>
      <div class="col-lg-7 text-center text-lg-left">
       <h2 class="d-inline">Pam Beesley</h2><span class="badge badge-pill badge-success sup small align-top">4</span>
       <h6>Reach out to us</h6>
       <ul class="list-inline mt-3">
        <li class="list-inline-item">
         <button class="btn btn-secondary rounded-circle">
          <i class="fa fa-bell-o align-middle"></i>
         </button>
        </li>
        <li class="list-inline-item">
         <button class="btn btn-secondary rounded-circle">
          <i class="fa fa-clock-o align-middle"></i>
         </button>
        </li>
        <li class="list-inline-item">
         <button class="btn btn-secondary rounded-circle">
          <i class="fa fa-envelope-o align-middle"></i>
         </button>
        </li>
        <li class="list-inline-item">
         <button class="btn btn-success rounded">Follow +</button>
        </li>
       </ul>
      </div>
      <div class="col-lg-3 col-6 p-2 mx-auto border-black2">
       <div class="row no-gutters text-center justify-content-end align-items-end">
        <div class="col">
         <h2>123</h2>
         <span class="badge badge-pill badge-dark font-weight-normal">posts</span>
        </div>
        <div class="col">
         <h2>19</h2>
         <span class="badge badge-pill badge-dark font-weight-normal">friends</span>
        </div>
        <div class="col">
         <h2>45</h2>
         <span class="badge badge-pill badge-dark font-weight-normal">badges</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <hr>
 <p class="mt-4 text-center">Keep the dream alive!</p>
</div>

<!-- Include footer -->
<?php
include($includesSrc . '/_footer.php');
?>
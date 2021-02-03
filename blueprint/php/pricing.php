<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageSrc = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)/pricing';
?>

<!-- Include header -->
<?php
include($includesSrc . '/_header.php');
?>

<div class="container MyPricingInfo-container p-0 pt-sm-2 pt-md-3 mt-2 pt-lg-5">
 <div class="row container-fluid p-0 business-info">
  <div class="col-sm-3 col-md-4 col-lg-5 p-0 bg-danger d-flex justify-content-center">
   <img src="<?= $imageSrc; ?>/pricing_page-man.jpg" alt="Business man profile" />
  </div>
  <div class="col-sm-9 col-md-8 col-lg-7 p-0 bg-dark">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol id="pricingPage-myCarouselIndicators" class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
     <div class="carousel-item active">
      <img class="d-block w-100" src="<?= $imageSrc; ?>/pricing_page-slider1.jpg" alt="pricing_page-slider1">
      <div class="carousel-caption d-none d-md-block special-card">
       <h3>Marketing Strategy</h3>
       <p>Main focus of the company</p>
      </div>
     </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?= $imageSrc; ?>/pricing_page-slider2.jpg" alt="pricing_page-slider2">
      <div class="carousel-caption d-none d-md-block special-card">
       <h3>Coherant Team</h3>
       <p>Build trust in the office</p>
      </div>
     </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?= $imageSrc; ?>/pricing_page-slider3.jpg" alt="pricing_page-slider3">
      <div class="carousel-caption d-none d-md-block special-card">
       <h3>Most importantly.. have fun</h3>
       <p>Mutual cooperation in the team</p>
      </div>
     </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?= $imageSrc; ?>/pricing_page-slider4.jpg" alt="pricing_page-slider4">
      <div class="carousel-caption d-none d-md-block special-card">
       <h3>Attentive of the market</h3>
       <p>Keep updated with the stock market</p>
      </div>
     </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="<?= $imageSrc; ?>/pricing_page-slider5.jpg" alt="pricing_page-slider5">
      <div class="carousel-caption d-none d-md-block special-card">
       <h3>Evaluate the performance</h3>
       <p>Use statistics and develop them using gadgets</p>
      </div>
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
</div>
</div>


<div class="pricing-table demo10">
 <div class="container pr-table">
  <h4 class="py-4 text-center display-4 bg-opac-black p-5 text-white font-railway">Pricing Table</h4>
  <div class="row">
   <div class="col-md-3 col-sm-6">
    <div class="pricingTable10">
     <div class="pricingTable-header">
      <h3 class="heading">Standard</h3>
      <span class="price-value">
       <span class="currency">$</span> 50k
       <span class="month">/ye</span>
      </span>
     </div>
     <div class="pricing-content">
      <ul>
       <li>10% Success Fee</li>
       <li>Up to 50k</li>
       <li>Primary facilies</li>
       <li>10 Subdomains</li>
       <li>15 Domains</li>
      </ul>
      <a href="#" class="read">sign up</a>
     </div>
    </div>
   </div>
   <div class="col-md-3 col-sm-6">
    <div class="pricingTable10">
     <div class="pricingTable-header">
      <h3 class="heading">Business</h3>
      <span class="price-value">
       <span class="currency">$</span> 75k
       <span class="month">/ye</span>
      </span>
     </div>
     <div class="pricing-content">
      <ul>
       <li>7.5% Success Fee</li>
       <li>50k to 100k</li>
       <li>Lavish facilities</li>
       <li>15 Subdomains</li>
       <li>20 Domains</li>
      </ul>
      <a href="#" class="read">sign up</a>
     </div>
    </div>
   </div>
   <div class="col-md-3 col-sm-6">
    <div class="pricingTable10">
     <div class="pricingTable-header">
      <h3 class="heading">Premium</h3>
      <span class="price-value">
       <span class="currency">$</span> 100k
       <span class="month">/ye</span>
      </span>
     </div>
     <div class="pricing-content">
      <ul>
       <li>5% Success Fee</li>
       <li>Over 100k</li>
       <li>Premium facilities</li>
       <li>20 Subdomains</li>
       <li>25 Domains</li>
      </ul>
      <a href="#" class="read">sign up</a>
     </div>
    </div>
   </div>
   <div class="col-md-3 col-sm-6">
    <div class="pricingTable10">
     <div class="pricingTable-header">
      <h3 class="heading">Extra</h3>
      <span class="price-value">
       <span class="currency">$</span> Joint
       <span class="month">/ye</span>
      </span>
     </div>
     <div class="pricing-content">
      <ul>
       <li>15% Success Fee</li>
       <li>Partner Broker</li>
       <li>First-class facilities</li>
       <li>25 Subdomains</li>
       <li>30 Domains</li>
      </ul>
      <a href="#" class="read">sign up</a>
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
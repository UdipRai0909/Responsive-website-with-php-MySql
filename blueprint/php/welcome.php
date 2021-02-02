<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive website with php & MySql";
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
  <div class="text-center bg-image bg-welcome">
   <div class="mask bg-opac-black">
    <div class="d-flex justify-content-center align-items-center h-100">
     <div class="bg-opac-black8 p-4">
      <blockquote class="blockquote border-0 p-0">
       <h1 class="mb-3 lead">
        <i class="fa fa-quote-left mr-3 text-success"></i>
        <span class="text-white">Welcome,

         <?php
         if (isset($_GET['signin'])) {
          if ($_GET['signin'] == 'welcome_page') {
           echo '<small>' . $_SESSION['user_name'] . '</small>';
          }
         }
         ?>

        </span>
       </h1>
      </blockquote>
      <h4 class="mb-3 blockquote-footer text-muted"><small>We have been working with some fine talents in the company
        to develop something.</small></h4>
      <a class="btn btn-outline-light btn-lg" href="#!" role="button">Find more</a>
     </div>
    </div>
   </div>
  </div>
  <!-- Background image -->
 </div>
</div>

<!-- Include footer -->
<?php
include($includesSrc . '/_footer.php');
?>
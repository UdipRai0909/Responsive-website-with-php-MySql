<!-- Global Variables -->
<?php
session_start();

// Main Variables
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$myHost = 'http://localhost:8080/';
$projectName = "Responsive website with php & MySql";

// Php and Links
$myPageLink = $myHost . $projectName . '/blueprint/php';
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$logOutLogic = $myPageLink . '/includes/logout_logic.php';

// Pages
$myBlogPage = "https://www.blogger.com/profile/04241142556619200895";
$welcomePage =  $myPageLink . '/welcome.php';
$loginPage = $myPageLink . '/login.php';

// CSS
$myCSS = $myHost . $projectName . '/resources/css';
$myLESS = $myHost . $projectName . '/resources/less';
$bootstrapCss = $myCSS . '/bootstrap.css';
$bootstrapMinCss = $myCSS . '/bootstrap.min.css';
$fontawesomeCss = $myCSS . '/fontawesome.css';
$customCss = $myCSS . '/style.css';
$pricingTableCss = $myCSS . '/pricing_table.css';
$blogNavCss = $myCSS . '/blog_navbar.css';
$loginCss = $myCSS . '/login.css';

//SCSS
$loginLess = $myLESS . '/login.less';

//Images
$myAvatar = $myHost . $projectName . '/resources/images(royalty-free)/uploads';
$defaultImg = $myAvatar . '/default_user.png';

// Session Information
if (isset($_SESSION['user_id'])) {
 $myFirstName = $_SESSION['first_name'];
 $myLastName = $_SESSION['last_name'];
 $myUserName = $_SESSION['user_name'];
 $myUserEmail = $_SESSION['email_address'];
 $myAvatarImage = $myAvatar . '/' . $_SESSION['user_avatar_image'];
}
?>

<!-- Include php files -->
<?php
// include($includesSrc . '/_header.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- header part -->

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Title of the page -->
 <title>Responsive website with php & MySql</title>


 <!-- bootstrap css offline -->
 <link rel="stylesheet" href="<?= $bootstrapCss ?>">
 <!-- <link rel="stylesheet" href="<?= $bootstrapMinCss ?>"> -->

 <!-- font awesome -->
 <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map" rel="stylesheet">
 <link rel="stylesheet" href="<?= $fontawesomeCss ?>">

 <!-- bootstrap css online -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

 <!-- custom css -->
 <link rel="stylesheet" href="<?= $customCss ?>">
 <link rel="stylesheet" href="<?= $pricingTableCss ?>">
 <link rel="stylesheet" href="<?= $blogNavCss ?>">
 <link rel="stylesheet" href="<?= $loginCss ?>">

 <!-- <link rel="stylesheet/less" type="text/css" href="<?= $loginLess ?>" /> -->


</head>

<!-- body part -->

<body>
 <!-- Navbar Container -->
 <div class="MyNav-container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="<?= $myPageLink ?>/homepage.php">| UR Sales |</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item">
      <a class="nav-link" href="<?= $myPageLink ?>/homepage.php">Homepage <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?= $myPageLink ?>/pricing.php">Pricing</a>
     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
       Services
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       <a class="dropdown-item" href="<?= $myPageLink ?>/service.php">Explore</a>
       <a class="dropdown-item" href="#">Start Selling</a>
       <div class="dropdown-divider"></div>
       <a class="dropdown-item" href="#">Our Partners</a>
      </div>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?= $myPageLink ?>/blog.php">Blog</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?= $myPageLink ?>/why-us.php">Why us?</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="<?= $myPageLink ?>/exchange.php">
       <i class="fa fa-exchange" aria-hidden="true"></i>
       Exchange
      </a>
     </li>
    </ul>
    <ul class="navbar-nav mr-5">
     <li class="nav-item pt-2">
      <?php
      if (!isset($_SESSION['user_id'])) {
       echo "<a class='nav-link' href='$loginPage'>Join us</a>";
      } else {
       echo "<a class='nav-link' href='$welcomePage'>Join us</a>";
      }
      ?>

     </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="avatarDropdownMenulink" role="button" data-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">
       <?php
       if (!isset($_SESSION['user_id'])) {
        echo "
        <img src='$defaultImg' width=35 height=35 class='rounded-circle'>
        ";
       } else {
        echo "
        <img src='$myAvatarImage' width=35 height=35 class='rounded-circle'>
        ";
       }
       ?>
      </a>

      <div class="dropdown-menu" aria-labelledby="avatarDropdownMenuLink">
       <?php
       if (!isset($_SESSION['user_id'])) {
        echo "
        <a href='$loginPage' class='dropdown-item'>Login</a>
        <a href='$loginPage' class='dropdown-item'>Sign up</a>
        <div class='dropdown-divider'></div>
        <a href='$myBlogPage' class='manage-dropitem text-decoration-none'>Connect
         <i class='fa fa-google fa-lg ml-1' aria-hidden='true'></i>
        </a>
        ";
       } else {
        echo "
        <a href='#' class='dropdown-item text-center'>$myFirstName $myLastName</a>
        <a href='#' class='dropdown-item text-center'>$myUserEmail</a>
        <div class='dropdown-divider'></div>
        <a href='$myBlogPage' class='manage-dropitem text-decoration-none'>Manage a/c</a>
        <a href='$logOutLogic' class='manage-dropitem text-decoration-none text-danger mt-2'>Log out</a>
        ";
       }
       ?>
      </div>
     </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
     <input type="text" name="navSearchKeyword" class="form-control input-sm" placeholder="Type something..">
     <button class="btn btn-outline-success my-2 my-sm-0" name="navSearchBtn" type="button">Search</button>
    </form>
   </div>
  </nav>
 </div>
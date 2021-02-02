<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';

$myPageLink = 'http://localhost:8080/' . $projectName . '/blueprint/php';
$imageSrc = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)';
?>

<!-- Include header -->
<?php
include($includesSrc . '/_header.php');
?>

<div class="MyLogin-container container py-5 mb-5">
 <div class="login-reg-panel  bg-crimson p-5 mt-4">
  <div class="login-info-box color-creamywhite">
   <div class="form-group w-50">
    <h2>Have an account?</h2>
    <p>Here, Sign in to your account.</p>
    <label id="label-register" class="form-label w-50 p-2 radius-10" for="log-reg-show">Login</label>
    <input type="radio" name="active-log-panel" class="form-control" id="log-reg-show" checked="checked">
   </div>
  </div>

  <div class="register-info-box color-creamywhite">
   <div class="form-group w-50">
    <!-- <p class='bg-success d-flex p-2 justify-content-center'>Register has been successful.</p> -->

    <?php
    if (!isset($_GET['signup'])) {
     //
    } else {
     if ($_GET['signup'] == 'register_success') {
      echo "<p class='bg-success d-flex p-2 justify-content-center'>Register has been successful.</p>";
     } else if ($_GET['signup'] == 'user_name_exists') {
      echo "<p class='bg-white text-danger d-flex p-2 justify-content-center'>Username already exists.</p>";
     } else if ($_GET['signup'] == 'email_exists') {
      echo "<p class='bg-white text-danger d-flex p-2 justify-content-center'>Email address already exists.</p>";
     }
    }
    ?>

    <h2>Don't have an account?</h2>
    <p>Here, register for a new account.</p>
    <label id="label-login" class="form-label w-50 p-2 radius-10" for="log-login-show">Register</label>
    <input type="radio" name="active-log-panel" class="form-control" id="log-login-show">
   </div>
  </div>

  <div class="white-panel p-4">
   <div class="login-show">
    <h2 class="text-center">Sign in</h2>
    <form action="<?= $myPageLink ?>/includes/login_logic.php" method="POST" enctype="multipart/form-data">
     <div class="form-group w-75">
      <input name="user_name_email" id="nameEmail" type="text" class="form-control w-100 input-lg p-3" placeholder="Username/Email">
      <div class="form-error clearfix">
       <span></span>
      </div>
     </div>
     <div class="form-group w-75">
      <input name="user_password" id="logPassword" type="password" class="form-control w-100 input-lg p-3" placeholder="Password">
      <div class="form-error clearfix">
       <span></span>
      </div>
     </div>
     <div class="form-group w-75 d-flex justify-content-md-around">
      <div class="col-6 float-left py-2 pl-0">
       <label for="" class="form-label text-left">
        <a href="">Forgot password?</a>
       </label>
      </div>
      <div class="col-6 float-left d-flex mr-0 pr-0">
       <input name="userLoginBtn" id="log_btn" type="submit" class="form-control btn-primary radius-10" value="Login">
      </div>
     </div>
    </form>
   </div>
   <div class="register-show">
    <h2 class="text-center">Sign up</h2>
    <form action="<?= $myPageLink ?>/includes/register_logic.php" method="POST" enctype="multipart/form-data">
     <div class="form-group w-100">
      <div class="col-6 float-left">
       <label for="fname" class="form-label">First Name</label>
       <input name="first_name" id="fname" type="text" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
      <div class="col-6 float-left">
       <label for="lname" class="form-label">Last Name</label>
       <input name="last_name" id="lname" type="text" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
     </div>

     <div class="form-group w-100">
      <div class="col-6 float-left">
       <label for="regUname" class="form-label">User Name</label>
       <input name="user_name" id="regUname" type="text" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
      <div class="col-6 float-left">
       <label for="regEmail" class="form-label">Email Address</label>
       <input name="email_add" id="regEmail" type="text" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
     </div>

     <div class="form-group w-100">
      <div class="col-6 float-left">
       <label for="regGender" class="form-label">Gender</label>
       <select name="my_gender" id="regGender" class="form-control">
        <option value="" selected disabled hidden>Select</option>
        <option value="M">Male</option>
        <option value="F">Female</option>
        <option value="L">Lesbian</option>
        <option value="G">Gay</option>
        <option value="B">Bi</option>
        <option value="T">Trans</option>
       </select>
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
      <div class="col-6 float-left">
       <label for="regDate" class="form-label">Date of Birth</label>
       <input name="my_birthdate" id="regDate" type="date" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
     </div>

     <div class="form-group w-100">
      <div class="col-6 float-left">
       <label for="regPassword" class="form-label">Password</label>
       <input name="my_pass" id="regPassword" type="password" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
      <div class="col-6 float-left">
       <label for="regRePassword" class="form-label">Retype password</label>
       <input name="re_pass" id="regRePassword" type="password" class="form-control">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
     </div>
     <div class="form-group w-100">
      <div class="col-8 float-left">
       <label for="uploadImg" class="form-control btn-primary px-2 pt-2 pb-1 text-center radius-10 uploadLabel">Upload
        an image</label>
       <input name="uploadImg" id="uploadImg" type="file">
       <div class="form-error clearfix">
        <span></span>
       </div>
      </div>
      <div class="col-4 float-left">
       <input name="userRegisterBtn" id="reg_btn" type="submit" class="form-control btn-primary radius-10" value="Register">
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


<!-- Include footer -->
<?php
include($includesSrc . '/_footer.php');
?>
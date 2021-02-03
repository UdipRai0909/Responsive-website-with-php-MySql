<!-- Global Variables -->
<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$includesSrc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
// $myCSS = $myRoot . '/' . $projectName . '/resources/css';
$myJS = 'http://localhost:8080/' . $projectName . '/resources/js';


// CSS source
$myJquery = $myJS . '/jquery-3.4.1.min.js';
$popperJs = $myJS . '/popper.js';
$bootstrapMinJs = $myJS . '/bootstrap.min.js';
// $fontawesomeMinJs = $myJS . '/fontawesome.min.js';
$markJs = $myJS . '/mark.js';
$domJs = $myJS . '/findAndReplaceDomText.js';
$customJs = $myJS . '/jscript.js';

//Images

?>




<!-- Footer Container -->
<div class="MyFooter-container bg-opac-black8">
 <!-- <footer class="jumbotron jumbotron-fluid bg-grey p-4 mb-0 text-white text-center text-lg-start"> -->
 <footer class="container-fluid py-5">
  <div class="container">
   <div class="row">
    <div class="col-md-6 bg-opac-black p-3">
     <div class="row">
      <div class="col-md-6">
       <div class="logo-part">
        <h5 class="font-weight-bold">UR Sales</h5>
        <p class="text-decoration-underline">7637 Laurel Dr. King Of Prussia, PA 19406</p>
        <p>Use this tool as test data for an automated system or find your next pen</p>
       </div>
      </div>
      <div class="col-md-6 px-4">
       <h5 class=" font-weight-bold"> About Company</h5>
       <p>But horizontal lines can only be a full pixel high.</p>
       <a href="#" class="btn-footer font-weight-bold"> More Info </a><br>
       <a href="#" class="btn-footer font-weight-bold"> Contact Us</a>
      </div>
     </div>
    </div>
    <div class="col-md-6">
     <div class="row">
      <div class="col-md-6 px-4">
       <h5 class="  font-weight-bold"> Help us</h5>
       <div class="row ">
        <div class="col-md-6">
         <ul>
          <li> <a href="#"> Home</a> </li>
          <li> <a href="#"> About</a> </li>
          <li> <a href="#"> Service</a> </li>
          <li> <a href="#"> Team</a> </li>
          <li> <a href="#"> Help</a> </li>
          <li> <a href="#"> Contact</a> </li>
         </ul>
        </div>
        <div class="col-md-6 px-4">
         <ul>
          <li> <a href="#"> Faciliy</a> </li>
          <li> <a href="#"> Fax</a> </li>
          <li> <a href="#"> Terms</a> </li>
          <li> <a href="#"> Policy</a> </li>
          <li> <a href="#"> Refunds</a> </li>
          <li> <a href="#"> Paypal</a> </li>
         </ul>
        </div>
       </div>
      </div>
      <div class="col-md-6 ">
       <h5 class=" font-weight-bold"> Newsletter</h5>
       <div class="social pl-2">
        <a href="#" class="text-white p-2 bg-facebook"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
        <a href="#" class="text-white p-2 bg-google"><i class="fa fa-google fa-lg" aria-hidden="true"></i></a>
        <a href="#" class="text-white p-2 bg-instagram"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        <a href="#" class="text-white p-2 bg-linkedin"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
        <a href="#" class="text-white p-2 bg-youtube"><i class="fa fa-youtube fa-lg" aria-hidden="true"></i></a>
        <a href="#" class="text-white p-2 bg-twitter"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
       </div>
       <form class="form-footer my-3">
        <input type="text" placeholder="search here...." name="search">
        <input type="button" value="Go">
       </form>
       <p class="font-weight-bold">That's technology limitation of LCD monitors</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </footer>
</div>
</body>

<!-- jquery 3.4.1 min -->
<script src="<?= $myJquery ?>"></script>

<!-- popper js -->
<script src="<?= $popperJs ?>"></script>


<!-- bootstrap offline -->
<script src="<?= $bootstrapBundleJs ?>"></script>
<script src="<?= $bootstrapMinJs ?>"></script>

<!-- bootstrap js online -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Font Awesome js -->
<!-- <script src="<?= $fontawesomeMinJs ?>"></script> -->

<!-- less js -->
<!-- script src="less.js" type="text/javascript" -->
<!-- <script src="//cdn.jsdelivr.net/npm/less@3.13" -->

<!-- mark js online -->
<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>


<!-- mark js offline -->
<!-- script src="<?= $markJs ?>"/script> -->

<!-- dom js offline -->
<script src="<?= $domJs ?>"></script>

<!-- custom js -->
<script src="<?= $customJs ?>"></script>

</html>
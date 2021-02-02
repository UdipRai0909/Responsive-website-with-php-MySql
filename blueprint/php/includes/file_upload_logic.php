<?php


if (isset($_POST['testImageSubmit'])) {
 // Image specific variables
 $file =  $_FILES['uploadImg'];

 $fileName = $_FILES['uploadImg']['name'];
 $fileTempName = $_FILES['uploadImg']['tmp_name'];
 $fileSize = $_FILES['uploadImg']['size'];
 $fileError = $_FILES['uploadImg']['error'];
 $fileType = $_FILES['uploadImg']['type'];

 $fileExt = explode('.', $fileName);
 $fileActualExt = strtolower(end($fileExt));

 $allowed = array('jpg', 'png', 'jpeg');

 // $targetDir = $imageDir . basename($fileName);

 // Image Validation
 $condAllowedExt = in_array($fileActualExt, $allowed);
 $condImageSize = $fileSize > 100 ||  $fileSize <= 8000;

 echo $file[0];
 echo "<br/>";
 echo $_FILES['uploadImg']['name'];
 echo "<br/>";
 echo $_FILES['uploadImg']['tmp_name'];
 echo "<br/>";
 echo $_FILES['uploadImg']['size'];
 echo "<br/>";
 echo "Error =" + $fileError;
 echo "<br/>";
 echo "Type =" + $fileType;
 echo "<br/>";

 echo $_FILES['uploadImg']['name'];
 echo "<br/>";

 if ($fileSize < 10 || $fileSize > 5000) {
  echo "<h1 style ='color:green;'>I am Between 100 and 5000.</h1>";
 } else {
  echo "<h1 style ='color:yellow;'>I am not in the required range.</h1>";
 }
}

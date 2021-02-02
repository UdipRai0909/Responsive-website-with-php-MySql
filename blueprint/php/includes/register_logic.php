<?php

// Variables
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$myPageLink = 'http://localhost:8080/' . $projectName . '/blueprint/php';
$headerPage = $myRoot . '/' . $projectName . '/blueprint/php';
$headerInc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageDir = $myRoot . '/' . $projectName . '/resources/images(royalty-free)/uploads';

// Redirect to the page with validation
$myHeader = 'Location:' . $myPageLink;

$emptyFields = $myHeader . '/login.php?signup=empty_fields';
$userNameExists = $myHeader . '/login.php?signup=user_name_exists';
$emailExists = $myHeader . '/login.php?signup=email_exists';
$incorrectInput = $myHeader . '/login.php?signup=incorrect_input';
$invalidEmail = $myHeader . '/login.php?signup=invalid_email';
$passMismatch = $myHeader . '/login.php?signup=pass_mismatch';
$extNotAllowed = $myHeader . '/login.php?signup=ext_not_allowed';
$invalidImageSize = $myHeader . '/login.php?signup=invalid_image_size';
$registerSuccess = $myHeader . '/login.php?signup=register_success';
$noConnectionEstablished = $myHeader . '/login.php?signup=no_connection_established';

if (isset($_POST['userRegisterBtn'])) {

 // Include database connection
 include_once $headerInc . '/dbconn_logic.php';

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

 // Regex Functions
 $checkAlphabets = "/^[a-zA-Z]*$/";
 $checkAdvancedAlphabets = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

 // Register Form Inputs
 $firstName = mysqli_real_escape_string($conn, $_POST['first_name']);
 $lastName = mysqli_real_escape_string($conn, $_POST['last_name']);
 $userName = mysqli_real_escape_string($conn, $_POST['user_name']);
 $emailAdd = mysqli_real_escape_string($conn, $_POST['email_add']);
 $myGender = mysqli_real_escape_string($conn, $_POST['my_gender']);
 $myBirthdate = mysqli_real_escape_string($conn, $_POST['my_birthdate']);
 $myPass = mysqli_real_escape_string($conn, $_POST['my_pass']);
 $rePass = mysqli_real_escape_string($conn, $_POST['re_pass']);


 // All the conditions for my register form validation
 if (empty($firstName) || empty($lastName) || empty($userName) || empty($emailAdd) || empty($myBirthdate) || empty($myPass) || empty($rePass) || empty($fileName)) {
  header($emptyFields);
  exit();
 } else {

  // Check for duplicate values
  $stmt = mysqli_stmt_init($conn);
  $queryUserName = "SELECT * FROM users WHERE user_name = '$userName'";
  $queryEmail = "SELECT * FROM users WHERE email_address = '$emailAdd'";
  $resultUserName = mysqli_query($conn, $queryUserName);
  $resultEmail = mysqli_query($conn, $queryEmail);

  if (mysqli_num_rows($resultUserName) > 0) {
   header($userNameExists);
   exit();
  } else if (mysqli_num_rows($resultEmail) > 0) {
   header($emailExists);
  } else {
   if (!preg_match($checkAlphabets, $firstName) || !preg_match($checkAlphabets, $lastName) || !preg_match($checkAdvancedAlphabets, $userName) || !preg_match($checkAdvancedAlphabets, $myPass) || !preg_match($checkAdvancedAlphabets, $rePass)) {
    header($incorrectInput);
    exit();
   } else {
    if (!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)) {
     header($invalidEmail);
     exit();
    } else {
     if ($myPass != $rePass) {
      header($passMismatch);
      exit();
     } else {
      if (!in_array($fileActualExt, $allowed)) {
       header($extNotAllowed);
       exit();
      } else {
       if ($fileSize < 100 ||  $fileSize > 800000) {
        header($invalidImageSize);
        exit();
       } else {

        // Handling Password
        $hashedMyPass = password_hash($myPass, PASSWORD_DEFAULT);
        $hashedRePass = password_hash($rePass, PASSWORD_DEFAULT);

        // Handling uploaded image
        $uploadedImg = 'profile' . uniqid('', true) . '.' . $fileActualExt;
        echo $uploadedImg;
        $targetDir = $imageDir . '/' . $uploadedImg;

        // Database part using prepared statement
        $query = "INSERT INTO users (first_name, last_name, user_name, email_address, gender, date_of_birth, password, retype_password, user_avatar_image) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
        if (!mysqli_stmt_prepare($stmt, $query)) {
         header($noConnectionEstablished);
         exit();
        } else {
         mysqli_stmt_bind_param($stmt, "sssssssss", $firstName, $lastName, $userName, $emailAdd, $myGender, $myBirthdate, $hashedMyPass, $hashedRePass, $uploadedImg);
         mysqli_stmt_execute($stmt);
         move_uploaded_file($fileTempName, $targetDir);
         header($registerSuccess);
         exit();
        }
       }
      }
     }
    }
   }
  }
 }
}

<?php
session_start();

// Variables
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$myPageLink = 'http://localhost:8080/' . $projectName . '/blueprint/php';
$headerPage = $myRoot . '/' . $projectName . '/blueprint/php';
$headerInc = $myRoot . '/' . $projectName . '/blueprint/php/includes';

// Redirect to the page with validation
$myHeader = 'Location:' . $myPageLink;

$emptyFields = $myHeader . '/login.php?signin=empty_fields';
$incorrectInput = $myHeader . '/login.php?signup=incorrect_input';
$invalidEmail = $myHeader . '/login.php?signin=invalid_email';
$invalidPassword = $myHeader . '/login.php?signin=invalid_password';
$noSuchUserFound = $myHeader . '/login.php?signin=no_such_user_found';
$loginSuccess = $myHeader . '/login.php?signin=login_success';
$noConnectionEstablished = $myHeader . '/login.php?signin=no_connection_established';
$welcomePage = $myHeader . '/welcome.php?signin=welcome_page';

function is_name_email($userNameEmail)
{
 if (filter_var($userNameEmail, FILTER_VALIDATE_EMAIL)) {
  return true;
 } else {
  return false;
 }
}

if (isset($_POST['userLoginBtn'])) {

 // Include database connection
 include_once $headerInc . '/dbconn_logic.php';

 // Regex Functions
 $checkAlphabets = "/^[a-zA-Z]*$/";
 $checkAdvancedAlphabets = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

 // Login Form Inputs
 $userNameEmail = mysqli_real_escape_string($conn, $_POST['user_name_email']);
 $userPassword = mysqli_real_escape_string($conn, $_POST['user_password']);

 // All the conditions for my register form validation
 if (empty($userNameEmail) || empty($userPassword)) {
  header($emptyFields);
  exit();
 } else {
  if (!preg_match($checkAdvancedAlphabets, $userNameEmail) || !preg_match($checkAdvancedAlphabets, $userPassword)) {
   header($incorrectInput);
   exit();
  } else {
   $checkNameEmail = is_name_email($userNameEmail);

   $stmt = mysqli_stmt_init($conn); // $stmt = $conn -> prepare($query);

   if ($checkNameEmail) {
    $query = "SELECT * FROM users WHERE email_address = ?";
   } else {
    $query = "SELECT * FROM users WHERE user_name = ?";
   }
   if (!mysqli_stmt_prepare($stmt, $query)) {
    header($noConnectionEstablished);
   } else {
    mysqli_stmt_bind_param($stmt, "s", $userNameEmail); // $stmt -> bind_param('ss', $a, $b);
    mysqli_stmt_execute($stmt); // $stmt -> execute();
    // mysqli_stmt_store_result($stmt);



    $result = mysqli_stmt_get_result($stmt); // $stmt -> bind_result($userNameEmail, $userPassword);
    // mysqli_stmt_free_result($stmt);
    $resultCheck = mysqli_num_rows($result); // $stmt -> store_result();


    if ($resultCheck < 1) { // if ($stmt -> num_rows == 1) 
     header($noSuchUserFound);
    } else {

     while ($row = mysqli_fetch_assoc($result)) {
      echo "hash failed";

      $hashedPassVerify = password_verify($userPassword, $row['password']);

      if ($hashedPassVerify == false) {
       echo "hash failed";
       header($noConnectionEstablished);
       exit();
      } else if ($hashedPassVerify == true) {
       echo "I am correctr.";
       $_SESSION['user_id'] = $row['user_id'];
       $_SESSION['first_name'] = $row['first_name'];
       $_SESSION['last_name'] = $row['first_name'];
       $_SESSION['user_name'] = $row['user_name'];
       $_SESSION['email_address'] = $row['email_address'];
       $_SESSION['user_avatar_image'] = $row['user_avatar_image'];
       header($welcomePage);
       exit();
      }
     }
    }

    mysqli_stmt_close($stmt); // $mysqli -> close()
    mysqli_close($conn);
   }
  }
 }
}

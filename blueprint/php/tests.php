<?php
$myRoot = $_SERVER['DOCUMENT_ROOT'];
$projectName = "Responsive-website-with-php-MySql-main";
$myPageLink = 'http://localhost:8080/' . $projectName . '/blueprint/php';
$headerPage = $myRoot . '/' . $projectName . '/blueprint/php';
$headerInc = $myRoot . '/' . $projectName . '/blueprint/php/includes';
$imageDir = 'http://localhost:8080/' . $projectName . '/resources/images(royalty-free)/uploads';
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>File Upload Form</title>
</head>

<body>
 <form action="<?= $myPageLink ?>/includes/file_upload_logic.php" method="post" enctype="multipart/form-data">
  <h2>Upload File</h2>
  <label for="fileSelect">Filename:</label>
  <input type="file" name="uploadImg" id="fileSelect">
  <input type="submit" name="testImageSubmit" value="Upload">
  <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
 </form>
</body>

</html>
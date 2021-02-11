# Responsive website with PHP & MySql + Validation

## Features

1. Bootstrap v4.0.0

1. Login/Register Form with RegEx

   1. Javascript and jQuery validation
   1. PHP validation
   1. Search contents in page with FindAndReplaceDom jquery library
   1. PHP search functionality (will add later)

## Database used:

MySQL

## Language used:

1. HTML, CSS

1. Javascript, jQuery

1. SQL

1. Pure PHP (no framework)

## Programs used

1. VS-Code

1. XAMPP

1. Browser (Chrome)

## Video Demo

[Google drive link](https://drive.google.com/file/d/1IucqQBp-KlqVh_gt3Pdre8nrf-m7s4ln/view?usp=sharing)

## Steps to reproduce

1. Go to the github link -> Code -> download ZIP.

1. Extract the folder and place it inside your XAMPP/htdocs folder.

1. Go inside the folder to -> blueprint/queries and open the .txt file.
   Copy everything inside the file.

1. Open up XAMPP control panel and start Apache and MySQL servers.
   The ports on Apache should look something like this - 4441, 8080.
   Memorize the port on the right hand side. (which in this case is 8080)

1. Head over to your browser and go to this link below.
   **localhost:8080/phpPmyadmin**

1. Click on SQL which is alongside Databases and paste the copied value from before.
   Now, run then query by holding **Ctrl + Enter** in your keyboard at the same time.
   Verify that the table is created by looking inside your database in the left hand side.

1. Open a new tab in your browser and go to this link below.
   **localhost:8080**
   Head over inside the directory **blueprint/php** and click on **homepage.php** or any of the pages.

1. Navigate to different sections of the website and twek around some features like search button and sliders.

1. At the top, click on 'Join us' or you can go to 'Sign up' by clicking on the avatar image.

1. Click on **Register** and create an account with valid inputs. Don't forget to upload your profile image.
   Verify that a user has been created by checking your database.

1. After successful creation of the a/c which you will be notified on the side,
   precede to **Login** with those acccount details.

1. If you've done all the steps correctly, you should be able to see some changes to the avatar-image and page redirects.
   Try to see what happens if you log out.

## Future Improvements

**_Date: Feb 3, 2021_**

1.  Honestly, the bootstrap classes are not managed properly. I will be sure to implement proper rules and technique.

1.  The css is too crowded. I need to modify my css into scss or less.

1.  I am going to add a bunch of forms in the future while practicing other stuff.

1.  Too much of a hassle to start XAMPP. I am gonna have to experiment on other databases.

1.  I need to work a little bit on Javascript and make the website more dynamic.

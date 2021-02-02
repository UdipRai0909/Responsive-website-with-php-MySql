// Toggle
// (function ($) {
//  $(".toggle-display").on("click", function () {
//   var $target = $($(this).attr("data-target"));
//   $target.show();
//   $target.animate({
//    left: 0,
//   });
//  });
//  $(".toggle-hide").on("click", function () {
//   var $target = $($(this).attr("data-target"));
//   $target.animate(
//    {
//     left: "100%",
//    },
//    function () {
//     $target.hide();
//    }
//   );
//  });
// })(jQuery);


// Change active navbar header color
let current_url = document.location;
document.querySelectorAll("ul.navbar-nav li.nav-item a.nav-link").forEach(function (e) {
 if (e.href == current_url) {
  e.classList += " active";
 }
});

// $(document).ready(function () {
//  $('ul.navbar-nav > li')
//   .click(function (e) {
//    $('ul.navbar-nav > li')
//     .removeClass('active');
//    $(this).addClass('active');
//   });
// });


// Search option in the page navbar

$(function () {

 $('button[name="navSearchBtn"]').click(function () {
  var searchTerm = $('input[name="navSearchKeyword"]').val();
  // Highlight search term inside a specific context
  $("body").mark(searchTerm);
 });
});



// Login Form
$(document).ready(function () {
 $(".login-info-box").fadeOut();
 $(".register-show").hide();
 $(".login-show").addClass("show-log-panel");
});

$('.login-reg-panel input[type="radio"]').on("change", function () {
 if ($("#log-login-show").is(":checked")) {
  $(".register-info-box").fadeOut();
  $(".login-info-box").fadeIn();

  $(".white-panel").addClass("right-log");
  $(".register-show").show();
  $(".login-show").hide();
  $(".register-show").addClass("show-log-panel");
  $(".login-show").removeClass("show-log-panel");
 } else if ($("#log-reg-show").is(":checked")) {
  $(".register-info-box").fadeIn();
  $(".login-info-box").fadeOut();

  $(".white-panel").removeClass("right-log");
  $(".login-show").show();
  $(".register-show").hide();
  $(".login-show").addClass("show-log-panel");
  $(".register-show").removeClass("show-log-panel");
 }
});


// Login Form Validation

// Regex Functions
var $checkAlphabets = /^[a-zA-Z]*$/;
var $checkAdvancedAlphabets = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/;
var $checkEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

// Error messages
$emptyInput = "Insert some value"
$incorrectInput = "Not in correct format";
$passwordMismatch = "Passwords not same";
$chooseGender = "Choose an option";
$chooseDate = "Choose date";
$invalidImage = "Image not valid";


function check_name_email($value) {
 $name = $checkAdvancedAlphabets.test($value);
 $email = $checkEmail.test($value);
 if ($name) {
  return $name;
 } else {
  return $email;
 }
}

// Login Username or Email
$('input[id="nameEmail"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!check_name_email($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});

// Login Password
$('input[id="logPassword"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   $display.empty();
   if (!$checkAdvancedAlphabets.test($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});


// Register Form Validation

// Register First Name
$('input[id="fname"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!$checkAlphabets.test($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});

// Register Last Name
$('input[id="lname"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!$checkAlphabets.test($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});

// Register Username
$('input[id="regUname"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!$checkAdvancedAlphabets.test($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});

// Register Email
$('input[id="regEmail"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!$checkEmail.test($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});

// Register Password
$('input[id="regPassword"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!$checkAdvancedAlphabets.test($value)) {
    $display.append($incorrectInput);
   } else {
    $display.empty();
   }
  }
 }
});

// Register Retype Password
$('input[id="regRePassword"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;
  $display = $(this).closest('div').find('.form-error span');
  $valuePwd = $('input[id="regPassword"]').val();

  if ($length < 1) {
   $display.append($emptyInput);
  } else {
   if (!$checkAdvancedAlphabets.test($value)) {
    $display.append($incorrectInput);
   } else {
    if ($value != $valuePwd) {
     $display.append($passwordMismatch);
    } else {
     $display.empty();
    }
   }
  }
 }
});

// Register Gender
$('select[id="regGender"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();

  if ($value == "Select" || $value == null) {
   $display.append($chooseGender);
  } else {
   $display.empty();
  }
 }
});

// Register Date
$('input[id="regDate"]').on({

 focus: function () {
  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
 },
 blur: function () {

  // Variables
  $value = $(this).val();
  $length = $value.length;

  if ($length < 1) {
   $display.append($chooseDate);
  } else {
   $display.empty();
  }
 }
});

// Register Upload Image 
$("#uploadImg").on({

 change: function (e) {

  $display = $(this).closest('div').find('.form-error span');
  $display.empty();
  $display.removeClass('text-dark');
  $display.removeClass('text-danger');

  // File Properties
  var file = e.target.value;
  var fileName = e.target.files[0].name;
  var fileType = e.target.files[0].type;

  // Get extension from uploaded file image
  var fileExtension = fileType.split('/').pop();

  // Allowed extensions
  var allowedExtensions = ["jpg", "jpeg", "png"];

  var lastIndexOfDot = fileName.lastIndexOf(".");
  var newFileName = fileName.substr(0, lastIndexOfDot);


  if (!allowedExtensions.includes(fileExtension)) {
   $display.addClass('text-danger').append($invalidImage);
  } else {
   if (newFileName.length < 14) {
    $display.append(fileName).addClass('text-dark');
   } else {
    // Modify name
    var firstFourChars = newFileName.substr(0, 3);
    var lastFourChars = newFileName.substr(newFileName.length - 4);
    var displayName = firstFourChars + '...' + lastFourChars + '.' + fileExtension;
    $display.append(displayName).addClass('text-dark');
   }
  }
 }
});
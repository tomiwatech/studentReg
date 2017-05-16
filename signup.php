<?php
require 'connect.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
  if (isset($_POST['username']) && isset($_POST['matric'])) {

      $matric = $_POST['matric'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $password = $_POST['password'];


$query = "INSERT INTO student(email,password,username,matric) VALUES('$email','$password','$username','$matric')";
$query_run = @mysql_query($query);
    }
  }


?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.naksoid.com/elephant-v1.2.0/theme-2/signup-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2017 18:48:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up &middot; Elephant Template &middot; The fastest way to build modern admin site for any platform, browser, or device</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta property="og:url" content="http://demo.naksoid.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build modern admin site for any platform, browser, or device">
    <meta property="og:description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta property="og:image" content="../../elephant/img/ae165ef33d137d3f18b7707466aa774d.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@naksoid">
    <meta name="twitter:creator" content="@naksoid">
    <meta name="twitter:title" content="The fastest way to build modern admin site for any platform, browser, or device">
    <meta name="twitter:description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta name="twitter:image" content="../../elephant/img/ae165ef33d137d3f18b7707466aa774d.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#0ac29d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/signup-3.min.css">
  </head>
  <body style="font-family:consolas;background:grey">
    <br>
    <br>
    <br>

   <img src="./img/heritageuser3.png" style="margin-left:40pc;height:100px">
    <div class="signup">
      <div class="signup-body">

        <h3 class="signup-heading">Sign up</h3>
        <div class="signup-form">
          <form method="post" action="signup.php">
            <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
                  <label class="md-control-label">Email</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
                  <label class="md-control-label">Password</label>
                </div>
              </div>
            </div>
                <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" name="username" minlength="6" data-msg-minlength="Username must be 6 characters or more." data-msg-required="Please enter your Username." required>
                  <label class="md-control-label">Username</label>
                </div>
              </div>
            </div>
                 <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" name="matric" data-msg-required="Please enter your matric." required>
                  <label class="md-control-label">Matric</label>
                </div>
              </div>
            </div>
           
                   <marquee>Endeavour to remember your username,password and matric to login and for subsequent use</marquee>
            <button class="btn btn-primary btn-block" type="submit">Sign up</button>
          </form>
        </div>
      </div>
      <div class="signup-footer">
      <span style="color:white">Already have an account? </span>   <a href="index.php">Log in</a>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>

<!-- Mirrored from demo.naksoid.com/elephant-v1.2.0/theme-2/signup-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2017 18:49:00 GMT -->
</html>

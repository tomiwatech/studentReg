<?php 
require 'connect.php';

global $notify;

if (isset($_POST['fullname']) && isset($_POST['matric'])) {
   if (isset($_POST['semester']) && isset($_POST['email'])) {
       if (isset($_POST['programme']) && isset($_POST['sex'])) {

                  $fullname = $_POST['fullname'];
                  $matric = $_POST['matric'];
                  $semester = $_POST['semester'];
                  $email = $_POST['email'];
                  $programme = $_POST['programme'];
                  $sex = $_POST['sex'];
                
$query = "INSERT INTO notify(fullname,matric,semester,email,programme,sex) VALUES('$fullname','$matric','$semester','$email','$programme','$sex')";
 
 if ($query_run = @mysql_query($query)) {
   $notify = "Your notification has been sent";
 }


               }
           }
    }



?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.naksoid.com/elephant-v1.2.0/theme-2/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2017 18:46:55 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notify</title>
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
    <link rel="stylesheet" href="css/application.min.css">
  </head>
  <body class="layout layout-header-fixed" style="font-family:consolas">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="index.html">
            <img class="navbar-brand-logo" src="img/logo-inverse.svg" alt="Elephant">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>

            <h4 style="text-align:center;padding-top:5px;color:#0ac29d;">STUDENT REGISTRATION SYSTEM</h4>

          </nav>
        </div>
      </div>
    </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="sidenav-search hidden-md hidden-lg">
                  <form class="sidenav-form" action="http://demo.naksoid.com/">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
                <li class="sidenav-item has-subnav active">
                  <a href="dashboard-1.html" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboards</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Dashboard</li>
                    <li><a href="index.php">Home</a></li>

                  </ul>
                </li>
                <li class="sidenav-heading">Pages</li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-edit"></span>
                    <span class="sidenav-label">Bio data</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Biod data</li>
                    <li><a href="bio.php">Enter Biodata</a></li>
                    <li><a href="allbio.php">View Biodata</a></li>

                  </ul>
                </li>

                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-list"></span>
                    <span class="sidenav-label">Course Registration</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Course Registration</li>
                    <li><a href="course.php">Register courses</a></li>
                    <li><a href="allcourses.php">View Registered courses</a></li>
                  </ul>
                </li>

                <li class="sidenav-heading">Core</li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-lock"></span>
                    <span class="sidenav-label">Uploads</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Uploads</li>
                    <li><a href="signup-1.html" target="_blank">Jamb Admission Letter</a></li>
                    <li><a href="signup-2.html" target="_blank">Birth certificate</a></li>
                    <li><a href="signup-3.html" target="_blank">Waec certificate</a></li>
                    <li><a href="login-1.html" target="_blank">High school Testimonial</a></li>
                    <li><a href="login-2.html" target="_blank">Reference letter</a></li>

                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-edit"></span>
                    <span class="sidenav-label">Notification</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Notification</li>
                    <li><a href="notify.php">Notify Admin</a></li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
    <h5 style="color:#0ac29d;text-align: center"> SEND NOTIFICATIONS TO COURSE ADVISER</h3>
      <br>

<form class="form-horizontal" role="form" style="width: 80%;color: #0ac29d" method="post" action="notify.php">
                                <div class="form-body">
                                
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">FULL NAME</label>
                                        <div class="col-md-9">
                                            <div class="input-inline input-medium">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                <input type="text" name="fullname" class="form-control" placeholder="Enter Full Name" required> </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <br>
                                     
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">SEMESTER</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="semester" required>
                                                <option></option>
                                                <option>FIRST</option>
                                                <option>SECOND</option>
                                            </select>
                                        </div>
                                      </div>

                                        <br>


                                    <div class="form-group">
                                        <label class="col-md-3 control-label">MATRIC NUMBER</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                      <input type="text" name="matric" class="form-control" placeholder="Enter Matric" required> </div>
                                        </div>
                                    </div>
                                      <br>




                                     <div class="form-group">
                                        <label class="col-md-3 control-label">PROGRAMME</label>
                                        <div class="col-md-9" class="form-control">
                                            <select class="form-control" name="programme" required>
                                                <option></option>
                                                <option>ND</option>
                                                <option>HND</option>
                                            </select>
                                        </div>
                                    </div>
                                      <br>



                                      

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">EMAIL ADDRESS</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required> </div>
                                        </div>
                                    </div>
                                      <br>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label">SEX</label>
                                        <div class="col-md-9">
                                            <select class="form-control" name="sex" required>
                                                <option></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div> 
                                                              
                    
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
 <button type="submit" style="background: #0ac29d;color: white;width: 100px;margin-right: 17pc;margin-top: 5px" class="btn green" >NOTIFY</button>
                    <br>
                    <br>
                    <br>
              <p style="text-align: center"><?php echo $notify;?></p>
                                        </div>
                                    </div>
                                </div>
                            </form>

        </div>
      </div>
      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.2.0</small>
          <small class="copyright">2016 &copy; Elephant By <a href="http://naksoid.com/">Naksoid</a></small>
        </div>
      </div>
    </div>
    <div class="theme">
      <div class="theme-panel theme-panel-collapsed">

        <div class="theme-panel-body">
          <div class="custom-scrollbar">
            <div class="custom-scrollbar-inner">
              <h5 class="theme-heading">
                <a href="http://demo.naksoid.com/elephant-v1.2.0/buy" class="btn btn-primary btn-block">Buy Elephant Now!</a>
              </h5>
              <ul class="theme-settings">
                <li class="theme-settings-heading">
                  <div class="divider">
                    <div class="divider-content">Theme Settings</div>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Header fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-header-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar sticky*</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-sticky" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Sidebar collapsed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-sidebar-collapsed" data-sync="false">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-item">
                  <div class="theme-settings-label">Footer fixed</div>
                  <div class="theme-settings-switch">
                    <label class="switch switch-primary">
                      <input class="switch-input" type="checkbox" name="layout-footer-fixed" data-sync="true">
                      <span class="switch-track"></span>
                      <span class="switch-thumb"></span>
                    </label>
                  </div>
                </li>
                <li class="theme-settings-description">
                  <span>
                    <strong>Sidebar sticky*</strong> - by scrolling up and down the page, the menu placed on the sidebar moves along with the content until the bottom of the menu is reached. <a href="page-layouts.html">Learn more</a></span>
                </li>
              </ul>
              <hr class="theme-divider">
              <ul class="theme-variants">
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/flaming-red/" title="Flaming Red (default)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/9722110524.jpg" alt="Flaming Red Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/flaming-red-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/flaming-red-inverse/" title="Flaming Red (inverse)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/9870681590.jpg" alt="Flaming Red Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/flaming-red-inverse-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-4/" title="Flatistic Green (default)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/9964167452.jpg" alt="Flatistic Green Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-4-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-4-inverse/" title="Flatistic Green (inverse)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1007517980.jpg" alt="Flatistic Green Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-4-inverse-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-3/" title="Midnight Blue (default)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1015664515.jpg" alt="Midnight Blue Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-3-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-3-inverse/" title="Midnight Blue (inverse)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1025453682.jpg" alt="Midnight Blue Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-3-inverse-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-5/" title="Materialistic Blue (default)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1033422797.jpg" alt="Materialistic Blue Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-5-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-5-inverse/" title="Materialistic Blue (inverse)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1044368407.jpg" alt="Materialistic Blue Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-5-inverse-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-6/" title="Eerie Black (default)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1050099119.jpg" alt="Eerie Black Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-6-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
                <li class="theme-variants-item">
                  <a class="theme-variants-link" href="http://demo.naksoid.com/elephant-v1.2.0/theme-6-inverse/" title="Eerie Black (inverse)" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">
                    <img class="img-responsive" src="img/1067123558.jpg" alt="Eerie Black Theme">
                  </a>
                  <a class="theme-variants-alt" href="http://demo.naksoid.com/elephant-v1.2.0/theme-6-inverse-rounded/" title="Rounded Corners Version" data-container="body" data-trigger="hover" data-placement="top" data-toggle="tooltip">Rounded</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="theme-panel-footer">
          <a class="rounded sq-36 bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdemo.naksoid.com%2Felephant&amp;t=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device" title="Share on Facebook" target="_blank">
            <span class="icon icon-facebook"></span>
          </a>
          <a class="rounded sq-36 bg-twitter" href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fdemo.naksoid.com%2Felephant&amp;text=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device:%20http%3A%2F%2Fdemo.naksoid.com%2Felephant&amp;via=naksoid" title="Tweet" target="_blank">
            <span class="icon icon-twitter"></span>
          </a>
          <a class="rounded sq-36 bg-googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fdemo.naksoid.com%2Felephant" title="Share on Google+" target="_blank">
            <span class="icon icon-google-plus"></span>
          </a>
          <a class="rounded sq-36 bg-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Fdemo.naksoid.com%2Felephant&amp;title=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&amp;summary=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.&amp;source=http%3A%2F%2Fdemo.naksoid.com%2Felephant" title="Share on LinkedIn" target="_blank">
            <span class="icon icon-linkedin"></span>
          </a>
          <a class="rounded sq-36 bg-pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fdemo.naksoid.com%2Felephant&amp;media=http://demo.naksoid.com/elephant/img/ae165ef33d137d3f18b7707466aa774d.jpg&amp;description=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner." title="Pin it" target="_blank">
            <span class="icon icon-pinterest-p"></span>
          </a>
          <a class="rounded sq-36 bg-default" href="mailto:?subject=The%20fastest%20way%20to%20build%20modern%20admin%20site%20for%20any%20platform%2C%20browser%2C%20or%20device&body=Elephant%20is%20a%20front-end%20template%20created%20to%20help%20you%20build%20modern%20web%20applications%2C%20fast%20and%20in%20a%20professional%20manner.:%20http%3A%2F%2Fdemo.naksoid.com%2Felephant" title="Send email" target="_blank">
            <span class="icon icon-envelope-o"></span>
          </a>
        </div>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>

<!-- Mirrored from demo.naksoid.com/elephant-v1.2.0/theme-2/dashboard-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Apr 2017 18:47:09 GMT -->
</html>

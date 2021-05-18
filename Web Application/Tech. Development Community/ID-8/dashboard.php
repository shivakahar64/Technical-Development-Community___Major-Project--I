<!-- _____________________________________________Official @2020 Tech. Development Community_______________________________________________ -->
<!-- ______________________________________________All Rights Reserved To Tech. Development________________________________________________ -->
<!-- _____________________________________________Designed By Shiva Kahar And Aditya Prakash_______________________________________________ -->
<!-- _________________________________________Events Organizer Of Tech Community Mr. Shyam Maurya__________________________________________ -->
<!-- ____________________________________Our Team Members Shiva Kahar, Aditya Prakash And Shyam Maurya_____________________________________ -->
<!-- _______________________Used Tools In Tech. Development [ HTML, CSS & CSS-3, BOOTSTRAP, JAVASCRIPT, SCSS, PHP, ETC.____________________ -->
<?php
include('../user_check.php');
if(!isset($_SESSION['client_user'])){
header("location: ../ID-10/user_login.php"); // Redirecting To Home Page
}
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../ID-10/user_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: ../ID-10/user_login.php");
  }
?>
<!DOCTYPE html>
<html lang="en-US">       <!-- ===== HTML TAG START FROM HERE ===== -->
<head>          <!-- ===== HEAD TAG START FROM HERE -->
    <!-- TITLE OF TECH. DEVELOPMENT COMMUNITY ============================================================================================= -->
    <title>Tech. Community | User Dashboard</title>

    <!-- META TAGS ARE USED | TECH DEVELOPMENT COMMUNITY ============================================---=================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">     <!-- ===== META TAG ===== -->
    <meta name="description" content="TECH. COMMUNITY" />     <!-- ===== META TAG ===== -->
    <meta name="keywords" content="TECH. DEVELOPMENT COMMUNITY" />      <!-- ===== META TAG ===== -->
    <meta name="author" content="Shiva Kahar, Aditya Prakash, Shyam Maurya - Tech. Development Community" />     <!-- ===== META TAG ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">     <!-- ===== META TAG ===== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">     <!-- ===== META TAG ===== -->
    <meta charset="utf-8">     <!-- ===== META TAG ===== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">     <!-- ===== META TAG ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">     <!-- ===== META TAG ===== -->
    <meta http-equiv="X-UA-Compatible" content="IE=9">     <!-- ===== META TAG ===== -->
    <meta name="description" content="Tech. Development">     <!-- ===== META TAG ===== -->
    <meta name="language" content="en"/>     <!-- ===== META TAG ===== -->
    <meta name="location" content="in"/>     <!-- ===== META TAG ===== -->
    <meta http-equiv="refresh" content="">     <!-- ===== META TAG ===== -->
    <meta name="X-Server" content="PRD1-04"/>     <!-- ===== META TAG ===== -->
    <meta property="og:image" content="https://www.tech.developed.com/images/logo.png"/>     <!-- ===== META TAG ===== -->
    <meta property="og:type" content="community"/>     <!-- ===== META TAG ===== -->
    <meta property="og:site_name" content="Tech. Development"/>     <!-- ===== META TAG ===== -->
    <meta property="og:title" content="Tech. Development | A Technical Development Community"/>     <!-- ===== META TAG ===== -->
    <meta property="fb:admins" content="255508181297196"/>     <!-- ===== META TAG ===== -->
    <meta property="og:url" content="https://www.tech.developed.com/index.html"/>     <!-- ===== META TAG ===== -->
    <meta property="og:description" content="Tech. Development&#039;"/>     <!-- ===== META TAG ===== -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>     <!-- ===== META TAG ===== -->
    <meta name="reimaginefilters" content=""/>     <!-- ===== META TAG ===== -->
    <meta name="generic1" content="true"/>     <!-- ===== META TAG ===== -->
    <meta name="localecode" content="en_IN"/>     <!-- ===== META TAG ===== -->
    <meta name="mime" content="text/html"/>     <!-- ===== META TAG ===== -->
    <meta name="format" content="homepage-rwd"/>     <!-- ===== META TAG ===== -->
    <meta name="lastModifieddate" content="2019-10-02T18:28:49.396-07:00"/>     <!-- ===== META TAG ===== -->
    <meta name="intelkeywords" content="Tech.Developmemt"/>     <!-- ===== META TAG ===== -->
    <meta name="taxonomy" content=" We are working in a team as a nonprofit in wrold wild"/>     <!-- ===== META TAG ===== -->
    <meta name="title" content="Tech. Development |Free Cources, Data Science, AI And ML"/>     <!-- ===== META TAG ===== -->
    <!-- META TAGS SECTION END HERE ======================================================================================================= -->

    <!-- LINKS SECTION START FROM HERE | TECH. DEVELOPMENT COMMUNITY ====================================================================== -->
    <link rel="icon" href="../ID-10/assets/images/Tech-Logo.png">       <!-- ===== LOGO ===== -->
    <link rel="stylesheet" href="style.css">        <!-- ===== STYLE CSS FILE ===== -->
    <link rel="stylesheet" href="../ID-10/assets/css/pre_loader.css">       <!-- ===== PRE-LOADER CSS FILE ===== -->
    <!-- LINKS SECTION END HERE =========================================================================================================== -->
</head>             <!-- ========== HEAD TAG END HERE ========== -->
<body>             <!-- ========== BODY SECTION END HERE ========== -->
    <!-- PRE-LOADER SECTION START FROM HERE | TECH DEVELOPMENT COMMUNITY ================================================================== -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img id="proloader-run" src="../ID-10/assets/images/Tech-Logo.png"  alt=""> <!-- Logo On Preloader -->
                </div>
            </div>
        </div>
     </div>
    <!-- PRE-LOADER SECTION END HERE ====================================================================================================== -->
   
    <!-- HEADER SECTION START FROM HERE | TECH. DEVELOPMENT COMMUNITY ===================================================================== -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <nav class="classy-navbar justify-content-between" id="conferNav">      <!-- ===== CLASSY MENU ===== -->
                    <!-- =========== Logo ============ -->
                    <a class="nav-brand" href="./index.html"><img id="loader" style="width: 60px; height: 60px; margin-left: 30px;" src="../ID-10/assets/images/Tech-Logo.png" alt=""></a>
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">       <!-- ===== MENU ===== -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>     <!-- ===== BUTTON ===== -->
                        </div>
                        <div class="classynav">         <!-- ====== CLASSY NAV START ====== -->
                            <ul id="nav">
                                <li class="cool-link-1"><a href="science.html"><i class="fa fa-home" aria-hidden="true"></i> USER ID :  <?php 
                            
                            $conn = mysqli_connect('localhost', '', '', '');

                            if($conn -> connect_error){
                                    die("Connection Failed!".$conn->connect_error);
                                } 
                                $sql = "SELECT ID, Name, Email, Gender, Mobile_Number, Aadhar_Number, Password FROM Registration WHERE Email='$login_client_session'";
                                $result = $conn->query($sql);
                            
                            if($result-> num_rows > 0){
                                    while($rows = $result-> fetch_assoc()){
                                            echo " ".$rows['ID']."";
                                            echo "";
                                    } 
                            } 
                    ?></a></li>       <!-- ===== HOME PAGE ===== -->
                                <li class="cool-link-1"><a href=""> Dashboard</a></li>
                                <li class="cool-link-1"><a href=""> Profile</a></li> 
                                <li class="active cool-link-1"><a href=""> Notification</a></li>    
                                <li class="active cool-link-1"><a href=""> Repost's</a></li>    
                                <li class="active cool-link-1"><a href=""> Helps</a></li>    
                                <li class="active cool-link-1"><a href="">Study</a></li>    
                                <li class="active cool-link-1"><a href="">Puschase's</a></li>    
                                <li class="active cool-link-1"><a href="dashboard.php?logout='1'"> Logout</a></li>    
                            </ul>
                        </div>
                    </div>          <!-- ===== NAV END ===== -->
                </nav>
            </div>
        </div>
    </header>
    <!-- HEADER SECTION END HERE =========================================================================================================== -->

    <!-- TITLE SECTION START FROM HERE | TECH. DEVELOPMENT COMMUNITY ======================================================================= -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">User Dashboard</h2>
                        <nav aria-label="breadcrumb">
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TITLE SECTIO END HERE ============================================================================================================= -->


    <section class="section-padding-100-0">
        <div class="container">


        <?php 
                            
                            $conn = mysqli_connect('localhost', 'u657949784_tech_develop', 'tech@1234', 'u657949784_tech_develop');
                            if($conn -> connect_error){
                                    die("Connection Failed!".$conn->connect_error);
                                } 
                                $sql = "SELECT ID, Name, Email, Gender, Mobile_Number, Aadhar_Number, Password FROM Registration WHERE Email='$login_client_session'";
                                $result = $conn->query($sql);
                            
                            if($result-> num_rows > 0){
                                    while($rows = $result-> fetch_assoc()){
                                            echo " <h3> <b>Welcome In Your Profile ".$rows['Name']."</b></he>";
                                            echo "";
                                    } 
                            } else {
                                echo "No Records Are Available For This User";
                            }
                    ?>
        <div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
<div class="error success" >
  <h3>
  <?php 
      echo $_SESSION['success']; 
      unset($_SESSION['success']);
  ?>






        </div>
    </div>













    <!-- FOOTER SECTION START FROM HERE | TECH. DEVELOPMENT COMMUNITY ====================================================================== -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
    <div class="container">           <!-- ===== COPY-RIGHTS ====== -->
            <div class="copywrite-content">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p> Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Technical Development Community</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">           <!-- ===== FOOTER PRIVACY ====== -->
                        <div class="footer-menu">
                            <ul class="nav">
                                <li class="cool-link-1"><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>           <!-- ===== TERMS & SERVICES ====== -->
                                <li class="cool-link-1"><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>           <!-- ===== PRIVACY pOLICY ====== -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END HERE =========================================================================================================== -->


    
    <!-- JAVASCRIPT FILES SECTIONS START FROM HERE | TECH. DEVELOPMENT COMMUNITY =========================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="../ID-10/assets/js/preloader.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/confer.bundle.js"></script>
    <script src="js/default-assets/active.js"></script>
    <!-- JAVASCRIPT FILE SECTION END HERE ================================================================================================== -->

</body>         <!-- ===== BODY SECTION END ===== -->
</html>           <!-- ===== HTML TAG SECTION END ====== -->
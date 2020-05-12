<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SCHOLARLY - Reliable sourses only</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/logo.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area" >
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Create an account at Scholarly</h5>
                        <form id = 'create_account' class="newsletterForm" method="post" name = 'signup_form'>
                            <input type="name" name="fname" id="subscribesForm2" placeholder="First name">
                            <input type="name" name="lname" id="subscribesForm2" placeholder="Last name">
                            <input type="email" name="email" id="subscribesForm2" placeholder="Your e-mail here">
                            <input type="password" name="password" id="subscribesForm2" placeholder="Input password">
                            <input type="password" name="password2" id="subscribesForm2" placeholder="Confrim password">
                            <button type="submit" name = 'create_account' class="btn original-btn">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe-newsletter-area" id = 'login_form'>
        <div class="modal fade" id="subsModal2" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Login at Scholarly</h5>
                        <form class="newsletterForm" method="post" name = 'login_form'>
                            <input type="email" name="login_email" placeholder="Your e-mail here">
                            <input type="password" name="login_password" placeholder="Input password">
                            <button type="submit" name = 'login_account' class="btn original-btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Hello World!</a></li>
                                    <li><a href="#">Hello Profesors!</a></li>
                                    <li><a href="#">Hello Scholars!</a></li>
                                    <li><a href="#">Hello everyone!</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-12 col-sm-4">
                        <div class="top-social-area">
                            <a href="http://www.facebook.com" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="http://www.twitter.com" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="http://www.linkedin.com" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <a href="index.php" class="original-logo"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">Create An Account</a>
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal2">Login</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="contact.php">Contact</a></li></ul>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel" height = 90px;>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/ph1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Scholarly</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">The best proffesors in the world are here for you</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/ph4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Scholarly</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">The best proffesors in the world are here for you</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/ph5.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Scholarly</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="single-post.html">The best proffesors in the world are here for you</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Scholarly</a>
                            <h4><a href="#" class="post-headline">Welcome to Scholarly</a></h4>
                            <p>Scholarly is a page designed to provide you with the best and reliable sourced articles. You are welcomed to stay</p>
                            <a href="#login_form" class="btn original-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="img\blog-img\ph1.jpg">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">Recent Articles</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="img\blog-img\ph3.jpg">
                        <!-- Catagory Title -->
                        <div class="catagory-title">
                            <a href="#">Most read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <!-- Widget Area
                        <div class="sidebar-widget-area">
                            <h5 class="title">Tags</h5>
                            <div class="widget-content">
                                <ul class="tags">
                                    <li><a href="#">African</a></li>
                                    <li><a href="#">African-American</a></li>
                                    <li><a href="#">Negro</a></li>
                                    <li><a href="#">Africa Rising</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center" style="position:inherit;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   
                    <!-- Footer Nav Area -->
                    <div class="classy-nav-container breakpoint-off">
                        <!-- Classy Menu -->
                        <nav class="classy-navbar justify-content-center">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav" style="position: inherit;">
                                    <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                        </nav>
                    </div>
                    
                    <!-- Footer Social Area -->
                    <div class="footer-social-area mt-30">
                    <a href="http://www.facebook.com" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="http://www.twitter.com" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="http://www.linkedin.com" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>

   <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


    <?php
        include "commons.php";
        
        //this inserts the information after accessing them into the customer table so that the user becomes a registered customer who can check out products
        $ID = "";
        $fname = "";
        $lname = "";
        $email = "";
        $password = "";

        if(isset($_POST['create_account']))
            {	
                $ID = "";
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $passwd = $_POST['password'];

                // define variables and set to empty values
                //PHP validation for the input fields in the form


                //Code to check if the account already exists - using the email
                $sql = $conn->prepare("SELECT ID FROM User WHERE email = '$email'");
                $sql->execute();
                $results = $sql->fetchAll();
                $account = sizeof($results); 
                
                if($account > 0){
                echo "<script type = 'text/javascript'>window.alert('This Account Already Exists')</script>";
                echo "<script type = 'text/javascript'> window.location = '#login_form'</script>";

                }

                else{

                $sql =  $conn->prepare("INSERT INTO User (ID, fname, lname, email, passwd) VALUES (?,?,?,?,?)");
                $result = $sql->execute(array($ID, $fname, $lname, $email, $passwd));
                echo "<script type = 'text/javascript'>window.alert('Account Has Been Created Successfully')</script>";
                echo "<script type = 'text/javascript'> window.location = '#login_form'</script>";

            }

                //$conn = null;
            }

    ?>

    <?php
            //include "commons.php";

            if(isset($_POST['login_account']))
            {
                $email = $_POST['login_email'];
                $passwd = $_POST['login_password'];

                $sql0 = $conn->prepare("SELECT ID FROM adm WHERE email = '$email' AND passwd = '$passwd'");
                $sql0->execute();
                $admincheck = $sql0->fetchAll();
                $logs0 = sizeof($admincheck); 

                if($logs0 >= 1){
                    echo "Hello World";
                    echo "<script type = 'text/javascript'> window.alert('Admin log in successful')</script>";
                    echo "<script type = 'text/javascript'> window.location = 'profaccounts.php'</script>";
    
                    }

                    else{

                $sql1 = $conn->prepare("SELECT ID FROM User WHERE email = '$email' AND passwd = '$passwd'");
                $sql1->execute();
                $results1 = $sql1->fetchAll();
                $logs = sizeof($results1); 
                echo $logs;
                
                if($logs < 1){
                echo "<script type = 'text/javascript'> window.alert('Account does not exist')</script>";
                echo "<script type = 'text/javascript'> window.location = '#create_account'</script>";

                }
                else{
                    echo "<script type = 'text/javascript'>window.alert('Login successful')</script>";
                    echo "<script type = 'text/javascript'> window.location = 'account.php'</script>";


                }

                $conn = null;

            }
            }

    ?>

</body>


</html>
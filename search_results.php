<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Scholarly - Reliable sources only</title>

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
                                    <li><a href="index.php">Log Out</a></li>

                                <!-- Search Form  -->
                                <li><div id="search-wrapper">
                                    <form action = 'search_results.php?'>
                                        <input name = 'query' type="text" id="search" placeholder="Search something...">
                                        <div id="close-icon"></div>
                                        <button type = 'Submit' name = 'searcher' value ='yes'>Search</button>                                        
                                    </form>
                                </div></li>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Cool Facts Area End ##### -->
    <center><h1>Search Results</h1></center>
    <!--Results of Search Display Starts Here-->
    <?php

    #Getting the search term from URL
        include 'commons.php';

        $term = "";
        if(isset($_GET['query']))
        {
            $term = $_GET['query'];
       
            #Returning Search Results from database

            $sql4 = $conn->prepare("SELECT * FROM books WHERE title LIKE '%$term%' OR descrp LIKE '%$term%' OR category LIKE '%$term%' or author LIKE '%$term%'");
            $sql4->execute();
            $search_results = $sql4->fetchAll();
            $search_qty = sizeof($search_results); 
            //echo $books[0]['title'];

            if($search_qty < 1){
                echo "<center><h1>No Books Match Your Search Term</h1>
                <p>Try Using Different Terms</p></center>";
            }
            else{
    
                for($i = 0; $i < $search_qty; $i += 3){
                echo "
                <!-- ##### Blog Wrapper Start ##### -->
                <div class=\"blog-wrapper section-padding-100-0 clearfix\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <!-- Single Blog Area  -->
                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <div class=\"single-blog-area blog-style-2 mb-100\">
                                    <div class=\"single-blog-thumbnail\">
                                        <img src=\"img/blog-img/4.jpg\" alt=\"\">
                                        <div class=\"post-date\">
                                            <a href=\"#\">2013 <span>march</span></a>
                                        </div>
                                    </div>
                                    <!-- Blog Content -->
                                    <div class=\"single-blog-content mt-50\">
                                        <div class=\"line\"></div>
                                        <a href=\"#\" class=\"post-tag\">Top Post</a>
                                        <h4><a href=\"#\" class=\"post-headline\">" . $search_results[$i+0]['title'] . "</a></h4>
                                        <p>" . $search_results[$i+0]['descrp']."</p>
                                        <div class=\"post-meta\">
                                            <p>By <a href=\"#\"> " . $search_results[$i+0]['author'] . "</a></p>
                                            <p>" . $search_results[$i+0]['category']."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                            if(array_key_exists($i + 1, $search_results)){
                                echo"
                            <!-- Single Blog Area  -->
                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <div class=\"single-blog-area blog-style-2 mb-100\">
                                    <div class=\"single-blog-thumbnail\">
                                        <img src=\"img/blog-img/5.jpg\" alt=\"\">
                                        <div class=\"post-date\">
                                            <a href=\"#\">2011 <span>April</span></a>
                                        </div>
                                    </div>
                                    <!-- Blog Content -->
                                    <div class=\"single-blog-content mt-50\">
                                        <div class=\"line\"></div>
                                        <a href=\"#\" class=\"post-tag\">Top post 2</a>
                                        <h4><a href=\"#\" class=\"post-headline\">" . $search_results[$i+1]['title'] . "</a></h4>
                                        <p>" . $search_results[$i+1]['descrp'] . " </p>
                                        <div class=\"post-meta\">
                                            <p>By <a href=\"#\">" . $search_results[$i+1]['author']."</p>
                                            <p>" . $search_results[$i+1]['category'] . " </p>
                                        </div>
                                    </div>
                                </div>
                            </div>";}
                            if(array_key_exists($i+2,$search_results)){
                                echo "
                            <!-- Single Blog Area  -->
                            <div class=\"col-12 col-md-6 col-lg-4\">
                                <div class=\"single-blog-area blog-style-2 mb-100\">
                                    <div class=\"single-blog-thumbnail\">
                                        <img src=\"img/blog-img/6.jpg\" alt=\"\">
                                        <div class=\"post-date\">
                                            <a href=\"#\">2020 <span>January</span></a>
                                        </div>
                                    </div>
                                    <!-- Blog Content -->
                                    <div class=\"single-blog-content mt-50\">
                                        <div class=\"line\"></div>
                                        <a href=\"#\" class=\"post-tag\">Top Post 3</a>
                                        <h4><a href=\"#\" class=\"post-headline\"> " . $search_results[$i+2]['title'] . " </a></h4>
                                        <p>" . $search_results[$i+2]['descrp'] . " </p>
                                        <div class=\"post-meta\">
                                            <p>By <a href=\"#\">" . $search_results[$i+2]['author']."</a></p>
                                            <p>" . $search_results[$i+2]['category'] . " </p>
                                        </div>
                                    </div>
                                </div>
                            </div>";}
                    echo " </div>
                    </div>
                </div>
                            
    ";}}}
    ?>

    <!--Results of Search Display Ends Here-->


    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">
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
                                <div class="classynav">
                                    <ul>
                                        <li><a href="#">Contact</a></li>
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

    

</body>

</html>
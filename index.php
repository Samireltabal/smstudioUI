<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sm Studio</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="css/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-danger fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="SM Studio , Creative Web Solutions" data-placement="bottom" target="_blank">
                    <img class="n-logo" src="img/now-logo.png" alt=""  width="30" height="30" > Studio
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-folder"></i>
                            <p>Products</p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Hosting</a>
                                <a class="dropdown-item" href="#">Scripts</a>
                                <a class="dropdown-item" href="#">Designs</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-folder"></i>
                            <p>Services</p>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Web Development</a>
                                <a class="dropdown-item" href="#">Web Design</a>
                                <a class="dropdown-item" href="#">Server Management</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Downloads</p>
                        </a>                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Portfolio</p>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-user"></i>
                                <p>Sign Up</p>
                            </a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-neutral" href="#">
                            <i class="fa fa-sign-in"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
               
            </div>            
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('img/header.jpg');">
            </div>
            <div class="container">
                <div class="content-center brand">
                    
                    <div class="clearfix"></div>
                    <div class="card card-signup" data-background-color="black">
                            <form class="form" method="" action="">
                                <div class="header text-center">
                                   <img class="n-logo" src="img/now-logo.png" alt="">
                                </div>
                                <div class="card-body">
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user-circle"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Username...">
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="fa fa-key"></i>
                                        </span>
                                        <input type="Password" placeholder="Password..." class="form-control" />
                                    </div>
                                    
                                    <!-- If you want to add a checkbox to this form, uncomment this code -->
                                    <div class="checkbox">
                                      <input id="checkboxSignup" type="checkbox">
                                          <label for="checkboxSignup">
                                          Remember me
                                          </label>
                                        </div> 
                                </div>
                                <div class="footer text-center">
                                    <button href="#pablo" type="submit" class="btn btn-neutral btn-round btn-lg">Login</button>
                                </div>
                            </form>
                        </div>
                </div>
                
            </div>
        </div>
        
        <footer class="footer" data-background-color="black">
            <div class="container">
                <div class="row">
                <div class="col-lg-4">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contacts 
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div class="col-lg-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ut, a ad, cumque labore corporis obcaecati magnam sapiente nihil maiores possimus similique eum et sit deserunt, harum voluptates est reprehenderit.</p>
                </div>
                <div class="col-lg-4">
                    
                <div class="copyright">
                        <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            TOS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Careers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Contacts 
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <br>
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>  <a href="#" target="_blank">SmStudio</a>. , All rights reserved 
                    
                </div>
                </div>
        </div>
    </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>

</html>
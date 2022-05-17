<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <link rel="icon" type="image/png" href="../assets/img/icon-title.png" />
    <title>SolMusic Station Merchant Tool</title>
    <link href="../assets/font-google/css/font-google-home.css" rel="stylesheet" type="text/css" />
    <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" /> 
    <link href="../assets/css/vendor/bootstrap.css" rel="stylesheet" type="text/css" />    
    <link href="../assets/css/vendor/superslides.css" rel="stylesheet" type="text/css" />     
    <link href="../assets/css/vendor/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/vendor/owl.transitions.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../assets/css/vendor/flickity.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/swipebox.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/TimeCircles.css">
    <link href="../assets/css/intro-slider.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/slick-theme.css" rel="stylesheet" type="text/css" /> 
    <link href="../assets/css/slick.css" rel="stylesheet" type="text/css" /> 
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/vendor/animate.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/vendor/jquery-confirm.css" />
        <link rel="stylesheet" href="style1.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../assets/js/vendor/modernizr.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d7b1e20284.js" crossorigin="anonymous"></script>
    
</head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">
    <!-- LOADER -->
    <div id="mask">
        <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
        </div>
    </div>
    
<!-- HEADER -->
<header id="jHeader">
<nav class="navbar navbar-default " role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="v1.php"><img src="../assets/images/logo.png" alt="logo" style="margin-top: -22px;"></a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="v1.php">Home</a></li>
        <li><a href="#" class="contactsky">Contact</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Hello, <?= $_SESSION['name'] ?>
        </a>
        <div class="dropdown-menu" style="padding-left:10px;">
        <p><a class="dropdown-item" href="profile.php">Profile</a></p>
        <p><a class="dropdown-item" href="../auth/logout.php">Logout</a></p>
        </div>
        </li>
    </ul>
    </div>
</nav>
</header><input type="hidden" value="0" id="islogin"/>
        
<!-- INTRO -->
<div class="blocking">  
<h1><?php echo "Hello, ".$_SESSION['name'];?> </h1>

<div class="wrap">
    <img src="user.png">
    <br>
    <br>
    <p>Name: <?php echo $_SESSION['name'];?></p>
    <p>Gender: <?php echo $_SESSION['gender'];?></p>
    <p>Email: <?php echo $_SESSION['email'];?></p>
    <p>Phone: <?php echo $_SESSION['phone'];?></p>
    <p>Password: <?php echo $_SESSION['password'];?></p>
</div>
<br>
<br>
<button onclick="document.location='../auth/logout.php'" style="width: 20%; text-align:center; margin-left: 600px;" class="btn btn-primary btn-block btn-flat">Log Out</button>

</div>

<section class="section inverse-color contact" id="anchor08">
<div class="container">
    
        <div class="social">
        <div class="items">
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_1.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_2.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_3.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_4.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_5.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_6.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_7.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_8.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_9.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_10.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_11.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_12.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_13.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_14.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_15.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_16.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_17.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_18.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_19.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_20.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_21.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_22.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_23.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_24.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_25.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_26.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_27.png"> </div>
            </div>
            <div class="card">
                <div class="card-body"> <img class="logo" src="../../img.solmusic.vn/xmusicstation/home/images/lg_28.png"> </div>
            </div>
        </div>
    </div>

    <div class="voffset80"></div>
    
</div>
</section>
<form id="form_popup_contact" method="post" role="form">
        <div id="box_popup_contact">
            <div class="box_contact">
                <div class="bg">
                    
                </div>
                <div class="info_contact">
                    <span class="close"></span>
                    <div class="head">Contact Us</div>
                    
                    <div class="contact_form">
                        <form id="contact-popup">
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input class="required input"  aria-required="true" type="text" id="fullname" name="fullname" placeholder="Your Name">
                            </div>
                            <div class="group">
                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input class="input" type="text" name="email" placeholder="Email">
                        </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input class="input" type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fas fa-user-edit" aria-hidden="true"></i></span>
                                <textarea class="textarea" name="message" placeholder="What You Looking For?"></textarea>
                            </div>
                            
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                <input class="capchar" type="text" name="captcha" placeholder="Input Code">
                                <img class="txt_capcha" src="http://quanly.xms.vn/ajax/captcha" />
                                <img class="reload_captcha" src="../../img.solmusic.vn/xmusicstation/home/images/icon-reload.png" />
                            </div>
                            <div class="group">
                                <input class="btn_contact" id="contact-popup" type="submit" name="submit" value="Submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>
<form id="form_popup_regist" method="post" role="form">
        <div id="box_popup_regist">
            <div class="box_regist">
                <div class="bg">
                    <div class="text">Free to use<br><br>UP TO 7 DAYS</div>
                </div>
                <div class="info_regist">
                    <span class="close"></span>
                    <div class="head">Sign up for a trial</div>
                    <div class="children">Use copyrighted music the right way</div>
                    <div class="regist_form">
                        <form id="register-popup">
                            <div class="group">
                                <span class="input-group-addon"><i class="fas fa-store" aria-hidden="true"></i></span>
                                <input class="input" type="text" name="name" placeholder="Business/Personal name">
                            </div>
                            <div class="group"> 
                                <span class="input-group-addon"><i class="fa fa-list-ul" aria-hidden="true"></i></span>
                                <select name="select" id="select" class="required selectpicker" >
                                <option value="">What You Need Music For?</option>
                                <option value="Coffee">Coffee Shop</option>
                                <option value="Bistro">Bistro</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Supermarket">Supermarket</option>
                                <option value="Personal">Personal Use</option>
                                <option value="Other">Other Use</option>
                                </select>
                            </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input class="required input"  aria-required="true" type="text" id="username" name="username" placeholder="Contact Name">
                            </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                <input class="input" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <input class="input" type="text" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="group">
                                <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                <input class="capchar" type="text" name="captcha" placeholder="Input Code">
                                <img class="txt_capcha" src="http://quanly.xms.vn/ajax/captcha" />
                                <img class="reload_captcha" src="../../img.solmusic.vn/xmusicstation/home/images/icon-reload.png" />
                            </div>
                            <div class="group">
                                <input class="btn_regist" id="dangky-popup" type="submit" name="submit" value="Sign Up">
                            </div>
                            <div class="note"><span>Note: We will contact you within 24 hours</span></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </form>

<!-- FOOTER -->
<footer>
<div class="container">
    <p class="copy"><i class="far fa-copyright"></i> 2021. SolMusic</p><br>
    <p class="copy"><i class="fas fa-laptop-code"></i> Sponsor by CISH</p>
    
</div>
</footer>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
        <script src="../assets/js/vendor/jquery.js"></script>
        <script src="../assets/js/vendor/jquery.superslides.min.js"></script>
        <script src="../assets/js/vendor/flickity.pkgd.js"></script>
        <script src="../assets/js/vendor/audio.min.js"></script>
        <script src="../assets/js/vendor/twitterFetcher_min.js"></script>
        <script src="../assets/js/vendor/isotope.pkgd.min.js"></script>
        <script src="../assets/js/vendor/jquery.swipebox.min.js"></script>
        <script src="../assets/js/vendor/TimeCircles.js"></script>
        <script src="../assets/js/vendor/owl.carousel.min.js"></script>
        <script src="../assets/js/vendor/jquery.parallax.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.js"></script>
        <script src="../assets/js/vendor/jquery.validate.js" type="text/javascript" ></script>
        <script src="../assets/js/vendor/jquery-confirm.js" type="text/javascript" ></script>
        <script src="../assets/js/plugins/slick.min.js"></script>
        <script src="../assets/js/exec/home_discography.js"></script>
        <script src="../assets/js/exec/home_news.js"></script>
        <script src="../assets/js/exec/home_main.js"></script>

        <!-- Intro Slider -->
        <script src="../assets/js/exec/home-intro-slider.js"></script>
        <!-- Countdown Next Show -->
        <script src="../assets/js/vendor/countdown.js"></script>
        <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments);
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m);
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-116469076-1', 'auto');
        ga('send', 'pageview');
        </script>
        
    </body>

</html>

<?php
    session_start();
    require 'search_function.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="../CloudMusic/solmusic.vn/assets/images/icon-title.png">
    <title>CloudMusic Account</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="./assets/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="./assets/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="./assets/font-google.css" rel="stylesheet" type="text/css">
    <link href="./assets/ionicons.css" rel="stylesheet" type="text/css">
    <link href="./assets/AdminLTE.css" rel="stylesheet" type="text/css">
    <link href="./assets/skin-green-light.css" rel="stylesheet" type="text/css">
    <link href="./assets/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link href="./assets/bootstrap-dialog.css" rel="stylesheet" type="text/css">
    <link href="./assets/bootstrapValidator.css" rel="stylesheet" type="text/css">
    <link href="./assets/select2.css" rel="stylesheet" type="text/css">

</head>


<body class="skin-green-light sidebar-mini" data-new-gr-c-s-check-loaded="14.1013.0" data-gr-ext-installed="">
    <form id="baseform" method="post" role="form">
        <div class="wrapper">
            <header class="main-header">
                <a href="../home/v2.php" class="logo">
                    <img style="width:180px!important;" class="main-logo" src="../assets/images/logo.png" alt="">
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <li class="active"><a href="v2.php">Home</a></li>
                        
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Hello, <?= $_SESSION['name'] ?>
                        </a>
                        <div class="dropdown-menu" style="padding-left:10px;">
                        <?php if($_SESSION['email'] == "admin@gmail.com"):?>
                            <p><a class="dropdown-item fa fa-user" aria-hidden="true" href="../home/admin_profile.php">Profile</a></p>
                        <?php else: ?>
                            <p><a class="dropdown-item fa fa-user" aria-hidden="true" href="../home/profile.php">Profile</a></p>
                        <?php endif; ?>
                        <p><a class="dropdown-item" href="../auth/logout.php">Logout</a></p>
                        </div>
                        </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar" style="height: auto;">
                    <ul class="sidebar-menu">
                        <li class="header">Navigation</li>
                        <li class="treeview active">
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li><a href="./personal_account.php">Playlist Home</a></li>
                                <li><a href="./my_playlist.php">My Playlist</a></li>
                                <li><a href="./search.php">Search Artist</a></li> <!-- NEW -->
                                <li><a href="./sort_alphabet.php">Search Alphabet</a></li> <!-- new-->
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
            <form method="post" action="search_result.php">
                <input type="text" name="search">
            </form>
            <div class="content-wrapper" style="min-height: 696px;">
                <section class="content-header">
                    <h1>CloudMusic Station<small>Playlist</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="../home/v2.php"> Home</a></li>
                        <li class="active">CloudMusic Station</li>
                    </ol>
                </section>
                <input type="hidden" id="formtype" value="album_list">
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="col-sm-2">
                                <div class="form-group">
                                <div class="col-sm-4">     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Search for Artist</h3>
                                </div>
                                <form method="post" action="search_result.php">
                                    <input type="text" name="search">
                                    <input type="submit" name="submit">
                                </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>
    <script src="./assets/jquery-2.2.3.min.js.download" type="text/javascript"></script>
    <script src="./assets/jquery-ui.min.js.download" type="text/javascript"></script>
    <script src="./assets/bootstrap.min.js.download" type="text/javascript"></script>
    <script src="./assets/jquery.slimscroll.js.download" type="text/javascript"></script>
    <script src="./assets/jquery.ui.touch-punch.js.download" type="text/javascript"></script>
    <script src="./assets/app.js.download" type="text/javascript"></script>
    <script src="./assets/util.js.download" type="text/javascript"></script>
    <script src="./assets/bootstrap-dialog.js.download" type="text/javascript"></script>
    <script src="./assets/bootstrapValidator.js.download" type="text/javascript"></script>
    <script src="./assets/select2.js.download" type="text/javascript"></script>
    <script src="./assets/album.js.download" type="text/javascript"></script>



</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
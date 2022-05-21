<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class=" js cssanimations">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Manage Audio/Beat - CloudData</title>

    <!-- START CORE PLUGINS -->
    <script src="../admin_database/assets/jquery-1.12.4.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/jquery-ui.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/bootstrap.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/metisMenu.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/lobipanel.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/animsition.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/fastclick.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/exec.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/jquery.tokeninput.js.download" type="text/javascript"></script>


    <!-- End ckeditor && ckfinder -->
    <script language="javascript" type="text/javascript" src="../admin_database/assets/tinymce.js.download"></script>
    <!-- STATRT GLOBAL MANDATORY STYLE -->
    <link href="../admin_database/assets/base.css" rel="stylesheet" type="text/css">
    <!-- START PAGE LABEL PLUGINS -->
    <link href="../admin_database/assets/modal-component.css" rel="stylesheet" type="text/css">
    <!-- START THEME LAYOUT STYLE -->
    <link href="../admin_database/assets/component_ui.min.css" rel="stylesheet" type="text/css">
    <link id="defaultTheme" href="../admin_database/assets/skin-dark-1.min.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/custom.css" rel="stylesheet" type="text/css">

    <!-- START PAGE LABEL PLUGINS -->
    <link href="../admin_database/assets/demo.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/ns-default.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/ns-style-growl.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/ns-style-attached.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/ns-style-bar.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/ns-style-other.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/sweetalert.css" rel="stylesheet" type="text/css">
    <link href="../admin_database/assets/toastr.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="../admin_database/assets/icon-title.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style media="screen" type="text/css">
        .table>tbody>tr>td {
            border-top: 0 solid #e4e5e7!important;
        }
        
        label {
            font-weight: normal!important;
        }
        
        input {
            vertical-align: baseline;
        }
        
        .error {
            color: red;
            position: relative;
            bottom: 0;
            left: 0px;
            padding-left: 10px;
            text-indent: -9999px;
            border: 1px solid #a94442;
        }
        
        label.error {
            display: none !important;
        }
    </style>

    <!--validate form-->
    <script type="text/javascript" src="../admin_database/assets/jquery.validate.min.js.download"></script>
    <script src="../admin_database/assets/moment-with-locales.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/bootstrap-datetimepicker.min.js.download" type="text/javascript"></script>
    <link href="../admin_database/assets/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
    <script src="../admin_database/assets/bootstrap-dialog.js.download"></script>

    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body data-new-gr-c-s-check-loaded="14.1013.0" data-gr-ext-installed="">
    <div id="wrapper" class="wrapper animsition" style="animation-duration: 1500ms; opacity: 1;">
        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: white; height: 65px; box-shadow: 0px 2px 4px 0px rgba(0,0,0,0.2);">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <i class="material-icons">apps</i>
    </button>
                <a class="navbar-brand" href="../home/v2.php" style="padding-top: 5px!important;">
                    <img style="width:180px!important" class="main-logo" src="../admin_database/assets/logo.png" alt="">
                </a>
            </div>
            <div class="nav-container">
                <!-- /.navbar-header -->
                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.Dropdown -->
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
                    <!-- /.Dropdown -->
                </ul>
                <!-- /.navbar-top-links -->
            </div>
        </nav>
        <!-- /.Navigation -->
        <div class="sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-heading " style="font-size:16px;"> <span>Navigation</span></li>

                    <li>
                        <a class="bubble_chart" href="http://copyright.skymusic.com.vn/contract">
                            <i class="material-icons">contacts</i> Contracts
                            <span class="fa arrow"></span>
                        </a>
                    </li>
                    <li class="active">

                        <a class="bubble_chart" href="audio_beat.php" style="font-weight: bold;">
                            Records
                            <span class="fa arrow"></span>
                    </a>

                        <ul class="nav nav-second-level collapse in" aria-expanded="true">
                            <li><a class="material-ripple" href="../admin_database/audio_beat.php">Manage Audio/Beat</a></li>
                            <li><a class="material-ripple" href="../admin_database/mv_video.php">Manage MV/Video</a></li>
                            <li><a class="material-ripple" href="../admin_database/export.php">Export Records</a></li>
                            <!-- dong div sub-->
                        </ul>
                    </li>
                    <li>
                        <a class="bubble_chart" href="../admin_database/manage_artists.php" style="font-weight: bold;">
                            Artists
                            <span class="fa arrow"></span>
                    </a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.Left Sidebar-->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div id="page-wrapper" style="min-height: 675px;">
                <!-- main content -->
                <div class="content">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="header-icon" style="margin-top: -10px;width:30px;">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="header-title" style="margin-left: 20px;">
                            <h1>Account Profile</h1>
                            <ol class="breadcrumb" style="margin-right: 20px;">
                                <li><a href="..home/v2.php"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Account Profile</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /. Content Header (Page header) -->
                    <div class="row">
                        <div class="panel panel-bd">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4>Account Information</h4>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12 text-center">
                                    <div class="top-Nag">
                                        <span style="color:red"></span>
                                    </div>
                                </div>
                                <form method="POST" class="form-get bv-form" id="mainform" action="javascript:;" novalidate="novalidate">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label class="control-label col-md-2 text-right">Name:</label>
                                                <div class="col-md-8">
                                                    <label class="control-label"><?= $_SESSION['name'] ?></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label col-md-2 text-right">Email:</label>
                                                <div class="col-md-8">
                                                    <label class="control-label"><?= $_SESSION['email'] ?></label>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label class="control-label col-md-2 text-right">Phone Number:</label>
                                                <div class="col-md-8">
                                                    <label class="control-label"><?= $_SESSION['phone'] ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-Nag">
                                        <input type="submit" value="Change Password" class="btn btn-success" onclick="document.location='../auth/changepwd.php'" style="margin-right:10px;" id="btnSubmitUpdatePassAdmin">
                                        <input type="hidden" id="username" name="username" value="">
                                        <br class="clr">
                                    </div>
                                    <div class="top-Nag">
                                        <span style="color:red"></span>
                                    </div>
                                    <input type="hidden" value="Change Password"></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STRAT PAGE LABEL PLUGINS -->
    <script src="../admin_database/assets/Chart.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/sparkline.min.js.download" type="text/javascript"></script>
    <!-- START THEME LABEL SCRIPT -->
    <script src="../admin_database/assets/app.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/jQuery.style.switcher.min.js.download" type="text/javascript"></script>

    <!-- STRAT PAGE LABEL PLUGINS -->
    <script src="../admin_database/assets/classie.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/modalEffects.js.download" type="text/javascript"></script>
    <!-- STRAT PAGE LABEL PLUGINS -->
    <script src="../admin_database/assets/jquery.backstretch.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/form.scripts.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/modernizr.custom.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/classie.js(1).download" type="text/javascript"></script>
    <script src="../admin_database/assets/notificationFx.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/snap.svg-min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/sweetalert.min.js.download" type="text/javascript"></script>
    <script src="../admin_database/assets/toastr.min.js.download" type="text/javascript"></script>


    <div id="toTop" class="btn back-top"><span class="ti-arrow-up"></span></div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
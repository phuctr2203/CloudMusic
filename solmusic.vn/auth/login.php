<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from quanly.xms.vn/auth/login?redirect_uri=http%3A%2F%2Fquanly.xms.vn%2Fassets%2Fcss%2Fvendor%2Fowl.video.play.png by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 07:11:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" type="image/png" href="../assets/img/icon-title.png" />
        <title>XMusic Station Merchant Tool</title>   
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />    
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />    
        <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />    
        <link href="../assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet" type="text/css" />        
        <link href="../assets/css/plugins/bootstrap-dialog.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/plugins/bootstrapValidator.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="../assets/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <form id="baseform" method="post" action="post_login.php" role="form">
            <div class="login-box">
                <div class="login-logo">
                    Sign In Account
                </div>
                <div class="login-box-body">
                    <div class="alert alert-danger" style="display: none;"></div>
                    <p class="login-box-msg" style="padding: 0 0 20px 20px!important;">Sign In <span class="planglog"><a id="vi"  title="Tiếng Việt">VN</a><a id="en"  title="English">EN</a></span></p>
                    
                    <div class="form-group has-feedback">
                        <input name="email" type="email" class="form-control" placeholder="Email" id='email' autofocus required>                    
                    </div>
                    <div class="form-group has-feedback">
                        <input name="password" type="password" class="form-control" placeholder="Password" id='pass' required>                    
                    </div>
                    <div class="row">
                        <div class="col-xs-7">
                            <div class="checkbox icheck">
                                <label>
                                    <input name="remember" type="checkbox" value="1" checked="checked"> Remember Login
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">

                            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="background-color: maroon;">Login</button>
                        </div>
                        <div class="col-xs-6">
                            <input type="hidden" id="lang" value="vi" />
                            <input type="hidden" name="redirect_uri" value="login.html">                        
                            <input type="hidden" id="formtype" value="auth_login" />
                            <button type="button" class="btn btn-primary btn-block btn-flat" onclick="document.location='forget_password.html'">Forget Password</button>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <br>
                        <div class="col-xs-12">
                            <p> RETURN TO <a href="../home/v1.php">HOMEPAGE</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="../assets/jquery/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="../assets/jquery/jquery-ui.min.js" type="text/javascript"></script>    
        <script src="../assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/bootstrap-dialog.js" type="text/javascript"></script>
        <script src="../assets/js/plugins/bootstrapValidator.js" type="text/javascript"></script>    
        <script src="../assets/js/exec/util.js" type="text/javascript"></script>
        <script src="../assets/iCheck/icheck.js" type="text/javascript"></script>
        <script src="../assets/js/exec/auth.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from quanly.xms.vn/auth/login?redirect_uri=http%3A%2F%2Fquanly.xms.vn%2Fassets%2Fcss%2Fvendor%2Fowl.video.play.png by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 07:12:10 GMT -->
</html>
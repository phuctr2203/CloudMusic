<?php
    session_start();
?>
<!DOCTYPE html>
<!-- saved from url=(0030)http://admin.xms.vn/album/list -->
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
                <a href="../home/v1.php" class="logo">
                    <img style="width:180px!important;" class="main-logo" src="../assets/images/logo.png" alt="">
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
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
            </header>
            <aside class="main-sidebar">
                <section class="sidebar" style="height: auto;">
                    <ul class="sidebar-menu">
                        <li class="header">Navigation</li>
                        <li class="treeview active">
                            <ul class="treeview-menu menu-open" style="display: block;">
                                <li><a href="./personal_account.html">Playlist</a></li>
                                <li><a href="./create_playlist.html">Create Playlist</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper" style="min-height: 696px;">
                <section class="content-header">
                    <h1>CloudMusic Station<small>Playlist</small></h1>
                    <ol class="breadcrumb">
                        <li><a href="../home/v1.php"> Home</a></li>
                        <li class="active">CloudMusic Station</li>
                    </ol>
                </section>
                <input type="hidden" id="formtype" value="album_list">
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label">Find Playlist</label>
                                    <input id="keyword" type="text" class="form-control" placeholder="Keyword" value="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select id="status" name="status" class="form-control">      
    <option value="0" selected="selected">All Status</option>
    <option value="1">ENABLE</option>
    <option value="2">DISABLE</option>
</select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label class="control-label ln"></label>
                                    <button id="search" class="form-control btn btn-primary" type="button">
                                <span>Search</span>
                            </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Playlist List</h3>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <th>#</th>
                                                    <th></th>
                                                    <th>Title</th>
                                                    <th class="text-center">No. of Records</th>
                                                    <th class="text-center">Status</th>
                                                    <th>Date of Create</th>
                                                    <th class="text-center">Edit Playlist</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <img src="./assets/dc75b4ad497c4bb8833a457f4cc4195b_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Phiêu Cùng J-Pop</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:11:11 AM">22/04/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <img src="./assets/f725c1bd2f8546a48ac07de13bf97fe0_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Summer Acoustic &amp; Pop Việt Tháng 4/2022</td>
                                                    <td class="text-center">29</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:42:59 PM">07/04/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <img src="./assets/43f7b9b6ddb4416d8eb5e7edf85530df_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Summer Dance &amp; RnB Việt Tháng 4/2022</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:42:12 PM">07/04/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <img src="./assets/93d55d837ccf42dcafeffe543c37a5cb_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Tháng 4/2022</td>
                                                    <td class="text-center">31</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:41:38 PM">07/04/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <img src="./assets/f5bc15fb75a74ace9214a3c3125b210b_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Bay Cùng Mây Gió</td>
                                                    <td class="text-center">25</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="12:46:14 PM">31/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <img src="./assets/628d2990fccd459fb7b4dcfcfdacb646_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>V-Pop Lên Nhạc</td>
                                                    <td class="text-center">25</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="12:45:22 PM">31/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>
                                                        <img src="./assets/b8d95b4d77ff4e24b46ec0267f89ae6c_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Chill Cùng V-Pop</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="12:43:41 PM">31/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>
                                                        <img src="./assets/7d92c7ac86204a93b27cb23e4a6972df_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Tháng 3/2022</td>
                                                    <td class="text-center">29</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:00:47 PM">02/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>
                                                        <img src="./assets/feaa9e3ee59d4995b0ba7dc36caf836c_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nữ Ca USUK Tháng 03/2022</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:00:15 PM">02/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>
                                                        <img src="./assets/c0eaa922bab64b7a8edaeaeb95c33802_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>V-Pop So Hot Tháng 3/2022</td>
                                                    <td class="text-center">47</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:59:26 PM">02/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt 8-3-2022</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:58:11 PM">02/03/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Hot USUK T2/2022 - Giai điệu vui tươi</td>
                                                    <td class="text-center">32</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:28:59 PM">07/02/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Hot USUK T2/2022 - Giai điệu nhẹ nhàng</td>
                                                    <td class="text-center">30</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:28:24 PM">07/02/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Valentine USUK 2022</td>
                                                    <td class="text-center">32</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:27:29 PM">07/02/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>
                                                        <img src="./assets/6025fb76ec184d6f9fa02a518e19525b_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Tết đến, Xuân về</td>
                                                    <td class="text-center">47</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="06:29:27 PM">12/01/2022</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>[31.12.2021] TẾT VIỆT 2022</td>
                                                    <td class="text-center">100</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:20:33 PM">31/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>
                                                        <img src="./assets/595479aa17a549aeaae4e887fbd60232_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Happy 2022</td>
                                                    <td class="text-center">40</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:18:09 PM">31/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>
                                                        <img src="./assets/c1131b6ae2e1472cb9c9cd04348ab9c8_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Tik Tok Vibe</td>
                                                    <td class="text-center">32</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:15:43 PM">31/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>[31.12.2021] - VPOP VALENTINE</td>
                                                    <td class="text-center">43</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="03:57:57 PM">31/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>
                                                        <img src="./assets/cecb75e1beff435d949562ac498e35fe_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Tháng 12/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:48:44 AM">06/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>
                                                        <img src="./assets/d0572f3159124746a663a29f0578efdc_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Acoustic Tháng 12/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:48:07 AM">06/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>
                                                        <img src="./assets/17faa82f999e485fb925bb307aaa702d_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Tháng 12/2021</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:46:52 AM">06/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>
                                                        <img src="./assets/78859cd83e5e4d55bbb2e99da91912e3_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Acoustic Tháng 12/2021</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:46:14 AM">06/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Giáng sinh + New Year USUK T12/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:44:30 AM">06/12/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Tháng 11/2021</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:31:21 PM">25/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Acoustic Tháng 11/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:30:37 PM">25/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Giáng Sinh V-Pop 2021</td>
                                                    <td class="text-center">33</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:05:18 PM">22/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Giáng Sinh Không Lời 2021</td>
                                                    <td class="text-center">36</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:04:44 PM">22/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>29</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Giáng Sinh USUK 2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:04:15 PM">22/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>30</td>
                                                    <td>
                                                        <img src="./assets/c1f65179ac1b4ee892a0e8d8a00a2286_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Gửi Một Nửa Của Thế Giới</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:02:35 PM">09/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>31</td>
                                                    <td>
                                                        <img src="./assets/5db0e9013f4043fdb198b67f9729195e_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Acoustic Tháng 10/2021</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:00:01 PM">09/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>32</td>
                                                    <td>
                                                        <img src="./assets/e5c8bea767304051b88cfebe55765c4a_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Tháng 10/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="03:57:45 PM">09/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>33</td>
                                                    <td>
                                                        <img src="./assets/d17b833f6bab4bf1972e1533dbab0de2_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Acoustic Tháng 10/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:19:43 PM">05/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>34</td>
                                                    <td>
                                                        <img src="./assets/1b0dde1c1ff74d30bde726f1e966c55e_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Tháng 10/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:19:20 PM">05/10/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>35</td>
                                                    <td>
                                                        <img src="./assets/1ae8cbbafe044aadbe97395bb09175bf_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Tháng 9/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:48:49 PM">15/09/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>36</td>
                                                    <td>
                                                        <img src="./assets/23c344574f644387b388ffcb9910129a_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Acoustic Tháng 9/2021</td>
                                                    <td class="text-center">49</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:17:32 PM">15/09/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>37</td>
                                                    <td>
                                                        <img src="./assets/ef3ea744eec04a55be61d9a541fb8564_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Acoustic Tháng 9/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:26:02 PM">08/09/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>38</td>
                                                    <td>
                                                        <img src="./assets/e06f411aeabf4455814c2ad5f3b60966_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Tháng 9/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:25:24 PM">08/09/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>39</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Không Lời T8-2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:16:41 PM">16/08/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>40</td>
                                                    <td>
                                                        <img src="./assets/2acc46dccf3b4a74885c120131611bb9_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Trung Thu 2021</td>
                                                    <td class="text-center">25</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="05:10:22 PM">16/08/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Acoustic T8-2021</td>
                                                    <td class="text-center">48</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:58:57 PM">16/08/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>42</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt T8-2021</td>
                                                    <td class="text-center">49</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="04:50:26 PM">16/08/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>43</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK tháng 8/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:45:46 AM">16/08/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>44</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Acoustic tháng 8/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="11:44:42 AM">16/08/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>45</td>
                                                    <td>
                                                        <img src="./assets/5d6986cd9f6c435fb32cefd27eb4a703_1920_1080.png" style="width: 40px;">
                                                    </td>
                                                    <td>Việt Nam Cố Lên</td>
                                                    <td class="text-center">28</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:50:42 PM">17/07/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>46</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK Acoustic tháng 7/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:27:14 PM">14/07/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>47</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc USUK tháng 7/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="02:25:58 PM">14/07/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>48</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt mới T7/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="08:21:44 PM">02/07/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>49</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt không lời T7/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="08:21:01 PM">02/07/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>50</td>
                                                    <td>
                                                        <img src="./assets/default.png" style="width: 40px;">
                                                    </td>
                                                    <td>Nhạc Việt Acoustic T7/2021</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">ENABLE</td>
                                                    <td><span title="08:19:51 PM">02/07/2021</span></td>
                                                    <td class="text-center">
                                                        <a class="btn btn-xs btn-default" href="" title="Edit Playlist">
                                                Edit
                                            </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="paginate">
                                        <ul class="pagination">
                                            <li class="active"><span>1</span></li>
                                            <li><a href="">2</a></li>
                                            <li><a href="">3</a></li>
                                            <li><a href=""> ...</a></li>
                                            <li><a href="">Last</a></li>
                                        </ul>
                                    </div>
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
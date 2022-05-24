<?php
    session_start();
    require 'sort_alphabet_function.php';
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
            <div class="content-wrapper" style="min-height: 696px;">
                <section class="content-header">
                    <h1>CloudMusic Station Playlist</h1>
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
                                <?php

                                        $letter_search = [
                                            ['letter' => '0'],
                                            ['letter' => '1'],
                                            ['letter' => '2'],
                                            ['letter' => '3'],
                                            ['letter' => '4'],
                                            ['letter' => '5'],
                                            ['letter' => '6'],
                                            ['letter' => '7'],
                                            ['letter' => '8'],
                                            ['letter' => '9'],
                                            ['letter' => '0'],
                                            ['letter' => 'A'],
                                            ['letter' => 'B'],
                                            ['letter' => 'C'],
                                            ['letter' => 'D'],
                                            ['letter' => 'E'],
                                            ['letter' => 'F'],
                                            ['letter' => 'G'],
                                            ['letter' => 'H'],
                                            ['letter' => 'I'],
                                            ['letter' => 'J'],
                                            ['letter' => 'K'],
                                            ['letter' => 'L'],
                                            ['letter' => 'M'],
                                            ['letter' => 'N'],
                                            ['letter' => 'O'],
                                            ['letter' => 'P'],
                                            ['letter' => 'Q'],
                                            ['letter' => 'R'],
                                            ['letter' => 'S'],
                                            ['letter' => 'T'],
                                            ['letter' => 'Y'],
                                            ['letter' => 'V'],
                                            ['letter' => 'W'],
                                            ['letter' => 'X'],
                                            ['letter' => 'Y'],
                                            ['letter' => 'Z'],
                                        ];
                                        ?>
                                    <label class="control-label">Choose start song name letter</label>
                                    <select id="status" name="status" class="form-control" onchange="location = this.value">      
                                        <option selected="selected" value="" disabledd selected>Choose First Letter</option>
                                <?php
                                        
                                        foreach($letter_search as $t)
                                        {
                                            $first_letter = $t['letter'];
                                            echo "<option value='sort_alphabet_result.php?letter=$first_letter'>$first_letter</option>";
                                        }
                                ?>
</select>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        $first_letter = $_GET['letter'];
                        echo "<div class='grid'><h2>First Letter Start: " .$first_letter. "</h2></div>";
                    ?>
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
                                                    <th>Name of Song</th>
                                                    <th class="text-center">Artist Name</th>
                                                    <th class="text-center">Album</th>
                                                    <th class="text-center">Edit Playlist</th>
                                                </tr>
                                                
                                                    <?php 
                                                        $first_letter = $_GET['letter'];

                                                        $songs = get_song_search_letter($first_letter);
                                                        $sub_song = [];
                                                        if($songs == false)
                                                        {
                                                            print_r("<div class='grid'><h2>sorry we currently don't have any songs name started with this character</h2></div>");
                                                        }
                                                        else
                                                        {
                                                            $sub_song = $songs;
                                                            $count = 1;

                                                            foreach($sub_song as $song_letter)
                                                            {
                                                                echo "<tr>";
                                                                    echo "<td>$count</td>";
                                                                    echo "<td>";
                                                                    echo "<img src='./assets/default.png' style='width: 40px;'>";
                                                                    echo "</td>";
                                                                    echo "<td>$song_letter[0]</td>";
                                                                    echo "<td class='text-center'>$song_letter[1]</td>";
                                                                    echo "<td class='text-center'>$song_letter[2]</td>";
                                                                    echo "<td class='text-center'>";
                                                                    echo "<a class='btn btn-xs btn-default' href='my_playlist.php?song_name=$song_letter[0]&artist_name=$song_letter[1]&album_name=$song_letter[2]' title='Edit Playlist'>";
                                                                    echo "Add to My Playlist";
                                                                    echo "</a>";
                                                                    echo " </td></tr>";
                                                                    $count++;
                                                            }
                                                            
                                                        }
                                                    ?>
                                                </tbody>
                                        </table>
                                    </div>         
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
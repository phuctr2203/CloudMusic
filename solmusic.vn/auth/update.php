<?php
    require 'vendor/autoload.php';
    session_start();

    $m = new MongoDB\Client("mongodb+srv://cloudmusic:admin@cluster0.m8hwe.mongodb.net/test");
    $db = $m->cloudmusic;
    $collection = $db->users;

    $announce = '';

    $old = $_POST['old_pwd'];
    $new = $_POST['new_pwd'];

    $user = $_SESSION['email'];
    $pwd = $_SESSION['password'];
    
    $query = ['email'=> $user];
    $update = ['password' => password_hash($pwd, PASSWORD_BCRYPT)];

    if($old == $pwd) {
        $collection->update(
            $query, 
            $update
        );
    }
?>

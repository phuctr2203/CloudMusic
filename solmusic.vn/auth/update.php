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
    $update = ['password' => password_hash($new, PASSWORD_BCRYPT)];

    //if (password_hash($old, PASSWORD_BCRYPT) == $pwd) {
        $collection->updateOne(
            $query,
            ['$set' => $update]
        );
    //}
    echo '<script>
    alert("Password changed successfully! REMEMBER IT PLEASE!");
    window.location.href = "../home/v1.php";
    </script>';

?>

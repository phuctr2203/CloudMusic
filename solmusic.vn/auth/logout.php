<?php
    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['gender']);
    echo '<script>
        alert("Logout successfully !");
        window.location.href = "../home/v1.php";
    </script>';
<?php
    require 'vendor/autoload.php';
    $m = new MongoDB\Client("mongodb+srv://cloudmusic:admin@cluster0.m8hwe.mongodb.net/test");
    $db = $m->cloudmusic;
    $collection = $db->users;
    $check = true;
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $users = $collection->find();
        foreach ($users as $user) {
            if ($user['email'] == $email) {
                $check = false;
                echo '<script>
                    alert("Email exists !");
                    window.history.back();
                </script>';
            }
        }
        if ($check) {
            $data = [
                'name' => $name,
                'gender' => $gender,
                'email' => $email,
                'phone' => $phone,
                'password' => password_hash($password, PASSWORD_BCRYPT)
            ];
            //password_hash($password, PASSWORD_BCRYPT)
            $collection->insertOne($data);
            echo '<script>
                alert("Register successfully !");
                window.location.href = "login.php";
            </script>';
        }
    }
    
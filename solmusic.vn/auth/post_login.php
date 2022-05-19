<?php
   require 'vendor/autoload.php';
   session_start();
   $m = new MongoDB\Client("mongodb+srv://cloudmusic:admin@cluster0.m8hwe.mongodb.net/test");
   $db = $m->cloudmusic;
   $collection = $db->users;
   if (isset($_POST['submit'])) {
       $email = $_POST['email'];
       $password = $_POST['password'];
       $users = $collection->find();
       $check = true;
       foreach ($users as $user) {
            if ($email == 'admin@gmail.com' && password_verify($password, $user['password'])) {
                $check = false;
                $_SESSION['user_id'] = $user['_id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['gender'] = $user['gender'] == 0 ? 'Male' : 'Female';
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['password'] = $user['password'];
                
                
                echo '<script>
                    alert("Login successfully!");
                    window.location.href = "../admin_database/audio_beat.php";
                </script>';
            }
            elseif ($user['email'] == $email && password_verify($password, $user['password'])){ 
                $check = false;
                $_SESSION['user_id'] = $user['_id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['gender'] = $user['gender'] == 0 ? 'Male' : 'Female';
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['password'] = $user['password'];
                
                echo '<script>
                    window.location.href = "../home/personal_account.php";
                </script>';
            }
            
       }
       if ($check){         
        echo '<script>
            alert("LOGIN FAILED!");
            window.location.href = "../auth/login.php";
            </script>';
        }
   }
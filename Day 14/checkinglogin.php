<?php

        $errors = array();
        if(isset($_GET['username']) && $_GET['username'] === ''){
            $errors['username'] = 'username is required';
        }
        if(isset($_GET['password']) && $_GET['password'] === ''){
            $errors['password'] = 'password is required';
        }
    
        $file = json_encode($errors);
        if(empty($errors)){
            $Data = file("passwd.txt");
            $login = false;
            foreach($Data as $user){
                $userData = explode(':', $user);
                $username = $userData[0];
                $password = $userData[1];
                if($_GET['username'] === $username && $_GET['password'] === $password){
                    $login = true;
                    $userAll = $userData;
                }
            }
            if($login){
                session_start();
                $_SESSION['username'] = $_GET['username'];
                $_SESSION['logged'] = $login;
                setcookie("name", $_SESSION['username'], time() + 3600, "/", "", 0);
                // echo json_encode($userAll);
                header("location:user.php?userData=". json_encode($userAll));
                exit;
            }
            else{
                header("location:login.php");
                exit;
            }
        }
        header("location:login.php?errors=$file");
?>
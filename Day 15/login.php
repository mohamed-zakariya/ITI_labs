<?php

    $errors = array();
    if(isset($_GET['errors']))
        $errors = json_decode($_GET['errors'], true);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php echo "checkinglogin.php" ?>" method="get" name="formm" class="form_style">
            

            <span style="margin-right: 50px;">Username</span><input name="username" type="text" id="username"><br><br>
            <?php 
                if(isset($errors['username'])){
                    echo '<span style="color:red;">'.$errors["username"].'</span><br><br>';
                }
            ?>
            <span style="margin-right: 50px;">Password</span><input name="password" type="password" id="password"><br><br>
            <?php 
                if(isset($errors['password'])){
                    echo '<span style="color:red;">'.$errors["password"].'</span><br><br>';
                }
            ?>
            
            
            <button type="submit" style="margin-right: 30px; background-color:orange; color:white;cursor:pointer;display:block;margin:auto;">Login</button>
            <a href="adduser.php" style="display:block">create a new account</a>
            <a href="allusers.php" style="">Show All Users</a>

            <!-- <button type="reset" style="background-color:red; color:white;cursor:pointer">Reset</button> -->
    </form>
    <script src="checkinglogin.php"></script>
    <script src="user.php"></script>
</body>
</html>
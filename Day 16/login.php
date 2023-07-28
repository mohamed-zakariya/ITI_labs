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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
<!--             
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->
            
            <button type="submit" style="margin-right: 30px; background-color:orange; color:white;cursor:pointer;display:block;margin:auto;">Login</button>
            <a href="adduser.php" style="display:block">create a new account</a>
            <a href="allusers.php" style="">Show All Users</a>

            <!-- <button type="reset" style="background-color:red; color:white;cursor:pointer">Reset</button> -->
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="checkinglogin.php"></script>
    <script src="user.php"></script>
</body>
</html>
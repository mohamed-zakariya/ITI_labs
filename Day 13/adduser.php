<?php
    $errors = array();
    if(isset($_GET['errors'])){
        $errors = json_decode($_GET['errors'], true);
    }
    else if(empty($errors)){
        if(isset($_GET['status']) && ($_GET['status'] === "false"))
            echo '<script> alert("New user is registered now") </script>';
    }
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
    
    <form action="<?php echo "adding.php" ?>" method="get" name="formm" class="form_style">
        
        <span style="margin-right: 50px;">First Name</span><input name="firstName" type="text" id="firstName"><br><br>
        <?php 
            if(isset($errors['firstName'])){
                echo '<span style="color:red;">'.$errors["firstName"].'</span><br><br>';
            }
         ?>
        <span style="margin-right: 50px;">Last Name</span><input name="lastName" type="text" id="lastName"><br><br>
        <?php 
            if(isset($errors['lastName'])){
                echo '<span style="color:red;">'.$errors["lastName"].'</span><br><br>';
            }
         ?>
        <span style="margin-right: 50px;">Address</span><input name="address" type="text" id="address"><br><br>
        <?php 
            if(isset($errors['address'])){
                echo '<span style="color:red;">'.$errors["address"].'</span><br><br>';
            }
         ?>
        <span style="margin-right: 50px;">country</span>
        
        <select name="country" id="country"> 
            <option value="egypt">Egypt</option>
            <option value="Saudia">Saudia Arabia</option>
            <option value="Qatar">Qatar</option>
            <option value="United">United Arab Emirates</option>
        </select><br><br>
        <span style="margin-right: 50px;">Gender</span>
        Male<input name="Gender" type="radio" value="Mr">
        Female<input name="Gender" type="radio" value="Mrs"><br><br>
        <?php 
            if(isset($errors['Gender'])){
                echo '<span style="color:red;">'.$errors["Gender"].'</span><br><br>';
            }
         ?>
        <!-- <span style="color: red;margin-left: 50px;" hidden> please enter your Gender</span><br><br> -->

        <span style="margin-right: 40px;">Skills</span>
            PHP<input name="Skills[]" type="checkbox" style="margin-right: 30px;" value="PHP">
        J23E<input name="Skills[]" type="checkbox" value="J23E"><br>
        <span style="margin-left: 160px;">
            My Sql<input name="Skills[]" type="checkbox" value="My SQL">
            PostgreeSQL<input name="Skills[]" type="checkbox" value="PostgreeSQL"><br>
        </span>
        <?php 
            if(isset($errors['Skills[]'])){
                echo '<br><span style="color:red;">'.$errors["Skills[]"].'</span><br><br>';
            }
         ?>
        <br>
        <span style="margin-right: 50px;">Username</span><input name="Username" type="text" id="Username"><br><br>
        <?php 
            if(isset($errors['Username'])){
                echo '<span style="color:red;">'.$errors["Username"].'</span><br><br>';
            }
         ?>
        <span style="margin-right: 50px;">Password</span><input name="Password" type="password" id="Password"><br><br>
        <?php 
            if(isset($errors['Password'])){
                echo '<span style="color:red;">'.$errors["Password"].'</span><br><br>';
            }
         ?>
        <span style="margin-right: 50px;">Department</span><input name="Department" type="text" id="Department" placeholder="OpenSource"><br><br>
        <?php 
            if(isset($errors['Department'])){
                echo '<span style="color:red;">'.$errors["Department"].'</span><br><br>';
            }
         ?>
        <button type="submit" style="margin-right: 30px;cursor:pointer;background-color:orange">Add User</button>
        <button type="reset" style="margin-right: 30px; background-color:red;cursor:pointer">Reset</button>
        <a style="color:black;background-color: green;text-decoration:none;border:2px solid black;" href="main.php"> Return </a>
 
    </form>

    <script src="adding.php"></script>
</body>
</html>
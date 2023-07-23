<?php
    $errors = array();
    if(isset($_GET['errors'])){
        $errors = json_decode($_GET['errors'], true);
    }
    else if(empty($errors)){
        if(isset($_GET['status']) && ($_GET['status'] === "false"))
            echo '<script> alert("All the data is updated now") </script>';
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
    
    <form action="<?php echo "edit.php" ?>" method="get" name="formm">
        
        
        <span style="margin-right: 50px;">Address</span><input name="address" type="text" id="address"><br><br>
        <?php 
            if(isset($errors['address'])){
                echo '<span style="color:red;">'.$errors["address"].'</span><br><br>';
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
        
        <button type="submit" style="margin-right: 30px; background-color:orange; color:white;cursor:pointer">Edit</button>
        <button type="reset" style="background-color:red; color:white;cursor:pointer">Reset</button>
 
    </form>

    <script src="edit.php"></script>
</body>
</html>
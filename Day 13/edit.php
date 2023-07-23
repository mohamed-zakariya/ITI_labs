<?php
    echo "edit";
    $errors = array();
    if(isset($_GET['address']) && $_GET['address'] === ''){
        $errors['address'] = 'address is required';
    }
    if(isset($_GET['Password']) && $_GET['Password'] === ''){
        $errors['Password'] = 'password is required';
    }
    if(isset($_GET['Department']) && $_GET['Department'] === ''){
        $errors['Department'] = 'Department is required';
    }


    $file = json_encode($errors);
    if(empty($errors)){
        header("location:index.php?status=false"); 
        exit;   
    }
    header("location:index.php?errors=$file");

?>
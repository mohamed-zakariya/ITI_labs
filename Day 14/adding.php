<?php
    echo "adding";
    $errors = array();
    if(isset($_GET['firstName']) && $_GET['firstName'] === ''){
        $errors['firstName'] = 'firstName is required';
    }
    if(isset($_GET['lastName']) && $_GET['lastName'] === ''){
        $errors['lastName'] = 'lastName is required';
    }
    if(isset($_GET['address']) && $_GET['address'] === ''){
        $errors['address'] = 'address is required';
    }
    if(!isset($_GET['Gender'])){
        $errors['Gender'] = 'Gender is required';
    }
    // $checkbox = "false";
    // if(isset($_GET['Skills[]'])){
    //     foreach ($_GET['Skills[]'] as $Skill) {
    //         if($Skill === true)
    //             $checkbox = "true";
    //     }
    // }
    // if($checkbox == "true"){
    //     $errors['Skills[]'] = 'Skills is required';
    // }

    if(isset($_GET['Username']) && $_GET['Username'] === ''){
        $errors['Username'] = 'Username is required';
    }
    if(isset($_GET['Password']) && $_GET['Password'] === ''){
        $errors['Password'] = 'password is required';
    }
    if(isset($_GET['Department']) && $_GET['Department'] === ''){
        $errors['Department'] = 'Department is required';
    }

    $file = json_encode($errors);
    if(empty($errors)){
        $userdata = $_GET['Username'] . ':' . $_GET['Password'] . ':'. $_GET['Department'] . ':' . $_GET['firstName'] . ':' . $_GET['lastName'] . ':' . $_GET['country'] .':' . $_GET['address'];
        
        $users = file('passwd.txt');
        $newData = array();
        foreach ($users as $key => $user) {
            $data = explode(':', $user);
            $newData[$key] = $user;
        }
        $filehandler=fopen("passwd.txt","w");
        foreach ($newData as $data) {
            fwrite($filehandler,$data);
            fwrite($filehandler,"\n");
        }
        fwrite($filehandler, $userdata);
        fclose( $filehandler);
        header("location:adduser.php?status=false");
        exit;   
    }
    header("location:adduser.php?errors=$file");

?>
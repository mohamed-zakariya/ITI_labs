<?php

function getGender(){
   if(!empty($_GET['Gender']))
    return $_GET['Gender'];
}

$gender = getGender();

$code = "hello";
if($_GET['checkk'] != $code){
    header("Location: index.php?status=false");
    exit();
}


echo 'Thanks '. $gender. ' ' . $_GET['firstName'] . ' ' . $_GET['lastName'] . '<br>';

echo 'Name: ' . $_GET['firstName'] . ' ' . $_GET['lastName'] . '<br>';

echo 'address: ' . $_GET['address'] . '<br>';

echo 'Your Skills: ' . '<br>';
foreach ($_GET['Skills'] as $key => $value) {
    echo  '<li> ' . $value . '</li>';
}


echo 'Department: ' . $_GET['Department'];

?>
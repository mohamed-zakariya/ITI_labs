<?php

echo "Delete page <br>";

$username = $_GET['userName'];

$users = file("passwd.txt");

foreach($users as $key => $user){
    $userdata = explode(":", $user);
    if($userdata[0] === $username)
        unset($users[$key]);
}

$userFile = fopen("passwd.txt","w");

foreach ($users as $key => $value) {
    fwrite($userFile, "$value");
}
fclose($userFile);

header("location:main.php");

?>
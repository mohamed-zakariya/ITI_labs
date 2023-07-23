<?php
    session_start();
    
    $userData = array();
    $userData = json_decode($_GET['userData'], true);
    if(!$_SESSION['logged']){
        header("location:login.php");
    }
    else{
        echo "<table border = '2'  width=100%; >";
        echo "<tr>";
        echo "<td> username </td>";
        echo "<td> password </td>";
        echo "<td> Department </td>";
        echo "<td> FirstName </td>";
        echo "<td> LastName </td>";
        echo "<td> Country </td>";
        echo "<td> Address </td>";

        echo "<tr>";
        echo "<td>" . $userData[0] . "</td>";
        echo "<td>" . $userData[1] . "</td>";
        echo "<td>" . $userData[2] . "</td>";
        echo "<td>" . $userData[3] . "</td>";
        echo "<td>" . $userData[4] . "</td>";
        echo "<td>" . $userData[5] . "</td>";
        echo "<td>" . $userData[6] . "</td>";
        echo '<td> <a style="color:black;background-color: cyan;text-decoration:none;border:2px solid black;" href="logout.php"> Logout </a> </td>';


    }
?>

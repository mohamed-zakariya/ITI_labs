<?php
    require_once('main.php');

    session_start();
    
    $userData = array();
    $userData = json_decode($_GET['userData'], true);
    if(!$_SESSION['logged']){
        header("location:login.php");
    }
    else{
        $sql = "select * from user where username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'username' => $_SESSION['username'],
        ]);
        $result = $stmt->fetchAll();
        $username = $result[0][1];
        $password = $result[0][2];
        $Deparment = $result[0][3];
        $first = $result[0][4];
        $last = $result[0][5];
        $country = $result[0][6];
        $address = $result[0][7];


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
        echo "<td>" . $username . "</td>";
        echo "<td>" . $password . "</td>";
        echo "<td>" . $Deparment . "</td>";
        echo "<td>" . $first . "</td>";
        echo "<td>" . $last . "</td>";
        echo "<td>" . $country . "</td>";
        echo "<td>" . $address . "</td>";
        echo '<td> <a style="color:black;background-color: cyan;text-decoration:none;border:2px solid black;" href="logout.php"> Logout </a> </td>';


    }
?>

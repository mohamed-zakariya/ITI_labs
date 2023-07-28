<?php
    require_once('main.php');

    echo "<table border = '2'  width=100%; >";
    echo "<tr>";
    echo "<td> username </td>";
    echo "<td> password </td>";
    echo "<td> Department </td>";
    echo "<td> FirstName </td>";
    echo "<td> LastName </td>";
    echo "<td> Country </td>";
    echo "<td> Address </td>";
    
    $db = Database::connectToDatabase("root", "Mhdzikoo@123");
    $sql = "select * from user";
    $stmt = $db->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    foreach ($result as $data) {
        echo "<tr>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "<td>" . $data[3] . "</td>";
        echo "<td>" . $data[4]. "</td>";
        echo "<td>" . $data[5] . "</td>";
        echo "<td>" . $data[6] . "</td>";
        echo "<td>" . $data[7] . "</td>";
        echo '<td> <a style="color:black;background-color: red;text-decoration:none;border:2px solid black;" href="deleteuser.php?id='.$data[0].'"> Delete </a> </td>';
    }
?>
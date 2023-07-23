<?php

$users = file("passwd.txt");
// var_dump($users);

echo "<table border = '2'  width=100%; >";
echo "<tr>";
echo "<td> username </td>";
echo "<td> password </td>";
echo "<td> Department </td>";
echo "<td> FirstName </td>";
echo "<td> LastName </td>";
echo "<td> Country </td>";
echo "<td> Address </td>";

echo "</tr>";


foreach ($users as $user) {
    $data = explode(':', $user);
    echo "<tr>";
    foreach ($data as $value) {
        echo"<td>$value</td>";
    }
    echo '<td><a style="color:black;background-color: orange;text-decoration:none;border:2px solid black;"" href="index.php?username='.$data[0].'">Edit</a></td>';
    echo '<td><a style="color:black;background-color: red;text-decoration:none;border:2px solid black;" href="delete.php?userName='.$data[0].'">Delete</a></td>';
    echo "</tr>";
}
echo '<a style="color:black;background-color: cyan;text-decoration:none;border:2px solid black;" href="adduser.php">Add user</a>';

echo "</table>"


// function Deletebtn(){
//     header("location:delete.php");
// }
?>

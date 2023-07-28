<?php
    require_once('main.php');

    $id = $_GET['id'];

    $sql = "delete from user where id=?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $id);

    $stmt->execute();

    header("location:allusers.php");

    

?>
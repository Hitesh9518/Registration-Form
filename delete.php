<?php
require 'connection.php';
    $id = $_GET['id'];

    $result = "DELETE FROM company WHERE id='$id'";
    mysqli_query($con,$result);

    echo '<script>alert("Data Deleted...");</script>';
    echo '<script>window.location.href="add.php";</script>';
?>
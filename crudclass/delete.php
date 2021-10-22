<?php
 include 'conn.php';
    extract($_POST);
    extract($_GET);
    $query = "DELETE FROM user WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    header('location: display.php');

?>
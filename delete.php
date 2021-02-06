<?php

$conn = new mysqli('localhost', 'root', '','cedcab');
$id=$_GET['id'];
$q=" DELETE FROM tbl_user WHERE  `user_id`=$id ";
mysqli_query($conn,$q);
header('location:user.php');

?>
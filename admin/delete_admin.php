<?php
include 'dbcon.php';

$id=$_GET['id'];

$q="DELETE FROM employee WHERE id=$id";

mysqli_query($connect,$q);

header('location:admin_dashboard.php');

?>
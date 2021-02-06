<?php

include 'dbcon.php';

$name=$_POST ['name'];

$email=$_POST ['email'];

$password=$_POST ['password'];

$department=$_POST ['department'];

$role=$_POST ['role'];


$filename=$_FILES['image'] ['name'];
$tempname=$_FILES['image'] ['tmp_name'];

$file = "upload/" .$filename;

move_uploaded_file($tempname,$file);

// echo "<img src='$file' height='100' width='100' />";

$q="INSERT INTO employee(name,email,password,department,role,image) VALUES ('$name','$email','$password','$department','$role','$file')";


$query=mysqli_query($connect,$q);

 if( $query)
   {
   	header('location:http://localhost/employee/');
   	   }

?>
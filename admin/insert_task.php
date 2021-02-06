<?php
include "session.php";
include "dbcon.php";

if (isset($_POST['submit'])) {

	 $message=$_POST['message'];
	 $assigned_by= $_POST['assigned_by'];
	 $emp_list= $_POST['emp'];
	 
	// print_r($emp_list);

	 foreach ($emp_list as $e) {
	 	$query="INSERT INTO task(task,assigned_by,emp_id)VALUES('$message','$assigned_by','$e')";

	 	$done=mysqli_query($connect,$query);

	 	header('location:task.php');
	 }
	
}



?>
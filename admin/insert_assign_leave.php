<?php
include "session.php";
include "dbcon.php";

if (isset($_POST['assign_leave'])) {

	$valid_from=$_POST['valid_from'];
	$valid_to=$_POST['valid_to'];
	$e_leave=$_POST['e_leave'];
	$m_leave=$_POST['m_leave'];
	$c_leave=$_POST['c_leave'];
	$assigned_by= $_POST['assigned_by'];
	$emp_list= $_POST['emp'];
	 
	// print_r($emp_list);

	 foreach ($emp_list as $e) {
    		
    	$query="INSERT INTO assign_leave(valid_from,valid_to,e_leave,m_leave,c_leave, assigned_by,assign_to) VALUES('$valid_from','$valid_to','$e_leave','$m_leave','$c_leave','$assigned_by','$e')";

    	$done=mysqli_query($connect,$query);
    }
    		if ($done) {

    			$_SESSION['task']="Your Assign leave is Successfully Submitted";
    			header('location:assign_leave.php');

    		}
    	}


?>
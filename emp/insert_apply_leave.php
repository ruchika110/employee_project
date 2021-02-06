<?php
include "session.php";
include "dbcon.php";

if (isset($_POST['apply_leave'])) {

	$l_from=$_POST['l_from'];
	$l_to=$_POST['l_to'];
	$e_leave=$_POST['e_leave'];
	$m_leave=$_POST['m_leave'];
	$c_leave=$_POST['c_leave'];
	$apply_by= $_POST['emp_id'];
	$status="pending";
	 
    	$query="INSERT INTO apply_leave(l_from,l_to,e_leave,m_leave,c_leave, apply_by,status) VALUES('$l_from','$l_to','$e_leave','$m_leave','$c_leave','$apply_by','$status')";

    	$done=mysqli_query($connect,$query);
    }
    		if ($done) {

    			$_SESSION['task']="Your Assign leave is Successfully Submitted";
    			header('location:leave_display.php');

    		}


?>
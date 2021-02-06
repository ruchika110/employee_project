<?php
session_start();

include ('dbcon.php');
if (isset($_POST['login']))
{
	 $email = $_POST['email'];
	 $password = $_POST['password'];

$data = "SELECT * FROM employee WHERE email = '$email' && password = '$password'";
$fire = mysqli_query($connect,$data);

$total=mysqli_num_rows($fire);

$data=mysqli_fetch_array($fire);

// echo $data['department'];

if ($total==1) {

	$role=$data['role'];

	//start if else if

	if ($role=='Admin') 
	{
		$_SESSION['id']=$email;
		$_SESSION['emp_id']=$data['emp_id'];
		header('location:admin/admin_dashboard.php');

	}

	elseif ($role=='Employee') 
	{
		$_SESSION['emp_id']=$data['emp_id'];
		$_SESSION['id']=$email;
		header('location:emp/employee_dashboard.php');
	}

	else
	{
		$_SESSION['error']="Wrong email or password";
		header('location:login.php');
	}

	//end ifelse
}
	
else
{

	$_SESSION['error']="Wrong email or password";
	header('location:login.php');
}

}

?>
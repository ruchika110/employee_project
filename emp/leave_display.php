<?php
include "session.php";
?>

<DOCTYPE html>
<html>
<head>
  <title></title>
  
  <link rel="stylesheet"href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <style>
    .icon{
      font-size: 18px;
    }
    .a{
    background-color: #296b3736;
    }
    .navbar-nav .nav-item .nav-link
    {
      padding: 10px;
      color: white;
      font-weight: 600;
      font-size: 18px;
      font-family: cursive;
    }
    .mob-logo{
      display: none;
    }
    @media(max-width:700px)
    {
      .mob-logo{
        display: block;
      }
      .web-logo{
        display:none;
      }
      .a{
        background-color: #62535c61;
      }
    }
  </style>

</head>
<body style="background-image: url(../img/33.jpeg);">
    <nav class="navbar navbar-expand-md navbar-dark a fixed-top"><!--start navbar code-->
      <div class="container"><!--start container-->
      <a href="" class="navbar-brand">
        <img  class="web-logo" src="../img/icon.png" width="60px" >
        <img class="mob-logo" src="../img/icon.png" width="60px">
      </a>


  <button class="navbar-toggler" data-toggle="collapse" data-target="#a"><!--start button-->

            <span class="navbar-toggler-icon"></span>
   
    </button><!--end button-->

      <div class="collapse navbar-collapse text-center" id="a"><!--start div of ul-->
    <ul class="navbar-nav ml-auto"><!--start ul code-->
      <li class="nav-item">
        <a href="employee_dashboard.php" class="nav-link">Dashboard</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="employee_task.php" class="nav-link">Task</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="leave_display.php" class="nav-link">Leave</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="logout.php" class="nav-link"><button class="btn btn-primary">Logout</button></a>
      </li><!--end--> 
    </ul><!--end ul code-->
     </div><!--end div of ul-->
      </div><!--end conatiner-->    
   
     
    </nav><!--end navbar code-->

<div class="container-fluid">
<div class="container">
<table class="table table-hover table-responsive" style="position: relative;top: 110px;">
  <tr class="table-light">
    <th scope="col">Sr No.</th>
    <th scope="col">Employee Name</th>
    <th scope="col">Valid From</th>
    <th scope="col">Valid To</th>
    <th scope="col">E_Leave</th>
    <th scope="col">M_Leave</th>
    <th scope="col">C_Leave</th>
    <th scope="col">Assigned_By</th>
    <th scope="col">Created_At</th>
    <th scope="col">Action</th>
  </tr>

	<?php
    include "dbcon.php";
    $i=1;
    $emp_id=$_SESSION['emp_id'];
    $q = "SELECT * from assign_leave as L1 join employee as E1 on L1.assign_to=E1.emp_id where E1.emp_id=$emp_id";

    $f=mysqli_query($connect,$q);
    while ($r= mysqli_fetch_array($f)) { 

  ?>

	<tr style="color: white">
			<td><?php echo $i++ ;?></td>
      <td><?php echo $r['name'];?></td>
      <td><?php echo $r['valid_from'];?></td>
			<td><?php echo $r['valid_to'];?></td>
      <td><?php echo $r['e_leave'];?></td>
      <td><?php echo $r['m_leave'];?></td>
      <td><?php echo $r['c_leave'];?></td>
      <td><?php echo $r['assigned_by'];?></td>
      <td><?php echo $r['created_at'];?></td>
			<td>
				<a href="view_employee.php?id=<?php echo $r['t_id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
			</td>


	</tr>

	<?php
    }
    ?>
</table>
</div><!-----end container----->
</div><!-----end container fluid---->

<div class="container" style="position: relative;top: 110px;">

  <center><i><h4 style="color:white;position: relative;top:35px;font-family: arabic;">Leave Section....</h4></i></center>
      <center><a class="btn btn-info" style="color:white;position: relative;top:50px;" href="all_leave.php">All Leave</a></center>

  <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top: 10px;position: relative;top: 80px;">
          <form method="post" action="insert_apply_leave.php">
           <div class="form-group">
            <input type="hidden" name="emp_id" value="<?php echo $_SESSION['emp_id']?>">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Leave From</label>
             <input type="date" name="l_from" class="form-control">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Leave To</label>
             <input type="date" name="l_to" class="form-control">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Earning Leave</label>
             <input type="text" name="e_leave" class="form-control" placeholder="Number of Leave">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Medical Leave</label>
             <input type="text" name="m_leave" class="form-control" placeholder="Number of Leave">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Casual Leave</label>
             <input type="text" name="c_leave" class="form-control" placeholder="Number of Leave">
            </div>

           <center><button type="submit" name="apply_leave" style="margin-left:10px;" class="btn btn-primary">Apply Leave </button></center> 
        </div><!--end col md 4-->
        <div class="col-md-2"></div>
      </div><!--end row-->

      </form>
    </div>
  </div>

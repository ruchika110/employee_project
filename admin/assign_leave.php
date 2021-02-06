<?php
include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    .a{
      background-image: url(../img/33.jpeg);
      /*background-repeat: no-repeat;*/
      /*background-position: center;*/
    }
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

 <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body class="a">

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
        <a href="admin_dashboard.php" class="nav-link">Dashboard</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="registration.php" class="nav-link">Registration</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="task.php" class="nav-link">Task</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="assign_leave.php" class="nav-link">Leave</a>
      </li><!--end-->
      <li class="nav-item">
        <a href="logout.php" class="nav-link"><button class="btn btn-primary">Logout</button></a>
      </li><!--end--> 
    </ul><!--end ul code-->
     </div><!--end div of ul-->
      </div><!--end conatiner-->    
   
     
    </nav><!--end navbar code-->

  <center><h3 style="font-size: 50px; color: white;"><b>TASK</b></h3>
  <a class="btn btn-info" href="all_leave.php" style="position: relative;top: 50px;">All Leave</a>
  <a class="btn btn-success" href="all_apply_leave.php" style="position: relative;top: 50px;">All Apply Leave</a>
  </center>
  <br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="height: 100%; background-color: transparent; color: white; border: 1px solid">
          <div class="card-body">

    <form action="insert_task.php" method="post">

  <input type="hidden" name="assigned_by" value="<?php echo $_SESSION['emp_id']?>">


    <?php
     include 'dbcon.php';
     $ery="SELECT * FROM employee where role='employee'";
     $do=mysqli_query($connect,$ery);
     while($re=mysqli_fetch_assoc($do)){
    ?>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="emp[]" type="checkbox" value="<?php echo $re['emp_id'];?>">
          <?php echo $re['name'];?>
        </label>
      </div>
      
      <?php
      }
      ?>
   
  </div>
  </div>
      </div>
      <div class="col-md-8" style="margin-top: 10px;">
          <form method="post" action="insert_assign_leave.php">
           <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Valid From...</label>
             <input type="date" name="valid_from" class="form-control">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Valid To...</label>
             <input type="date" name="valid_to" class="form-control">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Earning Leave...</label>
             <input type="text" name="e_leave" class="form-control" placeholder="Number of Leave">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Medical Leave...</label>
             <input type="text" name="m_leave" class="form-control" placeholder="Number of Leave">
            </div>

            <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i>Casual Leave...</label>
             <input type="text" name="c_leave" class="form-control" placeholder="Number of Leave">
            </div>

            <button type="submit" name="assign_leave" style="margin-left:10px;" class="btn btn-primary">Assign Leave </button>
        </div><!--end col md 4-->
        <div class="col-md-2"></div>
      </div><!--end row-->

      </form>

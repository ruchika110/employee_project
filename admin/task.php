<?php
include "session.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
    .aa{
      background-image: url(../img/33.jpeg);
      /*background-repeat: no-repeat;*/
      /*background-position: center;*/
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
<style>
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
<body class="aa">

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

  <br>
  <form method="POST" action="insert_task.php">
       <input type="hidden" name="assign_by" value="<?php echo $_SESSION['emp_id']?>">

    <div class="container-fluid" style="position:relative;top:120px;">
        <center><i><h4 class="text-white">Assign Task To Employees..</h4></i></center><br>
        <center><a class="btn btn-info" href="all_task.php">All Task</a></center><br>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4 " style="border:1px solid white; height:280px;padding: 20px;margin:25px;">

     <?php
    include "dbcon.php";
    $d = "select * from employee where role='Employee'";

    $q=mysqli_query($connect,$d);
    while ($r= mysqli_fetch_array($q)) { 

     ?>
      <div class="form-check">
        <label class="form-check-label text-white">
          <input class="form-check-input" name="emp[]" type="checkbox" value="<?php echo $r['emp_id'];?>">
          <?php echo $r['name'];?>
        </label>
      </div>
    <?php
     }
    ?>

        </div><!--end col md 4-->
        <div class="col-md-4" style="margin-top: 10px;">
           <div class="form-group">
             <label class="text-white"><i class='fa fa-smile-o fa-white' aria-hidden='true'></i><i>Assign Task...</i></label>
             <textarea class="form-control" name="message" rows="10" placeholder=""></textarea>
            </div>

            <center><button type="submit" name="submit" style="margin-left:10px;margin-bottom: 10px;" class="btn btn-primary">Submit Task</button></center>
        </div><!--end col md 4-->
        <div class="col-md-2"></div>
      </form><!--end form-->
      </div><!--end row-->



    </div>

  </form>
  </body>
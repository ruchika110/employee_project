<?php
include "session.php";
?>

<!DOCTYPE html>
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
 <body style="background-image: url(../img/33.jpeg)">

  <?php

include ('dbcon.php');

if (isset($_GET['id']))
{
 $m_id =$_GET['id'];
$query ="SELECT * FROM task where t_id=$m_id";
$fire =mysqli_query($connect,$query);

//if($fire)echo "we got the data.";
$user = mysqli_fetch_assoc($fire);
//echo $user['username'];

}
?>
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

    <div class="container" style="position:relative;top:140px;">
      <center><i><h4 class="text-white" style="font-family: arabic;">Given Task Details....</h4></i></center><br>
      <div class="row">
        <div class="col-md-1"></div><!--end-->
        <div class="col-md-10 shadow-lg" style="border:1px solid white;padding: 30px;margin:20px;border-radius: 30px;">
          <p class="text-white"><?php echo $user['task']; ?></p>

        </div><!--end col-md-10-->
        <div class="col-md-1"></div><!--end-->
      </div><!--end row-->

      <div class="row" style="margin-top:30px;">
        <div class="col-md-1"></div><!--end-->
        <div class="col-md-10 shadow-lg" style="border:1px solid white;padding: 20px;margin:20px;border-radius: 30px;">
            <i><h5 class="text-white" style="font-family: arabic;">Reply....</h5></i>
          <form method="POST" action="">
            <input type="hidden" name="m_id" value="<?php echo $m_id; ?>"><!--input hidden-->
            <input type="hidden" name="emp_id" value="<?php echo $_SESSION['id']; ?>"><!--input hidden-->
          <textarea class="form-control" name="reply" rows="2" placeholder=""></textarea>
            <center><button type="submit" name="submit" style="margin-top:20px;" class="btn btn-primary">Submit Task</button></center>
          </form>

        </div><!--end col-md-10-->
      <?php
    include "dbcon.php";
    if(isset($_POST['submit'])){
       $mid=$_POST['m_id'];
       $eid=$_POST['emp_id'];
       $reply=$_POST['reply'];

       $data="INSERT INTO task_reply(reply,m_id,reply_by)VALUES('$reply','$mid','$emp_id')";
       $f=mysqli_query($connect,$data);

    }

     ?>
        <div class="col-md-1"></div><!--end-->
      </div><!--end row-->

      <div class="row">
        <div class="col-md-1"></div><!--end-->
        <div class="col-md-10 shadow-lg" style="border:1px solid white;padding: 10px;margin:30px;border-radius: 30px;">
          <p class="text-white" style="font-family: arabic;">Chat Section...</p>
      <?php
       include "dbcon.php";
       $q = "SELECT * from task_reply JOIN employee ON employee.emp_id=task_reply.reply_by where m_id=$m_id";

       $f=mysqli_query($connect,$q);
       while ($r= mysqli_fetch_array($f)) { 

      ?>
          <p class="text-white" style="background-color:#00ffda7a;border:1px solid skyblue; border-radius: 20px;padding: 10px;"><?php echo $r['name'];?>  :- <?php echo $r['reply'];?></p>

      <?php
        }
      ?>

        </div><!--end col-md-10-->
        <div class="col-md-1"></div><!--end-->
      </div><!--end row-->

   </div><!--end conatiner-fluid-->

</body>
</html>


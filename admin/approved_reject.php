<?php

  include "dbcon.php";
  if (isset($_POST['approved'])) {
    
   $status="Approved";
   $comment=$_POST['comment'];
  $id=$_POST['a_id'];
  $query="UPDATE apply_leave set status='$status',comment='$comment' WHERE a_id=$id";

  $done=mysqli_query($connect,$query);

  if ($done) {
  	header('location:all_apply_leave.php');
  }
  }
  ?>

  <!------reject code-------->

  <?php

  include "dbcon.php";
  if (isset($_POST['rejected'])) {
    
   $status="Rejected";
   $comment=$_POST['comment'];
  $id=$_POST['a_id'];
  $query="UPDATE apply_leave set status='$status',comment='$comment' WHERE a_id=$id";

  $done=mysqli_query($connect,$query);
  
  if ($done) {
  	header('location:all_apply_leave.php');
  }
  }
  ?>
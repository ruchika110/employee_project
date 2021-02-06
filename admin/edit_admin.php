<?php
include "session.php";
include ('dbcon.php');

if (isset($_GET['emp_id']))
{
 $id =$_GET['emp_id'];
$query ="select * From employee where emp_id=$id ";
$fire =mysqli_query($connect,$query);

//if($fire)echo "we got the data.";
$r = mysqli_fetch_assoc($fire);
//echo $user['title'];

}
?>

<?php
  
  if(isset($_POST['update'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $department = $_POST['department'];
        $role = $_POST['role'];

       $filename=$_FILES['image'] ['name'];
       $tempname=$_FILES['image'] ['tmp_name'];
        $file = "upload/" .$filename;

        move_uploaded_file($tempname,$file);
       
      
       $query ="UPDATE employee SET name = '$name',email = '$email', password = '$password', department='$department', role='$role', image='$file' where emp_id=$id";
       
       $fire = mysqli_query($connect, $query);

      // if($fire)echo "data updated successfully.";
      if($fire) header("Location:admin_dashboard.php");
// if( $fire)
//     {
//       $_SESSION['success']="your blog save";
//       header('location:add_blog.php');
//          }

//          else
//          {
//           $_SESSION['error']="your blog not save";
//           header('location:add_blog.php');
//          }
  } 
  ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
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

<link rel="stylesheet"href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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

<!-- Main content -->
<br><br>
    <section class="content">
      <div class="container-fluid" style="position: relative; top: 60px;">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary" style="background-color: transparent;">
              <div class="card-header" style="background-color: transparent;">
                <h3 class="card-title" style="font-family: cursive;color: white;"><u>EDIT DETAILS</u></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label style="font-family: cursive; color: white;">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $r['name']?>">
                  </div>
                  <div class="form-group">
                    <label style="font-family: cursive;color: white;">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $r['email']?>">
                  </div>
                  <div class="form-group">
                    <label style="font-family: cursive;color: white;">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $r['password']?>">
                  </div>

                  <div class="form-group">
                  <label style="font-family: cursive;color: white;">Department</label>
                  <select name="department" class="form-control">
                    <option value="0">None</option>
                    <option value="Web Designing"
                        <?php if ($r['department']=='Web Designing')
                        {
                          echo "selected";
                        } 
                        ?>
                        >Web-Designing</option>
                     <option value="Web Development"
                        <?php if ($r['department']=='Web Development')
                                         {
                                             echo "selected";

                                         } ?>
                                         >Web Development</option>
                     <option value="Angular"
                        <?php if ($r['department']=='Angular')
                                         {
                                             echo "selected";

                                         } ?>
                                         >Angular</option>
                     <option value="Laravel"
                        <?php if ($r['department']=='Laravel')
                                         {
                                             echo "selected";

                                         } ?>
                                         >Laravel</option>
                     <option value="React js"
                        <?php if ($r['department']=='React js')
                                         {
                                             echo "selected";

                                         } ?>
                                         >React js</option>
                     <option value="Node js"
                        <?php if ($r['department']=='Node js')
                                         {
                                             echo "selected";

                                         } ?>
                                         >Node js</option>
                  </select>
                  
                </div>

                 <div class="form-group">
                  <label style="font-family: cursive;color: white;">Role</label>
                  <select name="role" class="form-control">
                    <option value="0">None</option>
                    <option value="Admin"
                        <?php if ($r['role']=='Admin')
                        {
                          echo "selected";
                        } 
                        ?>
                        >Admin</option>

                    <option value="Employee"
                        <?php if ($r['role']=='Employee')
                        {
                          echo "selected";
                        } 
                        ?>
                        >Employee</option>
                      </select>
                    </div>

                  <div class="form-group">
                    <label style="font-family: cursive;color: white;">Image</label>
                    <img style="width: 200px; height: 200px;" src="<?php echo $r['image']?>">
                  <input class="form-control" type="file" name="image">
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <center><button type="update" name="update" value="UPDATE" class="btn btn-primary" style="width: 200px;">Update</button></center>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    </body>
</html>
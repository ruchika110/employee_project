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
       
      
       $query ="UPDATE employee SET name = '$name',email = '$email', password = '$password', department='$department', role='$role', image='$file' where id=$id";
       
       $fire = mysqli_query($connect, $query);

      // if($fire)echo "data updated successfully.";
      if($fire) header("Location:employee_dashboard.php");
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


<link rel="stylesheet"href="plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<!-- Main content -->
<br><br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #007bff;">
                <h3 class="card-title" style="font-family: cursive;"><u>EDIT DETAILS</u></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label style="font-family: cursive;">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" value="<?php echo $r['name']?>">
                  </div>
                  <div class="form-group">
                    <label style="font-family: cursive;">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $r['email']?>">
                  </div>
                  <div class="form-group">
                    <label style="font-family: cursive;">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $r['password']?>">
                  </div>

                  <div class="form-group">
                  <label style="font-family: cursive;">Department</label>
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
                  <label style="font-family: cursive;">Role</label>
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
                    <label style="font-family: cursive;">Image</label>
                    <img style="width: 200px; height: 200px;" src="<?php echo $r['image']?>">
                  <input class="form-control" type="file" name="image">
                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="update" name="update" value="UPDATE" class="btn btn-primary">Update</button>
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
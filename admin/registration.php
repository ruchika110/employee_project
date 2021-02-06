<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>


      <button type="button" class="button1" data-toggle="modal" data-target="#aa">REGISTRATION</button>

       <div class="modal fade" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content" style="background-image: url(img/7.jpeg);">
      <div class="modal-header">
        <h3 class="modal-title heading1" id="exampleModalLabel">REGISTRATION FORM</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

         <form method="post" action="admin/insert_admin.php" enctype="multipart/form-data">

      <div class="form-group">
    <!-- <strong></strong> -->
    <input type="text" name="name"  class="form-control" placeholder="Enter Name">
    </div>

    <div class="form-group">
    <!-- <strong>EMAIL:</strong> -->
    <input type="text" name="email"  class="form-control" placeholder="Enter Email">
    </div>

    <div class="form-group">
    <!-- <strong>PASSWORD:</strong> -->
    <input type="password" name="password"  class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
    <!-- <strong>DEPARTMENT:</strong> -->
    <select class="form-control" name="department">
      <option>Department</option>
      <option>Web-Designing</option>
      <option>Web-Development</option>
      <option>Angular</option>
      <option>Laravel</option>
      <option>React js</option>
      <option>Node js</option>
    </select>
    </div>

    <div class="form-group" >
    <!-- <strong>ROLE:</strong> -->
    <select class="form-control" name="role">
      <option>Role</option>
      <option>Employee</option>
      <option>Admin</option>
    </select>
    </div>

     <div class="form-group">
    <!-- <strong>IMAGE:</strong> -->
    <input type="file" name="image" class="form-control">
    </div>


    <input type="submit"  class="btn btn-success form-control" value="SUBMIT">


  </div>
     </div>
        </div></form></div></div></div></div>

</body>
</html>
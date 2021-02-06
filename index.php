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

  <style>
    .button{
      margin-left: 1000px;
      width: 90px;
      background-color: white;
      color: black;
      border-radius: 4px;
      border: 0px;
      height: 38px;
      font-family: cursive;
    }

    .button1{
      margin-left: 30px;
      width: 200px;
      background-color: white;
      color: black;
      border-radius: 4px;
      border: 0px;
      height: 38px;
      font-family: cursive;
    }
    body{
      background-image: url(img/4.jpeg);
      
    }
    .heading{
      color:white;
      font-family: cursive;
    }
    .heading1{
      color:white;
      font-weight: bold;
      font-family: cursive;
      margin-left: 65px;
    }
    h3{
      color: white;
      text-align: center;
    }
  </style>
  
</head>
<body>
  
  <nav class="navbar navbar-expand-md navbar-dark a fixed-top"><!--start navbar code-->
    <div class="container"><!--start container-->
      <a href="" class="navbar-brand">
        <img  class="web-logo" src="img/icon.png" width="60px" >
        <img class="mob-logo" src="img/icon.png" width="60px">
      </a>


  <button class="navbar-toggler" data-toggle="collapse" data-target="#a"><!--start button-->

            <span class="navbar-toggler-icon"></span>
   
    </button><!--end button-->

      <div class="collapse navbar-collapse text-center" id="a"><!--start div of ul-->
    <ul class="navbar-nav ml-auto"><!--start ul code-->
      <li class="nav-item">
        <a href="index.php" class="nav-link"><button class="btn btn-danger">Login</button></a>
      </li><!--end--> 
    </ul><!--end ul code-->
     </div><!--end div of ul-->
      </div><!--end conatiner-->    
   
     
    </nav><!--end navbar code-->
<br><br>

    <div class="text-center" style="position: relative;top: 70px;">
     <h1 class="heading"> EMPLOYEE MANAGEMENT SYSTEM</h1>
    </div><br><br><br>


    <div class="container" style="position: relative;top: 70px;">
       <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
           <form method="post" action="login.php">
            <fieldset>
                
                <div class="form-group">
                <h3 style="font-family: cursive;"><u>LOGIN</u></h3>
                </div>

                <div class="form-group">
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ENTER MAIL">
                </div>

                <div class="form-group">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="PASSWORD">
                </div>

            </fieldset>
            <fieldset>
                <button type="submit" name="login" class="btn btn-success form-control">SUBMIT</button>
                <br>
                <h4 class="heading text-center" >OR</h4>
            </fieldset>
            <fieldset>
            <button type="submit" class="btn btn-danger form-control">FORGOT PASSWORD</button>
            </fieldset>
           </form>

         </div>
         <div class="col-md-2"></div>
       </div>
    </div>
</body>
</html>
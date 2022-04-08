<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/style.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Login</title>
  <style>
        body{
            background-image: url(../images/Photos/car\ for\ background.jpg);
        }
  </style>
</head>
<body>
  
  <?php
if(!empty($_POST['username']) and !empty($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
if($username=="akincemtutal" and $password == "1"){
    header("Location:/CarRent/AkinCemCarRent/html/dashboard.php?username=$username");
    die();
}
else{
    echo "WRONG!";
}
}
?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>    
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">

            <div class="text-center">
              <img src="../images/logo/logo.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-lg-4"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" name= "username" id="Username" aria-describedby="emailHelp"
                placeholder="username">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div>
            <div class="d-flex justify-content-center">
              <button style="width: 100%;" type="submit" value ="Confirm" class="blackButton">Login</button>
            </div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registered? 
            <a href="register.html" class="text-dark fw-bold"> Create an Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
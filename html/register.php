<?php
require_once('connection.php');
?>
<?php
// SQL tablosundaki attributelari tanimla

$name = "";
$surname = "";
$username = "";
$email = "";
$password = "";
$errors = array();

  
//Sign up pagenin isseti
if(isset($_POST['register'])) {
  echo "oldu";
    $name = strip_tags(mysqli_real_escape_string($conn,$_POST['name']));
    $surname = strip_tags(mysqli_real_escape_string($conn,$_POST['surname']));
    $username = strip_tags(mysqli_real_escape_string($conn,$_POST['username']));
    $email = strip_tags(mysqli_real_escape_string($conn,$_POST['email']));
    $password = strip_tags(mysqli_real_escape_string($conn,$_POST['password']));
    
    
    // bossa error yolla bolumu
    if (empty($name)) {
      array_push($errors, "Firstname is requried!");
    }
    if (empty($surname)) {
      array_push($errors, "Surname is requried!");
    }
    if (empty($username)) {
      array_push($errors, "Username is ");
    }
    if (empty($email)) {
      array_push($errors, "Email is requried!");
    }
    if (empty($password)) {
      array_push($errors, "Password is requried!");
    }
    
    // Error yoksa tabloya pushla insert et
    if (count($errors) == 0) {
      
      // Sifreyi md5 formatina getir tabloda admin gormesin
        $passwordmd5 = md5($password);
      $sql = "INSERT INTO users (name, surname, username , email , password)
        VALUES ('$name','$surname','$username','$email','$passwordmd5')";
      //mysqli_query($conn,$sql);
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      header('Location: login.php');
    }
  }
    
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        body{
            background-image: url(../images/Photos/car\ for\ background.jpg);
        }
    </style>
</head>

    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
          <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                  <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
      
                    <form name="register" method="POST" action="register.php">
                        <div class="text-center">
                            <img src="../images/logo/logo.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-lg-4"
                              width="200px" alt="profile">
                        </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Name:</label>
                        <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" placeholder="name" />
                      </div>
                      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Surname:</label>
                        <input type="text" name="surname" id="form3Example1cg" class="form-control form-control-lg" placeholder="surname"/>                       
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example1cg">Username:</label>
                        <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" placeholder="username"/>
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label"  for="form3Example3cg">Email:</label>
                        <input type="email" id="form3Example3cg"  name="email" class="form-control form-control-lg" placeholder="email"/>
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cg">Password:</label>
                        <input name="password" type="password" id="form3Example4cg" class="form-control form-control-lg" placeholder="password"/>
                      </div>
      
                      <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                        <input name="confirmPassword" type="password" onchange="onChange()" id="form3Example4cdg" class="form-control form-control-lg" placeholder="password"/>
                      </div>
                      <div class="d-flex justify-content-center">
                        <button style="width: 100%;" name="register"type="submit" class="blackButton">Register</button>
                      </div>
      
                      <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="../html/login.php" class="fw-bold text-body"><u>Login here</u></a></p>
      
                    </form>      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section>
        <script>
        function onChange() {
        const password = document.querySelector('input[name=password]');
        const confirm = document.querySelector('input[name=confirm]');
         if (confirm.value === password.value) {
        confirm.setCustomValidity('');
        } else {
         confirm.setCustomValidity('Passwords do not match');
  }
}
</script>
    </body>
</html>
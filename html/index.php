<?php 
session_start();
if(isset($_SESSION['username'])){
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"
    integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
    <!--CSS Manual-->
  <link rel="stylesheet" href="../css/style.css">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body class=" bg-light">
  <div>
  </div>
  <header class="header">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light contentContainer">
      <div class="container-fluid">
        <a class="navbar-brand" class="" href="#">AkinCar</a>

        <!--navbarSupportedContent For Responsive-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../html/index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/about-us.html">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Gallery
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../html/cars.html">Cars</a></li>
                <li><a class="dropdown-item" href="#">Owners</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../html/contuct-us.html">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../html/login.php">Sign in</a></li>
                <li><a class="dropdown-item" href="../html/register.html">Sign up</a></li>
                <li><a class="dropdown-item" href="../html/logout.php">logout</a></li>
              
              </ul>
              <li class="nav-item">
              <p class="nav-link" href="../html/contuct-us.html">Welcome, <?php echo $_SESSION['username']; ?></p>
            </li>
            </li>
            <li>
            
            </li>
          </div>
      </div>
    </nav>
  </header>
<?php
}
else{
  header("Location: login.php");
  exit();
}


?>

  <!--Rent Box-->
  <div class="rentBoxContainer">
    <div class="rentBox row">

      <form class="form d-inline-flex row  mt-2">

        <div class="col-md-4 mb-2">
          <label class="form-label" for="rentDay">Rent Day:</label>
          <input type="date" class="form-control" id="rentDay" name="rentDay">
        </div>

        <div class="col-md-4 mb-2">
          <label class="form-label" for="town">Type</label>
          <select name="town" class="form-control" id="town">
            <option value="BMW">BMW</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Audi">Audi</option>
            <option value="Renault">Renault</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label class="form-label" for="returnDay">Return Day:</label>
          <input type="date" class="form-control" id="returnDay" name="returnDay">
        </div>
        <div class="blackButtonContainer">
          <div class="center blackButton">Rent a Car</div>
        </div>
      </form>

    </div>
  </div>

  <!--Courosel-->
  <div class="text-center my-3">
    <h2 class="font-weight-light">Select your car</h2>
    <div class="row mx-auto my-auto justify-content-center">
      <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner contentContainer" role="listbox">
          <div class="carousel-item col col-md-4 active ">
            <div class="center-col cr-container">
              <div class="cr-box center">
                <p class="center">BMW</p>

              </div>
              <div class="cr-box-car center">
                <img src="https://deploy-rent2.vercel.app/static/media/car4.8f4b1196.svg"></img>
              </div>
            </div>

          </div>
          <div class="carousel-item col-md-4 ">
            <div class="center-col cr-container">
              <div class="cr-box center">
                <p >Audi</p>
              </div>
              <div class="cr-box-car center">
                <img src="https://deploy-rent2.vercel.app/static/media/car2.2e492720.svg"></img>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4 ">
            <div class="center-col cr-container">
              <div class="cr-box center">
                <p>Renault</p>

              </div>
              <div class="cr-box-car center">
                <img src="https://deploy-rent2.vercel.app/static/media/car1.84d0ca51.svg"></img>
              </div>
            </div>
          </div>
          <div class="carousel-item col-md-4  ">
            <div class="center-col cr-container">
              <div class="cr-box center">
                <p>Mercedes</p>

              </div>
              <div class="cr-box-car center">
                <img src="https://deploy-rent2.vercel.app/static/media/car3.66792253.svg"></img>
              </div>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev  w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon arrow" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next   w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon arrow" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </div>


  <!--Footer-->
  <footer class="bg-dark text-white contentContainer">
    <div class=" text-center text-md-left">

      <div class="row text-center text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-danger">AkinCar</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eaque magni iusto nostrum aperiam magnam
            enim hic, optio, inventore, quibusdam ad. Repellat nisi rem eius quibusdam dolorem quod sint a!</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-danger">Products</h5>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>lorem</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>ipsum.</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>dolor</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>sit</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>amet.</p>
        </div>
        <div class="col-md3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-danger">useful</h5>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>lorem</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>ipsum.</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>dolor</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>sit</p>
          <p> <a href="#" class="text-white" style="text-decoration: none;"></a>amet.</p>
        </div>
        <div class="col-md-4 col-log-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold text-danger">Contact</h5>
          <p>
            <i class="fa fa-home mr-3"></i> Antalya
          </p>
          <p>
            <i class="fa fa-envelope mr-3"></i> akin@gmail.com
          </p>
          <p>
            <i class="fa fa-phone mr-3"></i> +90 5555555555
          </p>
          <p>
            <i class="fa fa-print mr-3"></i> Antalya
          </p>
        </div>
      </div>
      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
          <p>Copyright 2020:<a href="#" style="text-decoration:none;">
              <strong class="text-danger ">Akin Cem Tutal</strong>
            </a></p>
        </div>

        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">

            <ul class="list-unstyled list-inline flex-start">
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white">
                  <i class="fa fa-facebook" style="color: white;"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white">
                  <i class="fa fa-twitter" style="color: white;"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="" class="btn-floating btn-sm text-white">
                  <i class="fa fa-linkedin" style="color: white;"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </hr>
    </div>
  </footer>
  <script>
    let items = document.querySelectorAll('.carousel .carousel-item')
    items.forEach((el) => {
      // number of slides per carousel-item
      const minPerSlide = 4
      let next = el.nextElementSibling
      for (var i = 1; i < minPerSlide; i++) {
        if (!next) {
          // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
      }
    })
  </script>
</body>
</html>
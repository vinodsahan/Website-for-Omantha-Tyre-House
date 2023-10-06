<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Omantha Tyre House</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Roboto:wght@100&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="./custom/css/style.css">
  <link rel="stylesheet" href="./custom/css/cartstyle.css">
  <link rel="stylesheet" href="./custom/css/loginstyle.css">
  <link rel="stylesheet" href="./custom/css/registerStyle.css">
  <link rel="stylesheet" href="./custom/css/contactUsStyle.css">
  <link rel="stylesheet" href="./custom/css/typesStyle.css">
  <link rel="stylesheet" href="./custom/css/services.css">
  <link rel="stylesheet" href="./custom/css/aboutUsStyle.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <header>
    <nav id="navBarId" class="resNavBar navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.html"><span style="font-size: 100%">Omantha</span>
          <span style="font-size: 100%; color: #ffa500">Tyre House</span></a>
        <button onclick="changeColor()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-md-auto gap-2">
            <li class="nav-item rounded">
              <a class="nav-link active" href="./index.php">Home</a>
            </li>

            <li class="navigationDropdown nav-item dropdown">
              <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="./CarTyres.php">Car Tyres</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./MotorcycleTyres.php">Motorcycle Tyres</a>
                </li>

                <li>
                  <a class="dropdown-item" href="./Truck.php">Truck Tyres</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./BusTyre.php">Bus Tyres</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./TractorTyres.php">Tractor Tyres</a>
                </li>
                <li>
                  <a class="dropdown-item" ref="./BicycleTyre.php">Bicycle Tyres</a>
                </li>
            </li>
          </ul>
          </li>

          <li class="nav-item rounded">
            <a class="nav-link active" href="Brands.php">Brands</a>
          </li>

          <li class="nav-item rounded">
            <a class="nav-link active" href="Services.php">Services</a>
          </li>

          <li class="nav-item rounded">
            <a class="nav-link active" href="aboutus.php">About Us </a>
          </li>

          <li class="nav-item rounded">
            <a class="nav-link active" href="contactus.php">Contact Us </a>
          </li>

          <li class="nav-item rounded">
            <a class="nav-link active" href="Appointment.php">Appointment </a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link active" href="login.php">Login </a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
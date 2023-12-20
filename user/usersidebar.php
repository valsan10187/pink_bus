<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" href="style1.css"> -->
  <style>
    .aTag:hover{
      color:#fff;
      background-color:grey;
    }
  </style>
  
</head>
<body>
  <div>
  <nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <hr>
      </a>
    <a class="navbar-brand" href="#"><img width="100" height="100" src="logo2.png" alt=""></a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title " id="offcanvasNavbarLabel" style="color:#b33b72"> <b>PINK BUS</b> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class ="profile "><h4 class = "text-danger px-3"><?php echo $_SESSION['access']?></h4></div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link aTag" aria-current="page" href="profile.php"> Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link aTag" href="book.php">BookTickets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  aTag" href="history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link aTag" href="logou.php">Logout</a>
          </li>
      </div>
    </div>
  </div>
</nav>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>



<!-- <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 250px; height: 100%">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <a href="/" class="d-flex justify-content-center" >
        <hr>
        <img width="100" height="100" src="logo2.png" alt="">
      </a>
      <hr>
      <div class ="profile "><h4 class = "text-success "><?php echo $_SESSION['access']?></h4></div>
      <ul class="nav nav-pills flex-column mb-auto mt-4">
        <li class="nav-item ">
          <a href="profile.php" class="nav-link link-dark" aria-current="page">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
            Profile
          </a>
        </li>
        <li class='mt-2'>
          <a href="book.php" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            BookTickets
          </a>
        </li>
        <li class='mt-2'>
          <a href="history.php" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            History
          </a>
        </li>
        <li class="mt-2">
          <a href="logou.php" class="nav-link link-dark">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            logout
          </a>
        </li>
  
      </ul> 
      <hr>
  
      -----------
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center-dark " id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="logo ob.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong></strong>
        </a>
      
  </div> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-usersidebar" style="width: 250px; height: 100%">
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
  
      <!-------------
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center-dark " id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="logo ob.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong></strong>
        </a>--->
      
  </div>
</body>
</html>




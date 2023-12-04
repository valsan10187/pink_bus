<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="d-flex flex-column flex-shrink-0 p-3 bg-info" style="min-width: 250px; max-width: 100%;">
    <a href="/" class="d-flex justify-content-center">
      <hr>
      <img width="150" height="150" src="logo.png" alt="">
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="index.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="# "></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="sidebar.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Bus Entry
        </a>
      </li>
      <li>
        <a href="display.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Display
        </a>
      </li>
      <li>
        <a href="logout.php" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Logout
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center-dark " id="dropdownUser2" data-toggle="dropdown" aria-expanded="false">
        <img src="logo ob.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong><?php echo $_SESSION['access']?></strong>
      </a>
    </div>
  </div>

  <!-- Optional: Add Bootstrap JS and Popper.js for dropdowns -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

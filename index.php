<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa; /* Light background color */
    }

    .navbar {
      background-color: #ff66b2; /* Pink background color for navbar */
    }

    .navbar-brand {
      color: #fff !important; /* White text color for brand */
      font-weight: bold;
    }

    .navbar-toggler-icon {
      /* background-color: #fff; White background color for navbar toggler icon */
    }

    .navbar-nav .nav-link {
      color: #fff !important; /* White text color for nav links */
    }

    .carousel-item img {
      width: 100%;
      height: 80vh; /* Adjust the height as needed */
      object-fit: cover;
    }

    .carousel-caption {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      text-align: center;
      width: 100%;
      color: #fff;
    }

    .carousel-caption h2 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .carousel-caption p {
      font-size: 1.5rem;
    }
    .container-fluid{
      padding:0px;
    }
    .about-us-section {
      background-color: #fff;
      padding: 50px 0;
    }

    .about-us-column {
      margin-bottom: 20px;
    }

    .about-us-image {
      width: 100%;
      height: auto;
    }
    .deepika{
      width: 100vh;
      height: 100vh; 
    }
  </style>
  <link rel="stylesheet" href="home.css">
</head>

<body>

  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <a class="navbar-brand" href="#">PINKBUS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
          <li class="nav-item"><a class="nav-link" href="log.php"> Admin </a></li>
          <li class="nav-item"><a class="nav-link" href="user/userlogin.php"> Book Tickets </a></li>
        </ul>
      </div>
    </nav>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
        <picture>
        <source media="(min-width:1080px)" srcset="carousel1.jpg">
  <source media="(min-width:465px)" srcset="bus-md-1.jpg">
  <img src="bus-md-3.jpg" alt="bus">  
</picture>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <picture>
        <source media="(min-width:1080px)" srcset="carousel2.jpg">
  <source media="(min-width:465px)" srcset="bus-md-2.jpg">
  <img src="bus-md-2.jpg" alt="bus">
</picture>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <picture>
        <source media="(min-width:1080px)" srcset="carousel3.jpg">
  <source media="(min-width:465px)" srcset="bus-md-3.jpg">
  <img src="bus-md-1.jpg" alt="bus">
</picture>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container">

  <div class="row about-us-section">
      <div class="col-md-6 mt-5 about-us-column">
        <h2>About Us</h2>
        <p>Welcome to <strong><code class="nam" style="color:	#b02e6d">Pink Bus</code></strong>, where seamless travel experiences begin! As a premier online bus ticket booking platform, we take pride in connecting you to your destination with comfort, convenience, and reliability. Our user-friendly interface allows you to effortlessly browse through a vast network of routes, ensuring you find the perfect bus journey tailored to your needs. At <strong><code class="nam" style="color:#AA336A">Pink Bus</code></strong>, we prioritize customer satisfaction, offering a secure and efficient booking process. Whether you're planning a weekend getaway or a daily commute, trust us to simplify your travel arrangements. Discover the joy of hassle-free bus ticket bookings with <strong><code class="nam" style="color:#AA336A">Pink Bus</code></strong>– where every journey is an adventure!</p>
      </div>
      <!-- <div class ="col-1"></div> -->
      <div class="col-lg-6 col-md-12 about-us-column">
        <img src="about_img.jpg" alt="About Us" class="about-us-image">
      </div>
    </div>
  </div>

  <div>
  <section>
  <div class="row text-center">
    <div class="col-md-12">
      <!-- Carousel wrapper -->
      <div id="carouselBasicExample" class="carousel slide carousel-dark" data-bs-ride="carousel">
        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            <p class="lead font-italic mx-4 mx-md-5">
              "Pink Bus provided a seamless booking process that made organizing my travel plans effortless. The buses themselves offered a comfortable and pleasent atmosphere, making the journey relaxing and enjoyable. From the user-friendly booking systems to the soothing ambiance onboard, my experience with Pink Bus exceeded expectations, ensuring a stress-free and comfortable travel experience."
            </p>
            <div class="mt-5 mb-4">
              <img src="ragav.JPG"
                class="rounded-circle img-fluid shadow-1-strong" alt="smaple image" width="100"
                height="100" />
            </div>
            <p class="text-muted mb-0">- Ragavan</p>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <p class="lead font-italic mx-4 mx-md-5">
              "Booking my travel with Pink Bus was a breeze. The entire journey was not just a trip but an experience itself. The ambiance onboard was cosy and inviting, making the travel time incredibly enjoyable. From their seamless booking process to the delightful atmosphere on the bus, Pink Bus made my journey comfortable and memorable. I highly recommend Pink Bus for a truly pleasent travel experience!"
            </p>
            <div class="mt-5 mb-4">
              <img src="deepika.jpg"
                class="rounded-circle img-fluid shadow-1-strong  deepika" alt="smaple image" />
            </div>
            <p class="text-muted mb-0">- Deepikaa</p>
          </div>

          <!-- Single item -->
          <div class="carousel-item">
            <p class="lead font-italic mx-4 mx-md-5">
              "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
              dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in
              maiores."
            </p>
            <div class="mt-5 mb-4">
              <img src="jd.jpg"
                class="rounded-circle img-fluid shadow-1-strong" alt="smaple image" width="100"
                height="100" />
            </div>
            <p class="text-muted mb-0">- Achu</p>
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBasicExample"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBasicExample"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Carousel wrapper -->
    </div>
  </div>
</section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
</body>

</html>

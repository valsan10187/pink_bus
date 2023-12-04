<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
</head>


<body>
  <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="POST" action ="signin.php">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text"  name="username" id="Name" class="form-control" />
                    <label class="form-label" for="form3Example1">Name</label>
                  </div>
                </div>
                
              <div class="col-md-3"></div>
              </div>
              <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="date" name="dob" id="exampleInputPassword1" class="form-control" />
                    <label class="form-label" for="form3Example1">DOB</label>
                  </div>
                </div>
                
              <div class="col-md-3"></div>

                
              </div>
              <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="email" name="email" id="exampleInputPassword1" class="form-control" />
                    <label class="form-label" for="form3Example1">Email   address</label>
                  </div>
                </div>
                
              <div class="col-md-3"></div>                
              </div>

  
              <div class="row">
              <div class="col-md-3"></div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="password" name="pass" id="exampleInputEmail1" class="form-control" />
                    <label class="form-label" for="form3Example1">Password</label>
                  </div>
                </div>
                
              <div class="col-md-3"></div>

                
              </div>
  
                
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary mb-4" name="signin" value="SignIn">
                  Sign up
                </button>

              
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
  
  <?php
  if(isset($_POST['signin']))
{
    $u=$_POST['username'];
    $e=$_POST['email'];
    $p=$_POST['pass'];
    $d=$_POST['dob'];
    $date=date_create("$d");
    $v=$date;
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "<script>window.open('./user/book.php','_self')</script>";
}

$sql = "INSERT INTO signin (Username, Email, Password, DateofBirth,action)VALUES ('".$u."','".$e."','".$p."','".$d."', 'user')";

if ($conn->query($sql) === TRUE) {

  echo "<script>window.open('./user/userlogin.php','_self')</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</body>

</html>


<!-- 
<form method="POST" action ="signin.php">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-3 bg-primry shadow">
        <p class="fs-2 text-center fw-bold text-dark">SignUp Form</p>
        <div class="mb-3 mt-4">

          <input type="text" class="form-control" name="username" id="Name" aria-describedby="emailHelp"
            placeholder="UserName">
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email ID">
        </div>
        <div class="mb-3 mt-4">
            <input type="password" class="form-control" name="pass" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Password">
        </div>
        <div class="mb-3">
            <input type="date" class="form-control" name="dob" id="exampleInputPassword1" placeholder="DOB">
        </div>
        <div class="d-grid col-12 mx-auto justify-content-center">
            <input type="Submit" class="btn btn-primary" name="signin" value="SignIn">
        </div>
      </div>
    </div>
    </div>


  </form> -->
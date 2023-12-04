<?php  session_start();
if(isset($_SESSION['access'])){
  header('location:sidebar.php');
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<section class="vh-100" style="background-color: #F4C2C2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src=loginpic.jpg
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="log.php">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"  style="color:fc46aa">PINK BUS</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">log into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form2Example17" >UserName</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg"name="pass" />
                    <label class="form-label" for="form2Example27" >Password</label>
                  </div>

                  <div class="mb-3">
                    <input type="submit" class="btn btn btn-primary justify-content-center " name="login" VALUE="Login">
               
            </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- <form method="POST" action="log.php">
<section class="vh-100" style="background-color: #f4dede ;">

        <div class="row justify-content-center mt-2">
            
            <div class="col-sm-3 p-5 text-center shadow ">
                <div class="mb-3"style="background-color: info ;">
                     <label for="exampleFormControlInput1" class="form-label fw-bold fs-5 text-danger ">Login Form</label>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control"  placeholder="UserName" name="email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control"  placeholder="Password" name="pass">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn btn-primary justify-content-center " name="login" VALUE="Login">
               
            </div>

        </div>
</section>        
    </form>
     -->
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";
            $conn=mysqli_connect($servername,$username,$password,"$dbname");
                if(!$conn){
                    die ("couldnot connect".mysqli_error());
                }
                if(isset($_POST['login']))
                {
                    $user=$_POST['email'];
                    $pass=$_POST['pass'];
                    $sql="SELECT * FROM signin where Username='".$user."'  and Password ='".$pass."' and action='admin'";
                    $query_run=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($query_run)==1){
                            $_SESSION['access']=$user;
                         echo "<script>window.open('sidebar.php','_self')</script>";

                        }else{
                             echo " <script>alert('invalid user')</script>";
                }
            }
    ?>            
</body>
</html>
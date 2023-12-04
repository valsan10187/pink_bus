<?php  session_start();
if(isset($_SESSION['access'])){
  header('location:sidebar.php');
}
?>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
       <!-- Font Awesome -->
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
<link rel="stylesheet" href="./style.css">

</head>
<body>
<body class = "bg-img">
  <div>
  <section class="vh-100" style="background-color: #f4dede ;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center shadow-lg p-3 rounded">
            <form method="POST" action="adminlogin.php">

              <h3 class="mb-5">Log In</h3>
  
              <div class="form-outline mb-4">
                <input type="text" id="typeEmailX-2" name ="user" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">username</label>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" name="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Password</label>
              </div>
              <input class="btn btn-primary" type="submit"  value="LogIn">
  
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  

  </div>
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
                    $user=$_POST['user'];
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
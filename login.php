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
    <link rel="stylesheet" href="style.css">

</head>

<body>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body class = "bg-img">
  <div>
  <form method="POST" action ="login.php">
    <div class="row justify-content-center mt-5 ">
      <div class="col-sm-3 bg primage-shadow p-5 shadow-dark" style:'"border radius :100px"'>
        <p class="fs-2 text-center fw-bold text-info">Login Form</p>
        <div class="mb-3 mt-4">

          <input type="text" class="form-control" id="exampleInputEmail1"  name ="user"aria-describedby="emailHelp"
            placeholder="UserName">
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="exampleInputPassword1" name ="pass" placeholder="password">
        </div>
        <input class="btn btn-primary" type="submit" name="login" value="LogIn">
</div>
      </div>
    </div>
    </div>


  </form>

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
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM signin where Username ='".$user."' and Password='".$pass."' and action='vadmin'";
    $query_run=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query_run)==1){

           echo "<script>window.open('sidebar.php','_self')</script>";

    }else{


        echo "invalid user name";
    }

}
?>


</body>

</html>
  <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
    die ("couldnot connect".mysqli_error());
}
if(isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM signin where Username ='".$user."' and Password='".$pass."' and action='admin'";
    $query_run=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query_run)==1){
      $_SESSION['access']=$user;
           echo "<script>window.open('sidebar.php','_self')</script>";

    }else{


        echo "<script> alert('invalid user')</script>";
    }

}
?>


</body>

</html>
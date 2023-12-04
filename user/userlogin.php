<?php
session_start();
if(isset($_SESSION['access'])){
    header('location:profile.php');
}
?>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;1,100;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="">
    <style>
        /* Add your custom styles here if needed */
    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid" style='background-color:#ffe6ee'>
            <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-5 pt-5">
                        <span class="h1 fw-bold mt-5 " style="color:#fc46aa">Pink Bus</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-5 mt-5 pt-5 pt-xl-0 mt-xl-5">

                        <form class="w-100" method="POST" action="userlogin.php">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="mb-4 w-100">
                                <label for="exampleInputEmail1" class="form-label">UserName</label>
                                <input type="text" id="exampleInputEmail1" name="user"
                                    class="form-control form-control-lg" />
                            </div>

                            <div class="mb-4 w-100">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" id="exampleInputPassword1" name="pass"
                                    class="form-control form-control-lg" />
                            </div>

                            <div class="pt-1 mb-4">
                                <input class="btn btn-info btn-lg btn-block" type="submit" name="login" value="LogIn">
                            </div>

                            <p>Don't have an account? <a href="../signin.php" class="link-info">Register here</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="logpic.jpg" alt="Login image" class="w-100 vh-100"
                        style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        die ("could not connect".mysqli_error());
    }
    if(isset($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $sql="SELECT * FROM signin where Username ='".$user."' and Password='".$pass."' ";
        $query_run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($query_run)==1){
            $_SESSION['access']=$user;
            echo "<script>window.open('profile.php','_self')</script>";
        } else {
            echo "invalid user name";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>

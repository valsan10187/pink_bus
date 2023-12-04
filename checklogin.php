<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die ("couldnot connect".mysqli_error());
}

    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $query = mysqli_query($conn,"SELECT * FROM signin WHERE Username='$username' AND Password='$pass'");
    $exists = mysqli_num_rows($query);
    if ($exists > 0){
        $_SESSION['user'] = $user;
        header("location:sidebar.php");
    }
    else{
        // echo "Invalid username or password.";
        Print '<script>alert("Invalid username...!");</script>';
        Print '<script>window.location.assign("adminlogin.php");</script>';
    }

    // $sql="SELECT * FROM signin where Username ='".$user."' and Password='".$pass."' and action='admin'";
    // $query_run=mysqli_query($conn,$sql);
    // if(mysqli_num_rows($query_run)==1){
    //     header("sidebar.php");
    //     echo "<script>window.open('sidebar.php')</script>" ;
    // }else{
    //     echo "invalid user name";
    // }

?>
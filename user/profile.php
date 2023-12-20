<?php  session_start();
if(!isset($_SESSION['access'])){
  header('location:userlogin.php');
}
?>

<html>
    <title>sidebar</title>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="row "style ="background-color:#eeeeee">
        <div class="">
        <?php
        include('usersidebar.php');
        ?>
      </div>
      <div class="col-1 col-md-1"></div>
      <div class="col-11 col-md-10 my-5">
      <?php
      $a=$_SESSION['access'];
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="sreevalsan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM signin where Username = '$a'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";

        $USER = $row["Username"];
        $EMAIL =$row["Email"];
        $PASS = $row["Password"];
        $DOB = $row["DateofBirth"];
        $ADDHAAR = $row["addhaar"];
        $ADDRESS =$row["address"];
        $GENDER = $row["gender"];
    }
}
        ?>
                      <form method="POST" action ="profile.php">
                <div class ="row mb-3"> 
                <p class="fs-3 text-center fw-bold text-info"> USER PROFILE </p>
                <hr>
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">EmailId</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="email" value = "<?php echo $EMAIL?>" class =" form-control" name ="email" readonly>
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Name</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" value= "<?php echo $USER?>" class =" form-control" name ="username">
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Date Of Birth</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="date" value = "<?php echo $DOB?>" class =" form-control" name ="dob">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Password</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" value = "<?php echo $PASS?>" class =" form-control" name ="pass">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Addhaar No</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" value = "<?php echo $ADDHAAR?>" class =" form-control" name ="addhaar">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Address</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <textarea value = "<?php echo $ADDRESS?>" class =" form-control" name ="address"></textarea>
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Gender</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <select class = "mt-1" value = "<?php echo $GENDER?>" name ="gender">
                        <option>Select Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
</select>
                </div>
                </div>
                <div class="d-grid col-12 mx-auto justify-content-center">
                <input type="submit" class="btn btn-primary mt-5" name="book" value="Update">
</div>

                </form>

                <?php
  if(isset($_POST['book']))
{
    $l=$_POST['email'];
    $m=$_POST['username'];
    $b=$_POST['dob'];
    $PA=$_POST['pass'];
    $ad=$_POST['addhaar'];
    $add=$_POST['address'];
    $gen=$_POST['gender'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}   

$sql = "UPDATE signin SET Email = '".$l."', Username ='".$m."' , DateofBirth ='".$b."' , Password ='".$PA."' , addhaar ='.$ad.' , address ='".$add."', gender ='".$gen."' WHERE Email='$l' ";

if ($conn->query($sql) === TRUE) {
  echo "<script>window.open('profile.php','_self')
  alert('Updated Successfully')
  </script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

       
</div>
</div>
</div>
<div class="col-md-1"></div>

    </body>
</html>
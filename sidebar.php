<?php  session_start();
if(!isset($_SESSION['access'])){
    Print '<script>alert("Invalid Access..!!");</script>';
  header('location:log.php');
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
    <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="">
                <?php include('rightbar.php'); ?>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-10 my-5">
                <form method="POST" action="sidebar.php">
                    <div class="row mb-3">
                        <p class="fs-3 text-center fw-bold text-info">Bus Entry</p>
                        <hr>
                        <div class="col-sm-5 col-md-5 mt-4">
                            <label class="form-label fw-bold">Bus Number</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="text" class="form-control" name="busnumber">
                        </div>
                        <div class="col-sm-5 col-md-5 mt-4">
                            <label class="form-label fw-bold">Name</label>
                        </div>
                        <div class="col-sm-5 mt-4">
                            <input type="text" class="form-control" name ="name">
                        </div>
                        <div class="col-sm-5 mt-4">
                            <label class="form-label fw-bold">Date</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="date" class="form-control" name ="date">
                        </div>
                        <div class="col-sm-5 mt-4">
                            <label class="form-label fw-bold">Time</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="time" class="form-control" name ="time">
                        </div>
                        <div class="col-sm-5 mt-4">
                            <label class="form-label fw-bold">Start Route</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="text" class="form-control" name ="startbusroute">
                        </div>
                        <div class="col-sm-5 mt-4">
                            <label class="form-label fw-bold">End Route</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="text" class="form-control" name ="endbusroute">
                        </div>
                        <div class="col-sm-5 mt-4">
                            <label class="form-label fw-bold">Seat Count</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="text" class="form-control" name ="seatcount">
                        </div>
                        <div class="col-sm-5 mt-4">
                            <label class="form-label fw-bold">Number Of Reserved Seats</label>
                        </div>
                        <div class="col-md-5 mt-4">
                            <input type="text" class="form-control" name ="reserve">
                        </div>

                    </div>
                    <!-- ... (repeat the structure for other form elements) ... -->
                    <div class="d-grid col-12 mx-auto justify-content-center">
                        <input type="submit" class="btn btn-primary " name="book" value="Submit">
                    </div>
                </form>
        <!-- <div class ="row">
            <div class ="col-sm-3">
            
  </div>
            <div class ="col-sm-9">
                <form method="POST" action ="sidebar.php">
                <div class ="row mb-3">
                <p class="fs-3 text-center fw-bold text-info">Bus Entry</p>
                <hr>
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Bus Number</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" class =" form-control" name ="busnumber">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Name</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" class =" form-control" name ="name">
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Date</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="date" class =" form-control" name ="date">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Time</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="time" class =" form-control" name ="time">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Start route</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" class =" form-control" name ="startbusroute">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">End route</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" class =" form-control" name ="endbusroute">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Seat Count</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="number" class =" form-control" name ="seatcount">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">No of Seat Reserve</label>
                    </div>
                <div class ="col-sm-5 mt-4">
                    <input type="text" class =" form-control" name ="reserve">
                </div>
                </div>
                <div class="d-grid col-12 mx-auto justify-content-center">
                <input type="submit" class="btn btn-primary " name="book" value="Submit">
</div>

                </form> -->
                <?php
if(isset($_POST['book']))
{
    $b=$_POST['busnumber'];
    $n=$_POST['name'];
    $d=$_POST['date'];
    $t=$_POST['time'];
    $sbu=$_POST['startbusroute'];
    $ebu=$_POST['endbusroute'];
    $s=$_POST['seatcount'];
    $r=$_POST['reserve'];

    $date=date_create("$d");
    $D1=date_format($date,"d/m/Y");
    
    echo'<table class="table">
    <thead>
      <tr>
        <th scope="col">BUS NAME</th>
        <th scope="col">NAME</th>
        <th scope="col">DATE</th>
        <th scope="col">TIME</th>
        <th scope="col">PICK UP</th>
        <th scope="col">DROP</th>
        <th scope="col">SEATCOUNT</th>
        <th scope="col">RESERVE</th>

        </tr>
    </thead>
    <tbody>
      <tr>
        
        <td>'.$b.'</td>
        <td>'.$n.'</td>
        <td>'.$D1.'</td>
        <td>'.$t.'</td>
        <td>'.$sbu.'</td>
        <td>'.$ebu.'</td>
        <td>'.$s.'</td>
        <td>'.$r.'</td>
     
       

      </tr>
      </tbody>
     </table>
      
      ';

      $servername="localhost";
      $username="root";
      $password="";
      $dbname="sreevalsan";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO bus (BNo, Name, Date, Time, sRoute, eRoute, Seatcount, Reserve)VALUES (".$b.",'". $n."', '".$d."','". $t."', '".$sbu."', '".$ebu."', ".$s.", '".$r."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
            </div>
            <div class="col-md-1"></div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
        
    </body>
</html>









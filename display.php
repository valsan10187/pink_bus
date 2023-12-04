<?php  session_start();
if(!isset($_SESSION['access'])){
  header('location:adminlogin.php');
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function x(BNo)
    {
        var ans= confirm("Are you sure want to delete?");
        if(ans)
        {
          window.location.assign("delete.php?BNo="+BNo);
        }
        else
        {

        }
    }
    </script>
</head>
<body>
    <div class="row">
      <div class="col-sm-3">
        <?php
        include('rightbar.php');
        ?>
      </div>

      <div class="col-sm-9 p-2 bg-light border">
        <table class="table table-striped">
<thead>
  <tr>
  <th scope="col">BusNo</th>

    <th scope="col">NAME</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>
    <th scope="col">Pick Up</th>
    <th scope="col">Drop</th>
    <th scope="col">Seatcount</th>
    <th scope="col">Reserved</th>
    
    
    </tr>
</thead>


      <?php
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

$sql = "SELECT * FROM bus";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";

        $BNo = $row["BNo"];
        $Name =$row["Name"];
        $Date = $row["Date"];
        $Time = $row["Time"];
        $SRoute =$row["SRoute"];
        $ERoute =$row["ERoute"];
        $SeatCount =$row["SeatCount"];
        $Reserve = $row["Reserve"];
        ?>
        

        <tr><td><?php echo $BNo?></td>
    <td ><?php echo $Name?></td>
    <td ><?php echo $Date?></td>
    <td ><?php echo $Time?></td>
    <td ><?php echo $SRoute?></td>
    <td ><?php echo $ERoute?></td>
    <td ><?php echo $SeatCount?></td>
    <td ><?php echo $Reserve?></td>
    <td class="fw-bold"><button type="button" class=" btnx btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop " onclick="y('<?php echo $SeatCount?>')">Edit</button>
    <button type="button" class="btn btn-outline-danger" onclick="x('<?php echo $BNo?>')">Delete</button></td>
    </tr> 
    <script>
    $(document).ready(function(){
        $('.btnx').on('click', function(){

            $('#exampleModal').modal('show');
            $tr =$(this).closest('tr');
            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();
          
           
            $('#busno').val(data[0]);
            $('#name').val(data[1]);
            $('#date').val(data[2]);
            $('#time').val(data[3]);
            $('#sroute').val(data[4]);
            $('#eroute').val(data[4]);
            $('#seatcount').val(data[5]);
            $('#reserve').val(data[6]);
        });
    });
  </script>
    <!------model----->

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action ="display.php" method="POST">
      <div class ="row mb-3">
                <p class="fs-3 text-center fw-bold text-info">Bus Entry</p>
                <hr>
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Bus Number</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="text" class =" form-control" name ="busnumber" id ="busno" readonly>
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Name</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="text" class =" form-control" name ="name" id= "name">
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Date</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="text" class =" form-control" name ="date" id ="date">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Time</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="time" class =" form-control" name ="time" id ="time">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Pick Up</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="text" class =" form-control" name ="sroute" id="busroute">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Drop</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="text" class =" form-control" name ="eroute" id="busroute">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">Seat Count</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="number" class =" form-control" name ="seatcount" id ="seatcount">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-3 mt-4">
                        <label class="form-label fw-bold">No of Seat Reserve</label>
                    </div>
                <div class ="col-sm-8 mt-4">
                    <input type="text" class =" form-control" name ="reserve" id="reserve">
                </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
      </div>
    </div>
</form>
<?php
  if(isset($_POST['submit']))
{
    $u=$_POST['busnumber'];
    $e=$_POST['name'];
    $p=$_POST['date'];
    $d=$_POST['time'];
    $sbu=$_POST['sroute'];
    $ebu=$_POST['eroute'];
    $s=$_POST['seatcount'];
    $r=$_POST['reserve'];
    $date=date_create("$p");
    $v=$date;
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE bus SET Name = '".$e."', Date ='".$p."' , Time ='".$d."' , sRoute ='".$sbu."' , eRoute ='".$ebu."' , SeatCount ='.$s.' , Reserve ='".$r."' WHERE BNo='$u' ";

if ($conn->query($sql) === TRUE) {
  echo "<script>window.open('display.php','_self')
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
   
<?php
    }
} 
else {
    echo "0 results";
}

$conn->close()
?>

</table>               
        </div>
</body>
    </html>
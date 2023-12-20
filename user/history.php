<?php  session_start();
if(!isset($_SESSION['access'])){
  header('location:userlogin.php');
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="style.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    function x(h1)

    {
        var ans=confirm("Are You Sure You Want To Delete This Row");
            if(ans){
                window.location.assign("delete.php?Bno="+Bno);
            }
            else{
            }
        
    }
    </script>
</head>
<body>  
    <div class="row">
        <div class="">

       <?php 
       include('usersidebar.php');
       ?>
       

    

        </div>
        
            
        <div class="col-1"></div>
        <div class=" col-10 table-responsive my-5">
        <h2 class="text-info mb-5 text-center" >Booking History</h2>
        <table class="table">
<thead>
  <tr>
  <th scope="col">BusNo</th>

    <th scope="col"> Travels Name</th>
    <th scope="col">Amount</th>

    <th scope="col">Date</th>
    <th scope="col">Time</th>
    <th scope="col">StartRoute</th>
    <th scope="col">EndRoute</th>

    
    <th scope="col">No of Tickets</th>
    <th scope="col">Total Amount</th>
    <th scope="col">Seat no</th>
    
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
$a=$_SESSION['access'];


$sql = "SELECT * FROM ticket where CName='$a'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        
        
    
       
        $h1= $row["BusNo"];
        $h2= $row["Name"]; 
        $h3= $row["Amount"];
        $h4= $row["Date"];
        $h5= $row["Time"];
        $h6= $row["SRoute"];
        $h7= $row["ERoute"];
        $h8= $row["ticket"];
        $h9= $row["total"];
        $h10= $row["seat"];
        
      

       
       
    


       ?>

<tr><td><?php echo $h1?></td>
   <td><?php echo $h2?></td>
   <td><?php echo $h3?></td>
   <td><?php echo $h4?></td>

   <td><?php echo $h5?></td>
   <td><?php echo $h6?></td>
   <td><?php echo $h7?></td>
   <td><?php echo $h8?></td>
   <td><?php echo $h9?></td>
   <td><?php echo $h10?></td>
   <td class="fw-bold"><button type="button" class=" btnx btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop " onclick="y('<?php echo $SeatCount?>')">Print Tickets</button></td>


    <td class="fw-bold">
    



    </td>
    </tr>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <script>
    $(document).ready(function(){
        $('.btnx').on('click', function(){

            $('#exampleModal').modal('show');
            $tr =$(this).closest('tr');
            var data= $tr.children("td").map(function(){
              return $(this).text();
            }).get();
          
           
            $('#busNo').val(data[0]);
            $('#Name').val(data[1]);
            $('#Amount').val(data[2]);
            $('#Date').val(data[3]);
            $('#Time').val(data[4]);
            $('#Sroute').val(data[5]);
            $('#Eroute').val(data[6]);
            $('#ticket').val(data[6]);
            $('#total').val(data[7]);
            $('#seat').val(data[8]);
        });
    });
  </script>

  <!----MOdel-->
<div class="p-3 mb-2 bg-body text-dark">
  <div class="modal-dialog" style="width:100% ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action ="history.php" method="POST">
      <div class ="row mb-3">
                <p class="fs-3 text-center fw-bold text-info">TICKETS TO PRINT</p>
                <hr>
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Bus Number</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="text" class =" form-control" name ="busNo" id ="busNo">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Travels Name</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="text" class =" form-control" name ="Name" id= "Name">
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Amount</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="text" class =" form-control" name ="Amount" id ="Amount">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Date</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="Date" class =" form-control" name ="Date" id ="Date">
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Time</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="time" class =" form-control" name ="Time" id ="Time">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Start Route</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="text" class =" form-control" name ="Sroute" id="Sroute">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">End Route</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="text" class =" form-control" name ="Eroute" id="Eroute">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">No Of Tickets</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="number" class =" form-control" name ="total" id ="total">
                </div>
                </div>
                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Total Amount</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="number" class =" form-control" name ="seat" id ="seat">
                </div>
                </div>
                                <div class ="row mb-3">
                    <div class ="col-sm-6 mt-4">
                        <label class="form-label fw-bold">Seat Number</label>
                    </div>
                <div class ="col-sm-6 mt-4">
                    <input type="number" class =" form-control" name ="seat" id ="seat">
                </div>
                </div>
      </div>

    </div>
    <a href="javascript:window.print()"class="btn btn btn-primary justify-content-center ">Click to print</a>
    </div>
</form>
           
                

                <?php
    }
} else {
    echo "0 results";
}

$conn->close();

?>

                <?php
      if(isset($_POST['usave']))
      {
        $uname=$_POST['uname'];

        $uemail=$_POST['uemail'];
        $udob=$_POST['udob'];
        $upass=$_POST['upass'];
        $uadhar=$_POST['uadhar'];
        $uaddress=$_POST['uaddress'];
        $ugender=$_POST['ugender'];


        


        $servername="localhost";
        $username="root";
        $password="";
        $dbname="sreevalsan";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error); 
        }
        
        $sql = "UPDATE reg SET Rname='".$uname."',Remail='".$uemail."',Rpass='".$upass."',Rdob='".$udob."',Radhar='$uadhar',Raddress='".$uaddress."',Rgender='".$ugender."' WHERE Remail='$email' " ;
       

       // $sql = "UPDATE bus (BName,BDate,BTime,Rout,Seatcount,reservation)VALUES('".$n."', '".$d."','".$t."','".$r."',".$s.",".$re.")";
        
        if ($conn->query($sql) === TRUE) {
          echo "<script>window.open('History.php','_self')
          alert('Update successfuly')
        
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
      
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
    </html>
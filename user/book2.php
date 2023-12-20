<?php  session_start();
if(!isset($_SESSION['access'])){
  header('location:userlogin.php');
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    function pr()
    {
        var a,b,total;
        a=document.getElementById("not").value;
        b=document.getElementById("am").value;
        total=a*b;
        document.getElementById("tp").value=total;

    
    }
    function chkcontrol(j) {
var total=0;
var s=document.getElementById("not").value;
for(var i=0; i < document.form1.ckb.length; i++){
if(document.form1.ckb[i].checked){
total =total +1;}
if(total > s){
alert("Please Select only three") 
document.form1.ckb[j].checked = false ;
return false;
}
}
}
  function st()
    {
      var a="";
      if(document.getElementById("1A").checked)
      {
        a=a+document.getElementById("1A").value+",";
        
      }
      if(document.getElementById("1B").checked)
      {
        a=a+document.getElementById("1B").value+",";
        
      }
      if(document.getElementById("2A").checked)
      {
        a=a+document.getElementById("2A").value+",";
        
      }
      if(document.getElementById("2B").checked)
      {
        a=a+document.getElementById("2B").value+",";
        
      }
      if(document.getElementById("3A").checked)
      {
        a=a+document.getElementById("3A").value+",";
        
      }
      if(document.getElementById("3B").checked)
      {
        a=a+document.getElementById("3B").value+",";
        
      }
      if(document.getElementById("4A").checked)
      {
        a=a+document.getElementById("4A").value+",";
        
      }
      if(document.getElementById("4B").checked)
      {
        a=a+document.getElementById("4B").value+",";
        
      }
      document.getElementById("seatno").value=a;
      
      
      
    }

    
    </script>
    <style>

input[type=checkbox]
{
    margin: 4px 0 0;
    line-height: normal;
    width: 30px;
    height: 30px;
    

}
.book2-container{
  margin-top:123px !important;
}

</style>
</head>
<body>
    <div class="row">
        <div class="">

                <?php 
                    include('usersidebar.php');
                ?>

        </div>
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

$a=$_GET['Bno'];


$sql = "SELECT * FROM bus where Bno='$a'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
        
        
    
        
        $Bno= $row["BNo"];
        $Bname= $row["Name"];
        $rate=$row["amount"];
        $date=$row["Date"];
       $time= $row["Time"];
      $seatc=  $row["SeatCount"];
       $form=  $row["SRoute"];
       $to=$row["ERoute"];

       
       
       
       
    


       ?>
             

    <div class="col-1"></div>
        <div class="col-11 col-lg-5 book2-container" >
          <form method="POST" action="checkout.php ">
          <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Your Name</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $_SESSION['access'] ?>"readonly name="y" >

                        </div>
                        
                </div>
              <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">BusN0</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $Bno?>"readonly name="n1" >

                        </div>
                        
                </div>
                <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">BusName</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $Bname?>"readonly name="n2" >

                        </div>
                        
                </div>
                <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Amount</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="am" value="<?php echo $rate?>"readonly name="n3" >

                        </div>
                        
                </div>

                <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">date</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $date?>"readonly name="n4" >

                        </div>
                        
                </div>
                <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Time</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $time?>"readonly name="n5" >

                        </div>
                        
                </div><div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Total Seat</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $seatc?>"readonly name="no" >

                        </div>
                        
                </div><div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Form</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $form?>" readonly name="n6" >

                        </div>
                        
                </div><div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">To</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" value="<?php echo $to?>"readonly name="n7" >

                        </div>
                        
                </div><div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">No OF Tickets</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="n8" id="not" >

                        </div>
                        
                </div>
                <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Total Price</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="n9" onclick="pr()" id="tp">

                        </div>
                </div>
                <div class="row mb-3">
                        <div class="col-sm-3  ">
                            <label class="form-label fw-bold">Seat Number</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="n10"  onclick="st()" id="seatno">

                        </div>
                        
                </div>
                <div class="mb-3">
            <input type="submit" class="btn btn btn-primary justify-content-center " name="book" value="BOOK">
        

            </div>
    </form>
                
                <!---seats--->
                
                

            
                    
                <?php
    }
} else {
    echo "0 results";
}

$conn->close();

?>    
        </div>
    <div class="col-1"></div>

        <div class="col-11 col-lg-5">
       




    <div class="row justify-content-center book2-container">
        <div class="col-sm-9" style="border-left-style: groove; border-left-color:red;border-right-style: groove; border-right-color:red; ">
            
        <form name=form1 method=post action=seat.html>
                <ol class="seats fs-5 fw-bold" type="A"  >
                    <li class="seat text-nowrap" style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value="1A" onclick='chkcontrol(0)'; id="1A" style="float: left; ">
                        
                        <label  style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value="2A" onclick='chkcontrol(1)'; id="2A">
                      
  
                        <label  style="padding-right:17%;color: red;">2</label>
                        <input type=checkbox name=ckb value="3A" onclick='chkcontrol(2)'; id="3A">
                        
                        <label style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value="4A" onclick='chkcontrol(3)'; id="4A">
                        
                        <label  style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1B onclick='chkcontrol(4)'; id="1B" style="float: left; ">
                        
                        <label  style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2B onclick='chkcontrol(5)'; id="2B">
                      
  
                        <label  style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3B onclick='chkcontrol(6)'; id="3B">
                        
                        <label  style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4B onclick='chkcontrol(7)'; id="4B">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1C onclick='chkcontrol(8)'; id="1C" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2C onclick='chkcontrol(9)'; id="2C">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3C onclick='chkcontrol(10)'; id="3C">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4C onclick='chkcontrol(11)'; id="4C">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1D onclick='chkcontrol(12)'; id="1D" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2D onclick='chkcontrol(13)'; id="2D">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3D onclick='chkcontrol(14)'; id="3D">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4D onclick='chkcontrol(15)'; id="4D">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1E onclick='chkcontrol(16)'; id="1E" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2E onclick='chkcontrol(17)'; id="2E">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3E onclick='chkcontrol(18)'; id="3E">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4E onclick='chkcontrol(19)'; id="4E">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1F onclick='chkcontrol(20)'; id="1F" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2F onclick='chkcontrol(21)'; id="2F">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3F onclick='chkcontrol(22)'; id="3F">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4F onclick='chkcontrol(23)'; id="4F">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1G onclick='chkcontrol(24)'; id="1G" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2G onclick='chkcontrol(25)'; id="2G">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3G onclick='chkcontrol(26)'; id="3G">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4G onclick='chkcontrol(27)'; id="4G">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1H onclick='chkcontrol(28)'; id="1H" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2H onclick='chkcontrol(29)'; id="2H">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3H onclick='chkcontrol(30)'; id="3H">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4H onclick='chkcontrol(31)'; id="4H">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1I onclick='chkcontrol(32)'; id="1I" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2I onclick='chkcontrol(33)'; id="2I">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3I onclick='chkcontrol(34)'; id="3I">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4I onclick='chkcontrol(35)'; id="4I">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>

                      <li class="seat text-nowrap"style="padding-bottom:5%;">
                      <input type=checkbox name=ckb value=1J onclick='chkcontrol(36)'; id="1J" style="float: left; ">
                        
                        <label for="1A" style=" margin-right: 3%; color: red;">1</label>
                        <input type=checkbox name=ckb value=2J onclick='chkcontrol(37)'; id="2J">
                      
  
                        <label for="1A" style="padding-right: 17%;color: red;">2</label>
                        <input type=checkbox name=ckb value=3J onclick='chkcontrol(38)'; id="3J">
                        
                        <label for="1A" style=" margin-right: 3%;color: red;">3</label>
                        <input type=checkbox name=ckb value=4J onclick='chkcontrol(39)'; id="4J">
                        
                        <label for="1A" style="color: red;" >4</label>
                      </li>


                      

                      
                      
                      
                      
                    </ol>
                    <div id=msg></div><br><br>
                   

                  </form>
                <!--- <input type="submit" class=" btnx btn btn-primary " id="seatbook" value="book">--->          
                </div>



             

       
    </div>


                        

                </div>
           
        
        
    </div>
      
    <?php
      if(isset($_POST['book']))
      {
        $y=$_POST['y'];
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        $n4=$_POST['n4'];
        $n5=$_POST['n5'];
        $n6=$_POST['n6'];
        $n7=$_POST['n7'];
        $n8=$_POST['n8'];
        $n9=$_POST['n9'];
        $n10=$_POST['n10'];
        

        


        $servername="localhost";
        $username="root";
        $password="";
        $dbname="sreevalsan";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO ticket(CName,BusNo,Name,Amount,Date,Time,SRoute,ERoute,ticket,total,seat)VALUES('".$y."',".$n1.",'".$n2."',".$n3.",'".$n4."','".$n5."','".$n6."','".$n7."',".$n8.",".$n9.",'".$n10."')";
        
        if ($conn->query($sql) === TRUE) {
          echo "<script>
          alert('register successfuly')
          
          </script>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
      }

    ?>


</body>
    </html>
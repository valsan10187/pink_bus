<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="sreevalsan";
 
 $conn = new  mysqli ($servername, $username, $password, $dbname);

if(isset($_GET['BNo'])){
    $Id=$_GET['BNo'];
    
    try{
        


        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
     
         else{

         $sql="DELETE FROM bus where BNo=$Id";
  
             if ($conn->query($sql) === TRUE) {
               echo "Record Deleted successfully";
                 } else {
                         echo "Error: " . $sql . "<br>" . $conn->error;
                          }

            $conn->close();


              header("Location:display.php");
             } 
    }
    catch(PDOException $e){
        echo "An Error Occured:".$e->getMessage();
    }
}
else{
    echo"<h1>Wrong Request</h1>";
}
$conn=null;
?>
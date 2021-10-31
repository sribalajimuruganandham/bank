<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">
    



       
        <?php include "top.php"?>
        


<?php
$servername = "localhost";
$username = "root";
$password = "sribalaji999@@@";
$dbname = "mtm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$acno=$_GET["acno"];
$amo=$_GET["amo"];
$sql1="UPDATE account_holders SET Balance=Balance+'$amo' WHERE Ac_No='$acno'";

if($conn->query($sql1)===TRUE){
    echo $amo;
    
}
if(!empty($_GET["amo"])){
    $sql2 = "SELECT * FROM account_holders WHERE Ac_No='$acno'";
    $result = $conn->query($sql2);
    
    if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while($result !== false && $row = $result->fetch_assoc()) {
          
          echo "<div id='ji' ><p id='msg'>AMOUNT SUCCESSFULLY CREDITED</p><p id='kgf'>Balance :".$row["Balance"]."<P>";
        }
      }
   
    
}



$conn->close();

?>

        <style>
            #ji{
                width:800px;
	height: 450px;
	background-color: rgba(255, 255, 255);
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
	margin: auto;
    text-align: center;
    border-radius: 40px;
                 }
            #msg{
              box-shadow: black;
                align-items: center;
                vertical-align: middle;
                font-size: 30px;
                font-weight: bold;
                font-style:oblique ;
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                color: darkviolet;
             
            background-size:50%;  }
        #kgf{
               font-size: 20px;
               font-family:Verdana, Geneva, Tahoma, sans-serif;
        }        
        #img{
               height: 30px;
               width: 30px;
        } 
        </style>
    </body>
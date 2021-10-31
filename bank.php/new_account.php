<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">
    
    
    
    
    <?php include "top.php"?>
    <div  id="ji">
        <p id="msg">ACCOUNT SUCCESSFULLY CREATED!</p>
        <img id="img"src="succ.png"/>
        <p id="kgf">Customer Name &nbsp;: &nbsp;Roger&nbsp; &nbsp; &nbsp;</p>
        <p id="kgf">Account Number &nbsp;: &nbsp;MTM143-XXXX</p>
        <p id="kgf">Account Type &nbsp;: &nbsp;Savings</p>
        </div>
        
        </div>
        </body>
        <style>
            #ji{
                width:700px;
	height: 350px;
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
               font-size: 30px;
        }        
        #img{
               height: 30px;
               width: 30px;
        }        
        </style>
        </html>

<?php
$servername = "localhost";
$username = "root";
$password = "sribalaji999@@@";
$dbname = "mtm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(!empty($_GET['Age'])){
    $name= $_GET["name1"].$_GET["name2"];
    
    $Address=$_GET["door"].",".$_GET["city"].",".$_GET["dist"].",".$_GET["state"];
    
    
    $sqlac="SELECT New_number FROM Ac_No";
    $result=$conn->query($sqlac);
    if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while($result !== false && $row = $result->fetch_assoc()) {
          $accountnumber=$row["New_number"];
        }
      }
      
    $sqlacno="UPDATE Ac_No SET New_number=New_number+1";
    $conn->query($sqlacno) ;
    $accountnumber1="MTM243-".$accountnumber;
    

    $sql = "INSERT INTO account_holders(Name1,Age,Gender,Email,Date_of_birth,Ph_No,Aadhar_No,Address,Ac_No,Password)
            VALUES ('$name','$_GET[Age]','$_GET[Gender]','$_GET[Email]','$_GET[Date_of_birth]','$_GET[Ph_No]','$_GET[Aadhar_No]','$Address','$accountnumber1','$_GET[password]')";
  
  if ($conn->query($sql) === TRUE) {
      
      echo $_GET["name1"];
      
      
      
      
    } 
    
}


$conn->close();

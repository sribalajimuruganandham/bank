<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">

    <div id="hole">
        <div id="topbar"><img id="tbicon"src="logo.png"><h1 id="title">MTM Bank of India</h2></img></div>
        <div id="timebar"><p>Transaction successfully made</p></div>
        <div id="tablebar">&nbsp;<p><table><tr><td>Transfer From</td><td></td></tr><tr><td>Tranfer To</td><td></td></tr><tr><td>Amount</td><td></td></tr><tr><td>Time</td><td></td></tr><tr><td>Date</td><td></td></tr><tr><td>Date</td><td>Balance</td></tr></table></p></div>
        <footer>This computer generated Recipt no signature is required.<br>Electronic Recipt owns no official legal effect ,You may go to branch to get the paper receipt</footer>
    </div>


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
$acno1=$_GET["acno1"];
$acno2=$_GET["acno2"];
$amo1=$_GET["amo"];

$sql1="UPDATE account_holders SET Balance=Balance-'$amo1' WHERE Ac_No='$acno1'";
$sql2="UPDATE account_holders SET Balance=Balance+'$amo1' WHERE Ac_No='$acno2'";

if($conn->query($sql1)===TRUE){
    echo $acno1;
    
}
if($conn->query($sql2)===TRUE){
    echo $acno2;
    
}
$time=date('h:i:s');
$date= date('d-m-Y');


if(!empty($_GET["amo"])){
    $sql2 = "SELECT * FROM account_holders WHERE Ac_No='$acno1'";
    $result = $conn->query($sql2);
    
    if ($result !== false && $result->num_rows > 0) {
        // output data of each row
        while($result !== false && $row = $result->fetch_assoc()) {
          echo "  <div id='hole'>
          <div id='topbar'><img id='tbicon'src='logo.png'><h1 id='title'>MTM Bank of India</h2></img></div>
          <div id='timebar'><p id='success'>Transaction successfully completed</p> <img id='succlogo'src='succ.png'></img></div>
          <div id='tablebar'><p><table><tr><td>Transfer From</td><td>: &nbsp&nbsp&nbsp&nbsp ".$acno1."</td></tr><tr><td>Tranfer To</td><td>: &nbsp&nbsp&nbsp&nbsp ".$acno2."</td></tr><tr><td>Amount</td><td>: &nbsp&nbsp&nbsp&nbsp ".$amo1."</td></tr><tr><td>Time</td><td>: &nbsp&nbsp&nbsp&nbsp".$time."</td></tr><tr><td>Date</td><td>: &nbsp&nbsp&nbsp&nbsp   ".$date."</td></tr><tr><td>Balance</td><td>: &nbsp&nbsp&nbsp&nbsp ".$row['Balance']."</td></tr></table></p></div>
        <br> <hr> <footer>* This computer generated Recipt no signature is required.<br>Electronic Recipt owns no official legal effect ,You may go to branch to get the paper receipt</footer>
      </div>
  ";
        }
      }
   
    
}



$conn->close();

?>

        <style>
            #hole{
                width:800px;
	height: 400px;
    padding: 20px;
    
	background-color: rgba(255, 255, 255);
	align-items: center;
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
	margin: auto;
    text-align: center;
    

                 }
                 hr{
                     height: 2px;
                     background-color: black;

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
        #tbicon{
               height: 70px;
               width: 70px;
      
        } 
        #topbar{
            height: 100px;
            background-color: Beige;
            width: 95%;
            display: flex;
            align-items: center;
            vertical-align: middle;
            justify-content: center;
            gap:20px;
            padding: 20px;


        }
        #title{
            font-size:30px ;
            font-weight: 500;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: #A07855FF;
            
        }
        #tablebar{
            padding-left:20px ;
                   display: flex;
                   vertical-align: middle;
                   align-items: center;
                   justify-content: center;
                   text-align: left;
        }
        table,th,td{
                border-collapse: collapse;
            
        
            
            }
            
            table{
           
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: 50%;


            }
            footer{
                color: red;
            }
            #success{
                font-variant:small-caps ;
                font-size: 20px;
                font-weight: lighter;
                color: #635ee0;
                

            }
            #timebar{
                display: flex;
                gap:20px;
                vertical-align: middle;
                   align-items: center;
                   justify-content: center;

            }
            #succlogo{
                width: 30px;
                height: 30px;
            }
        </style>
    </body>
</div>
    </body>
</html>
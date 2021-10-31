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
$acno1=$_POST["acno1"];

$amo1=$_POST["amo"];
$sdate=date("d-m- y");
if($_POST["cars"]=="5 YEAR"){
    $edate= date('d-m-Y', strtotime('+5 years'));
    $n=60;
}
if($_POST["cars"]=="2 YEAR"){
    $edate= date('d-m-Y', strtotime('+2 years'));
    $n=24;
    
}
if($_POST["cars"]=="YEAR"){
    $edate= date('d-m-Y', strtotime('+1 years'));
    $n=12;
    
}
if($_POST["cars"]=="6 MONTH"){
    $n=6;
    $edate= date('d-m-Y', strtotime('+6 months'));

}
$total=$_POST['amo'];
for($i=0;$i<$n;$i++)
{


$total=$total+($_POST['amo']*(3/100));

}
$sql="select password from account_holders where Ac_No ='$_POST[acno1]'";
$password=$conn->query($sql);

while($password!==false && $row=$password->fetch_assoc())
{
    $k=$row["password"];
}
if(!empty($k))
{

if($k==$_POST["password1"])
{

$sql1="INSERT INTO deposit (Ac_No,Start_date,End_date,Amount,plan)values('$_POST[acno1]','$sdate','$edate','$_POST[amo]','$_POST[cars]')";

$conn->query($sql1);
 

echo "<div  id='ji'>
<img id='ko' src='logo.png'></img>
<p id='msg'>MTM BANK OF INDIA</p>
<p>

DATE&nbsp;:&nbsp;  $sdate</br>
PLACE&nbsp;:&nbsp; MTM bank of india,main branch,Chennai.</br>
</br>
Respected Mam/Sir</br>
</br>

This letter is to certify that MTM bank of India
has been banking with us since 2021.</br>Our Client $_POST[acno1]
 has several related accounts with our bank under his control (or 
power of attorney related to the accounts) with current cash deposits of 
_____$_POST[amo]_____Rupees\-.We were ensure the security of money and quality of being trustworthy </br>
<table ><tr><th>AC_NO</th><th>Amount</th><th>Start Date</th><th>End Date</th><th>Interest</th><th>Total</th></tr>
<tr><td>$_POST[acno1]</td><td>$_POST[amo]</td><td>$sdate</td><td>$edate</td><td>3%</td><td>$total</td></tr></table></br>
Should you have any questions, please feel free to contact the undersigned at 
04267-786532</br>
</br>

Sincerely,
</br>
&nbsp;  Vishal Rupak,
</br>
&nbsp; MTM bank of India, 
</br>
&nbsp; 6374794516.       
</br>
</p>

</div>";




$conn->close();
}
else{


    echo "<div  id='ji1'>
<img id='kooops' src='oops-smiley.jpg'></img>
<p id='msg1'>Account number and  Password not matched</p>
<divid='ji2'>
<a href='deposit.php'  class='a'>Go back</a>
<a href='login.php' class='a'>New Account</a>
</div>
</div>";
       
}
 
}
else{
    echo "<div  id='ji1'>
    <img id='kooops' src='oops-smiley.jpg'></img>
    <p id='msg1'>Account number and  Password not matched</p>
    <div id='ji2'>
    <a href='signup.php' Class='a'>New Account</a>
    <a href='Fixed deposit.php'  Class='a'>Go back</a>
    </div>
    </div>";
}
?>


       <style>
           .a{
           text-align: center;
height:30px;
width:200px;

font-weight: bold;
font-size: 20px;
padding-top: 5px;
font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
text-decoration: none;
  display: inline-block;
  border-radius: 10px;
  background: linear-gradient(to bottom,#6b6969,black);
  color: white;

 

}
           


            table,th,td{
                border-collapse: collapse;
                text-align: center;
                border:2px solid black;
            }
            table{
            width: 100%;
            }
            #ko{
                position: absolute;
                left:20%;
                height: 70px;
                width: 70px;
            }
            #kooops{
                
                height: 200px;
                width: 200px;
            }
            #msg1{
                
                box-shadow: black;
                text-align: center;
                
                font-size: 25px;
                font-weight: bold;
                font-style:oblique ;
               font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
               color: red;                
            }

            #ji{
                width:800px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	height: 425px;
    padding: 30px;
	background-color: rgba(255, 255, 255);
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
    border: 2px solid black;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
	margin: auto;
    
    border-radius: 4px;
	border-bottom: 5px solid black;
                 }

            #ji2{
     align-items: center;
     position: absolute;
     left: 30%;
     top:50%;
     display: flex;
     gap:40px;
                 }
            #ji1{
                display: flex;
                width:800px;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	height: 300px;
    padding: 30px;
	background-color: rgba(255, 255, 255);
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
    border: 2px solid black;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
	margin: auto;
    
    border-radius: 4px;
	border-bottom: 5px solid black;
                 }
            #msg{
              box-shadow: black;
                text-align: center;
                
                font-size: 25px;
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
</div>
    </body>
</html>



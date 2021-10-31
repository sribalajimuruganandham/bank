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
$acno1=$_POST["Ac_No"];
if(!empty($_POST["Ac_No"])){
    $sql2 = "SELECT * FROM deposit WHERE Ac_No='$acno1'";
    $result = $conn->query($sql2);

    
    if ($result !== false && $result->num_rows > 0) {
        echo $_POST["Ac_No"];
        // output data of each row
        while($result !== false && $row = $result->fetch_assoc()) {
            echo "  <div id='hole'>
            <div id='topbar'><img id='tbicon'src='logo.png'><h1 id='title'>MTM Bank of India</h2></img></div>
            <div id='timebar'><p id='success'>Account successfully Found</p> <img id='succlogo'src='succ.png'></img></div>
            
            <div id='tablebar'><p><table ><tr><th>AC_NO</th><th>Amount</th><th>Start Date</th><th>End Date</th><th>Interest</th><th>Total</th></tr>
            <tr><td>".$row["Ac_No"]."</td><td>".$row["Start_date"]."</td><td>".$row["End_date"]."</td><td>".$row["Amount"]."</td><td>3%</td><td>".$row["plan"]."</td></tr></table></br>
            </div>
            <br>
            <br>
            <hr>
    ";}
      }
      else{
        echo "<div  id='ji1'>
        <img id='kooops' src='oops-smiley.jpg'></img>
        <p id='msg1'>Account does not exists</p>
        <di
        <a href='aaccounts.php'  Class='a'>Go back</a>
        </div>
        </div>";
      }
   
    
}



$conn->close();

?>
   <style>
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
            background-color: #f4fa7d ;
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
            color: #0d1137;
            
        }
        #tablebar{
            padding-left:100px ;
                   display: flex;
                   vertical-align: middle;
                   align-items: center;
                   justify-content: center;
                   text-align: left;
        }
        table,th,td{
                border-collapse: collapse;
            border: 2px solid black;
        
            
            }
            
            table{
           
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: 70%;


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
        </style>
</body>
</html>
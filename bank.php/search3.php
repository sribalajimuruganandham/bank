<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">
        <?php include "top.php"?>
    <div id="root">
         <div id="branch1">
             <a class="main" href="statistics.php"><img class="icons" src="grp.png"><p>Fixed Deposit VS Loan</p></img></a>
             <a class="main"><img class="icons" src="grp.png"></img><p>Profit</p></a>
             <a class="main"><img class="icons" src="grp.png"></img><p>Salary</p></a>
            </div>
            <div id="branch2">
                <a class="main"><img class="icons" src="grp.png"></img><p>Transaction History</p> </a>
                <a class="main"><img class="icons" src="grp.png"></img><p>Maximun loans</p></a>
                <a class="main"><img class="icons" src="grp.png"></img><p>High deposits</p></a>
                
         </div>
         </div>


       
    </body>
    <style>#root{
        display:flex;
        gap: 100px;
        padding-top: 5%;
        padding-left: 30%;
        }
        .main{

            height: 80px;
            width: 300px;
            /* background-color: #332e75; */
            background: linear-gradient(to left,#332e75,#718beb);
            border-radius: 12px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #332e75;
            display: flex;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .main:hover{
            transform: scale(1.2); 
        }
        #branch1{
            display: flex;
            flex-direction: column;
            gap:60px;
        }
        #branch2{
            display: flex;
            flex-direction: column;
            gap:60px;
        }
        .icons{
            height:50px ;
            width: 50px;
            
        }
        p{
            text-shadow: 2px 2px #ff0000;
            font-size: 20px;
            color: blanchedalmond;
        }
        </style>
</html>
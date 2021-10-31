<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">
    



       
        <?php include "top.php"?>
      
            <div id="hole">
                <div id='topbar'><img id='tbicon'src='logo.png'><h1 id='title'>MTM Bank of India</h2></img></div>
            </div>

            <p id=div>LOAN
</p>

            <div id="input">
                <form action="search.php" method="post" id="input">
                    <input type="text" id="inputtext" name="Ac_No" placeholder="MTM243-XXXX">
                </input>
                <input id="inputbutton" type="submit">
                
            </input>
        </form>
        </div>
            
    </body>
</html>
<style>
    #input{
     
        display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  
}
#inputtext{
    font-size: x-large;
    width:500px;
    height:50px;
    border-color: transparent;
    
    
}
#inputbutton{  background-color: white;

        background-image: url("searchimage.png");
        
        background-size: cover;
        font-size: 40px;
        width:50px;
        height:56px;
        border-color:transparent;
        color:transparent;
        border-left: 2px solid black;
    }
    #tbicon{
               height: 70px;
               width: 70px;
      
        } 
        #topbar{
            height: 100px;
            background-color: Beige;
            width: 75%;
            display: flex;
            align-items: center;
            vertical-align: middle;
            justify-content: center;
            
            padding: 20px;

        }#hole{
            padding-top:5%;
            padding-left:20%;
        }
        #div{
            

        padding-left:47% ;
        text-shadow: 2px 2px #ff0000;
font-size: 40px;
font-weight:900;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
color:#a60505;
        }
</style>
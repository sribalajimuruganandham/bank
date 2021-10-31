<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">
    



       
        <?php include "top.php"?>
        <div id="root">
            <a id="a1"  href="aaccounts.php"><p>Accounts</p></a>
            <a id="a2" href="lloan.php"><p>Loans</p></a>
            <a id="a3" href="ddeposit.php"><p>Fixed Deposits</p></a>
            <a id="a4" href="search3.php"><p>Statistics</p></a>
            

        </div>
    </body>
</html>
<style>
    #root{
        
display: flex;
  justify-content: center;
  align-items: center;
  height: 500px;
  gap:150px;
  
}
img{
    width: 200px;
    height: 200px;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
 
 
    
    
}
#a1{
    animation: add1 5s linear infinite ;
    width: 200px;
    text-align: center;
    height: 200px;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
    background-image: url("admin14.jpeg");
    background-size: cover;
    text-decoration: none;
    
}
#a2{
    animation: add2 5s linear infinite ;
    text-decoration: none;
    text-align: center;
    width: 200px;
    height: 200px;
    background-size: cover;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
    background-image: url("admin11.jpeg");
   
}
#a3{
    animation: add3 5s linear infinite ;
    background-size: cover;
    text-align: center;
    text-decoration: none;
    width: 200px;
    height: 200px;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
    background-image: url("admin12.jpeg");
   
}
#a4{text-decoration: none;
    background-size: cover;
    animation: add4 5s linear infinite ;
    text-align: center;
    width: 200px;
    height: 200px;
    box-shadow: 0 14px 18px 0 rgba(0, 0, 0, 0.7), 0 16px 30px 0 rgba(0, 0, 0, 0.19);
    background-image: url("admin13.jpeg");
   
}
#a1:hover{
    
 width: 300px;
 height: 300px;
}
#a2:hover{
    
 width: 300px;
 height: 300px;
}
#a3:hover{
    
 width: 300px;
 height: 300px;
}
#a4:hover{
    
 width: 300px;
 height: 300px;
}
p{
  color: #FC766AFF;
    font-size: xx-large;
    font-weight: bold;
    text-decoration: none;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    
}
@keyframes add1 {
    0%   {transform: rotateY(0deg)   ;background-image: url("admin14.jpeg");}
    5%   {transform: rotateY(360deg)   ;background-image: url("admin14444.jpg");}
    50%   {transform: rotateY(360deg);   background-image: url("admin14444.jpg");}
    55%   {transform: rotateY(0deg);background-image: url("admin14.jpeg");}
    100%   {transform: rotateY(0deg);   background-image: url("admin14.jpeg");}


  
  
}
@keyframes add2 {
    0%   {transform: rotateY(0deg)   ;background-image: url("admin11.jpeg");}
    5%   {transform: rotateY(360deg)   ;background-image: url("admin122.jpg");}
    50%   {transform: rotateY(360deg);   background-image: url("admin122.jpg");}
    55%   {transform: rotateY(0deg);background-image: url("admin11.jpeg");}
  
    100%   {transform: rotateY(0deg);   background-image: url("admin11.jpeg");}


  
  
}
@keyframes add3 {
    0%   {transform: rotateY(0deg)   ;background-image: url("admin12.jpeg");}
    5%   {transform: rotateY(360deg)   ;background-image: url("admin133.jpg");}
    50%   {transform: rotateY(360deg);   background-image: url("admin133.jpg");}
    55%   {transform: rotateY(0deg);background-image: url("admin12.jpeg");}
  
    100%   {transform: rotateY(0deg);   background-image: url("admin12.jpeg");}


  
  
}
@keyframes add4 {
    0%   {transform: rotateY(0deg)   ;background-image: url("admin13.jpeg");}
    5%   {transform: rotateY(360deg)   ;background-image: url("admin1111.jpg");}
    50%   {transform: rotateY(360deg);   background-image: url("admin1111.jpg");}
    55%   {transform: rotateY(0deg);background-image: url("admin13.jpeg");}
  
    100%   {transform: rotateY(0deg);   background-image: url("admin13.jpeg");}


  
  
}

</style>
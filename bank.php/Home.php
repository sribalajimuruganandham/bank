<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;">
    <?php include "top.php"?>



       
       

        <div id="add1" >
      
        </div>  
        

    </body>
</html>
<style>
#add1{

    background-image: url('add1.jpg');
    background-size:cover ;
    width: 50%;
    height:50%;
    position: absolute;
    margin: 0;
  position: absolute;
  top: 50%;
  left: 25%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  border-radius: 20px ;
    animation: add 15000ms linear infinite ;
 
}

@keyframes add {
    0%   {   background-image: url('add1.jpg');background-size:cover ;}
    25%   {   background-image: url('addios.jpg');background-size:cover ;}
    50%   {    background-image: url('add3.webp');background-size:cover ;}
    75%   {   background-image: url('add4.jpg');background-size:cover ;}
    100%   {   background-image: url('add1.jpg');background-size:cover ;}
 


  
  
}


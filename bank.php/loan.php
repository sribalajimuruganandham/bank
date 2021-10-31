<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;"> 
    <?php include "top.php"?>



       
        <form action="loan1.php">
<div id="add4" style="position: absolute;

  left: 25%;
  top:10%;
  justify-content: space-between;

  ">

            <input class="inputs" name="name1" placeholder="FIRST NAME"></input>


<input class="inputs"name="Age"  placeholder="AGE"></input>




<input class="inputs" name="Email" id="email" placeholder="E-MAIL"></input>


<input class="inputs" name="Account_number" placeholder="ACCOUNT NUMBER"></input>







<input  class="inputs" name="door" placeholder="DOOR NO"></input>


<input  class="inputs" name="city" placeholder="CITY"></input>





</div>
<div id="add4" style="position: absolute;

left: 60%;
top:10%;
justify-content: space-between;

">


<input class="inputs" name="name2" placeholder="LAST NAME"></input>

<input class="inputs" name="Gender" placeholder="GENDER"></input>


<input class="inputs" name="Date_of_birth" placeholder="DATE OF BIRTH"></input>

<input class="inputs" name="Aadhar_No" placeholder="AADHAR NUMBER"></input>


<input class="inputs" name="dist" placeholder="DISTRICT"></input>

<input class="inputs" name="state" placeholder="STATE"></input>


</div>
<button id="but" type="submit" >NEXT</button>
</from>


    </body>
</html>
<style>
.inputs{
    text-align: left;
margin-top: 30px;
display: block;
width: 100%;
padding: 0;
border: none;
outline: none;
box-sizing: border-box;
background: #ecf0f3;
padding: 10px;
padding-left: 20px;

font-size: 14px;

box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}
#but{
position: absolute;
left: 42%;
top:80%;
height:50px;
width:200px;
font-weight: bold;
font-size: 30px;
font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
text-decoration: none;
  display: inline-block;
  border-radius: 5px;
  background: linear-gradient(to bottom,#6b6969,black);
  color: #dedede;

}

    </style>

 
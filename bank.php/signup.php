<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;"> 
    <?php include "top.php"?>



    <form action="new_account.php" method="GET">
<div id="add4" style="position: absolute;

  left: 25%;
  top:10%;
  justify-content: space-between;

  ">

            <input class="inputs" name="name1" placeholder="FIRST NAME"></input>


<input class="inputs" min=3 max=150 name="Age" placeholder="AGE"></input>




<input class="inputs" type="mail" name="Email" placeholder="E-MAIL"></input>



<input class="inputs" pattern="[0-9]{10}" name="Ph_No"placeholder="PHONE NUMBER"></input>




<input  class="inputs" name="door"  placeholder="DOOR NO"></input>
<input  class="inputs" name="dist"  placeholder="DISTRICT"></input>








<input  class="inputs" type="password" name='password' placeholder="PASSWORD"></input>


</div>
<div id="add4" style="position: absolute;

left: 60%;
top:10%;
justify-content: space-between;

">


<input class="inputs" name="name2" placeholder="LAST NAME"></input>

<!-- <input class="inputs" name="Gender" placeholder="GENDER"></input> -->
<select class="inputs" name="Gender" ><option value="MALE">MALE</option><option value="FEMALE">FEMALE</option><option value="OTHER">OTHERS</option></select>

<input class="inputs" name="Date_of_birth" placeholder="DATE OF BIRTH"></input>

<input class="inputs" name="Aadhar_No" placeholder="AADHAR NUMBER"></input>

<input  class="inputs" name="city" placeholder="CITY"></input>

<input class="inputs"  name="state" placeholder="STATE"></input>

<input class="inputs" type="password" name='cpassword' placeholder="CONFIRM PASSWORD"></input>
</div>
<input id="but" type="submit"/>
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
top:90%;
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
<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;"> 
    <?php include "top.php"?>
   
    <form action="loan2.php">
        <div id="add4" style="position: absolute;

left: 25%;
top:10%;
justify-content: space-between;

">

<input class="inputs" name="occupation" placeholder="OCCUPATION"></input>


<input class="inputs" name="annuval_income" placeholder="ANNUVAL INCOME"></input>




<textarea class="inputs" name="purpose" id="email" placeholder="PURPOSE"></textarea>
<div class=inputs>

<label>AADHAR CARD</label>
<input  class="inputs" type="file" id="myfile" name="myfile">
</div>











</div>
<div id="add4" style="position: absolute;

left: 60%;
top:10%;
justify-content: space-between;

">
<input class="inputs" name="loan_type" placeholder="LOAN TYPE"></input>

<input  class="inputs" placeholder="AMOUNT"></input>
<input class="inputs" placeholder="PHONE NUMBER 1"></input>
<div class=inputs>
<label>RATION  CARD</label>
<input class="inputs" type="file" id="myfile" name="myfile">
</div>











</div>
<button id="but" type="submit">SUBMIT</button>
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
left: 47%;
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
label{
    font-weight: bolder;
    font-size: large;
}


    </style>
<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;"> 
    <?php include "top.php"?>       
    <div id="bod">
 <form action="Fixed deposit1.php" method="POST">      

<div id="container">

<div id="inputs1">

<input name="acno1"placeholder="ACCOUNT NUMBER" required />
</br>
<input name="amo"  placeholder="AMOUNT" required/>
</br>
<select name="cars" id="selection">
<option value="5 YEAR">5 YEAR</option>
<option value="2 YEAR">2 YEAR</option>
<option value="YEAR">YEAR</option>
<option value="6 MONTH">6 MONTH</option>
</select>
</br>
<input type="password" name="password1"placeholder="PASSWORD" required />
</br>
<button type="SUBMIT">DEPOSIT</button>
</div>

</div>
</div>
</form>
</div> 

    </body>
</html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');
#bod {
margin: 0;


position:absolute;
top:20%;
left:40%;
font-family: poppins;
}

#container {
position: relative;
display: flex;
justify-content: center;
align-items: center;
text-align:center;

border-radius: 20px;
padding: 40px;
box-sizing: border-box;
background: #ecf0f3;
background-size: 100%;

}





#inputs {
text-align: left;
margin-top: 30px;
}

label, input, button {
display: block;
width: 100%;
padding: 0;
border: none;
outline: none;
box-sizing: border-box;
}

label {
margin-bottom: 4px;
}

label:nth-of-type(2) {
margin-top: 12px;
}

input::placeholder {
color: gray;
}

input {
background: #ecf0f3;
padding: 10px;
padding-left: 20px;
height: 50px;
font-size: 14px;
border-radius: 50px;
box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}
#selection{
    text-align: left;
margin-top: 30px;
display: block;
width: 100%;
padding: 0;
border: none;
outline: none;
box-sizing: border-box;
color: gray;
background: #ecf0f3;
padding: 10px;
padding-left: 20px;
height: 50px;
font-size: 14px;
border-radius: 50px;
box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}
button {
margin-top: 20px;
background: #1DA1F2;
height: 40px;
border-radius: 20px;
cursor: pointer;
font-weight: 900;
box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
transition: 0.5s;
}

button:hover {
box-shadow: none;
}

</style>
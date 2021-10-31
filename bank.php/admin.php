<!DOCTYPE html>
<html>
    <title>
        MTM
    </title>
    <body   style="background-image: url('backround.jpg');background-size:cover;"> 
    <?php include "top.php"?>
    <div id="bod">

       
       

<div id="container">

<div id="inputs1">
<form action="admin1.php">
<input  placeholder="USER NAME" />
</br>

<input type="password" placeholder="PASSWORD" />
</br>

<button type="SUBMIT">LOGIN</button>
</form>
</div>

</div>
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
background-size: 100%;
border-radius: 20px;
padding: 40px;
box-sizing: border-box;
background: #ecf0f3;

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

        


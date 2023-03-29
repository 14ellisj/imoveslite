<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Pick-l: Avatar customiser</title>
    <link rel="stylesheet" href="styles/oliverMobile.css"/>
    <Style>
        div {
            width: 208px;
            height: 225px;
            border-style: solid;
            border-color: black;
            background-color: white;
            padding: 15%;
            margin-left: 4%;
            margin-right: auto;
            margin-top: 13%;
          }
        </Style>
        <img id="ChangeImg" class="pickle" src="images/ianP.png" width="70px" height="70px">
        <center><a href="home.php"><img class="logo" src="images/logo4a4" width="50px" height="50px"></a></center>
</head>

<body>

<div>

    <center> <img class="bottom"  src="images/podiumm.png" width="250px" height="300px"></center>
    <center><img id="Ian" class="b2" src="images/ianP.png" width="200px" height="200px"></center>
    <center><p class="cntText">Please Select an Avatar </p></center>

    
    
    
    </div>

<table>

<tr><button class="l2" onclick="document.getElementById('Ian').src='images/barry.png'"> <img src="images/barry.png" width="75px" height="75px"> </button></tr>
<tr><button class="cen" onclick="document.getElementById('Ian').src='images/PinkB.png'"> <img src="images/PinkB.png" width="75px" height="75px"> </button></tr>
<tr><button class="r2" onclick="document.getElementById('Ian').src='images/AlienB.png'"> <img src="images/AlienB.png" width="75px" height="75px"> </button></tr>

<button class="l2" onclick="document.getElementById('Ian').src='images/ianP.png'"> <img src="images/ianP.png" width="75px" height="75px"> </button>
<button class="cen" onclick="document.getElementById('Ian').src='images/PinkP.png'"> <img src="images/PinkP.png" width="75px" height="75px"> </button>
<button class="r2" onclick="document.getElementById('Ian').src='images/OrangeP.png'"> <img src="images/OrangeP.png" width="75px" height="75px"> </button></tr>

</table>
</body>
<button class="subbutton" onclick="changeImage()"> Confirm </button>
<script>
function changeImage()
    {
        var image = document.getElementById('Ian');
        var chngImg = document.createElement("change")
        if(image.src.match("ianP")){
            document.getElementById("ChangeImg").src="images/ianP.png";
           
        }
        else if(image.src.match("barry"))
        {
            document.getElementById("ChangeImg").src="images/barry.png";
            
        }
        else if(image.src.match("PinkB")){
            document.getElementById("ChangeImg").src="images/PinkB.png";
        }
        else if(image.src.match("AlienB")){
            document.getElementById("ChangeImg").src="images/AlienB.png";
        }
        else if(image.src.match("PinkP")){
            document.getElementById("ChangeImg").src="images/PinkP.png";
        }
        else if(image.src.match("OrangeP")){
            document.getElementById("ChangeImg").src="images/OrangeP.png";
        }



    }
</script>
</html>
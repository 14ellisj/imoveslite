<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>iMoves</title>
    <link rel="stylesheet" href="styles/oliverMobile.css" />
</head>
<header>
 
    <table style>
        <tr>
            <img src="images/pick-lLogoBL.jpg" alt="Profilelogo" class="center" width = "200" style="border-radius: 12%;">
        </tr>
        <br>
        
    </table>
</header>

<body>
    <form>
    <table>
    <tr>
    <td><button type="submit" formaction="home.html" class="left button1"> <img src = "images/barry.png" width = "100" height="100"> </button></td>
    <td><button type="submit" formaction="home.html" class="right button1"> <img src = "images/barry bee orng.png" width = "100" height="100"> </button></td>
    </tr>
    <tr> 

    </tr>

    <tr>
        <td><button type="submit" formaction="home.html" class="left button1" > <img src = "images/PinkP.png" width = "100" height="100"> </button></td>
        <td><button type="submit" formaction="home.html" class="right button1"> <img src = "images/YellowP.png" width = "100" height="100"> </button></td>
    </tr>

    <tr>
        <td><button type="submit" formaction="profile.php" class="left button1"> <img src = "images/settings.png" width = "100" height="100"> </button></td>

    </tr>

    
</form>
</table>
</body>
</html>
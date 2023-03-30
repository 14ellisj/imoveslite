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
    <title>Pick-l: Profiles</title>
    <link rel="stylesheet" href="styles/oliverMobile.css" />
    <link rel="icon" type="image/x-icon" href="images/pickle.ico">
</head>
<header>
 
    <table style>
        <tr>
            <img src="images/logo4a4.png" alt="Profilelogo" class="center" width = "200" style="border-radius: 12%;">
            <div class="welMess"><p>Hello, <?=$_SESSION['name']?>!</p></div>
        </tr>
        <br>
        
    </table>
</header>

<body>
    <form>
    <table>
    <tr>
    <td><button type="submit" formaction="home.php" class="left button1"> <img src = "images/barry.png" width = "100" height="100"> </button></td>
    <td><button type="submit" formaction="home.php" class="right button1"> <img src = "images/barry bee orng.png" width = "100" height="100"> </button></td>
    </tr>
    <tr> 

    </tr>

    <tr>
        <td><button type="submit" formaction="home.php" class="left button1" > <img src = "images/PinkP.png" width = "100" height="100"> </button></td>
        <td><button type="submit" formaction="home.php" class="right button1"> <img src = "images/YellowP.png" width = "100" height="100"> </button></td>
    </tr>

    <tr>
        <td><button type="submit" formaction="profile.php" class="left button1"> <img src = "images/settings.png" width = "100" height="100"> </button></td>

    </tr>

    
</form>
</table>
</body>
</html>
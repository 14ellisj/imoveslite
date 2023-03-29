<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
/* session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost:4306';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close(); */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pick-l: Account</title>
		<link href="styles/styledata.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
		<link rel="icon" type="image/x-icon" href="images/pickle.ico">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div class="headBar">
				<div class="logoIndex"><img src="images/pick-lLogo.png" alt="Logo Image" class="logo"></div>
			</div>
		</nav>
		<div class="content">
			<div>
				<p>Hello, <?=$_SESSION['name']?>!</p>
				<p>Your account details are below:</p>
				<table>
					<tr>
						<td>Username:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><?=$_SESSION['password']?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$_SESSION['email']?></td>
					</tr>
					<tr>
						<td><div class="logoutButton"><a href="logout.php" style="color:#a5a8ff"><i class="fas fa-sign-out-alt" style="color:#a5a8ff"></i>Logout</a></div></td>
					</tr>
				</table>
			</div>
		</div>

    <div>
        <a href="profiles.html"><button class="backButton"> ← Back </button></a>
    </div>

	</body>
</html>
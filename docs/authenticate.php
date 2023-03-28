<?php
ini_set("display_error",1);
session_start();
// $hostname = 'imoves.mysql.database.azure.com';
// $username = 'admin1';
// $password = 'BOBicus1';
// $database = 'pick-l';
// $con = mysqli_connect($hostname, $username, $password, $database);
// if ( mysqli_connect_errno() ) {
// 	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
// }
include("config.php");
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
if ($stmt = $mysqli->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // if (password_verify($_POST['password'], $password)) {
            if($_POST['password'] == $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: mainPage.html');
        } else {
            echo 'Incorrect username and/or password!';
        }
    } else {
        echo 'Incorrect username and/or password!';
    }
	$stmt->close();
}
?>
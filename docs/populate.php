<?php
include("config.php");
// $sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
// (1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com');";
// if ($mysqli->query($sql) === TRUE) {
// 	echo "Table MyGuests created successfully";
//   } else {
// 	echo "Error creating table: " . $mysqli->error;
//   }
/* $sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
(2, 'test2', 'test2', 'test2@test.com');";
if ($mysqli->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
  } else {
	echo "Error creating table: " . $mysqli->error;
  }
 */
$sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
(3, 'Ollie', 'lip31', 'ollie@pickl.com');";
if ($mysqli->query($sql) === TRUE) {
	echo "user 3 created successfully";
  } else {
	echo "Error creating user 3: " . $mysqli->error;
}

$sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
(4, 'Erica', 'bigcheeze7', 'erica@pickl.com');";
if ($mysqli->query($sql) === TRUE) {
	echo "user 4 created successfully";
  } else {
	echo "Error creating user 4: " . $mysqli->error;
}

$sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
(5, 'Jake', 'eggs96', 'jake@pickl.com');";
if ($mysqli->query($sql) === TRUE) {
	echo "user 5 created successfully";
  } else {
	echo "Error creating user 5: " . $mysqli->error;
}

$sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
(6, 'Ian', 'pickle57', 'ian@pickl.com');";
if ($mysqli->query($sql) === TRUE) {
	echo "user 6 created successfully";
  } else {
	echo "Error creating user 6: " . $mysqli->error;
}
?>
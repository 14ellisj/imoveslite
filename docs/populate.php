<?php
include("config.php");
$sql = "INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES 
(1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com');";
if ($mysqli->query($sql) === TRUE) {
	echo "Table MyGuests created successfully";
  } else {
	echo "Error creating table: " . $mysqli->error;
  }
?>
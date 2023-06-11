<?php

require "config.php";

try {
	$sql_users = "
		CREATE TABLE Pets (
			Pet_Name varchar (30) NOT NULL,
			Pet_Gender char (6) NOT NULL,
			Pet_Birthdate date NOT NULL,
			Pet_Owner varchar (30) NOT NULL,
			Owner_Email varchar (200) NOT NULL, 
			Owner_Address varchar (255) NOT NULL,
			Owner_Contact_Number varchar (20) NOT NULL
		);
	";
	$conn->exec($sql_users);
	echo "<li>Created pets table";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

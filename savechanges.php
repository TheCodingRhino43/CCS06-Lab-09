<?php

require "config.php";

use App\Pet;

try {
	$pet_name = $_POST['pet_name'];
	$gender = $_POST['pet_gender'];
    $birthdate = $_POST['pet_birthdate'];
    $owner = $_POST['owner'];
    $address = $_POST['address'];
	$email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
	$result = Pet::update($id, $pet_name, $gender, $birthdate, $owner, $address, $email, $contact_number);

	if ($result) {
		header('Location: index.php');
	}

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
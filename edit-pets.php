<?php

require "config.php";

use App\Pet;

$student_id = $_GET['id'];

$student = Pet::getById($student_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet information</title>
</head>
<body>
<h1>Edit Pet information</h1>

<form action="savechanges.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Pet Name</label>
		<input type="text" name="pet_name" placeholder="Pet Name" value="<?php echo $pet->getFirstName();?>" />	
	</div>
	<div>
		<label>Gender</label>
		<input type="text" name="gender" placeholder="Gender" value="<?php echo $pet->getLastName();?>" />	
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="first_name" placeholder="birthdate" value="<?php echo $pet->getFirstName();?>" />	
	</div>
	<div>
		<label>Owner's Name</label>
		<input type="text" name="owner" placeholder="Gender" value="<?php echo $pet->getOwner();?>" />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmail();?>" />	
	</div>
    <div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Home Address" value="<?php echo $pet->getAddress();?>" />	
	</div>
    <div>
		<label>Contact Number</label>
		<input type="text" name="address" placeholder="Home Address" value="<?php echo $pet->getContact_Number();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>
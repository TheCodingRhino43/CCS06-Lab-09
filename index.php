<?php

require "config.php";

use App\Pet;

$pets = Pet::list();
?>

<h1>Students</h1>

<table border="1" cellpadding="5">
<?php foreach ($pets as $pet): ?>
<tr>
<td><?php echo $pet->getPetName(); ?></td>
<td><?php echo $pet->getGender(); ?></td>
<td><?php echo $pet->getBirthdate(); ?></td>
<td><?php echo $pet->getOwner(); ?></td>
<td><?php echo $pet->getAddress(); ?></td>
<td><?php echo $pet->getEmail(); ?></td>
<td><?php echo $pet->getContact_Number(); ?></td>
<td>
	<a href="edit-pets.php?id=<?php echo $pet->getId(); ?>">EDIT</a>
</td>
<td>
	<a href="delete-pets.php?id=<?php echo $pet->getId(); ?>">DELETE</a>
</td>
</tr>
<?php endforeach ?>
</table>
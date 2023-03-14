<!DOCTYPE html>
<html>
<head>
	<title>Strange Website</title>
</head>
<body>
	<h1>Welcome to the Strange Website!</h1>

	<form method="post" action="">
		<label for="name">What's your name?</label>
		<input type="text" name="name" id="name" required><br><br>

		<label for="gender">What's your gender?</label>
		<select name="gender" id="gender" required>
			<option value="">Select Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select><br><br>

		<label for="age">How old are you?</label>
		<input type="number" name="age" id="age" required><br><br>

		<label for="alone">Are you alone?</label>
		<input type="radio" name="alone" value="yes" required>Yes
		<input type="radio" name="alone" value="no">No<br><br>

		<input type="submit" value="Submit">
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$alone = $_POST['alone'];

		if ($alone == 'yes') {
			echo "<p>Uh oh, $name, you're all alone! Watch out for ghosts!</p>";
		} else {
			echo "<p>Phew, $name, you're not alone! That's good, because we heard there was a haunted house nearby!</p>";
		}

		if ($gender == 'male') {
			echo "<p>Hey $name, you look pretty brave! Are you ready to face the ghosts?</p>";
		} elseif ($gender == 'female') {
			echo "<p>Hey $name, you look pretty smart! Do you think you can outsmart the ghosts?</p>";
		} else {
			echo "<p>Hey $name, you're a mystery! We're not sure what to expect from you!</p>";
		}

		if ($age < 18) {
			echo "<p>Sorry $name, you're too young to go on this ghost adventure! Come back when you're older!</p>";
		} else {
			echo "<p>Alright $name, get ready to face the ghosts! But wait, just kidding! There are no ghosts! We hope we didn't scare you too much!</p>";
		}
	}
	?>
</body>
</html>

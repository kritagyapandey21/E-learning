<?php

include_once('header.php');

?>

<div id="content">
	<div class="wrap-in">
<h1 class="headx">Register Yourself</h1>
			<form>
				
				<div class="element">
					<label for="name">Name</label>
					<input type="text" name="candidateName" placeholder="Name" autofocus Required>
				</div>

				<div class="element">
					<label for "phno">Phone Number</label>
					<input type="number" name="phno" placeholder="Phone Number" required>
				</div>

				<div class="element">
					<label for="address">Address</label>
					<input type="text" name="address" placeholder="Address">
				</div>

				<div class="element">
					<label for "course">Course</label>
					<select name="course" id="course" Required>
						<option value="">Select Course</option>
						<option value="Web Designing">Web Designing</option>
						<option value="Graphic Designing">Graphic Designing</option>
						<option value="Online Marketing">Online Marketing</option>
						<option value="Video Editing">Video Editing</option>
						

					</select>
				</div>

				<div class="element">
					<label for "email">E-mail</label>
					<input type="email" name="email" placeholder="E-mail" Required>
				</div>
				<div class="element">
					<label for "query">Any Question</label>
					<input type="textarea" name="query" placeholder="Query" rows="5" cols="50">
				</div>

				<input type="submit" class="btn" name="submit" id="submit" value="Register Yourself">

			</form>
	</div>
</div>
<?php include('footer.php');?>

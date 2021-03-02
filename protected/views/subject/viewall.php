<div class="container">
	
	<h1>View All</h1>

	<?php 

		foreach ($subjects as $subject) {
			echo "Subject Name: ".$subject->name."<br>";
			echo "Subject Score: ".$subject->score."<br><br>";
		}

	?>

</div>
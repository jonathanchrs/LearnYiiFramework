<div class="container">
	
	<h1>Updating...</h1>
	<?php 

		echo "Subject Name: ".$subject->name."<br>";
		echo "Subject Score: ".$subject->score."<br>";
	?>
	<br>
	<form action="<?php echo Yii::app()->createUrl('subject/updateProcess', array('id' => $subject->id)); ?>" method="POST">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Subject Name</label>
			<input type="text" class="form-control" name="subjectname">
		</div>
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Subject Score</label>
			<input type="text" class="form-control" name="subjectscore">
		</div>
		<button type="submit" class="btn btn-primary">Update</button>
	</form>

</div>
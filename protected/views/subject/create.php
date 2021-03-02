<div class="container">
	
	<h1>Create</h1>

	<form action="<?php echo Yii::app()->createUrl('subject/createProcess') ?>" method="POST">
		
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Subject Name</label>
		<input type="text" class="form-control" name="subjectname">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Subject Score</label>
		<input type="text" class="form-control" name="subjectscore">
	</div>

	<button class="btn btn-primary">Create</button>
	</form>

</div>
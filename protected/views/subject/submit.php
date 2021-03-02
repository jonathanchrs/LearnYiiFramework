<div class="form">
	

	<h1 style="margin-bottom: 20px">Tes</h1>

	<form action="<?php echo Yii::app()->createUrl('subject/process'); ?>" method="POST">

		<h5 style="margin-bottom: 2px">Subject Name</h5>
		<input type="text" name="subjectname">

		<h5 style="margin-bottom: 2px">Subject Score</h5>
		<input type="text" name="subjectscore"> <br>

		<button class="btn btn-danger">submit</button>

	</form>

</div>
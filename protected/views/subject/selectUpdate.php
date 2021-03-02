<div class="container">
	
	<h1>Select Update</h1>

	<?php 
		foreach ($subjects as $subject) {
			echo "Subject Name: <a href=\"".Yii::app()->createUrl('subject/updateShow', array('id'=>$subject->id))."\">".$subject->name."</a><br>";
			echo "Subject Score: ".$subject->score."<br>";
			echo "<a href=\"".Yii::app()->createUrl('subject/delete', array('id'=>$subject->id))."\">Delete Subject</a><br><br>";
		}
	?>

</div>
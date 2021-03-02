<?php 

$model = JoSubject::model()->findByPk($id);

echo $model->name."<br>".$model->score;

?>

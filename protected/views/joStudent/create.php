<?php
/* @var $this JoStudentController */
/* @var $model JoStudent */

$this->breadcrumbs=array(
	'Jo Students'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JoStudent', 'url'=>array('index')),
	array('label'=>'Manage JoStudent', 'url'=>array('admin')),
);
?>

<h1>Create JoStudent</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
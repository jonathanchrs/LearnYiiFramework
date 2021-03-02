<?php
/* @var $this JoStudentController */
/* @var $model JoStudent */

$this->breadcrumbs=array(
	'Jo Students'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JoStudent', 'url'=>array('index')),
	array('label'=>'Create JoStudent', 'url'=>array('create')),
	array('label'=>'View JoStudent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JoStudent', 'url'=>array('admin')),
);
?>

<h1>Update JoStudent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
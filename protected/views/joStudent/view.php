<?php
/* @var $this JoStudentController */
/* @var $model JoStudent */

$this->breadcrumbs=array(
	'Jo Students'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List JoStudent', 'url'=>array('index')),
	array('label'=>'Create JoStudent', 'url'=>array('create')),
	array('label'=>'Update JoStudent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JoStudent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JoStudent', 'url'=>array('admin')),
);
?>

<h1>View JoStudent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'tgl_lahir',
	),
)); ?>

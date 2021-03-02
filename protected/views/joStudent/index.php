<?php
/* @var $this JoStudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jo Students',
);

$this->menu=array(
	array('label'=>'Create JoStudent', 'url'=>array('create')),
	array('label'=>'Manage JoStudent', 'url'=>array('admin')),
);
?>

<h1>Jo Students</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


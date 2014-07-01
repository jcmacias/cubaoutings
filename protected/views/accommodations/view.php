<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */

$this->breadcrumbs=array(
	'Accommodations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Accommodations', 'url'=>array('index')),
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'Update Accommodations', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Accommodations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>

<h1>View Accommodations #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'photo',
		'description',
		'tours_id',
	),
)); ?>

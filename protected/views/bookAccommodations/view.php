<?php
/* @var $this BookAccommodationsController */
/* @var $model BookAccommodations */

$this->breadcrumbs=array(
	'Book Accommodations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BookAccommodations', 'url'=>array('index')),
	array('label'=>'Create BookAccommodations', 'url'=>array('create')),
	array('label'=>'Update BookAccommodations', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BookAccommodations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BookAccommodations', 'url'=>array('admin')),
);
?>

<h1>View BookAccommodations #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email_owner',
		'pax',
		'date',
		'time_create',
		'accommodations_id',
	),
)); ?>

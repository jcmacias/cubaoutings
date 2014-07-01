<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */

$this->breadcrumbs=array(
	'Accommodations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accommodations', 'url'=>array('index')),
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'View Accommodations', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>

<h1>Update Accommodations <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
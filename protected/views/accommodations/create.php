<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */

$this->breadcrumbs=array(
	'Accommodations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accommodations', 'url'=>array('index')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>

<h1>Create Accommodations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
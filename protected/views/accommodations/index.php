<?php
/* @var $this AccommodationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accommodations',
);

$this->menu=array(
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
?>

<h1>Accommodations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

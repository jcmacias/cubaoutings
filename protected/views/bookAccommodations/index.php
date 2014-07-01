<?php
/* @var $this BookAccommodationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Book Accommodations',
);

$this->menu=array(
	array('label'=>'Create BookAccommodations', 'url'=>array('create')),
	array('label'=>'Manage BookAccommodations', 'url'=>array('admin')),
);
?>

<h1>Book Accommodations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

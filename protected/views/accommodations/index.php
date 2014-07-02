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
<!--SECTION ACCOMMODATIONS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Accommodations</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Casas donde tener una buena estancia.
    </h6>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

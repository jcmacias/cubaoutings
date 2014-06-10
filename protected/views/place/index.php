<?php
/* @var $this PlaceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Places',
);

$this->menu=array(
	array('label'=>'Create Place', 'url'=>array('create')),
	array('label'=>'Manage Place', 'url'=>array('admin')),
);
?>
<!--SECTION PLACES -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Places</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Lista de lugares interesantes.
    </h6>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

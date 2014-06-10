<?php
/* @var $this PhotoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Photos',
);

$this->menu=array(
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
?>
<!--SECTION PHOTOS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Photos</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Galeria de imagenes.
    </h6>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

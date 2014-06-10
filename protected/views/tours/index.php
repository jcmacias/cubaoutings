<?php
/* @var $this ToursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tours',
);

$this->menu=array(
    array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>

<!--SECTION TOURS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Tours</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Mantente en contacto.Dinos lo que piensas.
    </h6>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

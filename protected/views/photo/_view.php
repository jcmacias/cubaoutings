<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<!--<div class="view" style="float: left;">-->
    <div class="col-lg-4 pull-left">
    <div class="thumbnail">
        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->direction, $data->name,array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
    </div>
    </div>

	<!--<b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direction')); ?>:</b>
	<?php echo CHtml::encode($data->direction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_create')); ?>:</b>
	<?php echo CHtml::encode($data->time_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_update')); ?>:</b>
	<?php echo CHtml::encode($data->time_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tours_id')); ?>:</b>
	<?php echo CHtml::encode($data->tours_id); */?>
	<br />-->

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('place_id')); ?>:</b>
	<?php echo CHtml::encode($data->place_id); ?>
	<br />

	*/ ?>

<!--</div>-->
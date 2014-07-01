<?php
/* @var $this BookAccommodationsController */
/* @var $data BookAccommodations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_owner')); ?>:</b>
	<?php echo CHtml::encode($data->email_owner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pax')); ?>:</b>
	<?php echo CHtml::encode($data->pax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_create')); ?>:</b>
	<?php echo CHtml::encode($data->time_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accommodations_id')); ?>:</b>
	<?php echo CHtml::encode($data->accommodations_id); ?>
	<br />


</div>
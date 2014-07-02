<?php
/* @var $this AccommodationsController */
/* @var $model Accommodations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accommodations-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'photo'); ?>
            <?php echo $form->textField($model,'photo',array('class'=>'place_name form-control')); ?>
            <?php echo $form->error($model,'photo',array('class'=>'label label-danger')); ?>
        </div>
        <div class="col-lg-4">
            <?php echo $form->labelEx($model,'tours_id'); ?>
            <?php echo $form->dropDownList($model,'tours_id',CHtml::ListData(Tours::model()->findAll(),'id','name'),array('class'=>'photo_tours_id form-control')); ?>
            <?php echo $form->error($model,'tours_id',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<div class="row">
        <div class="col-lg-8">
            <?php echo $form->labelEx($model,'description'); ?>
            <?php echo $form->textField($model,'description',array('class'=>'place_name form-control')); ?>
            <?php echo $form->error($model,'description',array('class'=>'label label-danger')); ?>
        </div>
	</div>

	<div class="row buttons">
        <div class="col-lg-8">
	    	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right','style'=>'margin-top:2px;')); ?>
        </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
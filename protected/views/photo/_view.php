<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>

<!--<div class="view" style="float: left;">-->
    <div class="col-lg-4 pull-left">
    <a data-toggle="modal" data-target="#myModal<?php echo str_replace('.','_',$data->direction)?>"><div class="thumbnail">
        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->direction, $data->name,array("style"=>"height: 180px; width: 100%;",'class'=>'img-rounded'));?>
    </div></a>
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
<div class="modal fade" id="myModal<?php echo str_replace('.','_',$data->direction)?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->direction, $data->name,array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded img-responsive'));?>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
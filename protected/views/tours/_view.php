<?php
/* @var $this ToursController */
/* @var $data Tours */
?>

<?php
$photos=Photo::model()->getPhotosTours($data->id);
/*echo '<pre>';
print_r($photos[0]->direction);
echo '</pre>';
die;*/
?>
<div class="col-lg-4">
    <div class="thumbnail">
        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[0]->direction, 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
        <div class="caption">
            <div class="preview" style="max-height: 150px; overflow: hidden;">
                <h4><?php echo $data->name ?></h4>
                <p><?php echo $data->preview;?> </p>
            </div>
            <p>
                <?php echo CHtml::link("Ver mas", array('view', 'id'=>$data->id),array('class'=>"btn  btn-primary" )); ?>
            </p>
        </div>
    </div>
</div>



<!--<div class="view">

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_create')); ?>:</b>
	<?php echo CHtml::encode($data->time_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_update')); ?>:</b>
	<?php echo CHtml::encode($data->time_update); */?>
	<br />


</div>-->
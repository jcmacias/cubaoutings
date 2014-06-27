<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 27/06/14
 * Time: 9:55
 *
 */
/* @var $this PhotoController */
/* @var $data Photo */
?>
<!--<div class="view" style="float: left;">-->
<!--<div class="col-lg-4 pull-left">-->
    <a data-toggle="modal" data-target="#myModal<?php echo str_replace('.','_',$data->direction)?>">
        <div class="thumbnail pull-left" style="margin-bottom: 0px; width:70px;">
            <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$data->direction, $data->name,array("style"=>"height: 50px; width: 100%;",'class'=>'img-rounded'));?>
        </div></a>
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
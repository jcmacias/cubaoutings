<?php
/* @var $this PhotoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Photos',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Photo', 'url'=>array('create')),
	array('label'=>'Manage Photo', 'url'=>array('admin')),
);
}
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
<ul role="tablist" class="nav nav-tabs" id="myTab">
    <?php
    $arrayTours=Tours::model()->GetAllTours();

    for($i=0;$i<count($arrayTours);$i++){
        if($i==0){
            ?>
            <li class="active"><a data-toggle="tab" role="tab" href="#<?php echo $arrayTours[$i]->id;?>"><?php echo $arrayTours[$i]->name;?></a></li>
        <?php
        }else{?>
            <li class=""><a data-toggle="tab" role="tab" href="#<?php echo $arrayTours[$i]->id;?>"><?php echo $arrayTours[$i]->name;?></a></li>
        <?php
        }
    }
    ?>


</ul>
<div id="myTabContent" class="tab-content">
    <?php
    for($i=0;$i<count($arrayTours);$i++){
    $dataProviderPhotoTours=Photo::model()->getPhotosToursData($arrayTours[$i]->id);
        if($i==0){
            ?>
            <div class="tab-pane fade active in" id="<?php echo $arrayTours[$i]->id;?>">
               <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProviderPhotoTours,
                    'itemView'=>'_view',
                    'template'=>'{summary}{items} {pager}',
                    'pagerCssClass'=>'CLinkPager pull-right',
                    'pager'=>array(
                        'header' => '',
                        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
                    ),
                )); ?></div>
        <?php
        }else{?>
            <div class="tab-pane fade" id="<?php echo $arrayTours[$i]->id;?>">
                <?php  $dataProviderPhotoTours=Photo::model()->getPhotosToursData($arrayTours[$i]->id);
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProviderPhotoTours,
                    'itemView'=>'_view',
                    'template'=>'{summary}{items} {pager}',
                    'pagerCssClass'=>'CLinkPager pull-right',
                    'pager'=>array(
                        'header' => '',
                        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
                    ),
                )); ?>
            </div>

        <?php
        }
    }
    ?>
</div>
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <div class="details"><p>--><?php //echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit.  Praesentium sapiente voluptate nostrum ipsa tempora optio facilis beatae  quo aut error corrupti officiis dolore accusantium rem rerum illum  nulla sed quisquam.";?><!--</p></div>-->
<!--            </div>-->
<!--        </div><!-- /.modal-content -->
<!--    </div><!-- /.modal-dialog -->
<!--</div><!-- /.modal -->
<?php
Yii::app()->clientScript->registerScript('tab', "
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
");
?>

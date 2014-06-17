<?php
/* @var $this ToursController */
/* @var $model Tours */

$this->breadcrumbs=array(
	'Tours'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tours', 'url'=>array('index')),
	array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'Update Tours', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tours', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
?>
<!--SECTION TOURS -->
<!--<div class="section-header" id="contact">-->
<!---->
    <!-- SECTION TITLE -->
<!--    <h2 class="dark-text">--><?php //echo $model->name; ?><!--</h2>-->
<!---->
    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
<!--    <h6>-->
<!--        Mantente en contacto.Dinos lo que piensas.-->
<!--    </h6>-->
<!--</div>-->
    <?php $photos=Photo::model()->getPhotosToursPrincipal($model->id);?>

<?php
//echo '<pre>';
//print_r(count($photos));
//echo '</pre>';
//die;
if($photos){?>
<div id="carousel-top">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Carousel indicators -->
        <?php if(count($photos)>1){?>
        <ol class="carousel-indicators">

            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

            <li data-target="#myCarousel" data-slide-to="1"></li>

            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>
        <?php }?>
        <!-- Carousel items -->

        <div class="carousel-inner" style="height:300px;">

<?php for($i=0;$i< count($photos);$i++){?>
    <?php if($i==0){?>
            <div class="active item">

                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[$i]->direction, 'alt 1',array('class'=>'img-rounded'));?>

            </div>
<?php }else {?>
            <div class="item">

                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[$i]->direction, 'alt 1',array('class'=>'img-rounded'));?>

            </div>
            <?php }?>

<!--            <div class="item">-->
<!---->
<!--                --><?php //echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[$i]->direction, 'alt 1',array('class'=>'img-rounded'));?>
<!---->
<!--            </div>-->
<?php }?>
        </div>

    </div>
</div>
    <?php }?>
<h2 class="dark-text" style="text-align: center"><?php echo $model->name; ?></h2>
    <hr class="featurette-divider">

<?php echo $model->description;?>
    <hr class="featurette-divider">


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Comentarios</h3>
                </div>
               <div class="panel-body">
                   <div class="col-lg-12">
                       <?php
                       $dataProvider=Comment::model()->getComments($model->id);
                       $this->widget('zii.widgets.CListView',array(
                           'dataProvider'=>$dataProvider,
                           'itemView'=>'//comment/_view',
                           'id'=>'comments',
                           //'summaryText'=>"",
                           'template'=>'{items} {pager}',
                           //'enablePagination'=>true,
                           'pagerCssClass'=>'CLinkPager pull-right',
                           'pager'=>array(
                               'header' => '',
                               'htmlOptions'=>array('class'=>'pagination pagination-sm',),
                           ),

                       ));
                       ?>
                   </div>
                   <div class="col-lg-12">
                       <?php
                       $comment=new Comment();
                       $this->renderPartial('/comment/_form',array('model'=>$comment,)); ?>

                   </div>

                </div>
         </div>
    </div>
    </div>

<?php
Yii::app()->clientScript->registerScript('carousel', "
$('#myCarousel').carousel({
  interval: 3000,
  pause: 'hover',
  wrap: true,
})

");
?>
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

<?php echo $model->description;?><br>
<div class=" pull-right">
    <?php
    $this->widget('application.extensions.sharebox.EShareBox', array(
        // url to share, required.
        'url' => $this->createAbsoluteUrl('tour/view',array('id'=>$model->id)),

        // A title to describe your link, required.
        // Some services will ignore this value.
        'title'=> 'Cubaoutings the best choice to explore Cuba !!',

        // Size of the icons to display, in pixels.
        // Default is 24px, available sizes : 16, 24, 32, 48.
        'iconSize' => 32,

        // Whether to animate the links.
        // Default is true
        //'animate' => false,

        // Social networks to include, excluding all others.
        // The exclude filter is still run.
        //'include' => array('technorati', 'digg'),

        // Social networks to exclude from display.
        // By default none are excluded.
        'exclude' => array('technorati', 'digg','reddit','newsvine','stumbleupon','delicious'),

        // Use your own icons! Note that you will need to have
        // a subfolder of the appropriate icons sizes.
        // ie: /myimages/social/16px /myimages/social/24px ...
        //'iconPath' => '/myimages/social',

        // HTML options for the UL element.
        //'ulHtmlOptions' => array('class' => 'myCustomUlClass'),

        // HTML options for all the LI elements.
        //'liHtmlOptions' => array('class' => 'myCustomLiClass'),
    ));?>
</div><br>
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
<?php
/* @var $this CommentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comments',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Comment', 'url'=>array('create')),
	array('label'=>'Manage Comment', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>'Havana day tour','url'=>array('tours/view','id'=>8)),
        array('label'=>'Trinidad & Cienfuegos','url'=>array('tours/view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, & Varadero','url'=>array('tours/view','id'=>7)),
        array('label'=>'Havana & Tropicana ','url'=>array('tours/view','id'=>14)),
        array('label'=>'Three cities tour','url'=>array('tours/view','id'=>13)),
        array('label'=>'Guama & the Bay of Pigs ','url'=>array('tours/view','id'=>12)),
        array('label'=>'Havana & the cannon shot','url'=>array('tours/view','id'=>15)),
        array('label'=>'Transfers','url'=>array('tours/transfer')),

    );
}
?>
<!--SECTION LOGIN -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text"><?php echo Yii::t('app','Testimonials')?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
       <?php echo Yii::t('app','Your opinion means a lot to us.');?>
    </h6>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'id'=>'comments',
    //'summaryText'=>"",
    'template'=>'{summary}{items} {pager}',
    //'enablePagination'=>true,
    'pagerCssClass'=>'CLinkPager pull-right',
    'pager'=>array(
        'header' => '',
        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
    ),
)); ?>

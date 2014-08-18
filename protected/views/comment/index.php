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
        array('label'=>Yii::t('app','Havana day tour'),'url'=>array('tours/view','id'=>8)),
        array('label'=>Yii::t('app','Trinidad & Cienfuegos '),'url'=>array('tours/view','id'=>11)),
        array('label'=>Yii::t('app','Matanzas, Cárdenas, & Varadero'),'url'=>array('tours/view','id'=>7)),
        array('label'=>Yii::t('app','Havana & Tropicana '),'url'=>array('tours/view','id'=>14)),
        array('label'=>Yii::t('app','Three cities tour'),'url'=>array('tours/view','id'=>13)),
        array('label'=>Yii::t('app','Guama and the Bay of Pigs'),'url'=>array('tours/view','id'=>12)),
        array('label'=>Yii::t('app','Havana and the cannon shot'),'url'=>array('tours/view','id'=>15)),
        array('label'=>Yii::t('app','Transfers'),'url'=>array('transfer')),


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

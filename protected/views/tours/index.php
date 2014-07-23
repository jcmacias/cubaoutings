<?php
/* @var $this ToursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tours',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
    array('label'=>'Create Tours', 'url'=>array('create')),
	array('label'=>'Manage Tours', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>'Havana day tour','url'=>array('view','id'=>8)),
        array('label'=>'Trinidad & Cienfuegos','url'=>array('view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, & Varadero','url'=>array('view','id'=>7)),
        array('label'=>'Havana & Tropicana ','url'=>array('view','id'=>14)),
        array('label'=>'Three cities tour','url'=>array('view','id'=>13)),
        array('label'=>'Guama & the Bay of Pigs ','url'=>array('view','id'=>12)),
        array('label'=>'Havana & the cannon shot','url'=>array('view','id'=>15)),
        array('label'=>'Transfers','url'=>array('transfer')),
    );
}
?>

<!--SECTION TOURS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Tours</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Just tell us your choices and we will do the rest.
    </h6>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    //'summaryText'=>"",
    'template'=>'{summary}{items} {pager}',
    //'enablePagination'=>true,
    'pagerCssClass'=>'CLinkPager pull-right',
    'pager'=>array(
        'header' => '',
        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
    ),
)); ?>

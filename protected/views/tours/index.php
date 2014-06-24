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
        array('label'=>'Havana tour','url'=>array('view','id'=>8)),
        array('label'=>'Trinidad and Cienfuegos tour ','url'=>array('view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, and Varadero tour','url'=>array('view','id'=>7)),
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
        Mantente en contacto.Dinos lo que piensas.
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

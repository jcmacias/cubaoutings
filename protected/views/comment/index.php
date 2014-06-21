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
}
?>
<!--SECTION LOGIN -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Comments</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Diganos lo que piensa de nuestros servicios.
    </h6>
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

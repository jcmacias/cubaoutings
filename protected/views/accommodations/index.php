<?php
/* @var $this AccommodationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accommodations',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>'Havana tour','url'=>array('tours/view','id'=>8)),
        array('label'=>'Trinidad & Cienfuegos tour ','url'=>array('tours/view','id'=>11)),
        array('label'=>'Matanzas, Cárdenas, & Varadero tour','url'=>array('tours/view','id'=>7)),
        array('label'=>'Havana & Tropicana ','url'=>array('tours/view','id'=>14)),
        array('label'=>'Three cities tour','url'=>array('tours/view','id'=>13)),
        array('label'=>'Guama & the Bay of Pigs ','url'=>array('tours/view','id'=>12)),
        array('label'=>'Havana & the cannon shot','url'=>array('tours/view','id'=>15)),
        array('label'=>'Transfers','url'=>array('tours/transfer')),

    );
}
?>
<!--SECTION ACCOMMODATIONS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Accommodations</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Casas donde tener una buena estancia.
    </h6>
</div>
<div class="col-lg-12">
    <strong><p>Stay in a private house.</p></strong>
    <p>When you stay in a private house in Cuba you can say you know the local culture and gain some advantages.</p>
    <div style="padding-left: 12px;">
        <p><i class="icon-ok"></i>  There is availability in all the cities you would like to visit(Varadero, Matanzas, Havana, Trinidad, Cienfuegos, Viñales, etc).</p>
        <p><i class="icon-ok"></i>  You can stay in the heart of the city  to live the local culture.</p>
        <p><i class="icon-ok"></i>  You can choose the size of the room depending on the amount of visitors.</p>
        <p><i class="icon-ok"></i>  We  guarantee you privacy, however you can interact with a Cuban family as if you were a local.</p>
        <p><i class="icon-ok"></i>  They have very good prices, which could change depending on the season(from 30.00 up to 70.00).</p>
    </div>

    <hr class="featurette-divider">
</div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

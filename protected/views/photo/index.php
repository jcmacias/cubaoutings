<?php
/* @var $this PhotoController */
/* @var $dataProvider CActiveDataProvider */
/* @var $arrayTours array */

$this->breadcrumbs = array(
    'Photos',
);
if (!Yii::app()->user->isGuest) {
    $this->menu = array(
        array('label' => 'Create Photo', 'url' => array('create')),
        array('label' => 'Manage Photo', 'url' => array('admin')),
    );
} else {
    $this->menu = array(
        array('label' => Yii::t('app', 'Havana day tour'), 'url' => array('tours/view', 'id' => 8)),
        array('label' => Yii::t('app', 'Trinidad & Cienfuegos '), 'url' => array('tours/view', 'id' => 11)),
        array('label' => Yii::t('app', 'Matanzas, Cárdenas, & Varadero'), 'url' => array('tours/view', 'id' => 7)),
        array('label' => Yii::t('app', 'Havana & Tropicana '), 'url' => array('tours/view', 'id' => 14)),
        array('label' => Yii::t('app', 'Three cities tour'), 'url' => array('tours/view', 'id' => 13)),
        array('label' => Yii::t('app', 'Guama and the Bay of Pigs'), 'url' => array('tours/view', 'id' => 12)),
        array('label' => Yii::t('app', 'Havana and the cannon shot'), 'url' => array('tours/view', 'id' => 15)),
        array('label' => Yii::t('app', 'Transfers'), 'url' => array('transfer')),

    );
}
?>
<!--SECTION PHOTOS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text"><?php echo Yii::t('app', 'Photos') ?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        <?php echo Yii::t('app', 'Some images of Cuba.'); ?>
    </h6>
</div>
<!--<ul role="tablist" class="nav nav-tabs" id="myTab">-->
<!--    --><?php
//
//    for ($i = 0; $i < count($arrayTours); $i++) {
//        if ($i == 0) {
//            ?>
<!--            <li class="active"><a data-toggle="tab" role="tab"-->
<!--                                  href="#--><?php //echo $arrayTours[$i]->id; ?><!--">--><?php //echo Yii::t('app', $arrayTours[$i]->name); ?><!--</a>-->
<!--            </li>-->
<!--        --><?php
//        } else {
//            ?>
<!--            <li class=""><a data-toggle="tab" role="tab"-->
<!--                            href="#--><?php //echo $arrayTours[$i]->id; ?><!--">--><?php //echo Yii::t('app', $arrayTours[$i]->name); ?><!--</a>-->
<!--            </li>-->
<!--        --><?php
//        }
//    }
//    ?>
<!---->
<!---->
<!--</ul>-->
<!--<div id="myTabContent" class="tab-content">-->
<!--    --><?php
//    for ($i = 0; $i < count($arrayTours); $i++) {
//        $dataProviderPhotoTours = Photo::model()->getPhotosToursData($arrayTours[$i]->id);
//        if ($i == 0) {
//            ?>
<!--            <div class="tab-pane fade active in" id="--><?php //echo $arrayTours[$i]->id; ?><!--">-->
<!---->
<!--                --><?php //$this->widget('zii.widgets.CListView', array(
////                    'id' => 'gamma-container',
//                    'dataProvider' => $dataProviderPhotoTours,
//                    'itemView' => '_view',
////                    'itemsTagName' => 'ul',
////                    'itemsCssClass' => 'gamma-gallery',
//                    'template' => '{items} {pager}',
//                    'pagerCssClass' => 'CLinkPager pull-right',
//                    'pager' => array(
//                        'header' => '',
//                        'htmlOptions' => array('class' => 'pagination pagination-sm',),
//                    ),
////                    'htmlOptions' => array(
////                        'class' => 'gamma-container'
////                    )
//                )); ?>
<!---->
<!--            </div>-->
<!--        --><?php
//        } else {
//            ?>
<!--            <div class="tab-pane fade" id="--><?php //echo $arrayTours[$i]->id; ?><!--">-->
<!---->
<!--                --><?php //$dataProviderPhotoTours = Photo::model()->getPhotosToursData($arrayTours[$i]->id);
//                $this->widget('zii.widgets.CListView', array(
////                    'id' => 'gamma-container',
//                    'dataProvider' => $dataProviderPhotoTours,
//                    'itemView' => '_view',
////                    'itemsTagName' => 'ul',
////                    'itemsCssClass' => 'gamma-gallery',
//                    'template' => '{items} {pager}',
//                    'pagerCssClass' => 'CLinkPager pull-right',
//                    'pager' => array(
//                        'header' => '',
//                        'htmlOptions' => array('class' => 'pagination pagination-sm',),
//                    ),
////                    'htmlOptions' => array(
////                        'class' => 'gamma-container'
////                    )
//                )); ?>
<!---->
<!--            </div>-->
<!---->
<!--        --><?php
//        }
//    }
//    ?>
<!--</div>-->
<?php $this->widget('zii.widgets.CListView', array(
    'id' => 'gamma-container',
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
    'itemsTagName' => 'ul',
    'itemsCssClass' => 'gamma-gallery',
    'template' => "{items}\n<div class='gamma-overlay'></div>",
//    'pagerCssClass' => 'CLinkPager pull-right',
//    'pager' => array(
//        'header' => '',
//        'htmlOptions' => array('class' => 'pagination pagination-sm',),
//    ),
    'htmlOptions' => array(
        'class' => 'gamma-container gamma-loading'
    )
)); ?>

<?php
//Yii::app()->clientScript->registerScript('tab', "
//$('#myTab a').click(function (e) {
//  e.preventDefault()
//  $(this).tab('show')
//})
//");
?>
<!--<script type="text/javascript">-->
<!--    $(function () {-->
<!---->
<!--        var GammaSettings = {-->
<!--            // order is important!-->
<!--            viewport: [{-->
<!--                width: 1200,-->
<!--                columns: 5-->
<!--            }, {-->
<!--                width: 900,-->
<!--                columns: 4-->
<!--            }, {-->
<!--                width: 500,-->
<!--                columns: 3-->
<!--            }, {-->
<!--                width: 320,-->
<!--                columns: 2-->
<!--            }, {-->
<!--                width: 0,-->
<!--                columns: 2-->
<!--            }]-->
<!--        };-->
<!---->
<!--        Gamma.init(GammaSettings);-->
<!---->
<!--    });-->
<!--</script>-->

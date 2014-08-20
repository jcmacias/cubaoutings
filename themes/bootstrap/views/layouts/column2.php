<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
  <div class="row">
        <div class="col-lg-9">
            <div id="content">
                <?php echo $content; ?>
            </div><!-- content -->
        </div>
        <div class="col-lg-3 top_sidebar">
            <div id="sidebar">
            <?php
            if(!Yii::app()->user->isGuest){$title='Operations';}else{$title=Yii::t('app','Tours');}
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>$title,
                    //'htmlOptions'=>array('class'=>'sidebar_header'),
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'nav operations'),
                ));
               $this->endWidget();
            ?>

            </div><!-- sidebar -->
        </div>
  </div>
<?php $this->endContent(); ?>
</div>
<?php
$datos=Offer::model()->GetOffer();
if($datos!=null ){
    if(Yii::app()->getLanguage() == 'en'){
        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message.'</p></td></table>';
    }
    if(Yii::app()->getLanguage() == 'fr'){
        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message_fr.'</p></td></table>';
    }
    if(Yii::app()->getLanguage() == 'es'){
        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message_es.'</p></td></table>';
    }
//echo '<pre>';
//print_r($message[0]->message);
//echo '</pre>';die;
    if(Yii::app()->user->isGuest  ){
        $this->widget('application.extensions.PNotify.PNotify',array(
                'options'=>array(
                    // 'title'=>'Special offer!!!',
                    'text'=>$message,
                    'type'=>'success',
                    'closer'=>true,
                    'sticker'=>false,
                    'icon'=>false,
                    'hide'=>false))
        );
    }
}

?>
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
            if(!Yii::app()->user->isGuest){$title='Operations';}else{$title='Tours';}
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
if(Yii::app()->user->isGuest){
    $this->widget('application.extensions.PNotify.PNotify',array(
            'options'=>array(
                'title'=>'Special offer!!!',
                'text'=>'Summer discount -10%.',
                'type'=>'success',
                'closer'=>true,
                'sticker'=>false,
                'hide'=>false))
    );
}
?>
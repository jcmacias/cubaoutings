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
                <?php if(isset($_GET['id'])){?>
                 <div class="row" style="padding-top: 20px;">
                      <div class="col-sm-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Book tour</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form">

                                    <?php
                                     $tours_id=$_GET['id'];
                                    $form=$this->beginWidget('CActiveForm', array(
                                        'id'=>'book-form',
                                        // Please note: When you enable ajax validation, make sure the corresponding
                                        // controller action is handling ajax validation correctly.
                                        // There is a call to performAjaxValidation() commented in generated controller code.
                                        // See class documentation of CActiveForm for details on this.
                                        'enableAjaxValidation'=>true,
                                        'clientOptions' => array(
                                            'validateOnSubmit'=>true,
                                            'validateOnChange'=>true,
                                            'validateOnType'=>false,
                                        ),
                                        'action'=>Yii::app()->createUrl('book/create',array('id'=>$tours_id)),
                                    )); $model=new Book();?>

                                    <p class="note">Fields with <span class="required">*</span> are required.</p>

                                    <?php //echo $form->errorSummary($model); ?>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,'email_owner'); ?>
                                            <?php echo $form->textField($model,'email_owner',array('class'=>'book_email_owner form-control')); ?>
                                            <?php echo $form->error($model,'email_owner',array('class'=>'label label-danger')); ?>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,'PAX'); ?>
                                            <?php echo $form->textField($model,'pax',array('class'=>'book_email_owner form-control')); ?>
                                            <?php echo $form->error($model,'pax',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,'date_book'); ?>
<!--                                            --><?php //echo $form->textField($model,'date_book',array('class'=>'book_email_owner form-control')); ?>
                                            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                'model' => $model,
                                                'attribute' => 'date_book',
                                                'htmlOptions' => array(
                                                    'size' => '10',         // textField size
                                                    'maxlength' => '10',    // textField maxlength
                                                    'class'=>'book_email_owner form-control'
                                                ),
                                                'options'=>array(
                                                    'dateFormat' => 'yy-mm-dd',
                                                ),
                                            ));
                                            ?>
                                            <?php echo $form->error($model,'date_book',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,'question'); ?>
                                            <?php echo $form->textArea($model,'question',array('class'=>'book_question form-control')); ?>
                                            <?php echo $form->error($model,'question',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                   <div class="row buttons">
                                        <div class="col-lg-12" style="margin-top: 8px;">
                                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
                                        </div>
                                    </div>

                                    <?php $this->endWidget(); ?>

                                </div><!-- form -->
                            </div>
                        </div>
                    </div>
                 </div>
<!--                Bloque de places con su informacion-->
                    <div class="row" >
                        <div class="col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Interesting places</h3>
                                </div>
                                <div class="panel-body" style="padding-left: 25px;">
                                    <?php
                                    $dataProvider = Photo::getPhotosToursData($tours_id);

                                    $this->widget('zii.widgets.CListView', array(
                                        'dataProvider'=>$dataProvider,
                                        'itemView'=>'//site/_view_places',
                                        'id'=>'places',
                                        'template'=>'{items} {pager}',
                                        'pagerCssClass'=>'CLinkPager pull-right',
                                        'pager'=>array(
                                            'header' => '',
                                            'htmlOptions'=>array('class'=>'pagination pagination-sm',),
                                        ),
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div><!-- sidebar -->
        </div>
  </div>
<?php $this->endContent(); ?>
</div>
<?php
$datos=Offer::model()->GetOffer();
if($datos!=null ){
   $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message.'</p></td></table>';
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
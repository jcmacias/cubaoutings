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
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>'Operations',
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
                                        'enableAjaxValidation'=>false,
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
                                            <?php echo $form->labelEx($model,'question'); ?>
                                            <?php echo $form->textArea($model,'question',array('class'=>'book_question form-control')); ?>
                                            <?php echo $form->error($model,'question',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                   <div class="row buttons">
                                        <div class="col-lg-12">
                                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
                                        </div>
                                    </div>

                                    <?php $this->endWidget(); ?>

                                </div><!-- form -->
<!--                                --><?php
//                                $model= new Book;
//                                $this->renderPartial('/book/_form', array('model'=>$model))
//                                ?>
                            </div>
                        </div>
                    </div>
                 </div><?php }?>
            </div><!-- sidebar -->
        </div>
  </div>
<?php $this->endContent(); ?>
</div>
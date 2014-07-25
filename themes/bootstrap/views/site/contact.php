<div class="container">
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

    //$this->pageTitle=Yii::app()->name . ' - Contact Us';
    $this->breadcrumbs=array(
        'Contact',
    );
    ?>

    <!--<h1>Contact Us</h1>
    <!--SECTION CONTACT -->
    <div class="section-header" id="contact">

        <!-- SECTION TITLE -->
        <h2 class="dark-text">Contact</h2>

        <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Keep in touch. You are our commitment.
        </h6>
    </div>
    <div class="row">
        <div class="col-lg-10" style="padding: 10px;border: solid 1px #FF005A;border-radius: 1%;">
            <?php if(Yii::app()->user->hasFlash('contact')): ?>

                <div class="flash-success">
                    <?php echo Yii::app()->user->getFlash('contact'); ?>
                </div>

            <?php else: ?>

            <!--<p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
            </p>-->

            <div class="form">

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'contact-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                    'htmlOptions'=>array(
                        'class'=>'form-horizontal',
                    ),
                )); ?>

                <!--<p class="note">Fields with <span class="required">*</span> are required.</p>-->
                <!--<div class="alert alert-dismissable alert-danger">
        <?php echo $form->errorSummary($model); ?>
        </div>-->
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <?php echo $form->labelEx($model,'name'); ?>
                        <?php echo $form->textField($model,'name',array('class'=>'contact-name form-control')); ?>
                        <?php echo $form->error($model,'name',array('class'=>'label label-danger')); ?>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <?php echo $form->labelEx($model,'email'); ?>
                        <?php echo $form->textField($model,'email',array('class'=>'contact-email form-control')); ?>
                        <?php echo $form->error($model,'email',array('class'=>'label label-danger')); ?>
                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <?php echo $form->labelEx($model,'subject'); ?>
                        <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128,'class'=>'contact-subject form-control')); ?>
                        <?php echo $form->error($model,'subject',array('class'=>'label label-danger')); ?>
                    </div>

                    <div class="col-md-12">
                        <?php echo $form->labelEx($model,'body'); ?>
                        <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50,'class'=>'contact-body form-control')); ?>
                        <?php echo $form->error($model,'body',array('class'=>'label label-danger')); ?>
                    </div>

                    <?php /*if(CCaptcha::checkRequirements()): ?>
            <!--<div class="col-lg-4 col-sm-4">
                <?php echo $form->labelEx($model,'verifyCode'); ?>
                <div>
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model,'verifyCode',array('class'=>'form-control')); ?>
                </div>
                <div class="hint">Please enter the letters as they are shown in the image above.
                <br/>Letters are not case-sensitive.</div>
                <?php echo $form->error($model,'verifyCode',array('class'=>'label label-danger')); ?>
            </div>-->
            <?php endif; */?>

                        <div class="contact-buttons">
                            <?php echo CHtml::submitButton('Submit',array('class'=>'btn btn-success btn-lg pull-right')); ?>
                        </div>

                    <?php $this->endWidget(); ?>

                </div><!-- form -->

                <?php endif; ?>

            </div>
        </div>
        <div class="col-lg-2" style="padding-left: 50px;">
            <div class="row">
                <label class="pull-left">Emails</label><br>
                <ul class="pull-left">
                    <li>cubaoutings@gmail.com</li>
                </ul>
            </div>
            <div class="row">
                <label class="pull-left">Facebook contacts</label><br>
                <ul class="pull-left">
                    <li>Gloria@facebook.com</li>
                </ul>
            </div>
            <div class="row">
                <label class="pull-left">Cellphones</label><br/>
                <ul class="pull-left">
                 <li>+53 52812117</li>
                 <li>+53 52480858</li>
                </ul>
             </div>


         </div>
    </div>






















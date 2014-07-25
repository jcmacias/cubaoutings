<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!--EJEMPLO UNO-->
<!--<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>

        <p>This is a template for a simple marketing or informational website. It includes a large callout called the
            hero unit and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>

        <p><a class="btn btn-primary btn-lg">Learn more »</a></p>
    </div>
</div>-->
<!--EJEMPLO UNO-->
<div class="splash">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>"The best way to explore Cuba."</h1>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div style="background-color: rgba(0, 0, 0, 0.4);" class="well sponsor">
                            <a target="_blank" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'treehouse']);" href="#">
                                <h4 style="margin-bottom: 0.4em;">Find us on Tripadvisor</h4>
                                <div class="clearfix">

                            </a>
                                 <p><? echo Yii::t('app','Share this site with your friends');?></p>
                                    <p><?php
                                        $this->widget('application.extensions.sharebox.EShareBox', array(
                                            // url to share, required.
                                            'url' => $this->createAbsoluteUrl('site/index'),

                                            // A title to describe your link, required.
                                            // Some services will ignore this value.
                                            'title'=> 'Cubaoutings the best choice to explore Cuba !!',

                                            // Size of the icons to display, in pixels.
                                            // Default is 24px, available sizes : 16, 24, 32, 48.
                                            'iconSize' => 32,

                                            // Whether to animate the links.
                                            // Default is true
                                            //'animate' => false,

                                            // Social networks to include, excluding all others.
                                            // The exclude filter is still run.
                                            //'include' => array('technorati', 'digg'),

                                            // Social networks to exclude from display.
                                            // By default none are excluded.
                                            'exclude' => array('technorati', 'digg','reddit','newsvine','stumbleupon','delicious'),

                                            // Use your own icons! Note that you will need to have
                                            // a subfolder of the appropriate icons sizes.
                                            // ie: /myimages/social/16px /myimages/social/24px ...
                                            //'iconPath' => '/myimages/social',

                                            // HTML options for the UL element.
                                            //'ulHtmlOptions' => array('class' => 'myCustomUlClass'),

                                            // HTML options for all the LI elements.
                                            //'liHtmlOptions' => array('class' => 'myCustomLiClass'),
                                        ));?></p>
                                </div>

                            <div class="splash-down">
                                <a href="#trabajos"><i class="icon-download"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="container"  id="trabajos">
    <hr class="featurette-divider">
    <!-- SECTION WORKS -->
    <div class="section-header" >

         <!-- SECTION TITLE -->
         <h2 class="dark-text">Tours</h2>

         <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            Just tell us your choices and we will do the rest.
        </h6>
    </div>
<div class="tour-list">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/trinidad.jpg', 'alt 1',array("style"=>"height: 230px; width: 100%;",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3>Trinidad & Cienfuegos</h3>
                    <p>Get a ride through the green country side to visit the best two cities of the central part of Cuba. They are so perfectly preserved that we can see the features of a Spanish colonization on its very architecture.</p>
                    <p>
                        <a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('tours/view',array('id'=>11));?>"><?php echo Yii::t('app','Read More');?></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/nacional.jpg', 'alt 1',array("style"=>"height: 230px; width: 100%;",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3>Havana Day tour</h3>
                    <p>Havana, the largest city in the Caribbean, is the Cuba's political, cultural and economic center, and populated by over two million people. Havana suffered little or no damage during the wars and revolutions of the past 200 years... </p>
                    <p>
                        <a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('tours/view',array('id'=>8));?>"><?php echo Yii::t('app','Read More');?></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/guama4.jpg', 'alt 1',array("style"=>"height: 230px; width: 100%;",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3>Guama & the Bay of Pigs</h3>
                    <p>Guamá with its singular Taino village, a sort of tropical Venice; the beaches of Playa Larga and Playa Girón, emblematic historical places and Salinas de Brito, where two routes of migratory birds converge.</p>
                    <p>
                        <a class="btn btn-primary" href="<?php echo Yii::app()->createUrl('tours/view',array('id'=>12));?>"><?php echo Yii::t('app','Read More');?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<hr class="featurette-divider">
<!-- SECTION TESTIMONIOS -->
<div class="section-header">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Testimonials</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        People are very happy with our work. Get to know their opinion.
    </h6>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Testimonial</h3>
            </div>
            <div class="panel-body">
                <div class="message">
                    “Called days. Image kind beginning have. Herb set kind herb.
                    Wherein saying third was, every land moveth also bearing hath bring had
                    give god gathered behold open cattle after a, from third male subdue
                    multiply divided void cattle winged. Herb set kind herb. multiply
                    divided void cattle winged. Herb set kind herb.”
                </div>
                <div class="client">
                    <div class="quote green-text">
                        <i class="icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name">Frank Willian</a>
                        <div class="client-company">
                            CEO, AbcD Network
                        </div>
                    </div>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/1_002.jpg', 'client',array("class"=>"img-circle"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Testimonial</h3>
            </div>
            <div class="panel-body">
                <div class="message">
                    “Called days. Image kind beginning have. Herb set kind herb.
                    Wherein saying third was, every land moveth also bearing hath bring had
                    give god gathered behold open cattle after a, from third male subdue
                    multiply divided void cattle winged. Herb set kind herb. multiply
                    divided void cattle winged. Herb set kind herb.”
                </div>
                <div class="client">
                    <div class="quote blue-text">
                        <i class=" icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name">Frank Willian</a>
                        <div class="client-company">
                            CEO, AbcD Network
                        </div>
                    </div>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/2_002.jpg', 'client',array("class"=>"img-circle"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Testimonial</h3>
            </div>
            <div class="panel-body">
                <div class="message">
                    “Called days. Image kind beginning have. Herb set kind herb.
                    Wherein saying third was, every land moveth also bearing hath bring had
                    give god gathered behold open cattle after a, from third male subdue
                    multiply divided void cattle winged. Herb set kind herb. multiply
                    divided void cattle winged. Herb set kind herb.”
                </div>
                <div class="client">
                    <div class="quote yellow-text">
                        <i class="icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name">Frank Willian</a>
                        <div class="client-company">
                            CEO, AbcD Network
                        </div>
                    </div>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/3_002.jpg', 'client',array("class"=>"img-circle"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="featurette-divider">
<!--SECTION PORTOFOLIO -->
<div class="section-header">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Pictures</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
       Some images of Cuba.
    </h6>
</div>
<div class="tour-list">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/guama.jpg', 'guama',array("style"=>"height: 180px; width: 100%;",'class'=>'img-rounded'));?>
             </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/capitolio.jpg', 'capitolio',array("style"=>"height: 180px; width: 100%;cursor: pointer;",'class'=>'img-rounded'));?>
             </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/cienfuegos_parque_jose_marti.jpg', 'cienfuegos_parque_jose_marti',array("style"=>"height: 180px; width: 100%;cursor: pointer;",'class'=>'img-rounded'));?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/plaza-revolucion.jpg', 'plaza-revolucion',array("style"=>"height: 180px; width: 100%;cursor: pointer;",'class'=>'img-rounded'));?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/Centro_historico_de_Trinidad.jpg', 'Centro_historico_de_Trinidad',array("style"=>"height: 180px; width: 100%;cursor: pointer;",'class'=>'img-rounded'));?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_portada/che_plaza_revolucion.jpg', 'che_plaza_revolucion',array("style"=>"height: 180px; width: 100%;cursor: pointer;",'class'=>'img-rounded'));?>
            </div>
        </div>
    </div>

</div>

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             </div>
            <div class="modal-body">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
//Yii::app()->clientScript->registerScript('barra', "
//$('.navbar .navbar-default .navbar-fixed-top').hide;
//");
?>
<script type="text/javascript">
    $(document).ready(function(){

        $('.thumbnail img').on('click',function(){
            var src = $(this).attr('src');
            var img = '<img src="' + src + '" class="img-responsive"/>';
            $('#myModal .modal-body').html(img);
//            //Start of new code
//            var index = $(this).parent('div').index();
//            var html = '';
//            html += img;
//            html += '<div style="height:25px;clear:both;display:block;">';
//            html += '<a class="controls next" href="'+ (index+2) + '">next &raquo;</a>';
//            html += '<a class="controls previous" href="' + (index) + '">&laquo; prev</a>';
//            html += '</div>';
//            //End of new code
            $('#myModal').modal();
        });

//        $('#myModal').on('shown.bs.modal', function(){
////                $('#myModal .modal-body').html(img);
//        });

        $('#myModal').on('hidden.bs.modal', function(){
            $('#myModal .modal-body').html('');
        });


    })

</script>



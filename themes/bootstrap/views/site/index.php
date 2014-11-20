<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="splash">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>"<?php echo Yii::t('app','The best way to explore Cuba.');?>"</h1>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div style="background-color: rgba(0, 0, 0, 0.4);" class="well sponsor">
                            <a target="_blank" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'treehouse']);" href="#">
                                <h4 style="margin-bottom: 0.4em;"><?php echo Yii::t('app','Find us on Tripadvisor'); ?></h4>
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
         <h2 class="dark-text"><?php echo Yii::t('app','Tours');?></h2>

         <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
            <?php echo Yii::t('app','Just tell us your choices and we will do the rest.');?>
        </h6>
    </div>
<div class="tour-list">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/trinidad.jpg', 'alt 1',array("style"=>"height: 230px; width: 100%;",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3><?php echo Yii::t('app','Trinidad & Cienfuegos ');?></h3>
                    <?php if(Yii::app()->getLanguage() == 'en'){?>
                    <p>Get a ride through the green country side to visit the best two cities of the central part of Cuba. They are so perfectly preserved that we can see the features of a Spanish colonization on its very architecture.</p>
                    <?php }if(Yii::app()->getLanguage() == 'fr'){?>
                    <p>Effectuez une balade à travers la campagne verdoyante et visiter les deux meilleures villes de la région centrale de Cuba. Elles sont si parfaitement conservées qu’on peut y voir encore les traits caractéristiques de la colonisation espagnole dans leur architecture.</p>
                    <?php }?>
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
                    <h3><?php echo Yii::t('app','Havana day tour');?></h3>
                    <?php if(Yii::app()->getLanguage() == 'en'){?>
                    <p>Havana, the largest city in the Caribbean, is the Cuba's political, cultural and economic center, and populated by over two million people. Havana suffered little or no damage during the wars and revolutions of the past 200 years... </p>
                    <?php }if(Yii::app()->getLanguage() == 'fr'){?>
                    <p>La Havane, la plus grande villedes Caraïbes, est le centre politique, culturel et économique de Cuba, et se trouve peuplée par plus de deux millions de personnes. La Havane a subi peu ou zéro dommage pendant les guerres et les révolutions des 200 dernières... </p>
                    <?php }?>
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
                    <h3><?php echo Yii::t('app','Guama and the Bay of Pigs');?></h3>
<!--                    <p>Guamá with its singular Taino village, a sort of tropical Venice; the beaches of Playa Larga and Playa Girón, emblematic historical places and Salinas de Brito...</p>-->
                    <?php if(Yii::app()->getLanguage() == 'en'){?>
                    <p>The Southern part of Matanzas province is an excellent place to spend the day enjoying the country side. Zapata peninsula is the Cuba’s most important wetland area and deservedly declared National Park.</p>
                        <p>
                            <a class="btn btn-primary" " href="<?php echo Yii::app()->createUrl('tours/view',array('id'=>12));?>"><?php echo Yii::t('app','Read More');?></a>
                        </p>
                    <?php }?>
                    <?php if(Yii::app()->getLanguage() == 'fr'){?>
                    <p>La zone sud de la province de Matanzas est un excellent endroit pour passer la journée et profiter de la campagne. La Municipalité de Zapata est la zone humide la plus importante de Cuba et a été déclarée à juste titreParc National.</p>
                        <p>
                            <a class="btn btn-primary" style="margin-top: -7px;" href="<?php echo Yii::app()->createUrl('tours/view',array('id'=>12));?>"><?php echo Yii::t('app','Read More');?></a>
                        </p>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>

</div>
<hr class="featurette-divider">
<!-- SECTION TESTIMONIOS -->
<div class="section-header">

    <!-- SECTION TITLE -->
    <h2 class="dark-text"><?php echo Yii::t('app','Testimonials');?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        <?php echo Yii::t('app','People are very happy with our work. Get to know their opinion.');?>
    </h6>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('app','Testimonials');?></h3>
            </div>
            <div class="panel-body">
                <div class="message">
                    “Gloria, Just wanted to let you know what a wonderful time we had in our tour to Havana.
                    It was due to you, and your excellent planning, recommendations and knowledge. Thank you for
                    all you did for us. The Cañonazo at 9.00pm was absolutely wonderful. What a beautiful
                    tradition! The weather was great, and we learned a lot about Cuba. I think you have a corner
                    on the market for what you do. I know you worked real hard on this.
                    So give yourself a pat on the back. Thank you. ”
                </div>
                <div class="client">
                    <div class="quote green-text">
                        <i class="icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name">Mary & Larry</a>
                        <div class="client-company">
                            <?php echo  CHtml::link(Yii::t('app','Havana and the cannon shot'),Yii::app()->createUrl('tours/view',array('id'=>15))) ;?>
                        </div>
                    </div>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/mary.jpg', 'client',array("class"=>"img-circle"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('app','Testimonials');?></h3>
            </div>
            <div class="panel-body">
                <div class="message">
                    “Hi Felix! Well, we’re back home and getting our clocks back adjusted to this side of the world.
                    I wanted to take a minute and THANK YOU FOR EVERYTHING! FOR SHOWING US YOUR BEAUTIFUL COUNTRY.
                    Our Honeymoon was pretty spectacular and I know it would not have been what it was without your help. The service
                    was first class all the way and everything we expected and more.
                    Our Sincere Thanks and we look forward to future business with you! ”
                </div>
                <div class="client">
                    <div class="quote blue-text">
                        <i class=" icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name">Ricarda & Leonard</a>
                        <div class="client-company">
                            <?php echo  CHtml::link(Yii::t('app','Havana & Tropicana '),Yii::app()->createUrl('tours/view',array('id'=>14))) ;?>
                        </div>
                    </div>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/ricarda.jpg', 'client',array("class"=>"img-circle"));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo Yii::t('app','Testimonials');?></h3>
            </div>
            <div class="panel-body" style="height: 327px;">
                <div class="message">
                    “  We enjoyed excellent email communication with Gloria while making plans for
                    our vacation, which resulted in a tour customized for our interests. We were
                    completely impressed by the level of organization and perfectly detailed plans
                    sent to us before departure, and this resulted in our vacation to Cuba being one
                    of the best we've ever had. We would definitely recommend Cubaoutings to anyone wishing to visit Cuba. .  ”
                </div>
                <div class="client">
                    <div class="quote yellow-text">
                        <i class="icon-comments"></i>
                    </div>
                    <div class="client-info">
                        <a href="" class="client-name">Phyllis Stewart</a>
                        <div class="client-company">
                            <?php echo  CHtml::link(Yii::t('app','Three cities tour'),Yii::app()->createUrl('tours/view',array('id'=>13))) ;?>
                        </div>
                    </div>
                    <div class="client-image hidden-xs">
                        <?php echo CHtml::image(Yii::app()->baseUrl . '/images/pic_comments/phyllis.jpg', 'client',array("class"=>"img-circle"));?>
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
    <h2 class="dark-text"><?php echo Yii::t('app','Photos')?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        <?php echo Yii::t('app','Some images of Cuba.'); ?>
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



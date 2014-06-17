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
                <h1>"Por una experiencia diferente."</h1>
                <!--<div id="social">
              <span>
                <iframe width="53" scrolling="0" height="20" frameborder="0" allowtransparency="true" src="http://ghbtns.com/github-btn.html?user=thomaspark&amp;repo=bootswatch&amp;type=fork" id="gh-fork"></iframe>
                <iframe width="110" scrolling="0" height="20" frameborder="0" allowtransparency="true" src="http://ghbtns.com/github-btn.html?user=thomaspark&amp;repo=bootswatch&amp;type=watch&amp;count=true" id="gh-star"></iframe>
              </span>
              <span>
                <iframe scrolling="no" frameborder="0" id="twitter-widget-1" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1399599786.html#_=1399901565779&amp;id=twitter-widget-1&amp;lang=en&amp;screen_name=thomashpark&amp;show_count=false&amp;show_screen_name=true&amp;size=m" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 148px; height: 20px;"></iframe>
                <iframe scrolling="no" frameborder="0" id="twitter-widget-0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1399599786.html#_=1399901565777&amp;count=horizontal&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fbootswatch.com%2F&amp;size=m&amp;text=Bootswatch%3A%20Free%20themes%20for%20Bootstrap&amp;url=http%3A%2F%2Fbootswatch.com&amp;via=thomashpark" class="twitter-share-button twitter-tweet-button twitter-share-button twitter-count-horizontal" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 109px; height: 20px;"></iframe>
              </span>
                </div>-->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div style="background-color: rgba(0, 0, 0, 0.4);" class="well sponsor">
                            <!--<a target="_blank" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'treehouse']);" href="#">
                <span style="float: left; margin-right: 15px;">
                  <img width="175" height="135" onload="_gaq.push(['_trackEvent', 'banner', 'impression', 'treehouse']);" src="#" class="ivbdpqnjibtcvgttxxgd">
                </span>
                            </a>-->
                            <a target="_blank" rel="nofollow" onclick="_gaq.push(['_trackEvent', 'banner', 'click', 'treehouse']);" href="#">
                                <h4 style="margin-bottom: 0.4em;">Treehouse</h4>
                                <div class="clearfix">
                                    <p>Learn Web Design, Coding, Mobile App Development &amp; More.</p>
                                    <p>Start Learning for Free!</p>
                                </div>
                            </a>
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
         <h2 class="dark-text">Excursiones</h2>

         <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
        <h6>
             Tenemos interesantes opciones,deberias echar un vistazo.
        </h6>
    </div>
<div class="tour-list">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/banner1.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3>Cayo Largo</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-primary" href="#">Action</a>
                        <a class="btn" href="#">Action</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/capitolio-habana-5.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3>La Habana</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-primary" href="#">Action</a>
                        <a class="btn" href="#">Action</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/banner2.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
                <div class="caption">
                    <h3>Varadero</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p>
                        <a class="btn btn-primary" href="#">Action</a>
                        <a class="btn" href="#">Action</a>
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
    <h2 class="dark-text">Testimonios</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Tenemos cientos de usuarios complacidos con nuestro trabajo,puede leer algunos testimonios.
    </h6>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Panel info</h3>
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
                <h3 class="panel-title">Panel info</h3>
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
                <h3 class="panel-title">Panel info</h3>
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
<!--SECTION ABOUT -->
<div class="section-header">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Sobre Cubaotings</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Conozca todo sobre nosotros.
    </h6>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="about-info ">
            <div class="quote-about">
                <i class="icon-home"></i>
            </div>
            <div class="about-text">
                <h6>ALOJAMIENTO</h6>
                <p class="text">Brindamos ofertas de alojamiento en todo el pais</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="about-info ">
            <div class="quote-about">
                <i class="icon-picture green-text"></i>
            </div>
            <div class="about-text">
                <h6>GALERIAS</h6>
                <p class="text">Brindamos ofertas de alojamiento en todo el pais</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="about-info ">
            <div class="quote-about blue-text">
                <i class="icon-plane"></i>
            </div>
            <div class="about-text">
                <h6>RECORIDOS</h6>
                <p class="text">Brindamos ofertas de viaje en todo el pais</p>
            </div>
        </div>
    </div>
</div>
<hr class="featurette-divider">
<!--SECTION PORTOFOLIO -->
<div class="section-header">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">GALERIAS</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Las mejores imagenes de Cuba.
    </h6>
</div>
<div class="tour-list">
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/32.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
             </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/3.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
             </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/36.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/27.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/44.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="thumbnail">
                <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/22.jpg', 'alt 1',array("style"=>"height: 180px, width: 100%",'class'=>'img-rounded'));?>
            </div>
        </div>
    </div>

</div>

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style=" padding-top: 50px;">
    <div class="modal-dialog modal-lg">
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
            $('#myModal').on('shown.bs.modal', function(){
                $('#myModal .modal-body').html(img);
            });
            $('#myModal').on('hidden.bs.modal', function(){
                $('#myModal .modal-body').html('');
            });
        });
    })

</script>



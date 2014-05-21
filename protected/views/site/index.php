<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<section id="property-carousel">
            <div class="container-fluid">
                <div class="row">
                    <div class="property-main-slider">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div id="carousel" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">

                                    <div class="item active">
                                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Market.png" alt="...">
                                        <div class="carousel-caption">

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<!--<p>You may change the content of this page by modifying the following two files:</p>-->
<!--<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>-->
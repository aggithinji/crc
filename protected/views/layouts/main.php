<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

        <!-- blueprint CSS framework -->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" media="screen, projection" />

        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                            </div>
                            <div class="collapse navbar-collapse" id="collapse">

                                <?php
                                $this->widget('zii.widgets.CMenu', array(
                                    'htmlOptions' => array(
                                        'id' => 'ssss',
                                        'class' => 'nav navbar-nav navbar-left'
                                    ),
                                    'items' => array(
                                        array('label' => 'Home', 'url' => array('/site/index')),
                                        array('label' => 'Markets', 'url' => array('/market')),
                                        array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                                        array('label' => 'Contact', 'url' => array('/site/contact')),
                                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                                    ),
                                ));
                                ?>                                

                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#" class="btn btn-flat-info">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-flat-warning">
                                            Sign Up
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>


        <div class="container" id="page">
            <!--
                        <div id="header">
                            <div id="logo"><?php //echo CHtml::encode(Yii::app()->name);   ?></div>
                        </div><!-- header -->

            <!--            <div id="mainmenu">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => 'Home', 'url' => array('/site/index')),
                    array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
                    array('label' => 'Contact', 'url' => array('/site/contact')),
                    array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                ),
            ));
            ?>
                        </div> mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>



        </div><!-- page -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>js/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/library/jquery/jquery.min.js">\x3C/script>');</script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min(1).js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-latest.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/thumbscrubber.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.filmstrip.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js" type="text/javascript"></script>
        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> <a href="http://kikosi.co.ke" target="_blank">Kikosi Limited</a>.<br/>
            All Rights Reserved.<br/>
            <?php //echo Yii::powered(); ?>
        </div><!-- footer -->
    </body>
</html>

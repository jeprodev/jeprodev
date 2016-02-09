<?php
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$user = JFactory::getUser();
$this->language = $doc->language;
$this->direction = $doc->direction;

/** template wrapper style classes **/
$jeprodevContentWrapperClasses = 'col-lg-12 col-md-12 center-block';
$jeprodevLeftContentWrapperClasses = ($this->countModules('position-9') || $this->countModules('position-10')) ? 'col-lg-10 col-md-10 col-sm-12 col-xs-12 pull-left' : 'col-lg-12 col-md-12 col-xs-12 col-sm-12';
$jeprodevArticleSliderWrapperClass = 'col-lg-12 col-md-12';
$jeprodevMainContentWrapperClasses = 'col-lg-12 col-md-12';
$jeprodevLeftContentColumnWrapperClasses = ($this->countModules('position-5') || $this->countModules('position-6')) ? 'col-lg-3 col-md-3 col-sm-3 pull-left' : 'col-md-0 col-lg-0';
$jeprodevMainContentDataClass = ($this->countModules('position-5') || $this->countModules('position-6')) ? 'col-lg-9 col-md-9 col-sm-9 pull-left' : 'col-lg-12 col-md-12';
$jeprodevRightContentWrapperClasses = ($this->countModules('position-9') || $this->countModules('position-10')) ? 'col-lg-2 col-md-2 col-sm-0 col-xs-0 hidden-sm col-xs-12 pull-right' : 'hidden-sm visible-xs col-sm-0 col-xs-12 col-lg-0 col-md-0';
$jeprodevFooterWrapperClasses = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
$jeprodevDebugWrapperClasses = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';

JHtml::_('bootstrap.framework');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <jdoc:include type="head" />
        <link rel="stylesheet" href="<?php echo JURI::base() . 'templates/' . $this->template . '/css/jeprodev.css'; ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo JURI::base(); ?>templates/<?php echo $this->template; ?>/css/bootstrap.css" type="text/css" />
        <?php
        if($this->params->get('jeprodev_template_use_latex', 1)){ ?>
            <script type="text/javascript" src="https://latex.codecogs.com/latexit.js"></script>
        <?php } ?>
    </head>
    <body class="background" >
        <div id="top-menu-bar" class="row" ></div>
        <div id="page-wrapper" class="row">
            <div class="page-content-wrapper <?php echo $jeprodevContentWrapperClasses; ?>">
                <div id="jeprodev-left-column-wrapper" >
                    <div id="jeprodev-slider-container" ></div>
                    <div id="jeprodev-content-container" >
                        <?php if($this->countModules('position-5') || $this->countModules('position-6')){ ?>
                        <div id="jeprodev-main-content-left-column" >
                            <jdoc:include type="modules" name="position-5" style="none" />
                            <jdoc:include type="modules" name="position-6" style="none" />
                        </div>
                        <?php } ?>
                        <div id="jeprodev-main-content-main-column" >
                            <?php if($menu->getActive() == $menu->getDefault()){ ?>
                                <jdoc:include type="modules" name="position-7" style="none" />
                                <jdoc:include type="modules" name="position-8" style="none" />
                            <?php } else { ?>
                                <jdoc:include type="message" />
                                <jdoc:include type="component" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php if($this->countModules('position-9') || $this->countModules('position-10')){ ?>
                <div id="jeprodev-right-column-wrapper" >
                    <jdoc:include type="modules" name="position-9" style="none" />
                    <jdoc:include type="modules" name="position-10" style="none" />
                </div>
                <?php } ?>
            </div>
        </div>
        <div id="footer-wrapper" class="row">

        </div>
    </body>
</html>
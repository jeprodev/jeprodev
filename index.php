<?php
/**
 * @version     1.0.4
 * @package     Templates
 * @subpackage  jeprodev
 * @link        http://jeprodev.net
 * @copyright   (C) 2009 - 2011
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of,
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$menu = $app->getMenu();
$user = JFactory::getUser();
$this->language = $doc->language;
$this->direction = $doc->direction;

$jeprodevLeftContentWrapper = ($this->countModules('position-9') || $this->countModules('position-10')) ? 'jeprodev_left_content_wrapper' : 'jeprodev_left_content_wrapper_empty';
$jeprodevRightContentWrapper = ($this->countModules('position-9') || $this->countModules('position-10')) ? 'jeprodev_right_content_wrapper' : 'jeprodev_right_content_wrapper_empty';
$jeprodevArticleSlider = ($this->countModules('position-4')) ? 'jeprodev_article_slider' : 'jeprodev_article_slider_empty';
$jeprodevLeftContent = ($this->countModules('position-5') || $this->countModules('position-6')) ? 'jeprodev_left_content': 'jeprodev_left_content_empty';
$jeprodevMainContent = ($this->countModules('position-5') || $this->countModules('position-6')) ? 'jeprodev_main_content_part': 'jeprodev_main_content_full';
$pageWidth = $this->params->get('jeprodev_template_width') . 'px;';
$leftColumnWidth = ($this->countModules('position-5') || $this->countModules('position-6')) ? $this->params->get('jeprodev_template_left_column_width', 175) : 0;
$rightColumnWidth = ($this->countModules('position-9') || $this->countModules('position-10')) ? $this->params->get('jeprodev_template_right_column_width', 175) : 0;
$mainContentWidth = ($pageWidth - $leftColumnWidth - $rightColumnWidth -4) . 'px;';
$logoPath = JURI::base() . 'templates/' .$this->template . '/images/' . $this->params->get('jeprodev-logo', 'logo_40.png');

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
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <?php
        if($this->params->get('jeprodev_template_use_latex', 1)){ ?>
            <script type="text/javascript" src="https://latex.codecogs.com/latexit.js"></script>
        <?php } ?>
    </head>
    <body class="background" >
        <div id="page-wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" >
                <div class="container" >
                    <div class="col-lg-2" id="jeprodev-logo-wrapper" >
                        <span id="jeprodev-logo-img-wrapper" class="pull-left col-lg-3" ><img src="<?php echo $logoPath; ?>"  /></span>
                        <span class="site-name pull-right col-lg-8" >
                            <h2>Jeprodev</h2>
                            <span>Technologies</span>
                        </span>
                    </div>
                    <div class="col-lg-10" id="jeprodev-menu-wrapper" >
                        <?php if ($this->countModules('position-2')){ ?>
                            <div id="jeprodev_menu_wrapper" class="col-lg-12">
                                <jdoc:include type="modules" name="position-2" style="none" />
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </nav>
            <div class="row" role="main" id="jeprodev-main">
                <div class="container" style="margin-top: 20px;">
                    <div class="page-content-wrapper <?php echo $jeprodevContentWrapperClasses; ?>">
                        <div id="jeprodev-left-column-wrapper" class="<?php echo $jeprodevLeftContentWrapperClasses; ?>">
                            <div id="jeprodev-slider-container" class="<?php echo $jeprodevArticleSliderWrapperClass; ?>" ></div>
                            <div id="jeprodev-content-container" class="<?php echo $jeprodevMainContentWrapperClasses; ?>" >
                                <?php if($this->countModules('position-5') || $this->countModules('position-6')){ ?>
                                <div id="jeprodev-main-content-left-column" class="<?php echo $jeprodevLeftContentColumnWrapperClasses; ?>" >
                                    <jdoc:include type="modules" name="position-5" style="none" />
                                    <jdoc:include type="modules" name="position-6" style="none" />
                                </div>
                                <?php } ?>
                                <div id="jeprodev-main-content-main-column" class="<?php echo $jeprodevMainContentDataClass; ?>">
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
                        <div id="jeprodev-right-column-wrapper" class="<?php echo $jeprodevRightContentWrapperClasses; ?>" style="border:1px solid red;">
                            <jdoc:include type="modules" name="position-9" style="none" />
                            <jdoc:include type="modules" name="position-10" style="none" />
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div id="footer-wrapper" class="row">
                <div id="footer-content-wrapper" class="container">
                    <div class="clearfix" ></div>
                    <div id="jeprodev_foot_wrapper" class="col-lg-12" >
                        <jdoc:include type="modules" name="position-11" style="none" />
                    </div>
                    <div id="jeprodev_debug" class="col-lg-12" >
                        <jdoc:include type="modules" name="debug" style="none" />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
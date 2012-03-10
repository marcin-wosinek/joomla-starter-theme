<?php
/**
 * @package    Joomla.Site
 * @copyright  Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
	<meta charset="<?php echo $this->_charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
  <jdoc:include type="head" />

	<meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- The following line loads the template CSS file located in the template folder. -->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css">

	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/modernizr-2.0.6.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
</head>

<body>

	<div id="header-container">
		<header class="wrapper clearfix">
      <jdoc:include type="modules" name="header" style="xhtml" />
		</header>
	</div>
	
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
      <?php if($this->countModules('sidebar')) : ?>
        <aside>
          <jdoc:include type="modules" name="sidebar" style="xhtml" />
        </aside>
      <?php endif; ?>
      <section>
        <?php if($this->countModules('top')) : ?>
          <div id="top">
            <jdoc:include type="modules" name="top" style="xhtml" />
          </div>
        <?php endif; ?>
        <jdoc:include type="message" />
        <jdoc:include type="component" />
        <?php if($this->countModules('bottom')) : ?>
          <div id="bottom">
            <jdoc:include type="modules" name="bottom" style="xhtml" />
          </div>
        <?php endif; ?>
      </section>
		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper">
      <jdoc:include type="modules" name="footer" style="xhtml" />
		</footer>
	</div>

</body>
</html>

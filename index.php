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
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
  <head>
    <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
    <jdoc:include type="head" />

    <!-- The following line loads the template CSS file located in the template folder. -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

    <!-- The following line loads the template JavaScript file located in the template folder. It's blank by default. -->
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template.js"></script>
  </head>
  <body>
    <div id="body">
      <div id="header">
        <jdoc:include type="modules" name="header" style="xhtml" />
      </div>
      <div id="main">
        <div id="main-top">
          <jdoc:include type="modules" name="main-top" style="xhtml" />
        </div>
        <div id="main-center">
          <?php if($this->countModules('main-center-left')) : ?>
            <jdoc:include type="modules" name="main-center-left" style="xhtml" />
          <?php endif; ?>
          <jdoc:include type="message" />
          <jdoc:include type="component" />
          <?php if($this->countModules('main-center-right')) : ?>
            <jdoc:include type="modules" name="main-center-right" style="xhtml" />
          <?php endif; ?>
        </div>
        <div id="main-bottom">
          <jdoc:include type="modules" name="main-bottom" style="xhtml" />
        </div>
      </div>
      <div id="footer">
        <jdoc:include type="modules" name="footer" style="xhtml" />
      </div>
    </div>
  </body>
</html>

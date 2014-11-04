<?php
defined('_JEXEC') or die; //to stop direct access

JLoader::import('joomla.filesystem.file');
JFactory::getDocument()->setGenerator('');
JHtml::_('jquery.framework'); //pulls in jquery 1.8.1
JHtml::_('bootstrap.loadCss', true, $this->direction);


//$app = JFactory::getApplication();
$doc = JFactory::getDocument();

// Add Scripts
$doc->addScript('templates/' .$this->template. '/js/offCanvasNav.js');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/normalize.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/main.css');

$doc->addStyleSheet('templates/'.$this->template.'/css/1_resOvr_768-959.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/2_resOvr_600-767.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/3_resOvr_480-599.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/4_resOvr_320-479.css');


// Add current user information
$user = JFactory::getUser();




// Change width of main content area
if($this->countModules('sidebarLeft and sidebarRight') == 0) $contentwidth = "w100";
if($this->countModules('sidebarLeft or sidebarRight') == 1) $contentwidth = "w75";
if($this->countModules('sidebarLeft and sidebarRight') == 1) $contentwidth = "w50";

//CREATE A UNIQUE *ID* FOR THE BODY TAG
// Get the menu item ID, then create a class to add to the body tag
$itemid = JRequest::getVar('Itemid');
$pageclass = 'pageOverride-' . $itemid;
?>





<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
	<!-- Needed for Responsive to work ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="format-detection" content="telephone=no"><!-- stops ipad/iphone converting phone numbers -->	
  
	<jdoc:include type="head" />
    <!-- Pulls in Font-Awesome from a CDN -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css" type="text/css" />
  
</head>


<body id="<?php echo $pageclass ? htmlspecialchars($pageclass) : 'default'; ?>">

<?php if($this->countModules('slidein-left')) : ?>
    <div class="slidein left">
		<jdoc:include type="modules" name="slidein-left" style="xhtml" />
        <div class="clear"></div>
    </div>
<?php endif; ?>
  
<?php if($this->countModules('slidein-right')) : ?>
    <div class="slidein right">
		<jdoc:include type="modules" name="slidein-right" style="xhtml" />
        <div class="clear"></div>
    </div>
<?php endif; ?>  

<?php if($this->countModules('slidein-bottom')) : ?>
    <div class="slidein bottom">
		<jdoc:include type="modules" name="slidein-bottom" style="xhtml" />
        <div class="clear"></div>
    </div>
<?php endif; ?>







  
  
<div id="outerWrapper">
<div class="mainPageWrapper" id="mainWrapper">

<div id="header" class="clearfix">
<div id="offCanvasNavButtonWrapper"><div id="offCanvasNavButton"><i class="fa fa-list-ul"></i> Navigation</div></div>
  
  <?php if($this->countModules('header-left')) : ?>
    <div class="moduleLeft">
		<jdoc:include type="modules" name="header-left" style="xhtml" />
        <div class="clear"></div>
    </div>
<?php endif; ?>
	
<?php if($this->countModules('header-right')) : ?>
    <div class="moduleRight">
		<jdoc:include type="modules" name="header-right" style="xhtml" />
        <div class="clear"></div>
    </div>
<?php endif; ?>
	

</div><!-- end of header -->

<?php if($this->countModules('mainNavigation')) : ?>
		<jdoc:include type="modules" name="mainNavigation" style="xhtml" />  
        <div class="clear"></div>
<?php endif; ?>



<?php if($this->countModules('banner')) : ?>
<div class="banner">
	<jdoc:include type="modules" name="banner" style="xhtml" />
    <div class="clear"></div>
</div>
<?php endif; ?>

<?php if($this->countModules('breadcrumbs')) : ?>
	<div id="breadcrumbsTop"><jdoc:include type="modules" name="breadcrumbs" style="xhtml" /></div>
<?php endif; ?>

<!-- Left Sidebar Content area -->
<?php if($this->countModules('sidebarLeft')) : ?>
	<div class="moduleLeft sidebar"><jdoc:include type="modules" name="sidebarLeft" style="xhtml" /></div>
<?php endif; ?>

<!-- Main Content area -->
<div class="mainContentWrapper <?php echo $contentwidth ?>">
	<jdoc:include type="message" />
	<jdoc:include type="modules" name="moduleBeforeContent" style="xhtml" />
    <jdoc:include type="component" />

    <jdoc:include type="modules" name="moduleInContent" style="xhtml" />
</div> <!-- End of Component -->

<!-- Right Sidebar Content area -->
<?php if($this->countModules('sidebarRight')) : ?>
	<div class="moduleRight sidebar"><jdoc:include type="modules" name="sidebarRight" style="xhtml" /></div>
<?php endif; ?>

<?php if($this->countModules('footer')) : ?>
<div id="footer">
    <jdoc:include type="modules" name="footer" style="xhtml" />
    <div class="clear"></div>
</div><!-- End of footer --> 
<?php endif; ?>

<div class="clear"></div>
</div><!-- End of mainWrapper -->
 

<div id="extraFooterInfo">
<?php if($this->countModules('extraFooterInfo-left')) : ?>
	<div class="moduleLeft">
		<jdoc:include type="modules" name="extraFooterInfo-left" style="xhtml" />
        <div class="clear"></div>
	</div>
<?php endif; ?>


<?php if($this->countModules('extraFooterInfo-right')) : ?>
    <div class="moduleRight">
        <jdoc:include type="modules" name="extraFooterInfo-right" style="xhtml" />
        <div class="clear"></div>  
    </div>
<?php endif; ?>
<div class="clear"></div>
</div><!-- End of extraFooterInfo --> 
 
 


 
</div><!-- END of outerWrapper -->

</body>
</html>
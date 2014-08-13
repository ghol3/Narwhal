<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.66334600 1405460691";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:89:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/@layout.latte";i:2;i:1405445800;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'vwv0t1tlyc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb8e11a4cc7a_head')) { function _lb8e11a4cc7a_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lba22615e5c8_title')) { function _lba22615e5c8_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block _cart
//
if (!function_exists($_l->blocks['_cart'][] = '_lb01391b7107__cart')) { function _lb01391b7107__cart($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('cart', FALSE)
?>            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                <div class="topmenu">
                    <?php $countp = count($cart->getProducts())?>
                    <span class="topbar-cart"><i class="fa fa-shopping-cart"></i> <a href="<?php echo htmlSpecialChars($_control->link("Homepage:cart")) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($countp, ENT_NOQUOTES) ?> <?php if ($countp == 0) { ?>
 produktov <?php } elseif ($countp == 1) { ?> produkt <?php } elseif ($countp == 2 || $countp == 3) { ?>
 produty <?php } else { ?> produktov<?php } ?> - <?php echo Nette\Templating\Helpers::escapeHtml($template->number($cart->getTotalPrice(true), 2), ENT_NOQUOTES) ?> €</a></span>
                </div><!-- end top menu -->
            	<div class="callus">
                    <span class="topbar-email"><i class="fa fa-envelope"></i> <a href="mailto:name@yoursite.com"><?php echo Nette\Templating\Helpers::escapeHtml($settings->site_email, ENT_NOQUOTES) ?></a></span>
                    <span class="topbar-phone"><i class="fa fa-phone"></i> <?php echo Nette\Templating\Helpers::escapeHtml($settings->phone, ENT_NOQUOTES) ?></span>
                </div><!-- end callus -->
            </div><!-- end columns -->
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb327580e218_content')) { function _lb327580e218_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <META http-equiv="cache-control" content="no-cache">
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/netteForms.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/ajax.js"></script>
    <?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

    <script>
        $(document).ready(function (){
            $("#totop").click(function (){
                $('html, body').animate({
                    scrollTop: $("#topbar").offset().top
                }, 500);
            });
        });
    </script>
    <title><?php ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlSpecialChars($settings->sitedescription) ?>">
    <meta name="keywords" content="<?php echo htmlSpecialChars($settings->keywords) ?>">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Томас Петр">
    
    <style>
        .headerDivider {
            border-right:1px solid white; 
            height:80px;
            display: inline;
        }
    </style>

    <!-- Bootstrap Styles -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/bootstrap.css" rel="stylesheet">
  
    <!-- Styles -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/style.css" rel="stylesheet">
  
    <!-- Carousel Slider -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/owl-carousel.css" rel="stylesheet">
  
    <!-- CSS Animations -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/animate.min.css" rel="stylesheet">
 
    <!-- SLIDER ROYAL CSS SETTINGS -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/royalslider/royalslider.css" rel="stylesheet">
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
  
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/frontend/rs-plugin/css/settings.css" media="screen">
        
    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->
    <!-- Main Scripts-->
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/menu.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery.simple-text-rotator.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/wow.min.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/custom.js"></script>
    
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/custom-portfolio-masonry.js"></script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript">
	var revapi;
	jQuery(document).ready(function() {
    revapi = jQuery('.tp-banner').revolution(
    {
    delay:9000,
    startwidth:1170,
    startheight:500,
    hideThumbs:10,
    fullWidth:"on",
    forceFullWidth:"on"
    });
	});	//ready
    </script>
    
    <!-- Fullwidth Video Div  -->
    <script type="text/javascript" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/libs/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/libs/modernizr.video.js"></script>
    <script type="text/javascript" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/video_background.js"></script>
    
    <script>
	jQuery(document).ready(function($) {
    var Video_back = new video_background($("#videobgfull"), {
    "position": "absolute",	//Stick within the div
    "z-index": "-1",		//Behind everything
    "loop": true, 			//Loop when it reaches the end
    "autoplay": true,		//Autoplay at start
    "muted": true,			//Muted at start
    "youtube": "hT6eSm-UhiM",	//Youtube video id
    "start": 5,					//Start with 6 seconds offset (to pass the introduction in this case for example)
    "video_ratio": 1.7778, 		// width/height -> If none provided sizing of the video is set to adjust
    "fallback_image": "videos/main.jpg",	//Fallback image path
    });
	});
    </script>
</head>
<body>
    <div class="animationload">
        <div class="loader">Načítanie...</div>
    </div>
	<div id="topbar" class="clearfix">
    	<div class="container">
            <div class="col-lg-6">
                <div class="social-icons">
                    <span class="topbar-email"><?php echo Nette\Templating\Helpers::escapeHtml($settings->sitename, ENT_NOQUOTES) ?></span>
                </div><!-- end social icons -->
            </div><!-- end columns -->
<div id="<?php echo $_control->getSnippetId('cart') ?>"><?php call_user_func(reset($_l->blocks['_cart']), $_l, $template->getParameters()) ?>
</div>        </div><!-- end container -->
    </div>
    
    <header id="header-style-1">
        <div class="container">
            <div class="navbar yamm navbar-default">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>
"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/frontend/logo/logo.png" width="181" alt="logo"></a>
        	</div><!-- end navbar-header -->
                
		<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right collapse in">
                    <ul class="nav navbar-nav">  
<?php $iterations = 0; foreach ($menu as $menuItem) { ?>
                            
<?php if (count($menuItem->submenus) == 0) { ?>
                                    <li class="dropdown yamm-fw">
<?php if ($menuItem->link == 'homepage') { ?>
                                        <a title="<?php echo htmlSpecialChars($menuItem->description) ?>
" href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } elseif ($menuItem->url) { ?>
                                        <a title="<?php echo htmlSpecialChars($menuItem->description) ?>
" href="<?php echo htmlSpecialChars($_control->link($menuItem->url, array($menuItem->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } else { ?>
                                        <a href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($menuItem->link)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } ?>
                                    </li>
<?php } else { ?>
                                    <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?><div class="arrow-up"></div></a>
                                    <ul class="dropdown-menu" role="menu">
<?php $iterations = 0; foreach ($menuItem->submenus as $sub) { ?>
                                            <li>
<?php if ($sub->link == 'homepage') { ?>
                                                    <a title="<?php echo htmlSpecialChars($sub->description) ?>
" href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($sub->name, ENT_NOQUOTES) ?></a>
<?php } elseif ($sub->url) { ?>
                                                    <a title="<?php echo htmlSpecialChars($sub->description) ?>
" href="<?php echo htmlSpecialChars($_control->link($sub->url, array($sub->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($sub->name, ENT_NOQUOTES) ?></a>
<?php } else { ?>
                                                    <a href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($sub->link)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($sub->name, ENT_NOQUOTES) ?></a>
<?php } ?>
                                            </li>
<?php $iterations++; } ?>
                                    </ul>
                                    </li>
<?php } $iterations++; } ?>

                        
                    </ul><!-- end navbar-nav -->
		</div><!-- #navbar-collapse-1 -->
            </div><!-- end navbar yamm navbar-default -->
	</div><!-- end container -->
    </header><!-- end header-style-1 -->
    <?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

	<footer id="footer-style-1">
    	<div class="container">
            <div align="left" style="color:#c3c3c3"><?php echo Nette\Templating\Helpers::escapeHtml($settings->sitename, ENT_NOQUOTES) ?></div>
            <br>
            <table width="98%">
                <tr>
                    <td style="float:left;display:block;">
                        <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/frontend/logo/logo_genevo.png" alt="logo" class="footer-logo-left-top"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/frontend/logo/logo_escort.png" class="footer-logo-right-top"><br><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/frontend/logo/logo_blinder.png" class="footer-logo-left-bottom"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/frontend/logo/logo_beltronics.png" class="footer-logo-right-bottom">
                    </td>
                    <td style="float:right;text-align:right;">
                        <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/frontend/provozovna.jpg" alt="logo" width="300"><br><br>
                        <span style="color:#c3c3c3;font-size:20px;">Naša prevádzka v Bratislave</span><br>
                        <span style="color:#c3c3c3;font-size:15px;">Domkárska 17, 821 05 Bratislava</span>
                    </td>
                </tr>
            </table>
        </div><!-- end columns -->
        </div><!-- end container -->
    </footer><!-- end #footer-style-1 -->
    
    <div id="copyrights">
    	<div class="container">
			<div class="col-lg-5 col-md-6 col-sm-12">
            	<div class="copyright-text">
                    <p>Copyright © 2014 - Antiradary.sk</p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">  
                                    <ul class="menu" align="right">
                                        
<?php $iterations = 0; foreach ($menu as $menuItem) { if (count($menuItem->getSubmenus()) == 0) { ?>
                                        <li>
<?php if ($menuItem->url) { ?>
                                                <a title="<?php echo htmlSpecialChars($menuItem->description) ?>
" href="<?php echo htmlSpecialChars($_control->link($menuItem->url, array($menuItem->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } else { ?>
                                                <a href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($menuItem->link)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } ?>
                                        </li>
<?php } $iterations++; } ?>
                                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop" id="totop">Scroll to Top</div>
  </body>
</html>
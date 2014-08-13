<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.66095000 1405348150";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:93:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/@layout.latte";i:2;i:1405348148;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ckn3prmgxs')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb7d24d74fb4_title')) { function _lb7d24d74fb4_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3be27dda38_content')) { function _lb3be27dda38_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/netteForms.js"></script>
    <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/ajax.js"></script>
    <script>
    $(document).ready(function (){
        $("#totop").click(function (){
            $('html, body').animate({
                scrollTop: $("#topbar").offset().top
            }, 500);
        });
    });
</script>
    <title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->upper($template->striptags(ob_get_clean()))  ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    
    <style>.headerDivider {
     border-left:1px solid white; 
     border-right:1px solid white; 
     height:80px;
     margin:0px;
}</style>

    <!-- Bootstrap Styles -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/bootstrap.css" rel="stylesheet">
  
    <!-- Styles -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/style.css" rel="stylesheet">
  
    <!-- Carousel Slider -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/owl-carousel.css" rel="stylesheet">
  
    <!-- CSS Animations -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/animate.min.css" rel="stylesheet">
    
  
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

    <!-- SLIDER ROYAL CSS SETTINGS -->
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/royalslider/royalslider.css" rel="stylesheet">
    <link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/royalslider/skins/default-inverted/rs-default-inverted.css" rel="stylesheet">
  
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/new/css/rs-plugin/css/settings.css" media="screen">
        
    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->
    <!-- Main Scripts-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.simple-text-rotator.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
    
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/custom-portfolio-masonry.js"></script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
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
    <script type="text/javascript" src="js/libs/swfobject.js"></script>
    <script type="text/javascript" src="js/libs/modernizr.video.js"></script>
    <script type="text/javascript" src="js/video_background.js"></script>
    
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
        <div class="loader">Loading...</div>
    </div>
	<div id="topbar" class="clearfix">
    	<div class="container">
            <div class="col-lg-5">
                <div class="social-icons">
                    <span class="topbar-email">Výhradný distributor Escort Radar, Genevo, Blinder pre Slovensko</span>
                </div><!-- end social icons -->
            </div><!-- end columns -->
            <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12">
                <div class="topmenu">
                    <span class="topbar-cart"><i class="fa"><img src='<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath), ENT_QUOTES) ?>/cart.png'></i> <a href="#">0 item - $0.00</a></span>
                </div><!-- end top menu -->
            	<div class="callus">
                    <span class="topbar-email"><i class="fa"><img src='<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath), ENT_QUOTES) ?>/mail.png'></i> <a href="mailto:name@yoursite.com">name@yoursite.com</a></span>
                    <span class="topbar-phone"><i class="fa"><img src='<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath), ENT_QUOTES) ?>/phone.png'></i> 1-900-324-5467</span>
                </div><!-- end callus -->
            </div><!-- end columns -->
        </div><!-- end container -->
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
                    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/logo.png" width="220">
        	</div><!-- end navbar-header -->
                
		<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right collapse in">
                    <ul class="nav navbar-nav">   
<?php $iterations = 0; foreach ($menu as $menuItem) { ?>
                            <li class="dropdown yamm-fw">
<?php if ($menuItem->url) { ?>
                                <a title="<?php echo htmlSpecialChars($menuItem->description) ?>
" href="<?php echo htmlSpecialChars($_control->link($menuItem->url, array($menuItem->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } else { ?>
                                <a href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($menuItem->link)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($menuItem->name, ENT_NOQUOTES) ?></a>
<?php } ?>
                            </li>
<?php $iterations++; } ?>
                    </ul><!-- end navbar-nav -->
		</div><!-- #navbar-collapse-1 -->
            </div><!-- end navbar yamm navbar-default -->
	</div><!-- end container -->
    </header><!-- end header-style-1 -->
	
    <div class="slider-wrapper">
    </div><!-- end slider-wrapper -->
    <?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

	<footer id="footer-style-1">
    	<div class="container">
            <div align="left">Výhradný distribútor Escort Radar, Genevo a Blinder pre Slovensko.</div>
            <br>
            <table width="100%">
                <tr>
                    <td style="float:left">
                        <span class="headerDivider"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/logo1.jpg"></span>
                        <span class="headerDivider"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/logo1.jpg"></span>
                        <span class="headerDivider"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/logo1.jpg"></span>
                    </td>
                    <td style="float:right;text-align:right;">
                        <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/logo2.jpg"><br>
                        <span style="color:gray;font-size:20px;">Naša prevádzka v Bratislave</span><br>
                        <span style="color:gray;font-size:15px;">Domkárska 17, 821 05 Bratislava</span>
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
                                    <ul class="menu">
<?php $iterations = 0; foreach ($menu as $menuItem) { ?>
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
<?php $iterations++; } ?>
                                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
    
	<div class="dmtop" id="totop">Scroll to Top</div>
  </body>
</html>
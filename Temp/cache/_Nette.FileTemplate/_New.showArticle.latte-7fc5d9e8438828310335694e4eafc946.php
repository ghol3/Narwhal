<?php //netteCache[01]000411a:2:{s:4:"time";s:21:"0.05673200 1405307145";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/showArticle.latte";i:2;i:1405189363;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/showArticle.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jinz2xj6dr')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb8844185ee0_content')) { function _lb8844185ee0_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?> <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="blog-masonry">
                        <div class="col-lg-12">
                            <div class="blog-carousel">
                                <div class="blog-carousel-header">
                                    <h1><?php echo Nette\Templating\Helpers::escapeHtml($article->title, ENT_NOQUOTES) ?></h1>
                                </div><!-- end blog-carousel-header -->
                                <div class="blog-carousel-desc">                             
					<blockquote><?php echo $article->description ?> </blockquote>
					<?php echo $article->content ?>

                                </div><!-- end blog-carousel-desc -->
                            </div><!-- end blog-carousel -->
                        </div><!-- end col-lg-12 -->
					</div><!-- end blog-masonry -->
            	</div><!-- end row --> 
            </div><!-- end content -->
            
                    <div id="sidebar" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="title"><h2>Kategorie</h2></div>
                            <ul class="nav nav-tabs nav-stacked">
<?php $iterations = 0; foreach ($categories as $ctg) { if ($ctg->name != '' || $ctg->link != '') { ?>
                                        <li><a href="<?php echo htmlSpecialChars($_control->link("Category:show", array($ctg->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($ctg->name, ENT_NOQUOTES) ?></a></li>
<?php } $iterations++; } ?>
                            </ul>                              
                        </div><!-- end widget -->
                        <div class="widget">
                            <div class="title"><h2>Zaujímavosti o antiradaroch</h2></div>
                            <ul class="nav nav-tabs nav-stacked">
<?php $iterations = 0; foreach ($rarticles as $rartc) { if ($rartc->title != '' || $rartc->link != '') { ?>
                                        <li><a href="<?php echo htmlSpecialChars($_control->link("New:showArticle", array($rartc->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($rartc->title, ENT_NOQUOTES) ?></a></li>
<?php } $iterations++; } ?>
                            </ul>                              
                        </div><!-- end widget -->

                    </div><!-- end left-sidebar -->
                    
    	</div><!-- end container -->
    </section>
<?php
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
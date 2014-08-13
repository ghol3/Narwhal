<?php //netteCache[01]000409a:2:{s:4:"time";s:21:"0.83087200 1405422934";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:95:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/Category/show.latte";i:2;i:1405422874;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/Category/show.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'r4ityacwvf')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb71c796db98_title')) { function _lb71c796db98_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;echo Nette\Templating\Helpers::escapeHtml($settings->title, ENT_NOQUOTES) ?> | <?php echo Nette\Templating\Helpers::escapeHtml($category->name, ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb9c145a3e3_content')) { function _lbb9c145a3e3_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2><?php echo Nette\Templating\Helpers::escapeHtml($category->name, ENT_NOQUOTES) ?></h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Hlavná</a></li>
                    <li><?php echo Nette\Templating\Helpers::escapeHtml($category->name, ENT_NOQUOTES) ?></li>
                </ul>
			</div>
		</div>
	</section>
<section class="blog-wrapper">
		<div class="container">
            <div class="shop_wrapper col-lg-8 col-md-8 col-sm-10 col-xs-10">
                
                <div class="clearfix"></div>
                
                <div class="padding-top">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($products) as $product) { ?>
                    <div<?php if ($_l->tmp = array_filter(array($iterator->first ? 'col-lg-6 col-md-6 col-sm-6 col-xs-12 first' : 'col-lg-6 col-md-6 col-sm-6 col-xs-12'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
                        <div class="shop_item">
                            <div class="entry">
                                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($product->image)) ?>" alt="" class="img-responsive" style="height:330px;">
                                <div class="magnifier">
                                    <div class="buttons">
                                        <a class="st btn btn-default" rel="bookmark" href="<?php echo htmlSpecialChars($_control->link("Product:show", array($product->link))) ?>">Detail produktu</a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div><!-- end entry -->
                            <div class="shop_desc">
                                <div class="shop_title pull-left">
                                    <a href="<?php echo htmlSpecialChars($_control->link("Product:show", array($product->link))) ?>
"><span><?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></span></a>
                                    <span class="cats"><a href="<?php echo htmlSpecialChars($_control->link("Product:show", array($product->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($product->description, ENT_NOQUOTES) ?></a></span>
                                </div>
                                <span class="price pull-right">
                                    <?php echo Nette\Templating\Helpers::escapeHtml($template->number($product->pricedph, 2), ENT_NOQUOTES) ?> €
                                </span>
                            </div><!-- end shop_desc -->
                        </div><!-- end item -->
                    </div><!-- end col-lg-3 -->
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
    
                    
    
                    
                    <div class="clearfix"></div>
                    <hr>
                    
                </div><!-- end padding-top -->
            </div><!-- end shop-wrapper -->
            
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
                                        <li><a href="<?php echo htmlSpecialChars($_control->link("Article:show", array($rartc->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($rartc->title, ENT_NOQUOTES) ?></a></li>
<?php } $iterations++; } ?>
                            </ul>                              
                        </div><!-- end widget -->
            </div><!-- end sidebar -->
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
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
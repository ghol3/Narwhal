<?php //netteCache[01]000411a:2:{s:4:"time";s:21:"0.99637000 1405346567";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/showproduct.latte";i:2;i:1405346565;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/showproduct.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'mueki1ds8x')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbfcc5088e8f_content')) { function _lbfcc5088e8f_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <section class="post-wrapper-top jt-shadow clearfix">
	<div class="container">
            <div class="col-lg-12">
		<h2><?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo htmlSpecialChars($_control->link("New:showCategory", array($product->getCategoryObject()->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($product->getCategoryObject()->name, ENT_NOQUOTES) ?></a></li>
                    <li><?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></li>
                </ul>
            </div>
	</div>
    </section>
    <section class="blog-wrapper">
        <div class="container">
            <div class="shop_wrapper col-lg-9 col-md-9 col-sm-12 col-xs-12">
            	<div class="general_row">
                    <div class="shop-left shop_item col-lg-6">
                    	<div class="entry">
                        	<img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($product->image)) ?>" alt="" class="img-responsive">
				<div class="magnifier">
                                    <div class="buttons">
                                        <a class="sg" rel="bookmark" href="shop-cart.html"><span class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/search.png"></span></a>
                                    </div>
				</div><!-- end magnifier -->
                        </div><!-- entry -->
                        
			<div class="thumbnails clearfix">
                            <?php $i = 0; $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($product->getImages()) as $image) { ?>
                                <?php if($i == 3) break ?>
                        	<div<?php if ($_l->tmp = array_filter(array($iterator->first ? 'first' : NULL, ($iterator->last - 1)  ? 'last' : NULL, 'entry'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
                            	<img class="img-responsive" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($image->image)) ?>" alt="">
                                <div class="magnifier">
                                    <div class="buttons">
					<a href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($image->image)) ?>
" class="sf" title="" data-gal="prettyPhoto[product-gallery]" rel="prettyPhoto[product-gallery]"><span class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/search.png"></span></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div>
                                    <?php $i++; $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                        </div>  
                    </div><!-- end shop-left -->
                    
                    <div class="shop-right col-lg-6">
                    
                    	<div class="title">
                        	<h2><?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></h2>
                            <div class="rating">
                            	<i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/star.png"></i>
                            	<i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/star.png"></i>
                            	<i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/star.png"></i>
                            	<i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/star.png"></i>
                            	<i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/star.png"></i>
                            </div><!-- rating -->
                            <span class="price">
                            	<?php echo Nette\Templating\Helpers::escapeHtml($template->number($product->pricedph, 2), ENT_NOQUOTES) ?> €
							</span>
                            <span class="compoare pull-right">
                            	<a href="#"></a>
							</span>                
                
                        </div><!-- end title -->
                        
                        <div class="shop_desc">
                        <p><?php echo $product->description ?></p>
                        </div><!-- end shop_desc -->
                        
                        <div class="shop_item_details">
                        	<div class="title">
                            	<h2>Detaily produktu</h2>
                        	</div><!-- end title -->
                            <ul>
                            	<li><strong>Kategorie:</strong> <?php echo Nette\Templating\Helpers::escapeHtml($product->getCategoryObject()->name, ENT_NOQUOTES) ?></li>
                            	<li><strong>Značka:</strong> ...</li>
                            	<li><strong>Dostupnost:</strong> Skladem</li>
                            	<li><strong>Záruka:</strong> <?php echo Nette\Templating\Helpers::escapeHtml($product->warranty, ENT_NOQUOTES) ?></li>
                            </ul>
                        </div><!-- end shop_item_details -->
                        
                        <div class="shop_meta">
                        	<div class="pull-left">
                            	<div class="btn-shop">
                                    <form class="form-inline" role="form">
                                      <div class="form-group has-success has-feedback">
                                       	<span><i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/minus.png"></i></span>
                                        <input type="text" class="form-control">
                                        <span><i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/plus.png"></i></span>
                                      </div>
                                    </form>
                                </div> 
                            </div><!-- end pull-left -->
                            
                            <div class="pull-right">
                            	<div class="btn-shop">
                                    <a href="shop-cart.html" class="btn woo_btn btn-primary">Pridať do košíka</a> <a href="shop-cart.html"><span><i class="fa"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/mycart.png"></i></span></a>
                                </div>
                            </div><!-- end pull-right -->
                        </div><!-- end shop meta -->
                        
                    </div><!-- end shop-right -->
                </div><!-- end row -->
                
                <div class="clearfix"></div>
                
                <div class="general_row">
                    <div id="shop_features" class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active dm-icon-effect-1"><a href="#tab1" data-toggle="tab">Základní informace</a></li>
                            <li class="dm-icon-effect-1"><a href="#tab2" data-toggle="tab">Detaily</a></li>
                            <li class="dm-icon-effect-1"><a href="#tab3" data-toggle="tab">Parametry</a></li>
                            <li class="dm-icon-effect-1"><a href="#tab4" data-toggle="tab">Příslušenství</a></li>
                            <li class="dm-icon-effect-1"><a href="#tab5" data-toggle="tab">Verze produktu</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
               
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <?php echo $product->content ?>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <?php echo $product->detail ?>

                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <?php echo $product->params ?>

                                </div> <!-- end col-12 -->
                            </div>
                                <div class="tab-pane" id="tab4">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        ...
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab5">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        ....
                                    </div>
                                </div>
                        </div><!-- end tab-content -->
                    </div><!-- end tabbable -->
                </div><!-- end general_row -->
                
            </div><!-- end shop-wrapper -->
            
			<div id="sidebar" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            	<div class="widget">
                            <div class="title"><h2>Kategorie</h2></div>
                            <ul class="nav nav-tabs nav-stacked">
<?php $iterations = 0; foreach ($categories as $ctg) { if ($ctg->name != '' || $ctg->link != '') { ?>
                                        <li><a href="<?php echo htmlSpecialChars($_control->link("New:showCategory", array($ctg->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($ctg->name, ENT_NOQUOTES) ?></a></li>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
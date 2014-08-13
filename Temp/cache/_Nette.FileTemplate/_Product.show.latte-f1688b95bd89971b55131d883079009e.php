<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.39511600 1405460696";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/Product/show.latte";i:2;i:1405460681;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/Product/show.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '9o3iku0wtc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb9bbb998976_title')) { function _lb9bbb998976_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;echo Nette\Templating\Helpers::escapeHtml($settings->title, ENT_NOQUOTES) ?> | <?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2db9eaa825_content')) { function _lb2db9eaa825_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <section class="post-wrapper-top jt-shadow clearfix">
	<div class="container">
            <div class="col-lg-12">
		<h2><?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo htmlSpecialChars($_control->link("Category:show", array($product->getCategoryObject()->link))) ?>
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
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($product->image)) ?>" alt="" class="img-responsive" style="height:335px;">
				<div class="magnifier">
                                    <div class="buttons">
                                        <a class="sg" rel="bookmark" href="<?php echo htmlSpecialChars($_control->link("Homepage:cart")) ?>"><span class="fa fa-shopping-cart"></span></a>
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
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($image->image)) ?>" class="sf" title="" data-gal="prettyPhoto[product-gallery]" rel="prettyPhoto[product-gallery]"><span class="fa fa-search"></span></a>
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
                                <?php $static_i = 0; for ($i = 1; $i <= ($product->score / 2); $i++) { ?>
                                    <i class="fa fa-star"></i>
                                    <?php $static_i = $i; } if (($static_i * 2) < $product->score) { ?>
                                    <i class="fa fa-star-half"></i>
<?php } ?>
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
                            	<li><strong>Značka:</strong> <?php echo Nette\Templating\Helpers::escapeHtml($product->company, ENT_NOQUOTES) ?></li>
                            	<li><strong>Dostupnost:</strong> Skladem</li>
                            	<li><strong>Záruka:</strong> <?php echo Nette\Templating\Helpers::escapeHtml($product->warranty, ENT_NOQUOTES) ?></li>
                            </ul>
                        </div><!-- end shop_item_details -->
                        <form class="form-inline ajax"<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["addToCartForm"], array (
  'class' => NULL,
), FALSE) ?>>
                        <div class="shop_meta">
                        	<div class="pull-left">
                            	<div class="btn-shop">
                                      <div class="form-group has-success has-feedback">
                                       	 <span><i class="fa fa-minus" onclick="javascript:add(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($product->id)) ?>, -1);"></i></span>
                                        <input class="form-control" id="<?php echo htmlSpecialChars($product->id) ?>
"<?php $_input = $_form["stack"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'class' => NULL,
  'id' => NULL,
))->attributes() ?>>
                                        <input<?php $_input = $_form["product"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
                                        <span><i class="fa fa-plus" onclick="javascript:add(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($product->id)) ?>, 1);"></i></span>
                                      </div>
                                </div> 
                            </div><!-- end pull-left -->
                            
                            <div class="pull-right">
                            	<div class="btn-shop">
                                    <input class="btn woo_btn btn-primary" value="Pridať do košíka"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'class' => NULL,
  'value' => NULL,
))->attributes() ?>><a href="<?php echo htmlSpecialChars($_control->link("Homepage:cart")) ?>
"><span><i class="fa fa-shopping-cart"></i></span></a>
                                </div>
                            </div><!-- end pull-right -->
                        </div><!-- end shop meta -->
                        <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
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
                                        <label class="checkbox payment-method inline">
                                        <input type="checkbox" id="customCheck1" value="option1"> Direct Bank Transfer
                                        <span class="small">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</span>
                                </label>
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
                            <div class="title"><h4 style="font-size:25px;">Kategorie</h4></div>
                            <ul class="nav nav-tabs nav-stacked">
<?php $iterations = 0; foreach ($categories as $ctg) { if ($ctg->name != '' || $ctg->link != '') { ?>
                                        <li><a href="<?php echo htmlSpecialChars($_control->link("Category:show", array($ctg->link))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($template->truncate($ctg->name, 46), ENT_NOQUOTES) ?></a></li>
<?php } $iterations++; } ?>
                            </ul>                              
                        </div><!-- end widget -->
                
            </div><!-- end sidebar -->
		</div><!-- end container -->
	</section>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb6eb5d964eb_head')) { function _lb6eb5d964eb_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <script type="text/javascript">
            function add(n, x){
                var i = parseInt($('#' + n).val());
                i += x;
                if(i < 0){
                    i = 0;
                }
                $('#' + n).val(i);
            }
            
    </script>
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


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 
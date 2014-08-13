<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.08251900 1405334091";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:96:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Export/default.latte";i:2;i:1405333656;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Export/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'a170aazbna')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6734c1abb6_content')) { function _lb6734c1abb6_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Export objednávek</div>
    <b>Nemáš vybrané žádné objednávky pro export.</b>
    <br>
    <br>
    <hr>
    <h4 style="color:#F85201">Prodeje uživatelů</h4>
    <form action="<?php echo htmlSpecialChars($_control->link("refresByUser!")) ?>"  method="post" class="ajax">
<?php $iterations = 0; foreach ($users as $u) { ?>
            <input style="width:auto;margin:auto;padding:auto;" name="user[<?php echo htmlSpecialChars($u->id) ?>
]" value="<?php echo htmlSpecialChars($u->getUserInfo()->username) ?>" id="usr1" checked="checked" type="checkbox">
            <label for="usr1"><strong><?php echo Nette\Templating\Helpers::escapeHtml($u->getUserInfo()->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($u->getUserInfo()->surname, ENT_NOQUOTES) ?></strong></label>&nbsp;&nbsp;&nbsp;
<?php $iterations++; } ?>

        <select name="ty">
            <option selected="selected" value="0">Jen ty objednávky, co vytvořil</option>
            <option value="1">Pouze systémové objednávky, které uzavřel</option>
        </select>
        <input style="padding:3px;width:130px;font-size:11px" value="PRODEJE" name="prodeje" id="btn" class="b green" type="submit">
    </form>
    <br>
    <br>
    <hr>
    <h4 style="color:#F85201">Pokladna</h4>
    <form action="<?php echo htmlSpecialChars($_control->link("refreshByDate!")) ?>" method="post" class="ajax">
        <strong>Vypsat HOTOVOSTNÍ objednávky, které byly vytvořeny mezi:</strong>
        <input name="date1" value="<?php echo htmlSpecialChars($template->date($lastdate, '%d.%m.%Y')) ?>
" type="text">&nbsp;a&nbsp;<input name="date2" value="<?php echo htmlSpecialChars($template->date(time(), '%d.%m.%Y')) ?>" type="text">
        <input style="padding:3px;width:130px;font-size:11px" value="POKLADNA" name="pokladna" id="btn" class="b green" type="submit">
    </form>
<div id="<?php echo $_control->getSnippetId('orders') ?>"><?php call_user_func(reset($_l->blocks['_orders']), $_l, $template->getParameters()) ?>
</div><?php
}}

//
// block _orders
//
if (!function_exists($_l->blocks['_orders'][] = '_lbcce4c67170__orders')) { function _lbcce4c67170__orders($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('orders', FALSE)
;if (isset($orders)) { ?>
            <table>
                <thead>
                    <tr>
                        <td>fa</td>
                        <td>datum</td>
                        <td>zboží</td>
                        <td>cena vč. slevy</td>
                        <td>ks</td>
                        <td>celkem</td>
                        <td>sleva %</td>
                        <td>zákaznÌk</td>
                    </tr>
                </thead>
                <tbody>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($orders) as $order) { ?>
                        <tr>
                            <td><?php echo Nette\Templating\Helpers::escapeHtml($order->code, ENT_NOQUOTES) ?></td>
                            <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($order->createDate, '%m.%d.%Y'), ENT_NOQUOTES) ?></td>
                            <td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($order->getProducts()) as $p) { ?>
                                    <?php echo Nette\Templating\Helpers::escapeHtml($p->name, ENT_NOQUOTES) ;echo Nette\Templating\Helpers::escapeHtml($iterator->last ? '' : ',', ENT_NOQUOTES) ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                            </td>
                            <td><?php echo Nette\Templating\Helpers::escapeHtml($template->number($order->getPriceDph(), 2), ENT_NOQUOTES) ?> €</td>
                            <td><?php echo Nette\Templating\Helpers::escapeHtml($order->productCount, ENT_NOQUOTES) ?></td>
                            <td><?php echo Nette\Templating\Helpers::escapeHtml($template->number($order->getTotalPriceDPH(), 2), ENT_NOQUOTES) ?> €</td>
                            <td></td>
                            <td><?php echo Nette\Templating\Helpers::escapeHtml($order->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->surname, ENT_NOQUOTES) ?></td>
                        </tr> 
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                </tbody>
            </table>
<?php } 
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbb1d6dfc4ed_head')) { function _lbb1d6dfc4ed_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin2.css">
    <style>
        TABLE{ border-collapse:collapse;}
        TD,TH{ border:1px solid #ccc;padding:2px 4px;vertical-align:top;font-weight:normal}

        THEAD TD{ font-weight:bold;color:#fff;background:#666;}
        H4{ margin:0;padding:4px;font-size:14px;}
        TR.eee TD{ background:#eee;}
        TR.xx TD,TR.xx TH{ border-top-width:2px;}
    </style>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 
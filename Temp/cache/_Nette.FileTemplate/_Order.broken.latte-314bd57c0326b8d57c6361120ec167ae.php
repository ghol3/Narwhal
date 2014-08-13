<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.28728300 1405335598";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/broken.latte";i:2;i:1405335587;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/broken.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yjw0u8iyv4')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1f8d146081_content')) { function _lb1f8d146081_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="heading">Zručené objednávky</div>
<div class="abuttons">
<div class="abuttons">
<a href="products2buy.php" style="margin-right:0;float:right;color:darkgreen"><b>K objednání</b></a><a href="orders2pay.php" style="float:right"><b>Pohledávky</b></a><a href="barvy.php" style="float:right"><b>Barvy</b></a></div>

<div class="abuttons">
<a class="abuttonson ajax" href="<?php echo htmlSpecialChars($_control->link("filterByDate!", array('broken'))) ?>
">Datum</a>
<a class="ajax" href="<?php echo htmlSpecialChars($_control->link("filterByName!", array('broken'))) ?>
">Jméno</a>
<a class="ajax" href="<?php echo htmlSpecialChars($_control->link("filterByProductCount!", array('broken'))) ?>
">Počet položek</a>
<a class="ajax" href="<?php echo htmlSpecialChars($_control->link("filterByNoTrack!", array('broken'))) ?>
">Neodesláno</a>
<a class="ajax" href="<?php echo htmlSpecialChars($_control->link("filterByPrice!", array('broken'))) ?>
">Cena objednávky</a>
</div>



<div style="float:left;position:relative;top:-8px;margin-bottom:-4px;margin-left:15px">

</div>
<br>
<div id="<?php echo $_control->getSnippetId('orders') ?>"><?php call_user_func(reset($_l->blocks['_orders']), $_l, $template->getParameters()) ?>
</div><?php
}}

//
// block _orders
//
if (!function_exists($_l->blocks['_orders'][] = '_lb0cf3f26d25__orders')) { function _lb0cf3f26d25__orders($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('orders', FALSE)
?><table style="border:1px solid #aaa;width:100%" cellpadding="2" cellspacing="1" class="mytable">
<tr>
<td class="cen b" style="width:140px;">Kód</td>
<td class="cen b" style="width:150px">Datum</td>
<td class="cen b" style="padding:0;width:40px"></td>
<td class="cen b" style="width:400px;">Jméno</td>
<td class="cen b tdico" style="width:40px"></td>
<td class="cen b tdico" style="width:40px"></td>
<td class="cen b tdico" style="width:40px"></td>
<td class="cen b tdico" style="width:40px"></td>
<td class="cen b">Jazyk</td>
<td class="cen b">Měna</td>
<td class="cen b">Stát</td>
<td class="cen b" style="width:140px">Změnit stav</td>
</tr>
<?php $iterations = 0; foreach ($orders as $order) { ?>
    <tr onmouseover="over(1,this)" onmouseout="over(0,this)">
        <td class="cen b" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php echo Nette\Templating\Helpers::escapeHtml($order->code, ENT_NOQUOTES) ?></td>
        <td class="cen" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php echo Nette\Templating\Helpers::escapeHtml($order->createDate, ENT_NOQUOTES) ?></td>
        <td align="center" style="padding:0" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php if ($order->commission != 0) { ?><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/img/goldstar.gif" alt="Prodejce"><?php } ?></td>
        <td onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php echo Nette\Templating\Helpers::escapeHtml($order->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->surname, ENT_NOQUOTES) ?>
 <?php if ($order->firm != NULL) { ?>- <?php echo Nette\Templating\Helpers::escapeHtml($order->firm, ENT_NOQUOTES) ;} ?></td>
        <td class="tdico" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>)">
<?php if ($order->send  == 1 && $order->senden == 0) { ?>
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/img/odeslano.gif">
<?php } elseif ($order->senden == 1) { ?>
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/odeslat.gif">
<?php } ?>
        </td>
        <td class="tdico" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><div class="skp"><?php echo Nette\Templating\Helpers::escapeHtml($order->payment, ENT_NOQUOTES) ?></div></td>
        <td class="tdico" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php if ($order->paid == 'Y') { ?><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/icons/zaplaceno.gif" title="zaplaceno"><?php } ?></td>
        <td class="tdico" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php if ($order->isMailen()) { ?><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/img/email.gif" title="Odesláno potvrzení"><?php } ?></td>
        <td align="center" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/langs/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($order->language)) ?>
.gif" alt="<?php echo htmlSpecialChars($order->language) ?>" title="<?php echo htmlSpecialChars($order->language) ?>"></td>
        <td align="center" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><?php echo Nette\Templating\Helpers::escapeHtml($template->upper($order->currency), ENT_NOQUOTES) ?></td>
        <td align="center" onclick="window.open(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:edit", array($order->id)))) ?>
)"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/langs/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($order->language)) ?>
.gif" alt="<?php echo htmlSpecialChars($order->language) ?>" title="<?php echo htmlSpecialChars($order->language) ?>"></td>
        <td align="center">
            <a class="hbtn ajax" href="<?php echo htmlSpecialChars($_control->link("changeStatus!", array('new', $order->id))) ?>
">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Nevyřízeno">
            </a>
            <a class="hbtn ajax" href="<?php echo htmlSpecialChars($_control->link("changeStatus!", array('done', $order->id))) ?>
">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_cool.gif" alt="Vyřízeno">
            </a>
            <a class="hbtn hbtnon">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_frown.gif" alt="Zrušeno">
            </a>
        </td>
        </tr>
<?php $iterations++; } ?>
</table>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb2b11eeec6c_head')) { function _lb2b11eeec6c_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin.css">
<style>
.sk
{
    font-weight:bold;
    font-size:12px;
    color:#123456;
    border:1px solid #123456;
    background:#fff;
    width:20px;
    float:left;
    text-align:center;
}
.skp
{
    font-weight:bold;
    font-size:12px;
    color:#cc0000;
    border:1px solid #ccc;
    background:#fff;
    width:20px;
    text-align:center;
    margin:0 auto;
}

.abuttons A
{
    display:block;
    text-decoration:none;
    color:#123456;
    background:#ddd;
    font-size:11px;
    border:1px solid #bbb;
    padding:5px 8px;
    float:left;
    margin-right:2px;
    border-bottom:1px solid #ccc;
}

A.abuttonson
{
    font-weight:bold;
}

A.barvabtn
{
    display:block;
    float:left;
    margin:0;
    padding:5px;
    height:auto;
    border:1px solid #000;
    text-decoration:none !important;
    font-weight:bold;
    text-align:center;
}

A.barvabtn:hover,A.barvaon
{
    border:3px solid;
    padding:3px;
}

A.barvaon
{
    width:170px;
}

TD.tdico
{   
    padding-left:0;
    padding-right:0;
    text-align:center;
}
</style>
<script>
    function over(i,object){
        if(i==1) object.style.background='#eee';
        else object.style.background='#fff';
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars()) ; 
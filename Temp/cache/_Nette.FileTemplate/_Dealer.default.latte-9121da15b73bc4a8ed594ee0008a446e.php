<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.84413400 1405334625";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:96:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Dealer/default.latte";i:2;i:1405333641;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Dealer/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'j8is7h1fz6')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb021e9af6ab_content')) { function _lb021e9af6ab_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="heading">Seznam uživatelů</div><script type="text/javascript">if(top.frames.length>0){ top.topframe.document.getElementById("admin_note").innerHTML='Makat se prostÏ musi :-)';}</script>

<div style="float:right;margin-right:20px">
<a href="<?php echo htmlSpecialChars($_control->link("Dealer:map")) ?>" target="_blank" style="font-size:16px"><strong>MAPA</strong></a>
</div>
<div id="<?php echo $_control->getSnippetId('svine') ?>"><?php call_user_func(reset($_l->blocks['_svine']), $_l, $template->getParameters()) ?>
</div><style>
A{ color:#0033cc;text-decoration:underline;}
.b{ background:transparent;}
.b,.bo{ font-weight:bold}

TABLE{ border:1px solid #aaa;border-collapse:collapse;}
TD{ line-height:150%;border:1px solid #aaa;border-color:#aaa #ddd;padding:4px 5px;}

.bar1{ background:#42ad5e;height:5px;font-size:0;margin-top:2px;}
.bar2{ background:#ff7f00;height:5px;font-size:0;margin-top:2px;}
.bar3{ background:#425ead;height:5px;font-size:0;margin-top:2px;}
.bar{ background:#000;height:5px;font-size:0;margin-top:2px;}
</style>

<div style="padding:0 0 15px 0;text-align:center;">
<a href="provize_list.php?smazcache=1" style="color:#cc0000;font-family:verdana;font-size:13px;"><u><strong>06. 07. 2014, 11:39 -- Aktualizovat</strong></u></a>
</div>



<script type="text/javascript">
function del(s){
	return confirm('Tato zmÏna lze vr·tit zpÏt.\n\nProdejce: \''+s+'\'\nbude odstranÏn z tabulky prodejc˘\na nebude jej moûnÈ p¯i¯azovat k nov˝m objedn·vk·m.\nTo je vöe co se stane. V tomto v˝pise se z˘stane zobrazovat.\n\nChceö pokraËovat?');
}
</script>

<div>
<div id="<?php echo $_control->getSnippetId('dealers') ?>"><?php call_user_func(reset($_l->blocks['_dealers']), $_l, $template->getParameters()) ?>
</div>
<script type="text/javascript">
function zmen(s, id){
	var p=prompt('Zadej nový identifikátor:', s);
	if(typeof p!='undefined' && p!='' && p!='null' && p!=null){
		document.location=<?php echo Nette\Templating\Helpers::escapeJs($_control->link("changeIdentificator!")) ?> + '&identificator=' + p + '&dealerId=' + id;
	}
	return false;
}
</script>
<div class="note" style="text-align:right;color:#555;">
<img src="img/info.gif" width="16" height="16" align="absmiddle"> 
Nejsou zahrnuty zrušené objednávky / dobropisy.<br>
<strong>Ceny jsou BEZ DPH</strong>
</div>
<div id="<?php echo $_control->getSnippetId('nodealers') ?>"><?php call_user_func(reset($_l->blocks['_nodealers']), $_l, $template->getParameters()) ?>
</div></div>
<?php
}}

//
// block _svine
//
if (!function_exists($_l->blocks['_svine'][] = '_lbf662f415ac__svine')) { function _lbf662f415ac__svine($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('svine', FALSE)
?><form class='ajax'<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["addDealer"], array (
  'class' => NULL,
), FALSE) ?>>
<strong>Nový prodejce:</strong> 
<input style="width:250px;"<?php $_input = $_form["dealer"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>>
<input style="font-size:11px;font-weight:bold;padding:3px;width:auto;" value="PŘIDAT"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'value' => NULL,
))->attributes() ?>>
<div style="margin:2px 0">
( zadej jedinečný identifikátor prodejce - nemusí se shodovat se jménem )
</div>
<br>

<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
<?php
}}

//
// block _dealers
//
if (!function_exists($_l->blocks['_dealers'][] = '_lb4af408df39__dealers')) { function _lb4af408df39__dealers($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('dealers', FALSE)
?><table cellpadding="3" cellspacing="0" style="margin:0 0 10px 0;width:100%;">
<tr style="background:#eee;">
<td>#</td>
<td>Identifikátor prodejce</td>
<td><a href="?ord=jmeno">Jméno prodejce v objednávce</a></td>
<td>Město</td>
<td><a href="?ord=obrat30">Obrat za 30 dní</a></td>
<td><a href="?ord=obrat60">Obrat za 60 dní</a></td>
<td><a href="?ord=obrat90" class="b">Obrat za 90 dní</a></td>
<td><a href="?ord=obrat">Obrat celkem</a></td>
<td colspan="3">&nbsp;</td>
</tr>
<?php $i = 1; $iterations = 0; foreach ($dealers as $dealer) { ?>
    <tr>
        <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($i, ENT_NOQUOTES) ?></td>
        <td><a style="float:right" href="javascript:zmen('<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($dealer->identificator)) ?>
', <?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($dealer->id)) ?>
)" class="ajax"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/edit.gif" title="Přejmenovat"></a><strong><?php echo Nette\Templating\Helpers::escapeHtml($dealer->id, ENT_NOQUOTES) ?>
</strong>&nbsp; <?php echo Nette\Templating\Helpers::escapeHtml($dealer->identificator, ENT_NOQUOTES) ?></td>
        <td><a style="color:#000d8e" href="<?php echo htmlSpecialChars($_control->link("Order:edit", array($dealer->lastOrder))) ?>
"  target="_blank"><strong><?php echo Nette\Templating\Helpers::escapeHtml($dealer->name, ENT_NOQUOTES) ?></strong></td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($dealer->city, ENT_NOQUOTES) ?></td>
        <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($dealer->getTurnoverMonth(), ENT_NOQUOTES) ?> €<div style="width:0%" class="bar1"></div></td>
        <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($dealer->getTurnoverTwoMonths(), ENT_NOQUOTES) ?> €<div style="width:52%" class="bar2"></div></td>
        <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($dealer->getTurnoverTwoMonths(), ENT_NOQUOTES) ?> €<div style="width:100%" class="bar3"></div></td>
        <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($dealer->turnover, ENT_NOQUOTES) ?> €<div style="width:18%" class="bar"></div></td>
        <td align="right" width="16"><a class="ajax" style="color:#cc0000" href="<?php echo htmlSpecialChars($_control->link("removeDealer!", array($dealer->id))) ?>
"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/del.gif" alt="Odstranit prodejce"></a></td>
    </td>
    <?php $i++; $iterations++; } ?>
</table>

<?php
}}

//
// block _nodealers
//
if (!function_exists($_l->blocks['_nodealers'][] = '_lb427a2c2b35__nodealers')) { function _lb427a2c2b35__nodealers($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('nodealers', FALSE)
;if (count($nodealers) != 0) { ?>
<span style="color:#cc0000"><strong>Seznam existujících prodejců, kteří nemají objednávku:</strong></span>
<ul>
<?php $iterations = 0; foreach ($nodealers as $nodealer) { ?>
    <li>
        <?php echo Nette\Templating\Helpers::escapeHtml($nodealer->identificator, ENT_NOQUOTES) ?>&nbsp;
        <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("removeNoDealer!", array($nodealer->id))) ?>
">
            <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/del.gif" align="absmiddle" alt="SMAZAT <?php echo htmlSpecialChars($nodealer->identificator) ?>">
        </a>
    </li>
<?php $iterations++; } ?>
</ul>
<?php } 
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbaa6c6cc100_head')) { function _lbaa6c6cc100_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin2.css">
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
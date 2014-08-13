<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.06766500 1405347370";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Product/edit.latte";i:2;i:1405347314;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Product/edit.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ufkzrnbhg8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf99f9198ec_content')) { function _lbf99f9198ec_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Editace produktu - <?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></div>
<form <?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["editForm"], array (
), FALSE) ?>>
    <input<?php $_input = $_form["id"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
<div style="float:right"><input type="submit" style="font-weight:bold;color:#005400;font-size:16px" value="Uložit změny"></div>

<div class="btns" style="margin-bottom:12px;clear:none;float:left;width:auto"><a href="<?php echo htmlSpecialChars($_control->link("Product:default")) ?>"><strong>ZPĚT - Správa produktů</strong></a></div>
<div class="btns" style="margin-bottom:12px;clear:none;float:left;width:auto;align:left;"></div>


<div style="clear:both;font-size:0;height:0"></div>
<div id="baseform" class="t twbg" style="width:430px">
<p><span>Kategorie:</span>
    <select<?php $_input = $_form["category"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>
><?php echo $_input->getControl()->getHtml() ?></select>
<script type="text/javascript">

function dropdown(id){
	var o=$(id);
	var t=$('dd2x');
	var xy=[t.offsetLeft+t.offsetParent.offsetLeft, t.offsetTop+t.offsetParent.offsetTop+t.offsetParent.offsetTop];
	if(o.style.display=='block') return ddhide(id);
	o.style.left=xy[0]+10+'px';
	o.style.top=xy[1]+t.offsetHeight+'px';
	t.className='dropdown dropdown1';
	o.style.display='block';
	return false;
}
function ddcheck(id,on){
	var o=$(id), i;
	var oo=o.getElementsByTagName('INPUT');
	for(i=0;i<oo.length;i++){
		if(oo[i].type=='checkbox'){
			oo[i].checked=on;
		}
	}
	return false;
}

document.body.onmousedown=function(e){
	if(!e) e=window.event;
	var t=e.target || e.srcElement;
	var p=getParent(t, 'DIV', 'dropdown2');
	if(p || t.className=='dropdown dropdown1' || t.className=='dropdown') return true;
	ddhide('dd2');
}
function ddhide(id){
	var o=$(id);
	var t=$(id+'x');
	var s='';
	var all=1;
	var oo=o.getElementsByTagName('DIV');
	for(i=1;i<oo.length;i++){
		var ch=oo[i].getElementsByTagName('INPUT')[0];
		var lbl=oo[i].getElementsByTagName('LABEL')[0];

		if(ch.checked) s+=(s?', ':'')+lbl.innerHTML;
		else all=0;
	}

	t.innerHTML=all ? 'vöechny' : (s ? s : '&ndash; vyber kategorii &ndash;');

	o.style.display='none';
	t.className='dropdown';
	return false;
}
ddhide('dd2'); // default


function hpouzit(i)
{
	var o=$('apouzit');
	if(o){
		isDisabled=i?0:1;
		o.style.color=i?'#cc0000':'#666';
	}
}
</script>
</p>


<!--
<select id="kategorie" idkat="0" onchange="this.idkat=this.value" name="idkat" style="vertical-align:middle">
</select> -->


<p><span>Název:</span><input id="nazev" class="txt_name" type="text"  style="width:310px"<?php $_input = $_form["name"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'id' => NULL,
  'class' => NULL,
  'type' => NULL,
  'style' => NULL,
))->attributes() ?>></p>
<p><span>URL:</span><div style="display:inline;position:relative;top:-1px;margin-right:5px;color:#444"><?php echo Nette\Templating\Helpers::escapeHtml($settings->siteurl, ENT_NOQUOTES) ?>/</div><input
 type="text" id="url" style="width:196px;color:darkblue"<?php $_input = $_form["link"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'id' => NULL,
  'style' => NULL,
))->attributes() ?>></p>
<p><span>Kód:</span><input id="title" type="text" style="width:310px"<?php $_input = $_form["code"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'id' => NULL,
  'type' => NULL,
  'style' => NULL,
))->attributes() ?>></p>
<p><span>Hodnocení:</span><input id="title" style="width:310px"<?php $_input = $_form["score"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'id' => NULL,
  'style' => NULL,
))->attributes() ?>></p>
</div>

<!-- ####################################################### -->

<div id="baseform" class="t twbg">
<p><span>Obrázek:</span><div style="display:inline;position:relative;top:-1px;margin-right:5px;color:#444"></div><input style="width:182px;color:darkblue" id="obrazek"<?php $_input = $_form["image"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'id' => NULL,
))->attributes() ?>></p>

<p><span>Záruka:</span><input type="text" style="width:264px;margin-right:3px"<?php $_input = $_form["warranty"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'style' => NULL,
))->attributes() ?>>
</p>
<p><span>Skladem:</span><input style="width:264px;margin-right:3px"<?php $_input = $_form["stock"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>>
</p>
<p><span>Cena vč. dph:</span><input style="width:264px;margin-right:3px"<?php $_input = $_form["pricedph"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>> Kč
</p>
<p><span>Značka:</span><input style="width:264px;margin-right:3px"<?php $_input = $_form["company"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>></p>

</div>

<!-- ####################################################### -->

<div style="clear:both"></div>
<div id="hdivblock" class="hdivw">

<div class="hmenu">
    <a href="javascript:void(0)" class="on" id="hmm0" onclick="hmenu(0)">Stránka</a>
    <a href="javascript:void(0)" id="hmm1" onclick="hmenu(1)">Popisek</a>
    <a href="javascript:void(0)" id="hmm2" onclick="hmenu(2)">Detaily</a>
    <a href="javascript:void(0)" id="hmm3" onclick="hmenu(3)">Parametry</a>
    <a href="javascript:void(0)" id="hmm4" onclick="hmenu(4)">Obrázky</a>
    <a href="javascript:void(0)" id="hmm5" onclick="hmenu(5)">Verze a ceny produktu</a>
    <a href="javascript:void(0)" id="hmm6" onclick="hmenu(6)">Doplňky</a>
</div>

<div id="hdivarea" class="hdiv">

<div class="hdivin" style="display:block" id="hm0">
<table style="height:100%;width:100%" cellpadding="0" cellspacing="0">
<tr><td><textarea style="height:400px"<?php $_input = $_form["content"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea></td></tr>
</table>
</div>

<!-- ############################### -->

<div class="hdivin" id="hm1">
<table style="height:100%;width:100%" cellpadding="0" cellspacing="0">
<tr>
<td style="line-height:120%;padding-bottom:7px">
<div style="color:red;margin-top:5px;padding-left:10px;font-family:courier new;font-size:12px">
Psát takto: <br>
&lt;ul&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;li&gt;Text 1&lt;/li&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;li&gt;Text 2&lt;/li&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;li&gt;Text 3&lt;/li&gt;<br>
&nbsp;&nbsp;&nbsp;&lt;li&gt;Text 4&lt;/li&gt;<br>
&lt;/ul&gt;<br>
<!-- popis -->
</div>
</td>
</tr>
<tr>
<td style="height:100%"><textarea style="height:400px"<?php $_input = $_form["description"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea></td>
</tr>
</table>
</div>

<!-- ############################### -->

<!-------------------------------------------------------------------- FOTKY -->



<!-- ############################### -->

<div class="hdivin"  id="hm3">
<table style="height:100%;width:100%" cellpadding="0" cellspacing="0">
<tr><td><textarea style="height:400px"<?php $_input = $_form["params"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea></td></tr>
</table>
</div>

<!-- ############################### -->
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
 
 <div class="hdivin"  id="hm2">
<table style="height:100%;width:100%" cellpadding="0" cellspacing="0">
<tr><td><textarea style="height:400px"<?php $_input = $_form["detail"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea></td></tr>
</table>
</div>
 
<div class="hdivin" id="hm4" style="overflow:auto;">

<div id="product-images">
    <form<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["addImage"], array (
), FALSE) ?>>
        <input<?php $_input = $_form["picture"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>
> <input<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
    <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
</div>
<!-- NOVY -->
<div id="thumbs">
<div id="<?php echo $_control->getSnippetId('images') ?>"><?php call_user_func(reset($_l->blocks['_images']), $_l, $template->getParameters()) ?>
</div></div>

<script type="text/javascript" src="http://www.antiradary.net/.admin/swfupload/swfupload.js"></script>
<script type="text/javascript" src="http://www.antiradary.net/.admin/swfupload/my_swfupload.js"></script>
<link href="http://www.antiradary.net/.admin/swfupload/my_swfupload.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="http://www.antiradary.net/.admin/swfupload/my_drag.js"></script>
<script type="text/javascript">
var SID='mi12539t2vifn1u9r906cmqa77', ROOT='http://www.antiradary.net/.admin/', GET='?id=65';
var d=new drag('thumbs', 'DIV');
d.objUp=function(){
    $('submit').style.color='#cc0000';}
</script>



<br><br>

</div>
<div class="hdivin" id="hm5">

<style>
.spc INPUT{
    border:0}
.spc A{
    text-decoration:none;}
</style>
<script>
    function toDefault()
    {
        $("#frm-addType input[name=name]").val('');
        $("#frm-addType input[name=pricedph]").val('');
        $("#frm-addType input[name=code]").val('');
    }
</script>
        <form class="ajax" onsubmit="toDefault()"<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["addType"], array (
  'class' => NULL,
  'onsubmit' => NULL,
), FALSE) ?>>
        <table cellpadding="0" cellspacing="0" class="mytable" id="tblverze" style="margin-bottom:10px;font-size:12px;width:800px;">
    <tr style="background:#ffffcc">
        <td>Název verze</td>
        <td>Cena vč. DPH</td>
        <td>KÓD</td>
        <td>Aktivní</td>    
        <td></td>
    </tr>
    <tr>
            <td width='50%'>
                <input type="text" size="8" value="" style="width:380px;"<?php $_input = $_form["name"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'size' => NULL,
  'value' => NULL,
  'style' => NULL,
))->attributes() ?>>
            </td>
            <td width='20%'>
                <input type="text" size="4" value="" onkeyup="javascript:fprice(this)"<?php $_input = $_form["pricedph"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'size' => NULL,
  'value' => NULL,
  'onkeyup' => NULL,
))->attributes() ?>><span style="font-size:11px"> CZK</span>
            </td>
            <td width='15%'>
                <input type="text" size="4" value=""<?php $_input = $_form["code"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'size' => NULL,
  'value' => NULL,
))->attributes() ?>>
            </td>
            <td>
                <input type="submit"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
))->attributes() ?>>
            </td>
    </tr>
    </table>
    <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
    
<div id="<?php echo $_control->getSnippetId('types') ?>"><?php call_user_func(reset($_l->blocks['_types']), $_l, $template->getParameters()) ?>
</div></div>

<div class="hdivin" style="overflow:auto;" id="hm6">
    <span style='color:red;'>Pokud chceš smazat doplněk, zaškrtni "---" a ulož změny.</span>
    <form class="ajax"<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["addAdditional"], array (
  'class' => NULL,
), FALSE) ?>>
    <table cellpadding="0" cellspacing="0" class="mytable" id="tbldoplnek" style="margin-bottom:10px;font-size:12px;width:700px;">
        <tr>
            <td>Název dopňku</td>
            <td>Přidat</td>
        </tr>
        <tr>
            <td>
            <select<?php $_input = $_form["extra"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>
><?php echo $_input->getControl()->getHtml() ?></select>
            </td>
            <td width="60"><input<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>></td>
        </tr>
    </table>
    <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
<div id="<?php echo $_control->getSnippetId('additionals') ?>"><?php call_user_func(reset($_l->blocks['_additionals']), $_l, $template->getParameters()) ?>
</div></div>

<div class="hdivin" id="hm5">

<div style="padding-top:10px">

<strong>Hmotnost v Kg:</strong>

 ve vŪce verzŪch<br>
<br>
<strong>Ukazuj ve skladovť ev.:</strong> <input type="checkbox" name="ukaznasklade">
<br>
<br>
<br>


<strong>POUZE v pÝŪpadž, ěe tento produkt nemŠ verze (v pÝŪpadž, ěe mŠ verze pak nŠvötžvnŪk jednu vybere):</strong>

<div style="padding:15px">
<strong style="color:#555">Kůd (nevratnŠ zmžna):</strong> <input type="text" name="kod" value="">
<br>
<br>
<strong style="color:#555">Kůdy souvisejŪcŪch:</strong> <input type="text" name="souvisejici" size="45" value=""><br>
<strong style="color:#555">NEBO kůdy produktý v tomto kompletu:</strong> <input type="text" size="45" name="komplet" value=""><br>
</div>
</div>

</div>



</div>
</div><!-- /hdivblock -->

<script type="text/javascript">

var last=0;
function hmenu(i){
	document.getElementById('hm'+last).style.display='none';
	document.getElementById('hm'+i).style.display='block';
	document.getElementById('hmm'+last).className=(last == 0 ? 'first' : '');
	document.getElementById('hmm'+i).className=(i == 0 ? 'first ' : '')+'on';

	var date = new Date();
	date.setTime(date.getTime()+(1*24*60*60*1000));
	var expires = " expires="+date.toGMTString();
	document.cookie = "protab="+i+";"+expires+"; path=/";
	last=i;
}

fullHeight($('hdivarea'));
hmenu(0);
</script>

<?php
}}

//
// block _images
//
if (!function_exists($_l->blocks['_images'][] = '_lbf5f6284b05__images')) { function _lbf5f6284b05__images($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('images', FALSE)
;$iterations = 0; foreach ($product->getImages() as $img) { ?>
	<div class="mythumb" id="<?php echo htmlSpecialChars($img->id) ?>">
	<input type="text"  value="<?php echo htmlSpecialChars($img->image) ?>"><br>
	<a href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($img->image)) ?>" target="_blank" class="mythumbimg">
	<img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($img->image)) ?>" width="100%"></a><br>
	<a href="#nahledovy" onclick="return imgSetPreview(this)" class="mythumbpreview"">Náhled</a>
        <a class="ajax mythumbdel" href="<?php echo htmlSpecialChars($_control->link("removeImage!", array($img->id, $product->id))) ?>
">SMAZAT</a>
    </div>
<?php $iterations++; } 
}}

//
// block _types
//
if (!function_exists($_l->blocks['_types'][] = '_lbfe6bef57f6__types')) { function _lbfe6bef57f6__types($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('types', FALSE)
;if (count($product->getTypes()) > 0) { ?>
<table cellpadding="0" cellspacing="0" class="mytable" id="tblverze" style="margin-bottom:10px;font-size:12px;width:800px;">
    <tr style="background:#ffffcc">
        <td>Název verze</td>
        <td>Cena vč. DPH</td>
        <td>KÓD</td>
        <td>Aktivní</td>    
        <td></td>
    </tr>
<?php $iterations = 0; foreach ($product->getTypes() as $type) { ?>
    <tr>
        <td width='50%'>
            <input type="text" size="8" name="typename[]" value="<?php echo htmlSpecialChars($type->name) ?>" style="width:380px;">
        </td>
        <td width='20%'>
            <input type="text" name="typeprice[]" value="<?php echo htmlSpecialChars($type->pricedph) ?>" size="4" onkeyup="javascript:fprice(this)"><span style="font-size:11px"> CZK</span>
        </td>
        <td width='15%'>
            <input type="text" name="typecode[]" value="<?php echo htmlSpecialChars($type->code) ?>" size="4">
        </td>
        <td align="center" width='10%'>
            <input type="checkbox" name="typeactive[]" <?php if ($type->visibility) { ?>
checked<?php } ?>>
        </td>
        <td>
            <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("removeType!", array($type->id))) ?>
"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/del.gif" style="cursor:pointer"></a>
        </td>
    </tr>
<?php $iterations++; } ?>
</table>
<?php } 
}}

//
// block _additionals
//
if (!function_exists($_l->blocks['_additionals'][] = '_lbf298cb9e9b__additionals')) { function _lbf298cb9e9b__additionals($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('additionals', FALSE)
;if (count($product->getAdditionals()) > 0) { ?>
    <table cellpadding="0" cellspacing="0" class="mytable" id="tbldoplnek" style="margin-bottom:10px;font-size:12px;width:700px;">
	<tr style="background:#ffffcc">
	    <td>Název doplňku</td>
            <td>Smazat</td>
	</tr>
<?php $iterations = 0; foreach ($product->getAdditionals() as $add) { ?>
            <tr>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($add->getExtraObject()->name, ENT_NOQUOTES) ?></td>
                <td width="30"><a class="ajax" href="<?php echo htmlSpecialChars($_control->link("removeAdditional!", array($add->id))) ?>
"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/del.gif" style="cursor:pointer"></a></td>
            </tr>
<?php $iterations++; } ?>
    </table>
<?php } 
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb4c36b39244_head')) { function _lb4c36b39244_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin2.css">
<style>
.twbg SPAN{
    background:#eee}
.t{
    float:left}
.t P{
    margin:0;padding:0;clear:left;line-height:180%;}
.t SPAN{
    width:100px;font-weight:bold;padding:0 5px;margin:0 5px 2px 0;display:block;float:left;-moz-box-sizing:border-box;box-sizing:border-box;}

.hdivw{
    padding-top:17px}
.hmenu{
    clear:both;width:100%}
.hmenu A{
    display:block;background:#eee;float:left;padding:5px 10px 3px 10px;margin-right:5px;border:1px solid #ddd;border-color:#ddd #ddd #ddd #ddd; text-decoration:none;font-weight:bold}
.hmenu A.on{
    border-color:#aaa #888 #aaa #aaa;border-bottom:none;background:#fff;color:#000;z-index:10;padding-top:7px;position:relative;margin-bottom:-1px;}
*{
    -moz-box-sizing:border-box;box-sizing:border-box}
.hdiv{
    border:1px solid #aaa;float:left;width:100%;}
.hdivin{
    padding:9px;display:none;background:#fff;height:100%}
.hdivin TEXTAREA{
    width:100%;height:100%}
</style>
<script>
	function addElement(){
              var ni = document.getElementById('product-images');
	      ni.appendChild(document.createElement("br"));
              var input = document.createElement('input');
              input.type = "file";
              input.name = "picture[]";
              ni.appendChild(input);
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
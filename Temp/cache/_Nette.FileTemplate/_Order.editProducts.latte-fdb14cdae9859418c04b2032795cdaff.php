<?php //netteCache[01]000415a:2:{s:4:"time";s:21:"0.76934600 1405334152";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:100:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/editProducts.latte";i:2;i:1405333895;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/editProducts.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'w80libbsaw')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7fbe990fe7_content')) { function _lb7fbe990fe7_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script type="text/javascript" src="scripts.js"></script><div class="heading">Objednávka <?php echo Nette\Templating\Helpers::escapeHtml($order->code, ENT_NOQUOTES) ?>
 &nbsp;&raquo;&nbsp; Editace zboží</div><script type="text/javascript">if(top.frames.length>0){ top.topframe.document.getElementById("admin_note").innerHTML='Makat se prostÏ musi :-)';}</script><div class="btns"><a href="<?php echo htmlSpecialChars($_control->link("Order:edit", array($order->id))) ?>"><strong>ZPĚT - Objednávka</strong></a></div>


<div style="clear:both"></div>




<style type="text/css">
.mytextarea{
border-style: solid;
border-width: 2px 1px 1px 2px;
border-color: #808080 #ccc #ccc #808080;
overflow:hidden;padding:1px;
}
.mytextarea TEXTAREA{
font-family:arial;
border:0 none white;
background:#fff;
outline:none;
padding:0;
font-size:1em;
overflow:hidden;
resize:none;
height:1em;
}
</style>
<div id="<?php echo $_control->getSnippetId('products') ?>"><?php call_user_func(reset($_l->blocks['_products']), $_l, $template->getParameters()) ?>
</div>        

<ul class="help">
<li><strong>Sleva</strong>: konkrétní číslo nebo v procentech (uveďte znak procenta % na konci)</li>
<li style="font-weight:bold"><a href="edit_order_volby.php" target="_blank">Volby s produkty CZK</a></li>
<li><a href="edit_order_volby.php?mena=EUR" target="_blank">Volby s produkty EUR</a></li>
</ul>


<script type="text/javascript">
function mycena(o){
	var tr = getParent(o, 'TR'), els = tr.getElementsByTagName('INPUT'), i, cena_bez, cena;
	
	for(i=0;i<els.length;i++){
		if(els[i].name == 'cena_bez[]') cena_bez=els[i];
		if(els[i].name == 'cena[]') cena=els[i];
	}
	
	var s = o.value.replace(" ", "");
	s = s.replace(",", ".");
	var int = parseFloat(s);
	
	if(o.name == 'cena_bez[]'){
		cena.value = fprice(int*1.21, true);
		fprice(o);
	}else{
		cena_bez.value = fprice(int/1.21, true);
		fprice(o);
	}
	myRecalcDo();
}

function rowDel(o){
	var delRow = o.parentNode.parentNode;
	var tbl = delRow.parentNode.parentNode;
	var rIndex = delRow.sectionRowIndex;
	var rowArray = new Array(delRow);
	for (var i=0; i<rowArray.length; i++) {
	var rIndex = rowArray[i].sectionRowIndex;
		rowArray[i].parentNode.deleteRow(rIndex);
	}
	myRecalcDo();
}

var rowscount = 0;
function addTD(){
	var tbl=document.getElementById('table');
	var o=document.getElementById('itemselect');

	if(tbl.rows.length > 2)
		var i = tbl.rows.length-2;
	else
		var i = 1;
	var row = tbl.insertRow(i);

	var c = row.insertCell(0);
	c.style.background = '#eee';
	c.innerHTML='<img src="../img/del.gif" style="cursor:pointer" onclick="return rowDel(this)">'
		+'<input type="hidden" name="id[]" value="'+rowscount+'">';

	var c = row.insertCell(1);
	cc = document.createElement('input');
	cc.type = 'text';
	cc.size = '7';
	cc.name = 'kody[]';
	cc.value = o.options[o.selectedIndex].title;
	c.appendChild(cc);

	var c = row.insertCell(2);
	
	cc = document.createElement('DIV');
	cc.className = 'mytextarea';
	
	if (zo = $('septej')){ // zrusime predchozi
		sHint.cancel('septej');
		zo.id='';
	}
	
	ccc = document.createElement('TEXTAREA');
	ccc.rows = "1";
	ccc.cols = "80";
	ccc.name = "nazev[]";
	ccc.id = 'septej';
	ccc.setAttribute("autocomplete", "off");
	cc.appendChild(ccc);
	c.appendChild(cc);
	
	sHint.init('septej', 'edit_order_ajaxpro.php?mena=CZK&s=', function(o, inp){
		var s=o.id.split('~');
		var o=getParent(inp, 'TR');
		var inp=o.getElementsByTagName('INPUT');
		var name=o.getElementsByTagName('TEXTAREA')[0];
		inp[1].value = s[0];
		name.value = s[1];
		inp[3].value = s[2];
		mycena(inp[3]);
	});
	
	var c = row.insertCell(3);
	c.style.backgroundColor = '#eee';
	c.innerHTML = '<input type="text" size="7" name="cena_bez[]" onkeyup="mycena(this)" value=""></td>';
	
	var c = row.insertCell(4);
	var inpcena = document.createElement('INPUT');
	inpcena.type = 'text';
	inpcena.size = '7';
	inpcena.name = 'cena[]';
	inpcena.onkeyup = function(){ mycena(this);};
	inpcena.value = o.value;
	c.appendChild(inpcena);
	mycena(inpcena);

	var c = row.insertCell(5);
	c.innerHTML='<input type="text" size="5" name="sleva[]" onkeyup="myRecalcDo();" value="'+$('globalSleva').value+'">'
		+'<div id="slevakc'+rowscount+'" style="font-size:11px;color:darkgreen"></div>';

	var c = row.insertCell(6);
	c.innerHTML='<input type="text" size="2" name="pocet[]" onkeyup="myRecalcDo();" value="1">';

	var c = row.insertCell(7);
	c.className='ar';
	c.innerHTML ='<span id="cenadph'+rowscount+'">0</span> KË';

	ccc.focus();
	ccc.value = o.options[o.selectedIndex].text;
	o.selectedIndex = 0;
	
	rowscount++;
	myRecalcDo();
	
	mytextareas(); // aktivace
}


//-----------------------------------------------

function globsleva(o){
	var tbl=$('formtable');
	var a=tbl.elements;
	for(i=0;i<a.length;i++){
		if(a[i].name == 'sleva[]') {
			a[i].value = o.value;
		}
	}
	myRecalcDo();
}

function myRecalc(objs){
	var tbl=$('formtable');
	var a=tbl.elements;
	for(i=0;i<a.length;i++){
		if(objs.inArray(a[i].name)) {
			addEvent(a[i], 'keyup', myRecalcDo);
		}
	}
}

function myRecalcDo(e){
	if(!e){
		var e = window.event;
		if (e) var o = e.srcElement;
	}else
		var o = e.target;
		
	if(o && o.name == 'sleva[]') $('globalSleva').value = '';

	var pocet, cena, cena_bez, sleva, curid;
	var tmp = 0;
	var pocetcelk = 0;
	var cenacelk = 0;

	var tbl=$('formtable');
	var a=tbl.elements;
	for(i=0;i<a.length;i++){
		if(a[i].name == 'id[]') {
			curid = a[i].value;
		}
		else if(a[i].name == 'cena[]') {
			var s=a[i].value.replace(" ", "");
			s = s.replace(',', '.');
			cena = parseFloat(s);
		}
		else if(a[i].name == 'sleva[]') {
			sleva = 0;
			proc = a[i].value.indexOf('%');
			if(proc > 0) {
				 sleva = parseInt(a[i].value.substr(0, proc)) / 100 * cena;
				 sleva = Math.round(sleva);			} else if (a[i].value) {
				sleva = parseInt(a[i].value);
			}
		}
		else if(a[i].name == 'pocet[]') {
			if(a[i].value > 0) pocet = parseInt(a[i].value);
			else pocet = 0;
			pocetcelk+= pocet;
		}

		if(pocet != undefined && cena != undefined && sleva != undefined) {
			if(false){} //cena-sleva < 0 && sleva != 0) tmp=0;
			else {
				tmp = (cena-sleva)*pocet;
				if(proc > 0) {
					$('slevakc'+curid).innerHTML = '-'+fprice(sleva)+' CZK';
					$('slevakc'+curid).style.display = '';
					$('slevakc'+curid).style.color = '#cc0000';
				} else {
					$('slevakc'+curid).innerHTML = fprice(sleva)+' CZK';
					$('slevakc'+curid).style.display = 'none';
				}
			}
			$('cenadph'+curid).innerHTML = fprice(tmp, 2);
			cenacelk+= tmp;
			pocet = undefined;
			sleva = undefined;
			cena = undefined;
		}
	}
	$('cenacelk').innerHTML = fprice(cenacelk, true);
	$('pocetcelk').innerHTML = pocetcelk;
}

myRecalc(['cena[]','pocet[]','sleva[]']);



//------------------- TEXTAREAS

function mytextareas() {
    var objs = $('table').getElementsByTagName('TEXTAREA');
	function resize(o) {
		o.style.height = 'auto';
		o.style.height = o.scrollHeight+'px';
    }
    function delayedResize(o) {
		setTimeout(function(){ resize(o);}, 0);
    }	
	for(var i=0; i<objs.length; i++)
	{
		var obj=objs[i];
		if (!obj.mytextarea){
			obj.mytextarea=1;
			addEvent(obj, 'change',  function(){ resize(this);});
			addEvent(obj, 'cut',     function(){ delayedResize(this);});
			addEvent(obj, 'paste',   function(){ delayedResize(this);});
			addEvent(obj, 'drop',    function(){ delayedResize(this);});
			addEvent(obj, 'keydown', function(){ delayedResize(this);});
		}
		resize(obj);
	}
}
mytextareas();
</script>





<br><br>
<!------------------------------- TABS -------------------------------->
<div class="mt-cont">
<ul>
<li><a href="#" id="poznamka_obj" onclick="return mt(this);">Poznámka k objednávce</a></li>
</ul>
</div>

<div class="tblView" style="margin-bottom:15px"><!-- zaË·tek tabs -->

<table cellspacing="0" id="mt_poznamka_obj" class="dn">
    <tr>
        <td style="background:#ffffcc;">

<script type="text/javascript">textres('vzkaz');</script>
</div>
</td></tr>
</table>



<script type="text/javascript">
function mt(o)
{
	var i, s, cont, li, as=getParent(o,'UL').getElementsByTagName('A');
	
	for(i=0; i<as.length; i++){
		if(o == as[i]) continue;
		s = as[i].id;
		$('mt_'+s).className='dn';
		li=getParent(as[i],'LI');
		li.className = '';
	}
	
	s = o.id;
	cont = $('mt_'+s);
	
	var ifr=$('ifr_poznamka_prodejce');
	if (ifr && cont.className && s=='poznamka_prodejce'){
		$('ifrLoading').style.display='block';
		ifr.src='order_view_notes.php?provize=&highlight=&rand='+Math.random();
	}else if(ifr){
		ifr.style.display='none';
	}
	
	cont.className = cont.className ? '' : 'dn';
	li=getParent(o,'LI');
	li.className = li.className ? '' : 'on';
	return false;
}
</script>

</div><!-- konec tabs -->
<?php
}}

//
// block _products
//
if (!function_exists($_l->blocks['_products'][] = '_lb51fe059d2e__products')) { function _lb51fe059d2e__products($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('products', FALSE)
?>     <form action="<?php echo htmlSpecialChars($_control->link("editProductsOrderNew!")) ?>" method="POST" class="ajax">
    <input type="hidden" name="order" value="<?php echo htmlSpecialChars($order->id) ?>">
<table cellpadding="0" cellspacing="0" class="mytable nows" id="table" style="width:900px;margin-top:20px;clear:both">
   
    <thead>
        <tr>
            <td class="nobtl"></td>
            <td>kód</td>
            <td>název</td>
            <td>bez DPH</td>
            <td>vč. DPH</td>
            <td>sleva/ks</td>
            <td>počet</td>
            <td>vč. DPH</td>
        </tr>
    </thead>
    <tbody>
<?php $iterations = 0; foreach ($order->getProducts() as $product) { ?>
            <tr>
                <td><a class="ajax" href="<?php echo htmlSpecialChars($_control->link("deleteProduct!", array($product->id, $order->id))) ?>
"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/del.gif"></a></td>
                <td><input type="text" name="code[<?php echo htmlSpecialChars($product->id) ?>
]" value="<?php echo htmlSpecialChars($product->code) ?>"></td>
                <td><input type="text" name="name[<?php echo htmlSpecialChars($product->id) ?>
]" value="<?php echo htmlSpecialChars($product->name) ?>"></td>
                <td><input type="text" name="price[<?php echo htmlSpecialChars($product->id) ?>
]" value="<?php echo htmlSpecialChars($product->price) ?>"> &euro;</td>
                <td><input type="text" name="pricedph[<?php echo htmlSpecialChars($product->id) ?>
]" value="<?php echo htmlSpecialChars($product->pricedph) ?>"> &euro;</td>
                <td><input type="text" name="discount[<?php echo htmlSpecialChars($product->id) ?>
]" value="<?php echo htmlSpecialChars($product->discount) ?>"></td>
                <td><input type="text" name="count[<?php echo htmlSpecialChars($product->id) ?>
]" value="<?php echo htmlSpecialChars($product->count) ?>"> ks</td>
                <td><?php echo Nette\Templating\Helpers::escapeHtml($product->pricedph * (int)$product->count, ENT_NOQUOTES) ?> &euro;</td>
            </tr>
<?php $iterations++; } ?>
        <tr class="tfoot">
            <td class="nobblr"></td>
            <td colspan="4" class="nobbl" style="line-height:160%;">
                <select name="myproduct" style="width:600px">
                    <option value="0">Přidat nový produkt...</option>
<?php $iterations = 0; foreach ($products as $product) { ?>
                        <option value="<?php echo htmlSpecialChars($product->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($product->name, ENT_NOQUOTES) ?></option>
<?php $iterations++; } ?>
                </select>
            </td>
            <td>
                <input name="mydiscount" type="text">
            </td>
            <td class="ar"><span id="pocetcelk"></span> ks</td>
            <td class="ar">
                <span id="cenacelk">0,00</span> €
            </td>
        </tr>
        <tr class="tfoot">
            <td colspan="7" class="cen nobblr">
                <input type="submit" name="send" style="font-weight:bold;margin-top:10px;width:140px;position:relative;left:420px;" value="ULOŽIT ZMĚNY">
            </td>
        </tr>
    </tbody>
</table>
</form>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb638a7307b0_head')) { function _lb638a7307b0_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
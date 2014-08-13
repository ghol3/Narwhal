<?php //netteCache[01]000413a:2:{s:4:"time";s:21:"0.97556100 1405334626";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:99:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Warehouse/default.latte";i:2;i:1405334524;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Warehouse/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'h7pkyb3lc8')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcaf83d684b_content')) { function _lbcaf83d684b_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
 ?>
<div id="<?php echo $_control->getSnippetId('products') ?>"><?php call_user_func(reset($_l->blocks['_products']), $_l, $template->getParameters()) ?>
</div></form>
<br>
<script type="text/javascript">var schovano=['ZP850AL2','ZP850AL4','ZP950AL2','ZP950AL4','ZP950MAL2','ZP950MAL4','ZRX65I1','ZRX65I2','DBLCZ','DBLEU','ZRX65E','ZRX65E1','ZRX65E2','ZEX50E','ZEX50ESE','ZEX50E1','ZEX50E2','ZEX50N','ZEX501','ZEX502','A995CZ','A965CZ','A945CZ','A550E','ASTID','ARX65','Z967E','Z966E','ARX75R','ZV1R','ZR27E','A975CZ','ZALPRS','ZALPRD','ZALPRT','ZALPRQ','ZLT400D','ZLT430','ZLT450','LIDUAL','LIQUAD','ZBLM27','ZBLM47','ZBLDS','ZALG9RXS','ZALG9RXD','ZALG9RXT','ZALG9RXQ','ZALG9S','ZALG9D','ZALG9T','ZALG9Q','AALG8S','AALG8D','AALG8T','AALG8Q','DB1YCZ','DB3YCZ','DB1YEU','DB3YEU','ZVIZRL','PZRDZ','PPSAB','PSZPA','NX50E','NV1','NRX65E','NLT40','NALG9','N975E','LETAR','INFOB'];function ukazschovane(o){
	o.value = o.value=='Ukaž schované' ? 'Schovej' : 'Ukaž schované';
	for(var i=0;i<schovano.length;i++){
		$('trkod'+schovano[i]).style.display=$('trkod'+schovano[i]).style.display=='none'?'':'none';
	}
}
</script><input value="Ukaž schované" onclick="ukazschovane(this)" type="button"><br><br>
<?php
}}

//
// block _products
//
if (!function_exists($_l->blocks['_products'][] = '_lb258dadb33b__products')) { function _lb258dadb33b__products($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('products', FALSE)
?>    <div class="btn16">
        <a class="ajax <?php if ($selected == 1) { ?>on<?php } ?>" class="on" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('sklad', 1))) ?>
">1. Sklad</a>
        <a class="ajax <?php if ($selected == 2) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('bazar', 2))) ?>
">2. Bazar</a>
        <a class="ajax <?php if ($selected == 3) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('rekl', 3))) ?>
">3. Reklamace</a>
        <a class="ajax <?php if ($selected == 4) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('rekl2', 4))) ?>
">4. Reklamace na cestě</a>
        <a class="ajax <?php if ($selected == 5) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('komise', 5))) ?>
">5. Komise</a>
        <a class="ajax <?php if ($selected == 6) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('recyklace', 6))) ?>
">6. Recyklace</a>
        <a class="ajax <?php if ($selected == 7) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeState!", array('vyrobce', 7))) ?>
">7. U výrobce</a>
        <a class="ajax <?php if (101 == $selected) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeMaxState!", array(101))) ?>
">SOUHRN</a>
        <a class="ajax <?php if (102 == $selected) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeMaxState!", array(102))) ?>
">TEST</a>
        <a class="ajax <?php if (103 == $selected) { ?>on<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changeMaxState!", array(103))) ?>
">SOUČTY</a>
        <a style="text-decoration:none;border:0;background:transparent" href="<?php echo htmlSpecialChars($_control->link("Warehouse:log")) ?>">
            <strong>přepni na ZÁZNAMY</strong>
        </a>
    </div>
<div style="clear:both;margin-bottom:10px;"></div>
<form action="<?php echo htmlSpecialChars($_control->link("change!", array($type, $selected))) ?>" method="post" class="ajax">
    <input name="typ" value="sklad" type="hidden">
    
    <table class="mytable" style="margin:0;">
        <thead>
            <tr>
                <td>kód</td>
                <td>název</td>
                <td></td>
                <td>změna</td>
                <td align="right">na skladě</td>
                <td align="right">prodalo se</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="6" style="border-top:5px solid #888;">
                    <input value="Poznámka" name="note" style="width:100%;margin:0 0 5px 0;color:#555;background:#ffdfba;font-weight:bold;" onclick="if(this.value=='Pozn·mka'){ this.value='';this.style.color='#222';}" onblur="if(this.value==''){ this.value='Poznámka';this.style.color='#555';}" type="text">
                </td>
            </tr>
            <tr>
                <td colspan="6" style="text-align:right">
                    <select name="move" style="background:#333;color:#fff">
                        <option value="sklad" <?php if ($selected == 1) { ?>selected<?php } ?>
><?php if ($selected == 1) { ?>NEPŘESOUVAT, provést na SKLAD<?php } else { ?>Přesunout do SKLAD<?php } ?></option>
                        <option value="bazar" <?php if ($selected == 2) { ?>selected<?php } ?>
><?php if ($selected == 2) { ?>NEPŘESOUVAT, provést na BAZAR<?php } else { ?>Přesunout do BAZAR<?php } ?></option>
                        <option value="rekl" <?php if ($selected == 3) { ?>selected<?php } ?>
><?php if ($selected == 3) { ?>NEPŘESOUVAT, provést na REKLAMACE<?php } else { ?>
Přesunout do REKLAMACE<?php } ?></option>
                        <option value="rekl2" <?php if ($selected == 4) { ?>selected<?php } ?>
><?php if ($selected == 4) { ?>NEPŘESOUVAT, provést na REKLAMACE NA CESTĚ<?php } else { ?>
Přesunout do REKLAMACE NA CESTĚ<?php } ?></option>
                        <option value="komise" <?php if ($selected == 5) { ?>selected<?php } ?>
><?php if ($selected == 5) { ?>NEPŘESOUVAT, provést na KOMISE<?php } else { ?>
Přesunout do KOMISE<?php } ?></option>
                        <option value="recyklace" <?php if ($selected == 6) { ?>
selected<?php } ?>><?php if ($selected == 6) { ?>NEPŘESOUVAT, provést na RECYKLACE<?php } else { ?>
Přesunout do RECYKLACE<?php } ?></option>
                        <option value="vyrobce" <?php if ($selected == 7) { ?>selected<?php } ?>
><?php if ($selected == 7) { ?>NEPŘESOUVAT, provést na U VÝROBCE<?php } else { ?>
Přesunout do U VÝROBCE<?php } ?></option>
                    </select>&nbsp;
                    <input style="padding-left:20px;padding-right:20px" value="ULOŽIT" id="btn" class="b green" type="submit">
                </td>
            </tr>
            <input type="hidden" name="type" value="<?php echo htmlSpecialChars($type) ?>">
<?php $iterations = 0; foreach ($categories as $key => $category) { ?>
            <tr>
                <td colspan="6" style="font-weight:bold">
                    <a href="<?php echo htmlSpecialChars($_control->link(":Front:Category:show", array($category[1]))) ?>
" target="_blank"><?php echo Nette\Templating\Helpers::escapeHtml($category[0], ENT_NOQUOTES) ?></a>
                </td>
            </tr>
<?php $iterations = 0; foreach ($warehouses as $warehouse) { ?>
                <?php if ($key != $warehouse->getProductObject()->category) { continue; } ?>

                <input type="hidden" value="<?php echo htmlSpecialChars($warehouse->id) ?>
" name="warehouse[<?php echo htmlSpecialChars($warehouse->getproductObject()->id) ?>]">
                <input type='hidden' value="<?php echo htmlSpecialChars($warehouse->getproductObject()->id) ?>
" name='product[<?php echo htmlSpecialChars($warehouse->getProductObject()->id, ENT_QUOTES) ?>]'>
            <tr id="trkodZRX65I" style="background: rgb(255, 255, 255);" onmouseover="this.style.backgroundColor='#ffffbb'" onmouseout="this.style.background='#fff'">
                <td>
                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->code, ENT_NOQUOTES) ?></strong>
                </td>
                <td>
                    <a target="_blank" href="<?php echo htmlSpecialChars($_control->link(":Front:Product:show", array($warehouse->getProductObject()->link))) ?>">
                        <span style="font-size:11px"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->link, ENT_NOQUOTES) ?></span></a>
                </td>
                <td>
                    <select name="sklad_hlidej" class="ajax" onchange="document.location=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("changeTime!", array($warehouse->id, $selected, $type)))) ?> + '&select=' +this.value">
<?php $iterations = 0; foreach ($timearray as $tme => $time) { ?>
                            <option class="ajax" value="<?php echo htmlSpecialChars($tme) ?>
" <?php if ($warehouse->time == $tme) { ?>selected<?php } ?>><?php echo Nette\Templating\Helpers::escapeHtml($time, ENT_NOQUOTES) ?></option>
<?php $iterations++; } ?>
                    </select>
                </td>
                <td>
                    <div style="float:left;margin-right:3px;">
                        <input onclick="this.select()" onkeypress="return noEnter(event)" onkeyup="ksOnKey('ZRX65I',this,0)" style="width:40px;font-weight:bold;background:transparent;" id="ksZRX65I" name="ks[<?php echo htmlSpecialChars($warehouse->getProductObject()->id) ?>]" type="text">
                    </div>
                    <a id="idplusZRX65I" href="javascript:void(0)" onclick="_addpro(1,'ZRX65I',0,0)" class="plus" alt="Příjem"></a>
                    <a id="idminusZRX65I" href="javascript:void(0)" onclick="_addpro(-1,'ZRX65I',0,0)" class="minus" alt="Výdej"></a>
                </td>
                <td>
                    <a href="#"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($warehouse->getProductObject()->createDate, '%d.%m.%Y'), ENT_NOQUOTES) ?></a>
                </td>
                <td align="right">
                    <span title="Prodáno v objednávkách"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->getTotalSolds(), ENT_NOQUOTES) ?></span> / 
                    <strong title="Sklad"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->stack, ENT_NOQUOTES) ?></strong>
                </td>
                <td title="prodáno ~<?php echo htmlSpecialChars($warehouse->getProductObject()->getSoldsAvarge()) ?>
 ks / měsíc" style="color:" align="right"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->getSoldsAvarge(), ENT_NOQUOTES) ?> m</td>
                <td title="Prodáno za 3 měsíce" class="zames3" align="right"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->getSoldsByMonths(3), ENT_NOQUOTES) ?></td>
                <td title="Prodáno za 6 měsíců" class="zames6" align="right"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->getSoldsByMonths(6), ENT_NOQUOTES) ?></td>
                <td title="Prodáno za 9 měsíců" class="zames9" align="right"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->getSoldsByMonths(9), ENT_NOQUOTES) ?></td>
                <td title="Prodáno za 12 měsíců" class="zames12" align="right"><?php echo Nette\Templating\Helpers::escapeHtml($warehouse->getProductObject()->getSoldsByMonths(12), ENT_NOQUOTES) ?></td>
            </tr>
<?php $iterations++; } $iterations++; } ?>
        </tbody>
    </table>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lba14b3df378_head')) { function _lba14b3df378_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin2.css">
<script type="text/javascript" src="sklad_evidence.php_soubory/scripts.js"></script><style>

TD.zames3{ background:#efdddd;}
TD.zames6{ background:#e8cfcf;}
TD.zames9{ background:#debaba;}
TD.zames12{ background:#d09c9c;}

.mytable A{ text-decoration:none;}
.mytable TD{ font-size:12px;}
TABLE.mytable{ margin:0;}

INPUT{ font-size:12px;}
TD.nopad{ padding:0 !important;}
.btn16{ clear:both;width:100%;margin-bottom:5px;}
.btn16 A{ display:block;background:#eee;font-weight:bold;font-size:13px;float:left;
text-decoration:none;padding:5px 8px;margin-bottom:2px;border:1px solid #aaa;border-color:#ccc #777 #777 #ccc;}
.btn16 A.on:hover{ color:#000;}
.btn16 A.on{ background:#ccc;color:#000;}
.btn16 A.oncl{ background:#ffb273;}

A.plus{ background:url(img/plus.gif) no-repeat top;width:28px;height:14px;font-size:0;cursor:default;display:block;float:left;margin-right:3px;}
A.plus:hover{ background-position:bottom}
A.minus{ background:url(img/minus.gif) no-repeat top;width:28px;height:14px;font-size:0;cursor:default;display:block;float:left;}
A.minus:hover{ background-position:bottom}
</style>
<script type="text/javascript">
var komplet=[];
komplet['ZCP97AL']=['Z975E','ZALG9D'];
komplet['ZCP97LT']=['Z975E','ZLT400S'];
komplet['ZCPRXAL']=['ZALG9D','ZRX65E'];
komplet['ZCPRXLT']=['ZLT400S','ZRX65E'];
komplet['ZPROTR']=['ZPROT','Z975E'];
komplet['ZP950']=['ZSTIRPH','ZPROTS'];
komplet['ZPROTS']=['ZPROT'];
komplet['ZP850AL2']=['ZALG9RXDS','ZALG9RXDS','ZALG9RXRJ','Z975E','ZPROT'];
komplet['ZP850AL4']=['ZALG9RXDS','ZALG9RXDS','ZP850AL2'];
komplet['ZP950MAL2']=['ZALG9RXDS','ZALG9RXDS','ZALG9RXRJ','STIRPMH','ZPROTS'];
komplet['ZP950AL2']=['ZPROTS','ZSTIRPH','ZALG9RXRJ','ZALG9RXDS','ZALG9RXDS'];
komplet['ZP950AL4']=['ZP950AL2','ZALG9RXDS','ZALG9RXDS'];
komplet['ZP950MAL4']=['ZALG9RXDS','ZALG9RXDS','ZP950AL2'];
komplet['ZP950M']=['STIRPMH','ZPROTS'];
var souvisejici=[];
souvisejici['A550E']=['INFOB','LETAR'];
souvisejici['A945CZ']=['INFOB','LETAR'];
souvisejici['A965CZ']=['LETAR','INFOB'];
souvisejici['A975CZ']=['INFOB','LETAR'];
souvisejici['A995CZ']=['INFOB','LETAR'];
souvisejici['AALG8D']=['LETAR','INFOB'];
souvisejici['AALG8Q']=['LETAR','INFOB'];
souvisejici['AALG8S']=['LETAR','INFOB'];
souvisejici['AALG8T']=['LETAR','INFOB'];
souvisejici['ARX65']=['LETAR','INFOB'];
souvisejici['ARX75R']=['LETAR','INFOB'];
souvisejici['ASTID']=['LETAR','INFOB'];
souvisejici['Z975E']=['LETAR','INFOB','N975E'];
souvisejici['ZALG9D']=['INFOB','LETAR','NALG9'];
souvisejici['ZALG9Q']=['INFOB','LETAR','NALG9'];
souvisejici['ZSTIR']=['LETAR','INFOB'];
souvisejici['ZALG9RXD']=['NALG9','LETAR','INFOB'];
souvisejici['ZALG9T']=['INFOB','LETAR','NALG9'];
souvisejici['ZLT400D']=['INFOB','LETAR','NLT40'];
souvisejici['ZLT400S']=['INFOB','LETAR','NLT40'];
souvisejici['ZLT430']=['INFOB','LETAR','NLT40'];
souvisejici['ZLT450']=['INFOB','LETAR','NLT40'];
souvisejici['ZRX65E']=['P1VDB','NRX65E','LETAR','INFOB'];
souvisejici['ZV1']=['INFOB','LETAR','NV1'];
souvisejici['ZV1R']=['INFOB','LETAR'];
souvisejici['ZEX50E']=['P1VDB','NX50E','LETAR','INFOB'];
souvisejici['ZALG9RXQ']=['NALG9','LETAR','INFOB'];
souvisejici['ZALG9RXS']=['NALG9','LETAR','INFOB'];
souvisejici['ZALG9RXT']=['NALG9','LETAR','INFOB'];
souvisejici['ZALG9S']=['NALG9','LETAR','INFOB'];
souvisejici['ZVIZRL']=['ZLT400S','Z975E'];
souvisejici['ZBLM27']=['LETAR','INFOB'];
souvisejici['ZBLM47']=['LETAR','INFOB'];
souvisejici['ZR27E']=['INFOB','LETAR'];
souvisejici['Z967E']=['INFOB','LETAR'];
souvisejici['ZQI45E']=['INFOB','LETAR'];
souvisejici['ZRX65E1']=['NRX65E','P1VDB','LETAR','INFOB'];
souvisejici['ZEX50N']=['P1VDB'];
souvisejici['ZEX50E1']=['INFOB','LETAR','NX50E','P1VDB'];
souvisejici['ZEX50E2']=['INFOB','LETAR','NX50E','P1VDB'];
souvisejici['ZRX65E2']=['INFOB','LETAR','NRX65E','P1VDB'];
souvisejici['ZRX65I']=['NRX65E','P1VDB','LETAR','INFOB'];
souvisejici['ZRX65I1']=['INFOB','LETAR','P1VDB','NRX65E'];
souvisejici['ZRX65I2']=['INFOB','LETAR','P1VDB','NRX65E'];
souvisejici['ZE8500CI']=['LETAR','INFOB'];
souvisejici['ZR9500IX']=['LETAR','INFOB'];


function _addpro(ks,kod,souvisi,komplet){ // TLACITKO +/-
	var o=$('ks'+kod);
	if(o.value){
		o.value = parseInt($('ks'+kod).value)+ks;
	}else{
		o.value = ks;
	}
	if(!komplet) ksOnKey(kod,o,souvisi);
	o.focus();
	o.select();
}

function ksSwitch(oo,kod){ // ZMENA BARVY RADKU
	var o=$('trkod'+kod);
	var pval=parseInt(oo.value);
	if(oo.value == '' || pval == 0){
		oo.value='';
		o.className='';
	}else{
		o.className=pval > 0 ? 'trplus' : 'trminus';
	}
}

var vlastniSouvisi='';

function ksOnKey(kod,oo,souvisi){ // PRODUKT
	ksSwitch(oo,kod);
	if(souvisi){ // ted zmenil souvisejici produkt => uz se nebude automaticky menit
		if(vlastniSouvisi.indexOf(';'+kod+';') > -1) return;
		oo.style.background='transparent';
		vlastniSouvisi+=';'+kod+';';
	}
	else if(souvisejici[kod] && !kompletStart){
		spocitejSouvisejici();
	}
}

var kompletStart=''; // aby se neopakovaly souvisejici produkty podproduktu KOMPLETU
var kompletItems='';

function ksOnEnter(kod, evt){ // KOMPLET
	var keyCode;
	if(evt.which) keyCode = evt.which;
	else keyCode = evt.keyCode;
	var val=0;
	if(keyCode==13){
		var o=$('ks'+kod);
		var val=parseInt(o.value);
		if(isNaN(val)||val==0){ o.value=''; return false;}
		
		// najdeme podprodukty
		for(kodB in komplet[kod]){
			if(typeof komplet[kod][kodB] == 'string'){
				//kompletStart+=';'+komplet[kod][kodB]+';'; -- souvisejici se opakujou
				var oo=$('ks'+komplet[kod][kodB]);
				var val2=parseInt(oo.value);
				if(isNaN(val2)){
					val2=val;
				}else{
					val2+=val;
				}
				oo.value=val2;
				oo.onkeyup();
			}
		}
		spocitejSouvisejici();
		kompletItems='';
		kompletStart='';
		o.value='';
		return false;
	}
	return true;
}

function spocitejSouvisejici(){
	var i;
	var kod;
	var val=0, vals=[];
	
	for(kod in souvisejici){
		if(typeof souvisejici[kod] == 'object'){
			if(!$('ks'+kod)) { alert('SouvisejÌcÌ kÛd '+kod+' neexistuje.');continue;}
			val=parseInt($('ks'+kod).value);
			if(isNaN(val)) val=0;
			for(i=0;i<souvisejici[kod].length;i++){
				kodB=souvisejici[kod][i];
				
				if(kompletStart.indexOf(';'+kod+';') > -1){
					if(kompletItems.indexOf(';'+kodB+';') > -1) continue;
					kompletItems+=';'+kodB+';';
				}
				if(vals[kodB]) vals[kodB]+=val;
				else vals[kodB]=val;
			}
		}
	}
	var oo, found;
	for(kod in vals){
		if(typeof vals[kod] == 'number'){
			found = vlastniSouvisi.indexOf(';'+kod+';');
			if(found < 0){
				oo=$('ks'+kod);
				oo.value=vals[kod];
				ksSwitch(oo,kod);
			}
		}
	}
}


function noEnter(evt){
	var keyCode;
	if(evt.which) keyCode = evt.which;
	else keyCode = evt.keyCode;
	var val=0;
	if(keyCode==13) return false;
	return true;
}
</script>

<style>
.trplus TD{ background:#b8d7ae;}
.trminus TD{ background:#ffacac;}
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
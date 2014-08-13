<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.19506400 1405511599";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:91:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/new.latte";i:2;i:1405511596;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/new.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'm9vtrvo6wt')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>Nevyřízené (nové) objednávky</title><link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin.css" type="text/css" rel="stylesheet"><meta http-equiv="content-Type" content="text/html; charset=windows-1250"></head><body><div class="heading">Nevyřízené (nové) objednávky</div><script type="text/javascript">if(top.frames.length>0){ top.topframe.document.getElementById("admin_note").innerHTML='Makat se prostě musi :-)';}</script>
<script type="text/javascript">
function over(i,object){ if(i==1) object.style.background='#eee';else object.style.background='#fff';}
function url(id){ window.open('order_view.php?kod='+id);}
function state(id,object){ document.location='orders.php?order=&state=1&change='+object.value+'&id='+id;}
</script>

<style>
.sk{ font-weight:bold;font-size:12px;color:#123456;border:1px solid #123456;background:#fff;width:20px;float:left;text-align:center}
.skp{ font-weight:bold;font-size:12px;color:#cc0000;border:1px solid #ccc;background:#fff;width:20px;text-align:center;margin:0 auto;}

.abuttons A{ display:block;text-decoration:none;color:#123456;background:#ddd;font-size:11px;
border:1px solid #bbb;padding:5px 8px;float:left;margin-right:2px;border-bottom:1px solid #ccc}
A.abuttonson{ font-weight:bold}
A.barvabtn{ display:block;float:left;margin:0;padding:5px;height:auto;
border:1px solid #000;text-decoration:none !important;font-weight:bold;text-align:center}
A.barvabtn:hover,A.barvaon{ border:3px solid;padding:3px;}
A.barvaon{ width:170px}

TD.tdico{ padding-left:0;padding-right:0;text-align:center;}
</style>

<div class="abuttons">
<div class="abuttons">
<a href="http://www.antiradary.net/.admin/products2buy.php" style="margin-right:0;float:right;color:darkgreen"><b>K objednání</b></a><a href="http://www.antiradary.net/.admin/orders2pay.php" style="float:right"><b>Pohledávky</b></a><a href="http://www.antiradary.net/.admin/barvy.php" style="float:right"><b>Barvy</b></a></div>

<div class="abuttons">
<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;barva=" class="abuttonson">Datum</a>
<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;barva=&amp;order=a_jmeno">Jméno</a>
<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;barva=&amp;order=polozek+desc">Počet položek</a>
<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;barva=&amp;order=odeslano">Neodesláno</a>
<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;barva=&amp;order=cenacelk+desc">Cena objednávky</a>
</div>



<div style="float:left;position:relative;top:-8px;margin-bottom:-4px;margin-left:15px">
<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;barva=neoznaceno&amp;order=" class="barvabtn" style="background:#DFE7F4">24</a>

<a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;order=&amp;barva=seda" class="barvabtn" style="background:#aaaaaa">5</a><a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;order=&amp;barva=zluta" class="barvabtn" style="background:#fcffa9">2</a><a href="http://www.antiradary.net/.admin/orders.php?state=1&amp;mena=&amp;order=&amp;barva=tyrkysova" class="barvabtn" style="background:#92fff6">23</a></div>

</div>


<table style="border:1px solid #aaa;width:100%" cellpadding="2" cellspacing="1">
<tbody><tr>
<td class="cen b">Kód</td>
<td class="cen b">Datum</td><td class="cen b" style="padding:0"></td>
<td class="cen b">Jméno</td><td class="cen b tdico"></td>
<td class="cen b tdico"></td>
<td class="cen b tdico"></td>
<td class="cen b tdico"></td>
<td class="cen b">Jazyk</td>
<td class="cen b"><select onchange="document.location='orders.php?state=1&amp;mena='+this.value;"><option selected="selected" value="">-měna-</option><option value="EUR">EUR</option><option value="CZK">CZK</option><option value="USD">USD</option></select></td>
<td class="cen b">Stát</td>
<td class="cen b" style="width:140px">Změnit stav</td>
</tr>
<tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" onmouseover="over(1,this)" onmouseout="over(0,this)">
    <td onclick="url('5678/2014')" class="cen b">5678/2014</td>
    <td onclick="url('5678/2014')" class="cen">08.07.2014</td>
    <td onclick="url('5678/2014')" style="padding:0" align="center">
        <img src="orders_data/goldstar.gif" alt="Prodejce"></td>
    <td onclick="url('5678/2014')"> SPURT ZLÍN s.r.o</td>
    <td class="tdico" onclick="url('5678/2014')"></td>
    <td class="tdico" onclick="url('5678/2014')">
        <div class="skp">P</div></td>
    <td class="tdico" onclick="url('5678/2014')"></td>
    <td class="tdico" onclick="url('5678/2014')"></td>
    <td onclick="url('5678/2014')" align="center">
        <img src="orders_data/cz.gif" alt="cz" title="cz"></td>
    <td onclick="url('5678/2014')" align="center">CZK</td>
    <td onclick="url('5678/2014')" align="center">
        <img src="orders_data/cz.gif" alt="cz" title="cz">
    </td><td><a class="hbtn hbtnon" "="">
            <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Nevyřízeno">
        </a>
            <a class="hbtn" href="http://www.antiradary.net/.admin/orders.php?state=1&amp;kod=5678/2014&amp;statechange=3">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_cool.gif" alt="Vyřízeno"></a>
                <a class="hbtn" href="http://www.antiradary.net/.admin/orders.php?state=1&amp;kod=5678/2014&amp;statechange=4">
                    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_frown.gif" alt="Zrušeno"></a></td>
</tr>
<tr style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" onmouseover="over(1,this)" onmouseout="over(0,this)">
    <td onclick="url('5676/2014')" class="cen b" style="background:#fcffa9">5676/2014</td>
    <td onclick="url('5676/2014')" class="cen">08.07.2014</td><td onclick="url('5676/2014')" style="padding:0" align="center">
        
    </td><td onclick="url('5676/2014')"> Ing. Pavel Jiroušek</td>
    <td class="tdico" onclick="url('5676/2014')"></td>
    <td class="tdico" onclick="url('5676/2014')">
        <div class="skp">H</div></td>
    <td class="tdico" onclick="url('5676/2014')"></td>
    <td class="tdico" onclick="url('5676/2014')"></td>
    <td onclick="url('5676/2014')" align="center">
        <img src="orders_data/cz.gif" alt="cz" title="cz">
    </td><td onclick="url('5676/2014')" align="center">CZK</td>
    <td onclick="url('5676/2014')" align="center">
        <img src="orders_data/cz.gif" alt="cz" title="cz"></td>
    <td><a class="hbtn hbtnon" "="">
            <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Nevyřízeno"></a>
            <a class="hbtn" href="http://www.antiradary.net/.admin/orders.php?state=1&amp;kod=5676/2014&amp;statechange=3">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Vyřízeno"></a>
            <a class="hbtn" href="http://www.antiradary.net/.admin/orders.php?state=1&amp;kod=5676/2014&amp;statechange=4">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Zrušeno"></a></td>
</tr>

</tbody></table>
</body></html>
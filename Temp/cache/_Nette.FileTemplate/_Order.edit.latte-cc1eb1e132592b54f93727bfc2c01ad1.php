<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.07847100 1405334120";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/edit.latte";i:2;i:1405334115;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/edit.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'hm8ynrwi60')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb408272d800_content')) { function _lb408272d800_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div style="clear:both">
    <div style="position:absolute;right:0;top:0;">
        <div style="display:inline-block;color:#000;padding:14px 20px 0 0;">Vytvořil: <strong><?php echo Nette\Templating\Helpers::escapeHtml($user->account, ENT_NOQUOTES) ?>
</strong> &nbsp;|&nbsp; <?php echo Nette\Templating\Helpers::escapeHtml($order->createDate, ENT_NOQUOTES) ?></div>
    </div>


<div class="redBtn" style="float:left;width:85px;margin-right:5px"><a style="color:#cc0000" href="javascript:window.close()">Zavřít okno</a></div>
<div class="btn"><a href="<?php echo htmlSpecialChars($_control->link("Auth:login")) ?>">Administrace</a></div>

<div class="redBtn" style="width:175px;margin-left:235px;float:left"><a href="<?php echo htmlSpecialChars($_control->link("Order:print", array($order->id))) ?>" target="_blank">Vytisknout fakturu</a>&nbsp;
|&nbsp; <a target="_blank" href="<?php echo htmlSpecialChars($_control->link("getPDF!", array($order->id))) ?>
">PDF</a><br>

</div>
<div id="<?php echo $_control->getSnippetId('export') ?>"><?php call_user_func(reset($_l->blocks['_export']), $_l, $template->getParameters()) ?>
</div><div style="clear:both;width:100%;"><!-- --></div>


<div style="clear:left;float:left;width:600px;;">

<div id="<?php echo $_control->getSnippetId('languages') ?>"><?php call_user_func(reset($_l->blocks['_languages']), $_l, $template->getParameters()) ?>
</div><script type="text/javascript">
function fn1(s){
	var o=this;
	objs = getParent(o, 'DIV').getElementsByTagName('A');
	for(i=0; i<objs.length; i++){
		removeClass(objs[i], 'bo');
	}
	var ch=s.substring(0,1);
	if(ch=="0" || ch=="1"){
		ukaz_vyber_skladu = ch == "0" ? 0 : 1;
		s = s.substring(1);
	}
	addClass(o, 'bo');
	fnlabel(s);
}
function fn2(s){
	var o=this;
	if(hasClass(o, 'bo')) removeClass(o, 'bo');
	else addClass(o, 'bo');
	fnlabel(s);
}
function fnlabel(s){
	$element('fanast_label').innerHTML = s;
}
</script>

<br>
<br>

<span>Další</span>:&nbsp;
<a  class="ajax" onclick="if(confirm('Duplikovat objednávku - jen adresa?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("duplicateAddress!", array($order->id)))) ?>" target="_blank" >
    <u>duplikuj adresu</u>
</a> &nbsp;|&nbsp;
<a class="ajax" target="_blank" onclick="if(confirm('Duplikovat objednávku - kompletně?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("duplicateAll!", array($order->id)))) ?>">
    <u>duplikuj kompletně</u>
</a>
&nbsp;|&nbsp;
<a href="order_view.php?kod=5665/2014&setDobropis=1">
    <u>vytvořit dobropis</u>
</a>


<div style="background:#f3f3f3;margin-top:15px;margin-bottom:13px;">

<div class="tblView">
<table cellspacing="0">
<tr>
<th>Číslo faktury</th>
<td>
<div id="<?php echo $_control->getSnippetId('orders') ?>"><?php call_user_func(reset($_l->blocks['_orders']), $_l, $template->getParameters()) ?>
</div><div style="float:left;font-size:13px;color:#cc0000;letter-spacing:1px;padding-top:2px;"><strong><?php echo Nette\Templating\Helpers::escapeHtml($order->code, ENT_NOQUOTES) ?></strong></div>
</td></tr>

<tr>
<th>Vytvořeno</th><td><?php echo Nette\Templating\Helpers::escapeHtml($order->createDate, ENT_NOQUOTES) ?></td>
</tr>
</table>
</div>


<div class="tblView">
<table cellspacing="0">
<tr>
<th id="thprovize">Jméno</th>
<td>
    <?php echo Nette\Templating\Helpers::escapeHtml($order->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->surname, ENT_NOQUOTES) ?>
<a href="<?php echo htmlSpecialChars($_control->link("Order:editOrder", array($order->id))) ?>" style="float:right;color:darkblue;"><strong>EDITOVAT</strong></a>
 </td></tr>
<tr><th>Ulice, Čp.</th><td><?php echo Nette\Templating\Helpers::escapeHtml($order->address, ENT_NOQUOTES) ?></td></tr>
<tr><th>Město</th><td><?php echo Nette\Templating\Helpers::escapeHtml($order->city, ENT_NOQUOTES) ?>
<span style="float:right"><?php echo Nette\Templating\Helpers::escapeHtml($order->country, ENT_NOQUOTES) ?> &nbsp;&nbsp;</span>
</td></tr>

<tr><th>PSČ</th><td><?php echo Nette\Templating\Helpers::escapeHtml($order->zip, ENT_NOQUOTES) ?></td></tr>
</table>
</div>


<div class="tblView">
<table cellspacing="0">
<tr class="empty"><th>Název firmy</th><td><?php if ($order->firm != NULL) { echo Nette\Templating\Helpers::escapeHtml($order->firm, ENT_NOQUOTES) ;} ?></td></tr>
<tr class="empty"><th>IČO</td><td><?php if ($order->firm != NULL) { echo Nette\Templating\Helpers::escapeHtml($order->ico, ENT_NOQUOTES) ;} ?></td></th></tr>
<tr class="empty"><th>DIČ</td><td><?php if ($order->firm != NULL) { echo Nette\Templating\Helpers::escapeHtml($order->dic, ENT_NOQUOTES) ;} ?></td></th></tr>
<tr class="empty"><th>Ulice, Čp.</td><td><?php if ($order->firm != NULL) { echo Nette\Templating\Helpers::escapeHtml($order->firm_address, ENT_NOQUOTES) ;} ?></td></th></tr>
<tr class="empty"><th>Město</td><td><?php if ($order->firm != NULL) { echo Nette\Templating\Helpers::escapeHtml($order->firm_city, ENT_NOQUOTES) ;} ?></td></th></tr>
<tr class="empty"><th>PSČ</td><td><?php if ($order->firm != NULL) { echo Nette\Templating\Helpers::escapeHtml($order->firm_zip, ENT_NOQUOTES) ;} ?></td></th></tr>
</table>
</div>


<script type="text/javascript">
function emailsuccess() {
        var em=prompt("Zadejte emailové adresy (oddělujte čárkou):", '')
        if (em!=null && em!="") {
            document.location=<?php echo Nette\Templating\Helpers::escapeJs($_control->link("sendMails!", array($order->id))) ?> + '&mails='+ em;
        }
  }
function emailsuccess2() {
        var em=prompt("VČETNĚ FAKTURY --- Zadejte emailové adresy (oddělujte čárkou):", '')
        if (em!=null && em!="") {
            document.location=<?php echo Nette\Templating\Helpers::escapeJs($_control->link("sendFMails!", array($order->id))) ?> + '&mails='+ em;
        }
  }
</script>


<div class="tblView">
<table cellspacing="0">
<tr><th>Email</th><td><?php echo Nette\Templating\Helpers::escapeHtml($order->email, ENT_NOQUOTES) ?>

<span style="float:right">
<a style="color:darkblue;" href="javascript:emailsuccess()" class="ajax">odeslat potvrzení</a>
&nbsp;|&nbsp; <a style="color:darkblue;" href="javascript:emailsuccess2()">včetně faktury</a>
&nbsp;|
<a href="javascript:void(0)" onclick="showMyPopup(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("Order:emails", array($order->id)))) ?>,'HISTORIE ODESÍLÁLNÍ','',50,50)"
><img align="absmiddle" src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/report.gif" alt="Historie odesílání"></a>
</span>
</td></tr>
<tr><th>Telefon</th><td><?php echo Nette\Templating\Helpers::escapeHtml($order->phone, ENT_NOQUOTES) ?></td></tr>





<tr><th style="background:#b3d0ff">Doprava</th>
    <td style="padding:6px">
        <?php echo Nette\Templating\Helpers::escapeHtml($order->deliveryType, ENT_NOQUOTES) ?>
 za <?php echo Nette\Templating\Helpers::escapeHtml($order->deliveryPrice, ENT_NOQUOTES) ?> €
<div style="float:right">
    <form<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["changeTrack"], array (
), FALSE) ?>>
        Track #:<input style="border:1px dotted #aaa;background:#eee;padding:0;width:auto;height:19px;" size="20" value="<?php echo htmlSpecialChars($order->track) ?>
"<?php $_input = $_form["track"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'size' => NULL,
  'value' => NULL,
))->attributes() ?>>
        <input id="trackbtn" value="OK" style="margin:6px 2px 2px 2px; height:21px;display:none;"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'id' => NULL,
  'value' => NULL,
  'style' => NULL,
))->attributes() ?>>
        <input<?php $_input = $_form["order"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
    <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
</div>
<strong></strong>
</td></tr>


<tr><th style="background:#b3d0ff">Platba</th><td style="padding:6px">
        
<div style="float:right">
<div id="<?php echo $_control->getSnippetId('status') ?>"><?php call_user_func(reset($_l->blocks['_status']), $_l, $template->getParameters()) ?>
</div><div id="<?php echo $_control->getSnippetId('payment') ?>"><?php call_user_func(reset($_l->blocks['_payment']), $_l, $template->getParameters()) ?>
</div></td></tr>



</table>
</div>
</div><!-- konec sedeho pozadi -->


<div class="mt-cont">
<ul>
<li><a href="#" id="poznamka_obj" onclick="return mt(this);">Poznámka k objednávce</a></li>
</ul>
</div>
<div id="<?php echo $_control->getSnippetId('note') ?>"><?php call_user_func(reset($_l->blocks['_note']), $_l, $template->getParameters()) ?>
</div>

<script type="text/javascript">
function mt(o)
{
	var i, s, cont, li, as=getParent(o,'UL').getElementsByTagName('A');
	
	for(i=0; i<as.length; i++){
		if(o == as[i]) continue;
		s = as[i].id;
		$element('mt_'+s).className='dn';
		li=getParent(as[i],'LI');
		li.className = '';
	}
	
	s = o.id;
	cont = $element('mt_'+s);
	
	var ifr=$element('ifr_poznamka_prodejce');
	if (ifr && cont.className && s=='poznamka_prodejce'){
		$element('ifrLoading').style.display='block';
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








<div class="tblView2" style="margin-bottom:0;">
<table cellspacing="0">
<thead>
<tr>
<td>Kód</td>
<td>Pološka</td><!-- 
<td class="ar">bez DPH</td> -->
<td class="ar">vč. DPH</td>
<td class="ar">počet</td>
<td class="ar">bez DPH</td>
<td class="ar">vč. DPH</td>
</tr>
</thead>
<tbody>
    <?php $maxDPH = 0 ?>
    <?php $max = 0 ?>
    <?php $ks = 0; $iterations = 0; foreach ($order->getProducts() as $product) { ?>
        <tr class="e">
            <td><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->code, ENT_NOQUOTES) ?></td>
            <td><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->name, ENT_NOQUOTES) ?></td>
            <td class="ar" style="white-space:nowrap;"><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->pricedph, ENT_NOQUOTES) ?> &euro;</td>
            <td class="ar" style="white-space:nowrap;"><?php echo Nette\Templating\Helpers::escapeHtml($product->count, ENT_NOQUOTES) ?> ks</td>
            <td class="ar" style="white-space:nowrap;"><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->getPrice(), ENT_NOQUOTES) ?> &euro;</td>
            <td class="ar" style="white-space:nowrap;"><strong> <?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->pricedph * (int)$product->count, ENT_NOQUOTES) ?> &euro;</strong></td>
            <?php $maxDPH += ($product->getProductObject()->pricedph * $product->count); $max += ($product->getProductObject()->getPrice() * (int)$product->count); $ks += $product->count?> 
        </tr>
<?php $iterations++; } ?>
    <tr>
        <td colspan="4"><strong>Doprava - <?php echo Nette\Templating\Helpers::escapeHtml($order->deliveryType, ENT_NOQUOTES) ?>
 za <?php echo Nette\Templating\Helpers::escapeHtml($order->deliveryPrice, ENT_NOQUOTES) ?> €</strong>&nbsp;&nbsp;
            <a style="color:darkblue" href="<?php echo htmlSpecialChars($_control->link("Order:editOrder", array($order->id))) ?>">změnit</a>
        </td>
        <td class="ar">0 &euro;</td>
        <td class="ar"><strong>0 &euro;</strong></td>
    </tr>
</tbody>
    <tfoot>
        <tr>
            <td style="border-top:2px solid #cc0000"></td>
            <td style="border-top:2px solid #cc0000"></td>
            <td style="border-top:2px solid #cc0000;color:#cc0000" class="ar">
            <td style="border-top:2px solid #cc0000;white-space:nowrap;" class="ar nw">
                <div style="font-size:11px;float:left;color:#000">Položek:</div><br><?php echo Nette\Templating\Helpers::escapeHtml($ks, ENT_NOQUOTES) ?> ks
            </td>
            <td style="border-top:2px solid #cc0000;white-space:nowrap;" class="ar"><?php echo Nette\Templating\Helpers::escapeHtml($max, ENT_NOQUOTES) ?> &euro;</td>
            <td style="border-top:2px solid #cc0000;white-space:nowrap;" class="ar"><strong><?php echo Nette\Templating\Helpers::escapeHtml($maxDPH, ENT_NOQUOTES) ?> &euro;</strong></td>
        </tr>
    </tfoot>
</table>
</div>

<div style="text-align:center;font-family:arial;font-size:13px;margin-bottom:25px">
    <a href="<?php echo htmlSpecialChars($_control->link("Order:editProducts", array($order->id))) ?>" style="color:darkblue;display:inline-block;background:#ccc;border:1px solid #bbb;border-top:2px solid #aaa;padding:3px 14px 5px 14px;">
        <strong>Změnit zboží</strong>
    </a>
</div>

</div>





<br>
<br>
<?php
}}

//
// block _export
//
if (!function_exists($_l->blocks['_export'][] = '_lb870e6e5ab7__export')) { function _lb870e6e5ab7__export($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('export', FALSE)
?><div id="export" class="ajax redBtn" style="margin-left:15px;width:50px;float:left;<?php if ($order->export === 1) { ?>
border-style: solid;border-width: 3px;border-color:red;<?php } ?>"><a class="ajax" style="cursor:default;color:#000;" href="<?php echo htmlSpecialChars($_control->link("export!", array($order->id, $order->export))) ?>
">EXPORT</a></div>
<?php
}}

//
// block _languages
//
if (!function_exists($_l->blocks['_languages'][] = '_lb575c4821bd__languages')) { function _lb575c4821bd__languages($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('languages', FALSE)
?><a id="swfanast" href="#" onclick="t=this;sw('fanast2');return false;">
    <span>Nastavení faktury: <strong id="fanast_label"><em><?php echo Nette\Templating\Helpers::escapeHtml($order->getLanguage()->name, ENT_NOQUOTES) ?></em></strong></span>
</a>
    <div id="fanast2" class="fanast dn">
        <span>JAZYK</span>
<?php $iterations = 0; foreach ($languages as $language) { ?>
            <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("changeLanguage!", array($order->id, $language->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($language->name, ENT_NOQUOTES) ?></a>
<?php $iterations++; } ?>
    </div>
<?php
}}

//
// block _orders
//
if (!function_exists($_l->blocks['_orders'][] = '_lb5d366dc4e0__orders')) { function _lb5d366dc4e0__orders($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('orders', FALSE)
?>    <div style="float:right">
<?php if ($order->status == 'new') { ?>
            <a class="hbtn hbtnon">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Nevyřízeno">
            </a>
            <a class="hbtn ajax" href="<?php echo htmlSpecialChars($_control->link("changeStatus!", array('done', $order->id))) ?>
">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_cool.gif" alt="Vyřízeno">
            </a>
            <a class="hbtn ajax" href="<?php echo htmlSpecialChars($_control->link("changeStatus!", array('broken', $order->id))) ?>
">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_frown.gif" alt="Zrušeno">
            </a>
<?php } elseif ($order->status == 'done') { ?>
            <a class="hbtn ajax" href="<?php echo htmlSpecialChars($_control->link("changeStatus!", array('new', $order->id))) ?>
">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_question.gif" alt="Nevyřízeno">
            </a>
            <a class="hbtn hbtnon">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_cool.gif" alt="Vyřízeno">
            </a>
            <a class="hbtn ajax" href="<?php echo htmlSpecialChars($_control->link("changeStatus!", array('broken', $order->id))) ?>
">
                <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/icons/icon_frown.gif" alt="Zrušeno">
            </a>
<?php } else { ?>
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
<?php } ?>
    </div>
<?php
}}

//
// block _status
//
if (!function_exists($_l->blocks['_status'][] = '_lb1dd85ee878__status')) { function _lb1dd85ee878__status($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('status', FALSE)
?>    <a style="<?php if ($order->send == 0) { ?>color:darkblue<?php } else { ?>
color:red<?php } ?>;" class="ajax" href="<?php echo htmlSpecialChars($_control->link("send!", array($order->id))) ?>
">Odeslat?</a>&nbsp;&nbsp;&nbsp;<a style="<?php if ($order->senden == 0) { ?>color:darkblue<?php } else { ?>
color:red<?php } ?>;" class="ajax" href="<?php echo htmlSpecialChars($_control->link("senden!", array($order->id))) ?>
">Odesláno?</a>&nbsp;&nbsp;&nbsp;</div>
<?php
}}

//
// block _payment
//
if (!function_exists($_l->blocks['_payment'][] = '_lb04110df161__payment')) { function _lb04110df161__payment($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('payment', FALSE)
?><a class="ajax" name="platba" style="color:darkblue;<?php if ($order->payment == 'D') { ?>
font-weight:bold;color:#cc0000<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changePayment!", array('D', $order->id))) ?>
">Dobírkou</a>
&nbsp;|&nbsp;
<a class="ajax" name="platba" style="color:darkblue;<?php if ($order->payment == 'H') { ?>
font-weight:bold;color:#cc0000<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changePayment!", array('H', $order->id))) ?>
">Hotově</a>
&nbsp;|&nbsp;
<a class="ajax" name="platba" style="color:darkblue;<?php if ($order->payment == 'K') { ?>
font-weight:bold;color:#cc0000<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changePayment!", array('K', $order->id))) ?>
">Plat. kartou</a>
&nbsp;|&nbsp;
<a class="ajax" name="platba" style="color:darkblue;<?php if ($order->payment == 'P') { ?>
font-weight:bold;color:#cc0000<?php } ?>" href="<?php echo htmlSpecialChars($_control->link("changePayment!", array('P', $order->id))) ?>
">Převodem</a>
<?php
}}

//
// block _note
//
if (!function_exists($_l->blocks['_note'][] = '_lb2f557d8efa__note')) { function _lb2f557d8efa__note($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('note', FALSE)
?><div class="tblView" style="margin-bottom:15px"><!-- zaË·tek tabs -->

<table cellspacing="0" id="mt_poznamka_obj" class="dn">
<tr><td style="background:#ffffcc;">

<form class="ajax"<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["editNoteForm"], array (
  'class' => NULL,
), FALSE) ?>>
    <textarea rows="3" style="width:100%;font-family:arial;font-size:13px;padding:3px;" onkeydown="$element('vzkazbtn2').className='';" id="vzkaz"<?php $_input = $_form["note"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'rows' => NULL,
  'style' => NULL,
  'onkeydown' => NULL,
  'id' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
    <input<?php $_input = $_form["order"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
    <input type="submit"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
))->attributes() ?>>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
<script type="text/javascript"></script>
</div>
</td></tr>
</table>
    
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbe69647992e_head')) { function _lbe69647992e_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin.css">
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
<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.05564300 1405334131";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:93:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/print.latte";i:2;i:1405333949;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/print.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ohnicbgkvt')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb61a0c37a4_content')) { function _lbb61a0c37a4_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
 ?>
<div id="<?php echo $_control->getSnippetId('date') ?>"><?php call_user_func(reset($_l->blocks['_date']), $_l, $template->getParameters()) ?>
</div>        
        <table class="maintable" cellspacing="0" cellpadding="0" id="pagebreak">
            <tr class="pb-main">
                <td style="font-size:15px;padding:5px;text-align:left;" colspan="2">
                <div style="float:right;"><b><?php echo Nette\Templating\Helpers::escapeHtml($language->title, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->code, ENT_NOQUOTES) ?></b></div>
                <b><?php echo Nette\Templating\Helpers::escapeHtml($settings->siteurl, ENT_NOQUOTES) ?></b></td>
            </tr>
            <tr class="pb-main">
                <td style="border:1px solid #ccc;width:50%" valign="top">
                    <div style="padding:10px 10px 0 10px">
                        <div class="w100" align="left">
                            <?php echo Nette\Templating\Helpers::escapeHtml($language->supplier, ENT_NOQUOTES) ?>:<br>
                            <div style="float:right;padding-right:5px;">
                                <?php echo Nette\Templating\Helpers::escapeHtml($language->phone, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company_tel, ENT_NOQUOTES) ?><br>
                                <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company_email, ENT_NOQUOTES) ?>
<br><?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company_url, ENT_NOQUOTES) ?><br>
                            </div>
                            <div class="adresa">
                                <strong><?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company, ENT_NOQUOTES) ?></strong><br>
                                <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company_address, ENT_NOQUOTES) ?><br>
                            </div>
                            <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company_zip, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->company_city, ENT_NOQUOTES) ?><br>
                            <div class="adresa">
                                <?php echo Nette\Templating\Helpers::escapeHtml($language->ico, ENT_NOQUOTES) ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->ic, ENT_NOQUOTES) ?><br>
                                <?php echo Nette\Templating\Helpers::escapeHtml($language->dic, ENT_NOQUOTES) ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->dic, ENT_NOQUOTES) ?><br>
                                <?php echo Nette\Templating\Helpers::escapeHtml($language->dph, ENT_NOQUOTES) ?><br>
                            </div>
                        </div>
                    </div>
                    <div class="w100">
                        <table cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="padding:4px 10px;" align="left"><strong><?php echo Nette\Templating\Helpers::escapeHtml($language->account_number, ENT_NOQUOTES) ?>:</strong></td>
                                <td style="border:2px solid #000;text-align:center;border-right:0;letter-spacing:0.2em;font-size:13px;font-weight:bold"><?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->account_number, ENT_NOQUOTES) ?></td>
                            </tr>
                        </table>
                    </div>
                    <div style="padding:5px 10px;font-size:11px;" align="left">
                        <?php echo Nette\Templating\Helpers::escapeHtml($language->swift, ENT_NOQUOTES) ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->swift, ENT_NOQUOTES) ?><br>
                        <?php echo Nette\Templating\Helpers::escapeHtml($language->iban, ENT_NOQUOTES) ?>
: <?php echo Nette\Templating\Helpers::escapeHtml($eshopSettings->iban, ENT_NOQUOTES) ?></div>
                    <div style="padding:10px">
                        <div class="w100" align="left">
                            <table cellpadding="0" cellspacing="0" class="datumy">
                                <?php 
                                    $type = NULL;
                                    if($order->payment == 'H'){$type = $language->casch;}
                                    else if($order->payment == 'K'){$type = $language->cart;}
                                    else if($order->payment == 'D'){$type = $language->delivery;}
                                    else{ $type = $language->transfer;}
?>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($language->form_of_payment, ENT_NOQUOTES) ?></td>
                                    <td class="label" style="border:0">
                                        <input type="text" value="<?php echo htmlSpecialChars($type) ?>" class="edit" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($language->date_of_issue, ENT_NOQUOTES) ?></td>
                                    <td class="label">
                                        <input type="text" value="<?php echo htmlSpecialChars($template->date($order->createDate, '%d.%m.%Y')) ?>" class="edit" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <?php 
                                        $date = new \Nette\DateTime($order->createDate);
                                        $mydate = $date->getTimestamp() + ((24 * 60 * 60) * $eshopSettings->due_date);
                                        $mytxdate =$date->getTimestamp() + ((24 * 60 * 60) * $eshopSettings->taxation_date)
?>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($language->due_date, ENT_NOQUOTES) ?></td>
                                    <td class="label">
                                        <input type="text" value="<?php if ($order->payment == 'H') { echo htmlSpecialChars($template->date($order->createDate, '%d.%m.%Y')) ;} else { echo htmlSpecialChars($template->date($mydate, '%d.%m.%Y')) ;} ?>" class="edit" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($language->real_date, ENT_NOQUOTES) ?></td>
                                    <td class="label"><input type="text" value="<?php if ($order->payment == 'H') { echo htmlSpecialChars($template->date($order->createDate, '%d.%m.%Y')) ;} else { echo htmlSpecialChars($template->date($mytxdate, '%d.%m.%Y')) ;} ?>" class="edit" readonly></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </td>
                <td style="border:1px solid #ccc" valign="top">
                    <div style="padding:10px">
                        <div class="w100" align="left">
                            <table cellpadding="1" cellspacing="0">
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($language->variable, ENT_NOQUOTES) ?></td>
                                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml(str_replace('/', '', $order->code), ENT_NOQUOTES) ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($language->myorder, ENT_NOQUOTES) ?></td>
                                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($order->createDate, '%d.%m.%Y'), ENT_NOQUOTES) ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="padding:10px;border:2px solid #000;" align="left">
                        <b><?php echo Nette\Templating\Helpers::escapeHtml($language->subscriber, ENT_NOQUOTES) ?>:</b>
                        <div style="padding:3px">
                            <div class="w100">
                                <div class='adresa'>
                                    <?php echo Nette\Templating\Helpers::escapeHtml($order->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->surname, ENT_NOQUOTES) ?><br>
                                    <?php echo Nette\Templating\Helpers::escapeHtml($order->address, ENT_NOQUOTES) ?>

                                </div>
                                <?php echo Nette\Templating\Helpers::escapeHtml($order->zip, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->city, ENT_NOQUOTES) ?><br>
                                <div class="adresa">
                                    <div style='font-size:11px;padding-top:5px'>Tel.: <?php if ($order->phone) { echo Nette\Templating\Helpers::escapeHtml($order->phone, ENT_NOQUOTES) ;} else { echo Nette\Templating\Helpers::escapeHtml($language->none, ENT_NOQUOTES) ;} ?>
, Email: <?php if ($order->email) { echo Nette\Templating\Helpers::escapeHtml($order->email, ENT_NOQUOTES) ;} else { echo Nette\Templating\Helpers::escapeHtml($language->none, ENT_NOQUOTES) ;} ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="padding:10px;padding-top:14px" align="left">
                        <b><?php echo Nette\Templating\Helpers::escapeHtml($language->final_beneficiary, ENT_NOQUOTES) ?>:</b>
                        <div style="padding:3px">
                            <div class="w100">
                                <div class='adresa'>
                                    <?php echo Nette\Templating\Helpers::escapeHtml($order->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->surname, ENT_NOQUOTES) ?><br>
                                    <?php echo Nette\Templating\Helpers::escapeHtml($order->address, ENT_NOQUOTES) ?>

                                </div>
                                <?php echo Nette\Templating\Helpers::escapeHtml($order->zip, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($order->city, ENT_NOQUOTES) ?><br>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
<?php if ($order->note != '') { ?>
            <tr class='pb-main'>
                <td colspan='2' style='padding:10px;border:1px solid #ccc;text-align:left;'>
                    <?php echo Nette\Templating\Helpers::escapeHtml($order->note, ENT_NOQUOTES) ?>

                </td>
            </tr>
<?php } ?>
            <tr class="pb-main">
                
                <td colspan="2" style="padding:10px;border:1px solid #ccc;">
                    <table class="zbozi" cellpadding="0" cellspacing="0">
                        <tr>
                            <th><?php echo Nette\Templating\Helpers::escapeHtml($language->description, ENT_NOQUOTES) ?></th>
                            <th><?php echo Nette\Templating\Helpers::escapeHtml($language->price, ENT_NOQUOTES) ?>
 / <?php echo Nette\Templating\Helpers::escapeHtml($language->stack, ENT_NOQUOTES) ?></th>
                            <th><?php echo Nette\Templating\Helpers::escapeHtml($language->number, ENT_NOQUOTES) ?></th>
                            <th><?php echo Nette\Templating\Helpers::escapeHtml($language->price, ENT_NOQUOTES) ?></th>
                        </tr>
                        <?php $maxDPH = 0; $maxWDPH = 0;$iterations = 0; foreach ($order->getProducts() as $product) { ?>
                        <?php 
                            $maxDPH += $product->getProductObject()->pricedph * $product->count;
                            $maxWDPH += $product->getProductObject()->getPrice() * $product->count
?>
                        <tr>
                            <td align="left"><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->name, ENT_NOQUOTES) ?></td>
                            <td style="line-height:140%;white-space:nowrap;"><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->getPrice(), ENT_NOQUOTES) ?>
 € <?php echo Nette\Templating\Helpers::escapeHtml($language->without_dph, ENT_NOQUOTES) ?>
<br><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->pricedph, ENT_NOQUOTES) ?>
 € <?php echo Nette\Templating\Helpers::escapeHtml($language->with_dph, ENT_NOQUOTES) ?></td>
                            <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($product->count, ENT_NOQUOTES) ?></td>
                            <td style="line-height:140%;white-space:nowrap"><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->getPrice() * $product->count, ENT_NOQUOTES) ?>
 € <?php echo Nette\Templating\Helpers::escapeHtml($language->without_dph, ENT_NOQUOTES) ?>
<br><?php echo Nette\Templating\Helpers::escapeHtml($product->getProductObject()->pricedph * $product->count, ENT_NOQUOTES) ?>
 € <?php echo Nette\Templating\Helpers::escapeHtml($language->with_dph, ENT_NOQUOTES) ?> </td>
                        </tr>
<?php $iterations++; } ?>
                        <tr>
                            <td colspan="3" class="c noborder"><?php echo Nette\Templating\Helpers::escapeHtml($language->delivery_price, ENT_NOQUOTES) ?>:</td>
                            <td style="line-height:140%;white-space:nowrap">
                                <?php echo Nette\Templating\Helpers::escapeHtml($order->deliveryPrice * $eshopSettings->dph, ENT_NOQUOTES) ?>
,-  € <?php echo Nette\Templating\Helpers::escapeHtml($language->without_dph, ENT_NOQUOTES) ?><br>
                                <?php echo Nette\Templating\Helpers::escapeHtml($order->deliveryPrice, ENT_NOQUOTES) ?>
,-  € <?php echo Nette\Templating\Helpers::escapeHtml($language->with_dph, ENT_NOQUOTES) ?>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="noborder" style="text-align:right;"><b><?php echo Nette\Templating\Helpers::escapeHtml($language->final_price, ENT_NOQUOTES) ?>:</b></td>
                            <td style="line-height:140%;white-space:nowrap">
                                <?php echo Nette\Templating\Helpers::escapeHtml($maxWDPH, ENT_NOQUOTES) ?>
,- € <?php echo Nette\Templating\Helpers::escapeHtml($language->without_dph, ENT_NOQUOTES) ?><br>
                                <?php echo Nette\Templating\Helpers::escapeHtml($maxDPH, ENT_NOQUOTES) ?>
,- € <?php echo Nette\Templating\Helpers::escapeHtml($language->with_dph, ENT_NOQUOTES) ?>

                    </table>
                </td>
            </tr>
        </table>

        <!-- ODDELENI -->

        <table class="maintable" cellspacing="0" cellpadding="0">
            <tr class="pb-box">
                <td colspan=2 style="border:1px solid #ccc;">
                    <div style="padding:10px;">
                        <table style="width:100%;text-align:right;">
                            <tr>
                                <td width="25%"><?php echo Nette\Templating\Helpers::escapeHtml($language->tax_base, ENT_NOQUOTES) ?>:</td>
                                <td width="25%"><?php echo Nette\Templating\Helpers::escapeHtml($language->vat_rate, ENT_NOQUOTES) ?>:</td>
                                <td width="25%"><?php echo Nette\Templating\Helpers::escapeHtml($language->amout_vat, ENT_NOQUOTES) ?>:</td>
                                <td width="25%"><?php echo Nette\Templating\Helpers::escapeHtml($language->total, ENT_NOQUOTES) ?>:</td>
                            </tr>
                            <tr>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($maxWDPH + ($order->deliveryPrice * $eshopSettings->dph), ENT_NOQUOTES) ?>,- €</td>
                                <td>21%</td>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml(($maxDPH - $maxWDPH) + $order->deliveryPrice * $eshopSettings->dph, ENT_NOQUOTES) ?>,- €</td>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($maxDPH + $eshopSettings->dph, ENT_NOQUOTES) ?>,- €</td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
            <tr class="pb-box">
                <td colspan=2 style="border:1px solid #ccc;font-size:14px;text-align:right;">
                    <div style="padding:10px;">
                        <b><?php echo Nette\Templating\Helpers::escapeHtml($language->total_total, ENT_NOQUOTES) ?>:</b>
                        <div style="font-size:18px;padding:8px 0 0 0"><?php echo Nette\Templating\Helpers::escapeHtml($maxDPH + $order->deliveryPrice, ENT_NOQUOTES) ?>,- €</div>
                    </div>
                </td>
            </tr>
            <tr class="pb-box">
                <td colspan="2" style="padding-top:20px;padding-bottom:0" valign="bottom">
                    <div style="height:3.4cm">
                        <div style="float:right;width:50%;"><?php echo Nette\Templating\Helpers::escapeHtml($language->supplier, ENT_NOQUOTES) ?>:
                            <div style="text-align:center"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($eshopSettings->stamp)) ?>"></div>
                        </div>
                        <?php echo Nette\Templating\Helpers::escapeHtml($language->subscriber, ENT_NOQUOTES) ?>:
                    </div>
                    <div style="clear:both;border-top:1px solid #ccc;padding-top:2px;font-size:10px;">
                        <div style="float:right"></div>
                        <?php echo Nette\Templating\Helpers::escapeHtml($language->footer, ENT_NOQUOTES) ?>

                    </div>
                </td>
            </tr>
        </table>
<?php
}}

//
// block _date
//
if (!function_exists($_l->blocks['_date'][] = '_lb33ea2d95f2__date')) { function _lb33ea2d95f2__date($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('date', FALSE)
?>    <div id="favyst">
        <a class="linkclose" id="swfavyst0" href="#" onclick="var t=this;sw('favyst0',0,function(i){ t.className=i?'linkopen':'linkclose';});return false;">Datum vystavení faktury: <?php echo Nette\Templating\Helpers::escapeHtml($template->date($order->createDate, '%d.%m.%Y'), ENT_NOQUOTES) ?></a>
        <div id="favyst0" class="dn" style="padding-top:5px">
            <form action="<?php echo htmlSpecialChars($_control->link("changeOrderDate!", array($order->id))) ?>" method="post" class="ajax">
                (den.měsíc.rok)
                <input type="text" name="mydate" size="20" value="<?php echo htmlSpecialChars($template->date($order->createDate, '%d.%m.%Y')) ?>">
                <input type="submit" value="Změnit">
            </form>
        </div>
    </div>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb3412038f1b_head')) { function _lb3412038f1b_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin.css">
<style>
HTML,BODY{ }
BODY{ font-family:arial;text-align:center;margin:0;padding:40px 0 15px 0;}
BODY,TABLE{ font-size:12px}
.light{ color:#444;width:50%}
INPUT{ margin:0 !important;}
.label{ border:1px solid #aaa;text-align:center}
.edit{ border:0;padding:2px;margin:1px 0 0 0;text-align:center;width:95px;font-size:12px;font-family:arial}
TABLE.datumy TD{ vertical-align:bottom}
.w100{ width:100%;line-height:135%;}
.w100 TABLE{ width:100%;}
.maintable{ width:19cm;margin:0 auto;border-collapse:collapse;}
.maintable TD{ margin:0;padding:0;}
.adresa{ padding-top:2px;}
.zbozi{ margin-bottom:5px;margin-top:10px;border-collapse:collapse;width:100%;}
.zbozi TH,
.zbozi TD{ padding:2px 4px;margin:0;border:1px solid #ccc;}
.zbozi TH{ font-weight:normal;border-bottom:2px solid #ccc;text-align:left;}
.zbozi TD.noborder{ border-left:0;border-top:0;border-bottom:0;background:transparent;text-align:right;}

#favyst{ font-weight:bold;text-align:left;padding:8px 8px 7px 8px;position:fixed;background:#ffffcc;border-bottom:1px solid #ccc;
width:100%;
font-size:13px;
top:0;
}

.linkopen,.linkclose{ background:url(img/light_openclose.gif) no-repeat 0 -28px;padding-left:12px;font-size:11px;color:#333;margin:0;
text-decoration:none;}
.linkopen{ background-position:0 5px;}
.dn{ display:none}
.db{ display:block}
</style>
<style media="print">
BODY{ margin:0;padding:0;}
#favyst{ display:none;}
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
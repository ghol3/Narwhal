<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.80952500 1405334638";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:96:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Settings/eshop.latte";i:2;i:1405334392;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Settings/eshop.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rcuyu0b43l')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbbfe54f158c_content')) { function _lbbfe54f158c_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <form<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["editEshopForm"], array (
), FALSE) ?>>
            <div style="float:right">
            </div>
                    

            <div class="btn">
                <div style="clear:both;font-size:0;height:0"></div>
                <div id="baseform" class="t twbg" style="width:100%;">
                    <h3>Nastavení</h3>
                    <p><span>Defaultní jazyk faktur:</span>
                        <select<?php $_input = $_form["default_language"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>
><?php echo $_input->getControl()->getHtml() ?></select></p>
                        <p><span>Cena DPH:</span>
                    	<input style="width:570px;"<?php $_input = $_form["price_dph"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>></p>

                    	<p><span>Počet objednávek na stránku:</span>
                    	<input style="width:570px;" class=""<?php $_input = $_form["paggination"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>></p>

                        <p>
                            <span>Změní emailu:</span>
                            <textarea size="90" class="" style="width:570px;height:150px"<?php $_input = $_form["email"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'size' => NULL,
  'class' => NULL,
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
                        </p>
                        
                        <p>
                            <span>Smluvní podmínky:</span>
                            <textarea size="90" class="" style="width:570px;height:150px"<?php $_input = $_form["conditions"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'size' => NULL,
  'class' => NULL,
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
                        </p>
                        
                        <h3>Faktury</h3>
                        <p>
                            <span>Datum splatnosti (počet dní od vydání):</span>
                            <input style="width:570px;height:40px;font-size:25px" class=""<?php $_input = $_form["due_date"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Datum uskutečnění zdanitelýho plnění (počet dní od vydání):</span>
                            <input style="width:570px;height:40px;font-size:25px" class=""<?php $_input = $_form["taxation_date"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Číslo první faktury:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["order_number"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <input<?php $_input = $_form["last_order"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
                        <input<?php $_input = $_form["original_order_number"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
                        <p>
                            <span>Název společnosti:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Telefonní číslo:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company_tel"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Adresa společnosti:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company_address"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Kontaktní email:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company_email"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Město:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company_city"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Poštovní směrovací číslo:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company_zip"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>WWW adresa:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["company_url"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>IČO:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["ic"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>DIČ:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["dic"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Číslo účtu:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["account_number"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>SWIFT:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["swift"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>IBAN:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["iban"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Cena PPL:</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["ppl_expres_price"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Cena Messagengera</span>
                            <input style="width:570px;" class=""<?php $_input = $_form["messenger_price"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
  'class' => NULL,
))->attributes() ?>>
                        </p>
                        <p>
                            <span>Razítko:</span>
                            <input style="width:570px;"<?php $_input = $_form["stamp"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'style' => NULL,
))->attributes() ?>><br>
                            <input<?php $_input = $_form["stamp_original"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>>
                            <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($eshopSettings->stamp)) ?>">
                        </p>
                        

                    <td colspan="2"><input type="submit" class="btn btn-success right" value="Uložit změny"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'class' => NULL,
  'value' => NULL,
))->attributes() ?>></td>


                <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
                </div>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbce0fd34d8b_head')) { function _lbce0fd34d8b_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin2.css">
<link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin.css">
<script type="text/javascript" src="scripts.js"></script>
        <div class="heading">Nastavení systému</div>
        <style>
            .twbg SPAN
            {
                background:#eee;
            }
        .t
        {
            float:left;
        }
        .t P
        {
            margin:0;
            padding:0;
            clear:left;
            line-height:180%;
        }
        .t SPAN
        {
            width:230px;
            font-weight:bold;
            padding:0 5px;
            margin:0 5px 2px 0;
            display:block;
            float:left;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
        }
        .t SPAN.del
        {
            width:auto;
            font-weight:normal;
            background:#fff url(../../images/admin/del.gif) no-repeat center left;
            padding:0 0 0 3px;
            display:inline;
            float:none;
        }
        .t SPAN.cprice
        {
            width:60px;
            text-align:right;
            font-weight:normal;
        }
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
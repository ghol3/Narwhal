<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.44529900 1405334180";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/emails.latte";i:2;i:1405333915;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Order/emails.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'um6epzotdz')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5182928a78_content')) { function _lb5182928a78_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if (count($emails) == 0) { ?>
    <div style="padding:20px;text-align:center">Nebylo odesláno žádné potvrzení.</div>
<?php } else { ?>
	<table width="100%" class="mytable" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td>Datum</td>
                    <td>Příjemce</td>
                    <td>Uživatel</td>
                    <td align="right">Včetně faktury</td>
                </tr>
            </thead>
<?php $iterations = 0; foreach ($emails as $email) { ?>
                <tr>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($email->createDate, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($email->address, ENT_NOQUOTES) ?></td>
                    <td><?php echo Nette\Templating\Helpers::escapeHtml($email->getAdminObject()->getUserInfo()->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($email->getAdminObject()->getUserInfo()->surname, ENT_NOQUOTES) ?></td>
                    <td><?php if ($email->facture == "Y") { ?><span class="green">ANO</span><?php } else { ?>
<span class="red">NE</span><?php } ?></td>
                </tr>
<?php $iterations++; } ?>
	</table>
<?php } 
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbb3eab7ae89_head')) { function _lbb3eab7ae89_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
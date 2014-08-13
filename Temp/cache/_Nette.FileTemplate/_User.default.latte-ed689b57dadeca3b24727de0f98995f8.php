<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.09869300 1405334636";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/User/default.latte";i:2;i:1405334473;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/User/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ksla9yq9se')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb190ac9c72b_content')) { function _lb190ac9c72b_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Správa uživatelů</div>
    <a href="<?php echo htmlSpecialChars($_control->link("User:add")) ?>"><strong>Přidat nového uživatele</strong></a>
    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/sep.gif" align="absmiddle" style="margin:0 5px">
    <a href="<?php echo htmlSpecialChars($_control->link("User:default")) ?>"><strong>Správa uživatelů</strong></a>
	<table cellpadding="0" cellspacing="0" class="mytable" id="table" style="margin-top:20px;margin-left:15px">
            <thead>
		<tr style="font-size:11px">
                    <td class="nobtl"></td>
                    <td>Účet</td>
                    <td align="right">E-mail</td>
                    <td align="center">Datum registrace</td>
                    <td align="center">Pozice</td>
                    <td align="center">Jméno</td>
                    <td align="center">Příjmení</td>
                    <td class="nobtlr"></td>
                </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($users as $user) { ?>
		<tr>
                    <td style="background:#eee;padding:0">
                        <a href="<?php echo htmlSpecialChars($_control->link("User:edit", array($user->id))) ?>
" style="display:block;padding:10px 6px"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/edit.gif" alt="Upravit"></a>
                    </td>
                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($user->account, ENT_NOQUOTES) ?></td>
                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($user->email, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($user->registrationDate, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($user->adminLevel, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($user->getUserInfo()->username, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($user->getUserInfo()->surname, ENT_NOQUOTES) ?></td>
                    <td style="background:#eee"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/del.gif" style="cursor:pointer" onclick="if(confirm('Opravdu chcete tuto položku smazat?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("delete!", array($user->id)))) ?>"></td>
                </tr>
<?php $iterations++; } ?>
                <tr class="tfoot">
                </tr>
            </tbody>
        </table>    
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbf8232f9ea0_head')) { function _lbf8232f9ea0_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
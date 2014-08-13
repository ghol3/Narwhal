<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.64568000 1405334639";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:98:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Language/default.latte";i:2;i:1405333756;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Language/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '6zm2pd8qku')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbca17088e80_content')) { function _lbca17088e80_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Správa jazyků faktury</div>
    <a href="<?php echo htmlSpecialChars($_control->link("Language:add")) ?>"><strong>Přidat nový jazyk</strong></a>
    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/sep.gif" align="absmiddle" style="margin:0 5px">
    <a href="<?php echo htmlSpecialChars($_control->link("Language:default")) ?>"><strong>Správa jazyků faktury</strong></a> 
	<table cellpadding="0" cellspacing="0" class="mytable" id="table" style="margin-top:20px;margin-left:15px">
            <thead>
		<tr style="font-size:11px">
                    <td class="nobtl"></td>
                    <td>id</td>
                    <td align="right">Jméno</td>
                    <td class="nobtlr"></td>
                </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($languages as $lang) { ?>
		<tr>
                    <td style="background:#eee;padding:0">
                        <a href="<?php echo htmlSpecialChars($_control->link("Language:edit", array($lang->id))) ?>
" style="display:block;padding:10px 6px"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/edit.gif" alt="Upravit"></a>
                    </td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($lang->id, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($lang->name, ENT_NOQUOTES) ?></td>
                    <td style="background:#eee"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/del.gif" style="cursor:pointer" onclick="if(confirm('Opravdu chcete tento jazyk smazat?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("delete!", array($lang->id)))) ?>"></td>
                </tr>
<?php $iterations++; } ?>
                <tr class="tfoot">
                    <td colspan="12" class="nobblr" style="padding:10px 0 30px 0;text-align:right">
                        <input type="submit" style="font-weight:bold" value="Uložit změny">
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
if (!function_exists($_l->blocks['head'][] = '_lb7a1104a7be_head')) { function _lb7a1104a7be_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
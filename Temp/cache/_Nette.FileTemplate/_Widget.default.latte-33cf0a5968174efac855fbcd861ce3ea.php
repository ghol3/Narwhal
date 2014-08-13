<?php //netteCache[01]000410a:2:{s:4:"time";s:21:"0.34839000 1405334633";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:96:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Widget/default.latte";i:2;i:1405334575;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Widget/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '43y9u0uwp4')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb341734cae3_content')) { function _lb341734cae3_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Správa widgetů</div>
    <a href="<?php echo htmlSpecialChars($_control->link("Widget:add")) ?>"><strong>Přidat nový widget</strong></a>
    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/sep.gif" align="absmiddle" style="margin:0 5px">
    <a href="<?php echo htmlSpecialChars($_control->link("Widget:default")) ?>"><strong>Správa widgetů</strong></a> 
<div id="<?php echo $_control->getSnippetId('widgets') ?>"><?php call_user_func(reset($_l->blocks['_widgets']), $_l, $template->getParameters()) ?>
</div>    </form>
<?php
}}

//
// block _widgets
//
if (!function_exists($_l->blocks['_widgets'][] = '_lb4926c7c656__widgets')) { function _lb4926c7c656__widgets($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('widgets', FALSE)
?>	<table cellpadding="0" cellspacing="0" class="mytable" id="table" style="margin-top:20px;margin-left:15px">
            <form action="<?php echo htmlSpecialChars($_control->link("Widget:updateAll")) ?>" method="POST">
            <thead>
		<tr style="font-size:11px">
                    <td class="nobtl"></td>
                    <td>#Id</td>
                    <td align="right">Identifikátor</td>
                    <td align="center">Vytvořil</td>
                    <td align="center">Pozice</td>
                    <td align="center">Aktivní</td>
                    <td class="nobtlr"></td>
                </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($widgets as $widget) { ?>
		<tr>
                    <td style="background:#eee;padding:0">
                        <a href="<?php echo htmlSpecialChars($_control->link("Widget:edit", array($widget->id))) ?>
" style="display:block;padding:10px 6px"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/edit.gif" alt="Upravit"></a>
                    </td>
                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($widget->id, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($widget->name, ENT_NOQUOTES) ?></td>
                    <?php  $myuser = $widget->getUserObject()->getUserInfo() ?>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($myuser->username, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($myuser->surname, ENT_NOQUOTES) ?></td>
                    <td align="center"><input type="text" size="2" name="priority[<?php echo htmlSpecialChars($widget->id) ?>
]" value="<?php echo htmlSpecialChars($widget->priority) ?>"></td>
                    <td align="center"><input type="checkbox" name="visibility[<?php echo htmlSpecialChars($widget->id) ?>
]" <?php if ($widget->visibility == 1) { ?>checked<?php } ?>></td>
                    <td style="background:#eee"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/del.gif" style="cursor:pointer" onclick="if(confirm('Opravdu chcete tento widget smazat?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("delete!", array($widget->id)))) ?>"></td>
                </tr>
<?php $iterations++; } ?>
                <tr class="tfoot">
                    <td colspan="12" class="nobblr" style="padding:10px 0 30px 0;text-align:right">
                        <input type="submit" style="font-weight:bold" value="Uložit změny">
                    </td>
                </tr>
            </tbody>
        </table>    
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb66740923e0_head')) { function _lb66740923e0_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
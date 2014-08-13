<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.94132600 1405334636";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Task/default.latte";i:2;i:1405334436;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Task/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '0kzx87al1h')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0ac48058c3_content')) { function _lb0ac48058c3_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Správa úkolů</div>
    <a href="<?php echo htmlSpecialChars($_control->link("Task:add")) ?>"><strong>Přidat nový úkol</strong></a>
    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/sep.gif" align="absmiddle" style="margin:0 5px">
    <a href="<?php echo htmlSpecialChars($_control->link("Task:default")) ?>"><strong>Správa úkolů</strong></a> 
	<table cellpadding="0" cellspacing="0" class="mytable" id="table" style="margin-top:20px;margin-left:15px">
            <form action="" method="POST">
            <thead>
		<tr style="font-size:11px">
                    <td class="nobtl"></td>
                    <td>Název</td>
                    <td align="center">Datum zadání</td>
                    <td align="center">Autor</td>
                    <td align="center">Status</td>
                    <td align="center">Typ</td>
                    <td align="center">Upozornit přes SMS</td>
                    <td align="center">Upozornit přes E-mail</td>
                    <td class="nobtlr"></td>
                </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($tasks as $task) { ?>
		<tr>
                    <td style="background:#eee;padding:0">
                        <a href="<?php echo htmlSpecialChars($_control->link("Task:edit", array($task->id))) ?>
" style="display:block;padding:10px 6px"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/edit.gif" alt="Upravit"></a>
                    </td>
                    <td style="line-height:135%">
                        <strong><?php echo Nette\Templating\Helpers::escapeHtml($task->name, ENT_NOQUOTES) ?></strong>
                    </td>
                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->createDate, '%d.%m.%Y %H:%m:%S'), ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($task->getAuthorObject()->account, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($task->status, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($task->type, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php if ($task->phone == 'y') { ?><span style="color:green">ANO</span><?php } else { ?>
<span style="color:red">NE</span><?php } ?></td>
                    <td align="center"><?php if ($task->email == 'y') { ?><span style="color:green">ANO</span><?php } else { ?>
<span style="color:red">NE</span><?php } ?></td>
                    <td style="background:#eee"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/del.gif" style="cursor:pointer" onclick="if(confirm('Opravdu chcete toto menu smazat?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("delete!", array($task->id)))) ?>"></td>
                </tr>
<?php $iterations++; } ?>
            </tbody>
        </table>    
    </form>
<?php
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb2cb21be78f_head')) { function _lb2cb21be78f_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
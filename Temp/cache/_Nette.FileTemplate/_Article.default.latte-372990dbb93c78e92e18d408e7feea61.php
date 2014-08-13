<?php //netteCache[01]000411a:2:{s:4:"time";s:21:"0.90479300 1405334630";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Article/default.latte";i:2;i:1405333465;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Article/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'nkura73x73')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc08eefb1a2_content')) { function _lbc08eefb1a2_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="heading">Správa článků</div>
    <a href="<?php echo htmlSpecialChars($_control->link("Article:add")) ?>"><strong>Přidat nový článek</strong></a>
    <img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/sep.gif" align="absmiddle" style="margin:0 5px">
    <a href="<?php echo htmlSpecialChars($_control->link("Article:default")) ?>"><strong>Správa článků</strong></a> 
	<table cellpadding="0" cellspacing="0" class="mytable" id="table" style="margin-top:20px;margin-left:15px">
            <form action="<?php echo htmlSpecialChars($_control->link("Article:updateAll")) ?>" method="POST">
            <thead>
		<tr style="font-size:11px">
                    <td class="nobtl"></td>
                    <td>Titulek</td>
                    <td align="right">Autor</td>
                    <td align="center">Kategorie</td>
                    <td align="center">Počet shlédnutí</td>
                    <td align="center">Počet komentářů</td>
                    <td align="center">Pozice</td>
                    <td align="center">Datum publikace</td>
                    <td class="nobtlr"></td>
                </tr>
            </thead>
            <tbody>
<?php $iterations = 0; foreach ($articles as $article) { ?>
		<tr>
                    <td style="background:#eee;padding:0">
                        <a href="<?php echo htmlSpecialChars($_control->link("Article:edit", array($article->id))) ?>
" style="display:block;padding:10px 6px"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/images/admin/edit.gif" alt="Upravit"></a>
                    </td>
                    <td style="line-height:135%">
                        <strong><?php echo Nette\Templating\Helpers::escapeHtml($article->title, ENT_NOQUOTES) ?>
</strong><br><a href="<?php echo htmlSpecialChars($_control->link(":Front:Page:show", array($article->link))) ?>
" target="_blank" title="Otevřít v novém okně"><?php echo Nette\Templating\Helpers::escapeHtml($article->link, ENT_NOQUOTES) ?></a>
                    </td>
                    <td align="right"><?php echo Nette\Templating\Helpers::escapeHtml($article->authorObject->account, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($article->categoryObject->name, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($article->views, ENT_NOQUOTES) ?></td>
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($article->commentCount, ENT_NOQUOTES) ?></td>
                    <td align="center"><input type="text" size="2" name="position[<?php echo htmlSpecialChars($article->id) ?>
]" value="<?php echo htmlSpecialChars($article->priority) ?>">
                    <td align="center"><?php echo Nette\Templating\Helpers::escapeHtml($article->createDate, ENT_NOQUOTES) ?></td>
                    <td style="background:#eee"><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>
/images/admin/del.gif" style="cursor:pointer" onclick="if(confirm('Opravdu chcete toto menu smazat?')) location.href=<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($_control->link("delete!", array($article->id)))) ?>"></td>
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
if (!function_exists($_l->blocks['head'][] = '_lbb8f9e0cac2_head')) { function _lbb8f9e0cac2_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
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
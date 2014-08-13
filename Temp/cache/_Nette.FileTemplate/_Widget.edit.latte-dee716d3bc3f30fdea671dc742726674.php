<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.75491200 1405310684";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:93:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Widget/edit.latte";i:2;i:1405283043;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Widget/edit.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jghbw7y4sd')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd78d925e84_content')) { function _lbd78d925e84_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <form<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["editForm"], array (
), FALSE) ?>>
            <div style="float:right">
            </div>
                    

            <div class="btn">
                <div style="clear:both;font-size:0;height:0"></div>
                <div id="baseform" class="t twbg" style="width:100%;">
                    <h3>Nový widget</h3>
                        <p><span>Identifikátor (jméno) widgetu:</span>
                    	<input type="text" size="90"<?php $_input = $_form["name"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'size' => NULL,
))->attributes() ?>></p>

                    	<p><span>CSS třída (white-wrapper | grey-wrapper):</span>
                    	<input type="text" size="90" class=""<?php $_input = $_form["class"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'size' => NULL,
  'class' => NULL,
))->attributes() ?>></p>
                        
                        <p><span>Typ widgetu:</span>
                            <select<?php $_input = $_form["type"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->attributes() ?>
><?php echo $_input->getControl()->getHtml() ?></select></p>

                        <p><span>Obsah widgetu:</span>
                            <textarea size="90" class="" style="width:600px;height:400px"<?php $_input = $_form["content"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'size' => NULL,
  'class' => NULL,
  'style' => NULL,
))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea></p>

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
if (!function_exists($_l->blocks['head'][] = '_lbaab8b24ad0_head')) { function _lbaab8b24ad0_head($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><script type="text/javascript" src="scripts.js"></script>
        <div class="heading">Editace widgetu - <?php echo Nette\Templating\Helpers::escapeHtml($widget->name, ENT_NOQUOTES) ?></div>
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
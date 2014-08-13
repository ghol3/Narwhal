<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.54833100 1405511399";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Auth/Login.latte";i:2;i:1405509047;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Auth/Login.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'xvqvib9chn')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (!$user->isLoggedIn()) { ?>
    <!DOCTYPE html>
    <html>
        <!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
        <!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
        <!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
        <!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>Blacklist CMS - Administration</title>
            <link rel="stylesheet" href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/adminstyles/css/style.css">
            <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/jquery.js" type="text/javascript"></script>
            <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/sha512-min.js" type="text/javascript"></script>
            <script src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/js/validateAdminForm.js" type="text/javascript"></script>
            <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        </head>
        <body>
            <span class="byline"><?php $iterations = 0; foreach ($flashes as $flash) { ?>
<div class="flash <?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?>
</div><?php $iterations++; } ?>
</span>
            <div style="margin:auto; width:150px; height:250px;"></div>
            <form onSubmit="validate()" class="login"<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = $_control["adminLoginForm"], array (
  'onSubmit' => NULL,
  'class' => NULL,
), FALSE) ?>>
                <p>
                    <label<?php $_input = $_form["account"]; echo $_input->{method_exists($_input, 'getLabelPart')?'getLabelPart':'getLabel'}()->attributes() ?>>Account:</label>
                    <input type="text" id="login" value="<?php echo htmlSpecialChars($acc) ?>
"<?php $_input = $_form["account"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'id' => NULL,
  'value' => NULL,
))->attributes() ?>>
                </p>
                <p>
                    <label<?php $_input = $_form["password"]; echo $_input->{method_exists($_input, 'getLabelPart')?'getLabelPart':'getLabel'}()->attributes() ?>>Password:</label>
                    <input id="password" value="<?php if ($acc == 'account') { ?>
password<?php } ?>"<?php $_input = $_form["password"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'id' => NULL,
  'value' => NULL,
))->attributes() ?>>
                    <input value=""<?php $_input = $_form["hpassword"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'value' => NULL,
))->attributes() ?>>
                </p>
                <p class="login-submit">
                    <button type="submit" class="login-button"<?php $_input = $_form["send"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'type' => NULL,
  'class' => NULL,
))->attributes() ?>>Login</button>
                </p>
                <p class="forgot-password"><input <?php if ($acc != 'account') { ?>
checked<?php } $_input = $_form["remember"]; echo $_input->{method_exists($_input, 'getControlPart')?'getControlPart':'getControl'}()->addAttributes(array (
  'checked' => NULL,
))->attributes() ?>>Remember me | <a href="<?php echo htmlSpecialChars($_control->link(":Front:Homepage:default")) ?>">Back to homepage</a></p>
            <?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form, FALSE) ?></form>
        </body>
    </html>
        
        
<?php } else { ?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//CZ" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
        <html>
            <head>
                <title>Administrace</title>
                <meta http-equiv="content-type" content="text/html;charset=utf-8">
            </head>
            <FRAMESET rows="30px,*" cols="100%" frameborder="0" framespacing="0">
            <FRAME frameborder="0" scrolling="no" src="<?php echo htmlSpecialChars($_control->link("Auth:top")) ?>" name="topframe" noresize>
            <FRAMESET cols="180px,*" framespacing="0">
            <FRAME frameborder="0" src="<?php echo htmlSpecialChars($_control->link("Auth:menu")) ?>" scrolling="auto" name="left" noresize>
            <FRAME frameborder="0" src="<?php echo htmlSpecialChars($_control->link("Order:new")) ?>" name="frm" scrolling="auto" noresize>
            </FRAMESET>
            <NOFRAMES>Váš prohlížeč nepodporuje rámce. Nainstalujte si novější prohlížeč.</NOFRAMES>
            </FRAMESET>
</html>
       
<?php } 
<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.26187700 1405346876";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:93:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/Contact.latte";i:2;i:1405346871;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/FrontModule/templates/New/Contact.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'al2ybbonbf')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb953e857d06_content')) { function _lb953e857d06_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Kontaktujte nás</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="<?php echo htmlSpecialChars($_control->link("Homepage:default")) ?>">Hlavná</a></li>
                    <li>Kontaktujte nás</li>
                </ul>
			</div>
		</div>
	</section>
                    <div id="white-wrapper">
                        <div class="container" style="padding:20px;">
                            <table>
                                <tr>
                                    <td><img src="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/logo2.jpg"></td>
                                    <td valign="top" style="width:500px;">
                                        <span  style="font-size:20px;">
                                            <strong>&nbsp;&nbsp;&nbsp;KELKOS, s. r. o. - Antiradary.sk</strong>
                                        </span><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;Domkárska 17<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;821 05 Bratislava<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;Slovenská republika
                                    </td>
                                    <td style="width:450px;">
                                        <table>
                                            <tr>
                                                <td>IČO:</td>
                                                <td align="right">47626623</td>
                                            </tr>
                                            <tr>
                                                <td>IČ DPH:</td>
                                                <td align="right">SK2024009625</td>
                                            </tr>
                                            <tr>
                                                <td>Bankovné spojenie:</td>
                                                <td align="right">&nbsp;&nbsp;<strong>FIO, banka, a.s. 2700544542/8330</strong></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
    <section class="white-wrapper nopadding">
    	<div class="container">
            <div id="map" style="position: relative; overflow: hidden; -webkit-transform: translateZ(0px); background-color: rgb(229, 227, 223);">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.225886936343!2d17.1826883018655!3d48.14445021762286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c88c9e8ff5657%3A0x7e0884bab737c06a!2sDomk%C3%A1rska+17%2C+821+05+Bratislava%2C+Slovensko!5e0!3m2!1scs!2s!4v1405115534182" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="contact_form">
		<div id="message"></div>
            <form id="contactform" action="contact.php" name="contactform" method="post">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="name" id="name" class="form-control" placeholder="Meno a priezvisko"> 
					<input type="text" name="email" id="email" class="form-control" placeholder="Váš email">
					<input type="text" name="website" id="website" class="form-control" placeholder="Telefon"> 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="subject" id="subject" class="form-control" placeholder="Predmet">  
					<textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Telo správy"></textarea>
					<button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right">Odoslať správu</button>
				</div>
            </form>    
        </div><!-- end contact-form -->
        
        <div class="clearfix"></div>
        
        </div>
        <div class="row padding-top margin-top">
			<div class="contact_details">
				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing animated" style="visibility: visible;">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa"><img src='<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath), ENT_QUOTES) ?>/point.png'></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                                                        <p>
                                                            KELKOS, s.r.o. Štefánikova 1398/36<br>
                                                            071 01 Michalovce, Slovenská republika<br>
                                                        </p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->
                
				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing animated" style="visibility: visible;">
							<div class="contact-icon">
								<a href="#" class=""> <i class="fa"><img src='<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath), ENT_QUOTES) ?>/telephone.png'></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                                                        <p>
                                                            Objednávky: 0910 800 011<br>
                                                            Informace : 1111 222 333
                                                        </p>
						</div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->  

				<div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
					<div class="text-center">
						<div class="wow swing animated" style="visibility: visible;">
							<div class="contact-icon">
                                                            <a href="#" class=""> <i class="fa"><img src='<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath), ENT_QUOTES) ?>/email.png'></i> </a>
							</div><!-- end dm-icon-effect-1 -->
                                                        <p>
                                                            Objednávky: objednavky@antiradary.sk<br>
                                                            Informace : info@antiradary.sk
                                                        </p>
                                                </div><!-- end service-icon -->
					</div><!-- end miniboxes -->
				</div><!-- end col-lg-4 -->                  
			</div><!-- end contact_details -->
        </div><!-- end margin-top --><br><br>
        </div>
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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 
<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.75647800 1405308381";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:91:"/Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Auth/menu.latte";i:2;i:1405279786;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-03-17";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/eshop/Blacklist/AdminModule/templates/Auth/menu.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'cmuxyqp0o6')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title></title><link href="<?php echo htmlSpecialChars(Nette\Templating\Helpers::safeUrl($basePath)) ?>/css/admin2.css" type="text/css" rel="stylesheet"><meta http-equiv="content-Type" content="text/html; charset=windows-1250"></head><body><script type="text/javascript" src="top_data/scripts.js"></script><script type="text/javascript">
function updateExp(){
        var tmp = readCookie("export");
        if(tmp) {
                tmp = tmp.split(':');
                document.getElementById('export').innerHTML = tmp.length-1;
        }
        else {
                document.getElementById('export').innerHTML = '';
        }
        window.setTimeout("updateExp()", 2000);
}

function readCookie(name)
{
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
}
window.setTimeout("updateExp()", 2000);


var lToggleA = ''
function toggleA(o){
        if(lToggleA==o)return false;
        else if(lToggleA != '') lToggleA.className='';
        if(o.className=='mclicked')o.className='';
        else o.className='mclicked';
        lToggleA=o;
}

function sb(){
	window.setTimeout(function(){
		top.frm.document.location.reload();
		document.location.reload();
	}, 1000);
}
</script>

<style>
BODY{ background:#eee;overflow:auto;padding:0;margin:0;}
.menuwrap{ padding:15px 15px 5px 15px;}
.num{ float:right;font-weight:bold;}
</style>

<div class="menuwrap">
<div class="menu">


<div style="margin-bottom:18px">
<form action="<?php echo htmlSpecialChars($_control->link("Order:addNewOrder")) ?>" target="_blank" method="post" onsubmit="if(!confirm('Nová objednávka?'))return false;else sb();">
                    <input name="novykod" value="" type="hidden">
                    <input value="Vytvořit objednávku" style="width:100%;font-weight:bold;font-size:11px;" type="submit">
                </form>
</div>

<?php if ($user->isAllowed('Admin:Order')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Order:new")) ?>
" onclick="toggleA(this)" id="xo" class="mclicked" target="frm"><span class="num"> <b><?php echo Nette\Templating\Helpers::escapeHtml($newCount, ENT_NOQUOTES) ?>
</b></span>Nevyřízené (nové)</a><?php } ?>

<?php if ($user->isAllowed('Admin:Order')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Order:default")) ?>
" onclick="toggleA(this)" target="frm">Vyřízené</a><?php } ?>

<?php if ($user->isAllowed('Admin:Order')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Order:broken")) ?>
" onclick="toggleA(this)" target="frm">Zrušené</a><?php } ?>

<?php if ($user->isAllowed('Admin:Export')) { ?><a class="" href="<?php echo htmlSpecialChars($_control->link("Export:default")) ?>
" onclick="toggleA(this)" target="frm"><span id="export" class="num"></span>Export</a><?php } ?>



<div style="margin-top:5px">
<form action="hledat.php" target="frm" method="get" onsubmit="if(this.co.value == 'Hledej...' || !this.co.value) return false;toggleA(this);">
<input name="co" value="Hledej..." onclick="if(this.value=='Hledej...'){ this.value='';this.style.color='#111'}" style="font-family:tahoma;height:22px;font-size:11px;color:#555;padding:2px 4px;width:100%" type="text">
</form>
</div>


<br>

<p><span></span></p>
<script type="text/javascript">
function check_unread(){
	var o=$('unread');
	gtimer.add(500, 'sin', function(n){ setOpacity(o,n);}, 10, 0);
	setTimeout(function(){
		get('notes_func.php?get_notes_count=1', function(s){
			o.innerHTML = s > 0 ? s : '';
			setOpacity(o, 10);
		})
	},1000);
}
setInterval(check_unread, 60*1000); // minuta
</script>


<?php if ($user->isAllowed('Admin:Dealer')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Dealer:default")) ?>
" onclick="toggleA(this)" target="frm">Seznam prodejců</a><?php } ?>

<?php if ($user->isAllowed('Admin:Warehouse')) { ?><a class="" href="<?php echo htmlSpecialChars($_control->link("Warehouse:default")) ?>
" onclick="toggleA(this)" target="frm">Skladová evidence</a><?php } ?>


<br>
<p><span>OBSAH WEBU</span></p>
<?php if ($user->isAllowed('Admin:Product')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Product:default")) ?>
" onclick="toggleA(this);" target="frm">Produkty</a><?php } ?>

<?php if ($user->isAllowed('Admin:Page')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Page:default")) ?>
" onclick="toggleA(this);" target="frm">Podstránky</a><?php } ?>

<?php if ($user->isAllowed('Admin:Article')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Article:default")) ?>
" onclick="toggleA(this);" target="frm">Články</a><?php } ?>

<?php if ($user->isAllowed('Admin:Menu')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Menu:default")) ?>
" onclick="toggleA(this);" target="frm">Menu</a><?php } ?>

<?php if ($user->isAllowed('Admin:Category')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Category:default")) ?>
" onclick="toggleA(this);" target="frm">Kategorie</a><?php } ?>

<?php if ($user->isAllowed('Admin:Widget')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Widget:default")) ?>
" onclick="toggleA(this)" target="frm">Widgety</a><?php } ?>

<?php if ($user->isAllowed('Admin:Panel')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Panel:default")) ?>
" onclick="toggleA(this);" target="frm">Panely</a><?php } ?>

<br>
<p><span>Systém</span></p>
<?php if ($user->isAllowed('Admin:User')) { ?><a href="<?php echo htmlSpecialChars($_control->link("User:default")) ?>
" onclick="toggleA(this);" target="frm">Administrátoři</a><?php } ?>

<?php if ($user->isAllowed('Admin:Task')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Task:default")) ?>
" onclick="toggleA(this);" target="frm">Úkoly</a><?php } ?>

<?php if ($user->isAllowed('Admin:Settings')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Settings:default")) ?>
" onclick="toggleA(this);" target="frm">Konfigurace</a><?php } ?>

<?php if ($user->isAllowed('Admin:Settings')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Settings:eshop")) ?>
" onclick="toggleA(this);" target="frm">Eshop</a><?php } ?>

<?php if ($user->isAllowed('Admin:Language')) { ?><a href="<?php echo htmlSpecialChars($_control->link("Language:default")) ?>
" onclick="toggleA(this);" target="frm">Jazyky faktur</a><?php } ?>

</div>
</div>



</body></html>
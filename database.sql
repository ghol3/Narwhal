-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Stř 13. srp 2014, 21:37
-- Verze serveru: 5.1.69
-- Verze PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `do1848800db`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_articles`
--

CREATE TABLE IF NOT EXISTS `prefix_articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `content` text,
  `image` varchar(150) DEFAULT NULL,
  `link` varchar(150) NOT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `score` int(10) unsigned NOT NULL DEFAULT '0',
  `enableViews` smallint(5) unsigned NOT NULL DEFAULT '1',
  `enableScore` smallint(5) unsigned NOT NULL DEFAULT '1',
  `enableComments` smallint(5) unsigned NOT NULL DEFAULT '1',
  `visibility` smallint(5) unsigned NOT NULL DEFAULT '1',
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `editDate` int(11) NOT NULL DEFAULT '0',
  `category` int(11) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `priority` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `link_UNIQUE` (`link`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Vypisuji data pro tabulku `prefix_articles`
--

INSERT INTO `prefix_articles` (`id`, `title`, `description`, `content`, `image`, `link`, `views`, `score`, `enableViews`, `enableScore`, `enableComments`, `visibility`, `createDate`, `editDate`, `category`, `author`, `priority`) VALUES
(9, 'Najnovší laserový merač rýchlosti TruCam', '', '<p>Je to laserový radar s integrovanou video kamerou a GPS prijímačom. Získané údaje je možné vložiť do geograficko-informačného systému, k tomuto záznamu sa automaticky prikladá aj informácia o polohe, kde bola daná rýchlosť nameraná.</p>\n\n<p>TrueCam je schopný podľa výrobcu preukázať rôzne prekročenia rýchlosti a to i motocyklov. Ďalej disponuje aj ochranou proti zmene údajov kryptovaným, ktorý zaručuje bezpečnosť evidencie priestupkov.</p>\n<p>Režimy merania TrueCam-u:</p>\n<p><strong>Rýchlostný režim</strong><br /> Pre vozidlá idúce rýchlosťou vyššou alebo sa rovnajúcou nastavenej hodnote, je automaticky zaznamenané video a obrázky s prislušnými údajmi</p>\n<p><strong>Automatický režim</strong><br /> Režim kombinujúci automatickú kontrolu dopravy s vytváraným videa na obrázku.<br /> Určené na mobilné použitie alebo pevne inštalovaný systém.</p>\n<p><strong>Motocyklový režim</strong><br /> Určený pre meranie rýchlosti motocyklov so záznamom od počiatku merania na príjazde, po okamih kedy je viditeľný a odfotené zadné evidenčné číslo.</p>\n<p><strong>Režim merania pri zhoršenej viditeľnosti</strong><br /> Použije brány pre zvýšenie bezpečnosti merania rýchlosti počas dažďa, sneženia alebo hmly.</p>\n<p><strong>Video režim</strong><br /> Okamžité zachytenie videa priestupku, pri prejazde na červenú, nezastavení na stopke, predbiehanie pri plnej čiare.</p>\n<p><strong>Dvojrýchlostný režim</strong><br /> Automatické rozpoznanie osobného a nákladného vozidla a priradenie príslušného rýchlostného limitu.</p>\n<p><strong>Vzdialenosť medzi vozidlami</strong><br /> Pri tesne za sebou idúcich vozidlách je zmeraná rýchlosť , čas prejdenia a vzdialenosť medzi dvoma vozidlami.</p><br />\n<p><strong>Technické parametre:</strong></p>\n<p><strong>Maximálna vzdialenosť merania: </strong>1000m</p>\n<p><strong>Minimálna vzdialenosť merania:</strong> Rýchlostný režim 16m , Zhoršená viditeľnosť 61m</p>\n<p><strong>Rozsah merania:</strong> 0km/h do 320 km/h</p>\n<p><strong>Pracovná teplota:</strong> -10°C do +60°C</p>\n<p><strong>Presnosť merania </strong>:+- 3 km/h</p><br />\n<p><strong>Presnosť merania vzdialenosti:</strong> +- 0,15 km/h</p>\n<p><strong>Napájanie:</strong> polymerová batéria nabíjateľná 7,4 V / výdrž až 15 hodín bez nabíjania/</p>\n<p><strong>Záznam na:</strong> SD kartu 2 GB a viac</p>\n<p><strong>Vlnová dĺžka laseru:</strong> 905nm</p>\n<p><strong>Kamera :</strong> 3,1 Mpixel / 2048x1536/</p>\n<p><strong>Objektív kamery:</strong> 75 mm,</p>\n<p><strong>Display: </strong>farebné dotykové 6,9 cm, 240x320 pixelov, 18 bitov na pixel</p>\n<p><strong>GPS:</strong> Sirf star III/ 20 kanálov/</p>\n<p><strong>Software:</strong> jadro os Linux TrueCam software</p>\n<p><strong>Kryptovanie údajov: </strong>AES-128 bitov</p>\n<p><strong>Vstupy/Výstupy: </strong>USB 2.0,RS 232, RS 485 pre nočný blesk, vstup pre dotykový display</p>', 'images/clanky/trucam.png', 'najnovsi-laserovy-merac-rychlosti-trucam', 0, 27, 0, 0, 0, 1, '2014-07-04 00:25:05', 0, 25, 3, 6),
(10, 'Technológia antiradarov - ako funguje antiradar', '', '<p>Radarové detektory, niekedy nie plne presne nazývané "antiradary" sú pasívne zariadenia - veľmi citlivé prijímače v mikrovlnnom pásme. Sú naladené na rovnakú frekvenciu, ktorú vysielajú cestné radary, a ich funkcia by sa dala prirovnať ku klasickému rádioprijímaču.</p>\n<p><strong>Radarové detektory nevysielajú ani nerušia, iba vodičov informujú o prítomnosti radaru.</strong></p>\n<p>Detektory sú riadené mikroprocesorom, ktorý vyhľadáva radary na všetkých svetovo používaných pásmach - X, K a rozdelenom Ka pásme používanom u nás v Slovenskej republike. V blízkosti radaru je vodič upozornený zvukovým a svetelným signálom. Systém inteligentnej signalizácie umožňuje odhadnúť vzdialenosť a polohu miesta, z ktorého je rýchlosť meraná. Detektor Vás tiež upozorní na laserové merače, ktoré sa v zahraničí používajú ku meraniu rýchlosti automobilu na veľkú vzdialenosť. Pokroková FMT technológia zaručuje vynikajúcu citlivosť vo všetkých pásmach s minimom falošných poplachov.</p>\n<p><span class="big"><b>Úspešnosť pri odhaľovaní radarov</span></b></p>\n<p>úspešnosť detekcie, tzn. odhalenie policajného radaru je pri detektoroch relatívne vysoká. Radarový detektor odhalí radar v 98% prípadov. Nie vždy ale stačí vodič včas zareagovať. Radarové detektory sú úspešnejšie pri odhaľovaní radarov v mestách, kde sa lúč radaru dobre odráža od terénnych prekážok, ako na diaľnici.</p>\n<p><strong> Staršie typy detektorov upozorňujú vodičov zhruba v 75-85% prípadoch,kedy by za iných okolností prehliadli radarovú kontrolu a určite zaplatili pokutu.</strong></p>\n<p><strong>Proti novým detektorom nemajú radary typu RAMER-7 veľmi veľkú šancu na úspech. Priemerná účinnosť je okolo 95%: v meste sa blíži ku 100%, na diaľnici približne 90%.</strong></p>\n<p>Vzdialenosť, na ktorú radarový detektor odhalí radar, závisí od konkrétnej situácie, spôsobe merania rýchlosti a hlavne na <strong>odrazoch radarového lúča v teréne</strong>. Pri meraní <strong>proti smeru jazdy</strong> detektor varuje vodičov často aj niekoľko sto metrov pred miestom, v ktorom je meraná rýchlosť. Minimálna vzdialenosť, na ktorú naše detektory odhalia radar je 150 metrov. Dosah radarov RAMER-7 je maximálne 60 metrov, obyčajne sa však meria na vzdialenosť 35 metrov. Preto má v týchto situáciách aj menej pozorný vodič dostatok času správne zareagovať.</p>\n<p>Ak meria polícia rýchlosť v smere jazdy a detektor zachytí odrazené vlny, je obvykle vzdialenosť odhalenia radaru 20-60 metrov pred meraným stanovišťom. Pretože je rýchlosť vozidla zmeraná zhruba 10 až 20 metrov potom ako prejdete okolo radaru, je pri rýchlej reakcii vodiča opať sľubná šanca na úspech.</p>\n<p>Je dôležité si uvedomiť, že pri meraní v smere jazdy je <strong>reakčná doba pre zmenu rýchlosti vozidla veľmi krátka</strong> - rádovo niekoľko sekúnd. Výhodou je, že aj pri meraní v smere jazdy sa lúč radaru dobre odráža najma v hustej zástavbe.</p>\n<p><span class="big"><b>Falošné poplachy</span></b></p>\n<p>Pri falošnom poplachu detektor zapípa rovnako, akoby zistil prítomnosť radaru. V Slovenskej republike je relatívne vysoká úroveň mikrovlnového šumu, ktorý spôsobuje falošné poplachy. Typické zdroje rušenia sú GSM mobilné telefóny používané vo vnútri vozidla, zabezpečovacie systémy bánk a obchodov a automatické otvárania dverí benzínových staníc.</p>\n<p>Všetky nami dodávané detektory sú špeciálne upravené pre použitie v európskych krajinách a na Slovensku. Ich jedinečné technické parametre spôsobujú vysokú odolnosť voči vyššie spomínaným zdrojom rušenia pri zachovaní vynikajúcej citlivosti. Veľmi málo reagujú na <strong>mobilné telefóny GSM, neregistrujú benzínové pumpy ani väčšinu ostatných zdrojov rušenia.</strong></p>', 'images/clanky/radarove_spektrum.jpg', 'ako-funguje-antiradary', 0, 19, 0, 0, 0, 1, '2014-07-04 00:26:16', 0, 25, 3, 1),
(11, 'Nie je antiradar ako antiradar alebo ako si vybrať', '', '<p><strong>Ako postupovať pri výbere antiradaru?</strong></p>\n<p>Treba sa rozhodnúť čo je pre Vás najvhodnejšie  prenosné alebo vstavaný (pevný) antiradar. (Vo vačšine pripádov sa rozhodnú ľudia hneď ako vidia cenu)</p>\n<p>Potrebujete poznať parametre alebo poradiť sa s odborníkmi, ktorí sú veľmi doležití pri výbere, nakoľko niektoré typy nemajú podporu určitých frekvenčných rozsahov a môže sa stať, že investícia nebude  efektívna</p>\n<p><strong>Je veľmi dôležité, aby antiradary, ktoré chceme používať na Slovensku a v Českej republike mali:</strong></p>\n<p>- kvalitnú a rýchlu detekciu Ka pásma od 33,8-34,4 GHz (označuje sa aj ako Ka narrow)</p>\n<p>- aby boli kvalitné a aby mali čo najmenej falošných poplachov</p>\n<p>- aby sa frekvenčné pásma, ktoré nepoužívame sa dali vypnúť</p>\n<p>- aby vstavaný (pevný) antiradar bol správne namontovaný</p>\n<p>- aby prenosný antiradar bol správne umiestnený</p>\n<br/>\n<p><b>Ktorý antiradar je najlepší?</b></p>\n<p><b>Rozdiel medzi prenosným a pevne zabudovateľným radarovým detektorom</b></p>\nPevne zabudovateľné antiradary sú z konštrukčne riešeného hľadiska oveľa citlivejšie ako prenosné zariadenia a reagujú na podstatne väčšiu vzdialenosť. Pevné antiradary sú zabudované do vozidla tzv. skrytou montážou, kt. zaručuje vodičovi maximálnu diskrétnosť. Prenosné zariadenia musia vodiči nosiť neustále so sebou a skrývať pred políciou. V prípade, že má auto pokované sklo, prenosný detektor fungovať nebude.<p> \n<p><b>Rozdiel medzi radarovým detektorom a laserovou rušičkou</b></p>\n<p>Radarové detektory fungujú ako pasívne zariadenia, ktoré sú naladené na rovnakú frekvenciu ako cestné radary. Hlasovou a svetelnou signalizáciou upozorňujú vodiča na prítomnosť merania. Väčšina radarových detektorov je vybavená GPS technológiou, ktorá vďaka integrovanej databáze dokáže upozorniť vodiča na úsekové meranie rýchlosti, prítomnosť stacionárnych radarov, kamier na červenú. Radarové detektory neochránia vodiča pre laserovým meraním z tohto dôvodu je potrebné kombinovať radarový detektor s laserovou rušičkou pre zaistenie 100% ochrany. Výhodou laserových rušiek je, že slúžia aj ako parkovacie asistenty.</p> \n', 'images/clanky/radar.jpg', 'nie-je-antiradar-ako-antiradar', 0, 25, 0, 0, 0, 1, '2014-07-04 00:26:46', 0, 25, 3, 3),
(12, 'Čo je to Dopplerov jav a ako sa dá použiť na meranie', '', '<p>Tento fyzikálny jav využívajú aj statické radary pri cestách a diaľniciach a radary typu RAMMER, ktoré v súčasnosti používajú dopravné polície vstavané vo svojich vozidlách na meranie rýchlosti. Dopplerov jav možno pozorovať napríklad aj pri závodoch formúl. Rýchlo sa pohybujúca formula blížiaca sa k pozorovateľovi vydáva z pohľadu pozorovateľa iný zvuk, ako vzďaľujúca sa formula.</p>\n<p>Dopplerov jav je zmena vlnovej dĺžky (a teda frekvencie) elektromagnetických alebo akustických vĺn, vyvolaný relatívnym pohybom zdroja a pozorovateľa. Názov získal podľa rakúskeho fyzika Christiana Johanna Dopplera, ktorý jav opísal v roku 1842. Pre priblíženie Dopplerovho javu nám môže slúžiť príklad plavca v mori. Ak plavec pláva v smere vĺn potom čas medzi prechodmi vrcholom vlny je dlhší ako keby stál na mieste. Analogicky ak by plával proti smeru vĺn tak by čas bol kratší (teda z jeho pohľadu by vlnová dĺžka bola kratšia ako skutočná dĺžka vlny).<p>\n<p>Ak pohyblivý zdroj vysiela vlnenie s frekvenciou f0, potom ho nehybne pozorovateľ pozoruje ako vlnenie s frekvenciou f: kde v je rýchlosť merania vĺn v danej látke a vs,r relatívna rýchlosť zdroja voči pozorovateľovi (kladné znamená približovanie, záporné vzďaľovanie).</p>\n<p><strong>Príklad:</strong><br />Smerom priamo k nehybnému pozorovateľovi sa pohybuje rýchlosťou 10 m/s zdroj akustického monotónneho signálu s frekvenciou 100 Hz. Ak rýchlosť merania zvuku vo vzduchu je 340 m/s, potom z uvedeného vzťahu vyplýva, že pozorovateľ vníma zvuk frekvencie 103,03 Hz.</p>', '', 'dopplarov-jav', 0, 11, 0, 0, 0, 1, '2014-07-04 00:27:16', 0, 25, 3, 4),
(15, 'Meranie rýchlosti laserom', '', '<p>Slovo "Laser" znamená "Light Amplification by Stimulated Emission of Radiation" do slovenčiny by sa to dalo preložiť ako "zosilňovanie svetla pomocou stimulovanej emisie žiarenia"</p>\n<p>Princíp laserového merania spočíva v meraní času odrazu laserových impulzov od cieľa a následný výpočet rýchlosti meraného objektu (vozidla).</p>\n\n<p><Strong>Meranie sa dá realizovať dvomi spôsobmi:</strong></p\n<p>V prvom prípade laserový merač drží policajt v ruke a musí si vybrať konkrétny objekt-vozidlo, ktorý chce merať a musí naň presne namieriť a "vystreliť" - aktivovať meranie.</p>\n<p>V druhom prípade meracie zariadenie je na trojnožke namierené na konkrétne miesto a všetko čo cez to konkrétne miesto prejde automaticky zmerá a v prípade ak prekročí rýchlosť viac ako si na zariadení nastaví tak vozidlo odfotí. Slovenská polícia v súčasnosti používa na meranie rýchlosti vozidiel zariadenia od výrobcu  Laser Technology, Inc.,z Colorada v USA. Tieto zariadenia majú typové označenie Ultralyte LTI      20-20.</p>\n\n<p>Výhody laserových meracích zariadení oproti klasický radarom sú veľmi presvedčivé:</p>\n<p>laserový lúč  je oveľa užší ako radarový lúč, ktorý umožňuje presnejšie merania kvôli úzkemu rozptylu meracieho lúča a tým zamerať konkrétne vozidlo, ďalej doba potrebná na vyhodnotenie rýchlosti  je menej ako 0,5 sekundy oproti 2 - 3 sekundám pre radary v Ka pásme.</p>\n<p><span class="big"><strong>Čo môže ovplyvňovať úspešnosť merania laserovým meračom?</span></strong></p>\n<p><b>Existuje päť hlavných faktorov:</b></p>\n<p>1. Väčšina štátov vyžaduje použitie prednej ŠPZ. Tieto ŠPZ sú namontované kolmo na povrch vozovky, čím pôsobia ako silný reflektor svetelnej energie. Navyše ŠPZ v súčasnosti sú retro-reflexné, ktoré v skutočnosti zväčšujú a zosilňujú množstvo odrazeného svetla. Zistilo sa, že aj na čierne autá, ktoré majú skryté svetlomety, keď majú prednú ŠPZ, efektivita zmeranie rýchlosti zvyšuje až štyrikrát!</p>\n<p>2. Hmlovky a svetlá sú tiež silné reflektory sú však spravidla od seba tak vzdialené, že sa od nich odrazí len časť Lidar lúča.</p>\n<p>3. Vozidlá, ktoré majú na čelnej ploche širšie chrómované časti sú jednoduchšie ciele pre laser ako vozidlá, ktoré nemajú žiadne alebo sú tenké chrómované časti s veľkými medzerami medzi nimi</p>\n<p>4. Čelný tvar vozidla, hrá veľkú rolu pri uskutočňovaní merania laserom. Veľa športových áut má strmé predné kapoty, ktoré majú malý povrch kolmo na cestu. Preto, vozidlá, ktoré sú aerodynamické sa dajú ťažšie zacieliť laserom, pretože tieto typy vozidiel na menšej ploche odrážajú laserové svetlo.</p>\n<p>5. Farba a typ farieb prispieva k charakteru vozidla odrážať alebo pohlcovať laserové lúče. Vozidlá tmavšej farby skôr pohlcujú ako napríklad vozidlá svetlých farieb nehovoriac o vozidlách, ktoré majú metalízu tie najviac odrážajú laserové lúče preto sa dajú najľahšie zamerať. Bohužiaľ, aj keby sa na základe horeuvedených faktorov vyrobilo ideálne vozidlo, napriek tomu by sa dalo zmerať najnovšími laserovými meračmi, ktoré v súčasnosti používajú policajti. Na zneviditeľnenie vozidla  /znemožnenie vyhodnotenia merania /  sa používajú laserové asistenty „rušičky“, ktoré pri správnej montáži a používaní vedia z hocijakého vozidla spraviť auto neviditeľné pre laserový merač.</p>\n', '', 'meranie-rychlosti-laserom', 0, 13, 0, 0, 0, 1, '2014-07-04 00:29:25', 0, 25, 3, 7),
(16, 'Je antiradar a laserová rušička spoľahlivé zariadenie?', '', '<p>Väčšina vodičov, ktorá má záujem o kúpu antiradaru alebo laserovej rušičky sa zaoberá otázkou účinnosti a spoľahlivosti týchto zariadení. Radarové detektory sú zariadenia, ktoré plnia informatívnu funkciu. Z praktického hľadiska to znamená, že nič nevysielajú ani nerušia, len upozorňujú vodiča na prítomnosť radaru. Informovanie vodiča o prítomnosti radaru závisí od odrazu mikrovĺn. Odhalenie radarov je niekoľkonásobne efektívnejšie v meste ako na voľnom priestranstve. V zastavaných oblastiach dokážu antiradary odhaliť prítomnosť radaru aj na 800 m. Radarové detektory upozorňujú vodiča na prítomnosť radaru zvukovým a svetelným signálom. Jedná sa o špičkové zariadenia, ktoré ochránia vodiča pred pokutou a ich spoľahlivosť je naozaj vysoká.</p>\n\n<p> Nevýhodou antiradarov je, že nedokážu ochrániť vodiča pred laserovými meračmi rýchlosti. Túto funkciu plnia laserové rušičky, ktoré bránia polícii počas nastaveného času zmerať rýchlosť vozidla. Na laserovú rušičku sa môže vodič 100% spoľahnúť. Dôležitým faktorom, ktorý má vplyv na spoľahlivosť zariadenia je montáž, správny počet senzorov a samozrejme aj ich umiestnenie v závislosti od veľkosti a modelu auta. Pri výbere laserovej rušičky by mal vodič siahať po kvalitných značkách a nie lacných napodobeninách, ktoré z hľadiska výkonnosti a schopnosti detekcie pre 100% ochranu vodiča nie sú postačujúce. Laserová rušička sa skladá z rozhrania a senzorov. Senzory sú inštalované do prednej masky vozidla ale pre zaistenie maximálnej ochrany vodiča pred laserovým meraním sa montujú aj do zadnej časti vozidla.</p>  \n', '', 'ja-antiradar-a-laserova-rusicka-spo-ahlive-zariadenia', 0, 0, 0, 0, 0, 0, '2014-08-04 12:13:04', 0, 25, 5, 2),
(17, 'Ako sa meria rýchlosť na Slovensku?', '', '<p><b>Meranie rýchlosti na Slovensku môžeme rozdeliť do týchto kategórií:</b><br/>\n1. Mikrovlnné Dopplerove merače rýchlosti (Ramer – výrobca RAMET Kunovice ČR, Multaradar CD – výrobca Jenoptik Nemecko)<br/>\n2. Laserové zameriavače (LTI TRUECAM – výrobca Laser Technologies USA)<br/>\n3. Mobilné úsekové meranie (POLCAM – výrobca POLCAM SYSTEMS Poľsko)<br/>\n4. Stacionárne úsekové meranie – rôzny výrobcovia</p>\n\n</p><b>Mikrovlnné Dopplerove merače rýchlosti</b><br/>\nV súčasnoti sa na Slovensku používajú merače od dvoch výrobcov, ktoré pracujú rozdielnym spôsobom a na rozdielnych frekvenciách. Merač typu <b>RAMER</b> vysiela vo frekvenčnom pásme <b>KA 33,9 – 34,3 GHz</b>. Tieto merače v pásme KA sú pomerne ľahko detekovateľné, pretože toto pásmo nie je v takej miere zarušené falošnými poplachmi. Spozornieť treba pri výbere antiradaru z neoficiálnych zdrojov, ktoré nie sú vyladené pre použitie na SR napr. z USA, DE, AT, NL. Antiradary pochádzajúce z neoficiálnych zdrojov nemajú zúžené KA pásmo. Pri detekciách vykazujú veľmi zlé výsledky z toho dôvodu, že prehľadávajú príliš široký frekvenčný rozsah. Tieto merače spoľahlivo detekujú naše produkty Escort Radar a Genevo.</p>  \n<p>Druhým mikrovlnným meračom používaným na Slovensku je merač typu <b>Multaradar CD</b>, ktorý vysiela vo frekvenčnom pásme <b>K 24,050 - 24,150 GHz</b>. Problémom pri detekovaní tohto merača nastáva v prípade, že sa pohybujete v blízkosti obchodných centier, alebo benzínových púmp, ktoré používajú mikrovlnné otvárače dverí na tej istej frekvencii. Niekoľkoročným výskumom sa firme Escort Radar USA podarilo vyselektovať signál z Multaradaru CD tak, aby Vás detektor od firmy Escort Radar upozorňoval iba na policajné merače a neobťažoval Vás rušivými falošnými poplachmi. Na tento typ zameriavača ponúkame naše produkty Escort Max a Escort 9500ci.</p>\n\n<p><b>Laserové merače</b><br/>\nSú veľmi jednoduché zariadenia, ktoré pomocou laserového lúča a jednoduchých fyzikálnych zákonov vedia rýchlo a spoľahlivo odmerať rýchlosť a vzdialenosť. Tieto merače sa dajú ľahko detekovať celou radou našich produktov. V prípade, že Vám detektor zahlási meranie laserom je viac ako isté, že ste boli zmeraný. Tieto pasívne detektory Vás informujú len o tom, že Vás polícia odmerala. Spoľahlivou ochranou proti zmeraniu sú laserové systémy, ktoré dokážu pomocou vlastnej riadiacej jednotky oslepiť laserový zameriavač na dostatočne dlhú dobu, aby ste si stihli upraviť Vašu rýchlosť. Z nášho sortimentu, Vám odporúčame laserový systém Blinder HP QUAD, ktorý Vás vie bezpečne a diskrétne ochrániť.</p> \n\n<p><b>Mobilné úsekové meranie</b><br/>\nMerače typu <b>POLCAM</b> sú pre všetkých majiteľov antiradarov hrozbou. Tieto systémy totiž nič nevysielajú, nedajú sa preto spoľahlivo detekovať. Zameriavače Polcam fungujú na systéme merania rýchlosti policajného vozidla, ktoré počas jazdy vytvára videozáznam o Vašom priestupku. Na tento typ merača je najlepšie ľudské oko. Týchto vozidiel je našťastie na Slovensku veľmi málo a sú to len dva typy: VW Passat a Škoda Super B. Vozidlá poznáte podľa zatmavených skiel, neštandardnej antény a vyššieho počtu výfukov (vozidlá majú 6-valcové benzínové motory). Ak idete rýchlo, je treba dávať si pozor na to, kto Vás prenasleduje. Na tento typ meraní neexistuje žiadny antiradar. </p>\n\n<p><b>Stacionárne úsekové meranie</b><br/>\nÚsekové meranie je v podstate veľmi jednoduchý systém dvoch fotokamier, ktoré sú rozmiestnené na presne vymedzenom úseku. Prvá fotokamera Vás odfotí pri vjazde do úseku, druhá pri výjazde z úseku. Podľa jednoduchých fyzikálnych zákonov Vám tento systém vypočíta rýchlosť na základe času, za aký ste tento úsek prešli. Tieto systémy sú momentálne u polície veľmi populárne a tešia sa širokému rozvoju. Na tieto systémy spoľahlivo reagujú všetky radarové detektory vybavené funkciou GPS (Passport Escort MAX, Escort 9500ci, Genevo One).</p>\n\n', 'images/clanky/radar-jpg', 'ako-sa-meria-rychlost-na-slovensku', 0, 0, 0, 0, 0, 1, '2014-08-11 08:38:26', 0, 25, 5, 5);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_categories`
--

CREATE TABLE IF NOT EXISTS `prefix_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `visibility` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `priority` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `link` varchar(150) NOT NULL,
  `subcategory` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `link_UNIQUE` (`link`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Vypisuji data pro tabulku `prefix_categories`
--

INSERT INTO `prefix_categories` (`id`, `name`, `description`, `visibility`, `createDate`, `priority`, `link`, `subcategory`) VALUES
(25, 'Prenosné antiradary', '<p>Ponúkame Vám najlepšie prenosné antiradary, ktoré môžete dnes nájsť na trhu. </p>\n<p>Pasívne radarové detektory sú spoľahlivou ochranou pred meračmi rýchlosti typu RAMER-7 a AD9.</p>', 1, '2014-07-03 20:23:06', 0, 'prenosne-antiradary', 0),
(26, 'Pevné antiradary', '<p> </p>\n<p>Dokonalejšou formou antiradaru sú určite zabudované resp. pevné antiradary. Ponúkame osvedčené modely zabudovateľných antiradarov. Ideálne riešenie pre vozidlá s pokovenými sklami.</p>', 1, '2014-07-03 20:23:21', 1, 'pevne-antiradary', 0),
(27, 'Laserové rušičky', '<p> </p>\n<p>Najúčinnejšia  ochrana pred laserovými meračmi na cestách. Široký výber najpoužívnejších laserových rušičiek na trhu - značky ako BLINDER a LASER INTERCEPTOR vás spoľahlivo ochránia pred pokutami. </p>', 1, '2014-07-03 20:23:37', 2, 'laserove-rusicky', 0),
(28, 'Príslušenstvo', '', 1, '2014-07-03 20:24:15', 3, 'prislusenstvo', 0),
(29, 'Kompletné sady', '', 1, '2014-08-01 12:01:34', 4, 'kompletne-sady', 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_comments`
--

CREATE TABLE IF NOT EXISTS `prefix_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  `article` int(10) unsigned DEFAULT NULL,
  `page` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_dealers`
--

CREATE TABLE IF NOT EXISTS `prefix_dealers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identificator` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `turnover` double DEFAULT NULL,
  `lastOrder` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_forum_posts`
--

CREATE TABLE IF NOT EXISTS `prefix_forum_posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` text COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topic` int(10) unsigned DEFAULT NULL,
  `message` text COLLATE utf8_bin,
  `user` int(10) unsigned DEFAULT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `reply` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=55 ;

--
-- Vypisuji data pro tabulku `prefix_forum_posts`
--

INSERT INTO `prefix_forum_posts` (`id`, `subject`, `date`, `topic`, `message`, `user`, `name`, `email`, `reply`, `ip`, `time`) VALUES
(10, '', '2014-08-04 13:53:38', NULL, 'Zkus tohle -> třeba pomůže :\n\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar cursus nulla et tincidunt. Curabitur vitae eros tincidunt, iaculis ipsum in, ultricies est. Donec suscipit porta mauris ut porttitor. Donec aliquet, augue at feugiat porta, magna erat varius nisi, ac consectetur magna est at libero. Integer at egestas urna. Aenean eget nisi a nulla blandit feugiat vel sed sapien. Vestibulum molestie turpis at velit commodo euismod. Praesent interdum nisl vitae gravida auctor. Vestibulum nunc libero, pellentesque sit amet interdum vel, ullamcorper in nunc. Morbi id libero rhoncus, scelerisque tellus ac, rhoncus sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum eu ligula risus.\n\nPhasellus rutrum urna nulla, a malesuada massa mollis a. Quisque mauris magna, sagittis ut dolor auctor, varius vulputate velit. Aliquam at neque fermentum, eleifend tellus sit amet, porta mauris. Vivamus et nulla vel leo ultricies ultrices. Suspendisse leo dolor, tristique quis ornare id, egestas non ipsum. Nam quis arcu mattis, blandit erat id, convallis neque. Maecenas consectetur eros felis, a blandit eros pulvinar ac. In eu iaculis dui. Proin posuere nibh id scelerisque venenatis. Vestibulum venenatis ante ante, sed interdum lacus euismod vitae. Fusce sodales dolor dapibus, sagittis neque non, eleifend magna. Duis et euismod lectus. Ut non imperdiet dui. Maecenas et neque sapien. Vestibulum sodales tortor ligula, vitae sodales sapien venenatis eu.\n\nAliquam sed tellus dui. Donec urna odio, pellentesque ac arcu ac, vulputate pellentesque nulla. Aenean a suscipit erat. Mauris vulputate erat id enim iaculis, sed tristique arcu tristique. Nullam porttitor odio tortor, sed cursus nulla lobortis at. Nullam et nibh porttitor, mollis urna ac, fringilla lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sit amet nibh nec felis feugiat convallis ut nec eros. Vestibulum fringilla, quam venenatis lacinia volutpat, turpis dolor condimentum ante, sagittis scelerisque sem ante ac sapien. Suspendisse eget pretium sem. Praesent et pharetra neque, rhoncus euismod elit. Maecenas sollicitudin ac tortor nec laoreet. Duis quis lectus nec magna commodo pellentesque non ut lectus.\n\nFusce vel accumsan eros. Vivamus pharetra congue lectus vel aliquet. Morbi non sapien ullamcorper, cursus arcu in, consequat erat. Cras tristique, magna eget mollis imperdiet, ante enim congue lacus, id tincidunt lectus magna et risus. Nullam faucibus elementum dolor. Donec gravida mi a neque imperdiet, hendrerit sollicitudin est tristique. Proin augue nulla, pharetra sit amet sem ac, mollis consequat felis. Vivamus in lectus tincidunt, pretium dolor sit amet, vestibulum nisl.\n\nNullam pulvinar lacus sit amet ultricies eleifend. Mauris sem nisl, aliquet vitae ligula nec, eleifend tristique erat. Nam ultrices sem id luctus tempor. Nunc cursus velit ut sem sollicitudin, id ultricies leo mollis. Sed pellentesque sit amet sem sit amet lacinia. Etiam non ipsum elit. Vestibulum at mattis neque. Maecenas imperdiet turpis ullamcorper hendrerit fringilla. Sed quis nisl fringilla, pellentesque nibh dictum, adipiscing quam. In hac habitasse platea dictumst. Phasellus scelerisque mauris ac lacus venenatis egestas. Sed accumsan, tortor eget euismod tincidunt, lorem nisi lobortis metus, eleifend commodo ligula nisl ut augue. Etiam pulvinar iaculis augue, id luctus dui ultrices et. Quisque a nisl et massa sagittis tristique eget in tortor.', 3, '', '', 6, '', 0),
(15, '', '2014-08-04 14:18:01', NULL, 'Zajímavé!', 3, '', '', 14, '', 0),
(22, '', '2014-08-04 14:31:47', NULL, 'Toto je odpoveď za administrátora antiradary.sk\n', 2, '', '', 17, '', 0),
(24, '', '2014-08-04 14:31:48', NULL, 'Toto je odpoveď za administrátora antiradary.sk\n', 2, '', '', 17, '', 0),
(25, '', '2014-08-04 14:31:48', NULL, 'Toto je odpoveď za administrátora antiradary.sk\n', 2, '', '', 17, '', 0),
(49, '', '2014-08-04 21:54:57', NULL, 'dasdsa', 3, '', '', 47, '188.175.140.2', 1407189297),
(54, 'asdasda', '2014-08-13 16:21:14', NULL, 'sdaasda', 0, 'dasdasdas', 'asdadas@sdadas.cz', 0, '188.175.140.2', 1407946874);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_forum_topic`
--

CREATE TABLE IF NOT EXISTS `prefix_forum_topic` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `subject` text COLLATE utf8_bin,
  `message` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_links`
--

CREATE TABLE IF NOT EXISTS `prefix_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) DEFAULT NULL,
  `presenter` varchar(50) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=80 ;

--
-- Vypisuji data pro tabulku `prefix_links`
--

INSERT INTO `prefix_links` (`id`, `path`, `presenter`, `action`) VALUES
(7, 'prenosne-antiradary', 'Category', 'Show'),
(8, 'pevne-antiradary', 'Category', 'Show'),
(9, 'laserove-rusicky', 'Category', 'Show'),
(10, 'prislusenstvo', 'Category', 'Show'),
(12, 'faq-caste-otazky', 'Page', 'Show'),
(13, 'obchodne-podmienky', 'Page', 'Show'),
(14, 'montaz', 'Page', 'Show'),
(15, 'kontakt', 'Page', 'Show'),
(16, 'homepage', 'Homepage', 'default'),
(17, 'clanky', 'Article', 'Default'),
(20, 'escort-x50i-international-sk', 'Product', 'Show'),
(21, 'genevo-one', 'Product', 'Show'),
(22, 'escort-9500ci-international-sk', 'Product', 'Show'),
(23, 'escort-qi45-international-sk', 'Product', 'Show'),
(24, 'stinger-card', 'Product', 'Show'),
(25, 'beltronics-sti-r-mp-m-edition', 'Product', 'Show'),
(26, 'stinger-vip', 'Product', 'Show'),
(27, 'blinder-hp-quad', 'Product', 'Show'),
(28, 'laser-interceptor', 'Product', 'Show'),
(29, 'laser-interceptor-triple', 'Product', 'Show'),
(30, 'laser-interceptor-quad', 'Product', 'Show'),
(31, 'najnovsi-laserovy-merac-rychlosti-trucam', 'Article', 'Show'),
(32, 'ako-funguje-antiradary', 'Article', 'Show'),
(33, 'nie-je-antiradar-ako-antiradar', 'Article', 'Show'),
(34, 'dopplarov-jav', 'Article', 'Show'),
(37, 'meranie-rychlosti-laserom', 'Article', 'Show'),
(52, 'napajaci-kabel-smartcord', 'Product', 'Show'),
(59, 'kabel-na-pevnu-montaz-s-displejom', 'Product', 'Show'),
(60, 'horizontalny-drziak', 'Product', 'Show'),
(61, 'pripinacia-spona', 'Product', 'Show'),
(62, 'vertikalny-drziak', 'Product', 'Show'),
(63, 'napajaci-kabel-na-pevnu-montaz', 'Product', 'Show'),
(64, 'escort-max-international-sk', 'Product', 'Show'),
(65, 'genevo-ff', 'Product', 'Show'),
(67, 'kompletne-sady', 'Category', 'Show'),
(68, 'escort-max-genevo-ff2', 'Product', 'Show'),
(69, 'escort-9500ci-blinder-quad', 'Product', 'Show'),
(71, 'ja-antiradar-a-laserova-rusicka-spo-ahlive-zariadenia', 'Article', 'Show'),
(73, 'forum', 'Forum', 'Posts'),
(74, 'kabel-do-zapa-ovaca', 'Product', 'Show'),
(75, 'prisavka', 'Product', 'Show'),
(76, 'ako-sa-meria-rychlost-na-slovensku', 'Article', 'Show'),
(77, 'escort-9500ix-euro', 'Product', 'Show'),
(78, 'bli-hp905-quad', 'Product', 'Show'),
(79, 'escort-laser-shifter', 'Product', 'Show');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_log`
--

CREATE TABLE IF NOT EXISTS `prefix_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` int(10) unsigned DEFAULT NULL,
  `action` text COLLATE utf8_bin,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1573 ;

--
-- Vypisuji data pro tabulku `prefix_log`
--

INSERT INTO `prefix_log` (`id`, `user`, `action`, `date`) VALUES
(1572, 5, 'Uživatel AR SK se právě přihlásil do systému.', '2014-08-13 16:30:56'),
(1571, 3, 'Uživatel Tomáš Petr editoval úkol Poradna', '2014-08-13 16:22:14'),
(1570, 3, 'Uživatel Tomáš Petr editoval úkol Poradna', '2014-08-13 16:22:08'),
(1569, 3, 'Uživatel Tomáš Petr editoval úkol Doplňky', '2014-08-13 16:19:39'),
(1568, 3, 'Uživatel Tomáš Petr editoval úkol Doplňky', '2014-08-13 15:54:54'),
(1567, 3, 'Uživatel Tomáš Petr editoval úkol Dodělání skladu', '2014-08-13 15:51:47'),
(1566, 3, 'Uživatel Tomáš Petr editoval úkol Dodělání skladu', '2014-08-13 15:29:36'),
(1565, 6, 'Uživatel Petr Oliva editoval objednávku 3005/2014', '2014-08-13 15:28:10'),
(1564, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:27:42'),
(1563, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:27:37'),
(1562, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:26:38'),
(1561, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:24:58'),
(1560, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:24:44'),
(1559, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:22:58'),
(1558, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:22:53'),
(1557, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:21:10'),
(1556, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 15:21:01'),
(1555, 6, 'Uživatel Petr Oliva editoval objednávku 3005/2014', '2014-08-13 15:15:49'),
(1554, 6, 'Uživatel Petr Oliva editoval objednávku 3005/2014', '2014-08-13 15:14:57'),
(1553, 3, 'Uživatel Tomáš Petr editoval úkol Kategorie', '2014-08-13 15:08:42'),
(1552, 3, 'Uživatel Tomáš Petr editoval úkol Kategorie', '2014-08-13 14:58:08'),
(1551, 3, 'Uživatel Tomáš Petr editoval objednávku 3003/2014', '2014-08-13 14:32:25'),
(1550, 5, 'Uživatel AR SK změnil zboží u objednávky 3006/2014', '2014-08-13 14:16:42'),
(1549, 5, 'Uživatel AR SK označil objednávku 3006/2014 jako zaplacenou.', '2014-08-13 14:03:55'),
(1548, 5, 'Uživatel AR SK změnil zboží u objednávky 3006/2014', '2014-08-13 14:02:51'),
(1547, 5, 'Uživatel AR SK změnil zboží u objednávky 3006/2014', '2014-08-13 14:02:42'),
(1546, 5, 'Uživatel AR SK změnil zboží u objednávky 3006/2014', '2014-08-13 14:02:32'),
(1545, 5, 'Uživatel AR SK změnil zboží u objednávky 3006/2014', '2014-08-13 14:02:06'),
(1544, 5, 'Uživatel AR SK editoval objednávku 3006/2014', '2014-08-13 14:01:07'),
(1543, 5, 'Uživatel AR SK editoval objednávku 3006/2014', '2014-08-13 14:00:35'),
(1542, 5, 'Uživatel AR SK přidal novou objednávku 3006/2014', '2014-08-13 13:52:40'),
(1541, 6, 'Uživatel Petr Oliva změnil zboží u objednávky 3005/2014', '2014-08-13 13:42:16'),
(1540, 6, 'Uživatel Petr Oliva změnil zboží u objednávky 3005/2014', '2014-08-13 13:41:10'),
(1539, 6, 'Uživatel Petr Oliva editoval objednávku 3005/2014', '2014-08-13 13:39:43'),
(1538, 6, 'Uživatel Petr Oliva přidal novou objednávku 3005/2014', '2014-08-13 13:36:58'),
(1537, 6, 'Uživatel Petr Oliva přidal úkol Dodělání skladu', '2014-08-13 13:33:44'),
(1536, 2, 'Uživatel Petr Horňák editoval úkol Poradna', '2014-08-13 12:37:50'),
(1535, 6, 'Uživatel Petr Oliva přidal produkt Escort Laser Shifter', '2014-08-13 12:07:16'),
(1534, 2, 'Uživatel Petr Horňák přidal úkol Kategorie', '2014-08-13 12:04:07'),
(1533, 2, 'Uživatel Petr Horňák přidal úkol Doplňky', '2014-08-13 12:01:45'),
(1532, 4, 'Uživatel Robert Šatník se právě přihlásil do systému.', '2014-08-13 11:58:32'),
(1531, 3, 'Uživatel Tomáš Petr editoval úkol Main Page', '2014-08-13 11:03:58'),
(1530, 3, 'Uživatel Tomáš Petr editoval úkol Main Page', '2014-08-13 11:02:58'),
(1529, 3, 'Uživatel Tomáš Petr editoval úkol Poradna', '2014-08-13 11:02:40'),
(1528, 3, 'Uživatel Tomáš Petr se právě přihlásil do systému.', '2014-08-13 10:37:53'),
(1527, 6, 'Uživatel Petr Oliva změnil status objednávky 3004/2014', '2014-08-13 09:19:30'),
(1526, 6, 'Uživatel Petr Oliva editoval úkol Sklad 2', '2014-08-13 09:18:11'),
(1525, 6, 'Uživatel Petr Oliva editoval úkol Skladová evidence', '2014-08-13 09:15:52'),
(1524, 6, 'Uživatel Petr Oliva se právě přihlásil do systému.', '2014-08-13 09:14:43'),
(1523, 2, 'Uživatel Petr Horňák editoval úkol Poradna', '2014-08-13 08:56:04'),
(1522, 2, 'Uživatel Petr Horňák editoval úkol Footer', '2014-08-13 08:24:58'),
(1521, 2, 'Uživatel Petr Horňák editoval úkol Menu', '2014-08-13 08:24:49'),
(1520, 2, 'Uživatel Petr Horňák editoval úkol Ukoly', '2014-08-13 08:24:40'),
(1519, 2, 'Uživatel Petr Horňák editoval úkol Objednavky sklady', '2014-08-13 08:24:24'),
(1518, 2, 'Uživatel Petr Horňák se právě přihlásil do systému.', '2014-08-13 08:23:23'),
(1517, 5, 'Uživatel AR SK se právě přihlásil do systému.', '2014-08-13 07:10:14'),
(1516, 5, 'Uživatel AR SK se právě přihlásil do systému.', '2014-08-12 19:18:52'),
(1515, 6, 'Uživatel Petr Oliva označil objednávku 3001/2014 Jazyk faktury byl změněn na jazyk', '2014-08-12 15:00:56'),
(1514, 3, 'Uživatel Tomáš Petr editoval konfiguraci eshopu', '2014-08-12 13:33:03'),
(1513, 3, 'Uživatel Tomáš Petr editoval konfiguraci eshopu', '2014-08-12 13:32:59'),
(1512, 3, 'Uživatel Tomáš Petr editoval konfiguraci eshopu', '2014-08-12 13:32:56'),
(1511, 2, 'Uživatel Petr Horňák přidal úkol Main Page', '2014-08-12 13:29:50'),
(1510, 3, 'Uživatel Tomáš Petr editoval jazyk pro faktury s názvem English', '2014-08-12 13:23:00'),
(1509, 3, 'Uživatel Tomáš Petr editoval jazyk pro faktury s názvem Slovenština', '2014-08-12 13:22:47'),
(1508, 3, 'Uživatel Tomáš Petr editoval jazyk pro faktury s názvem Čeština', '2014-08-12 13:22:36'),
(1507, 3, 'Uživatel Tomáš Petr editoval jazyk pro faktury s názvem Čeština', '2014-08-12 13:22:17'),
(1506, 4, 'Uživatel Robert Šatník se právě přihlásil do systému.', '2014-08-12 13:14:34'),
(1505, 6, 'Uživatel Petr Oliva přidal produkt BLI-HP905-QUAD', '2014-08-12 12:32:58'),
(1504, 6, 'Uživatel Petr Oliva přidal produkt Escort 9500ix Euro', '2014-08-12 12:30:13'),
(1503, 6, 'Uživatel Petr Oliva editoval produkt Escort MAX International SK', '2014-08-12 12:03:11'),
(1502, 6, 'Uživatel Petr Oliva označil objednávku 3002/2014 jako zaplacenou.', '2014-08-12 10:34:49'),
(1501, 3, 'Uživatel Tomáš Petr se právě přihlásil do systému.', '2014-08-12 10:08:31'),
(1500, 6, 'Uživatel Petr Oliva označil objednávku 3001/2014 jako zaplacenou.', '2014-08-12 09:29:48'),
(1499, 6, 'Uživatel Petr Oliva změnil zboží u objednávky 3001/2014', '2014-08-12 09:29:16'),
(1498, 6, 'Uživatel Petr Oliva editoval produkt Kábel do zapaľovača', '2014-08-12 09:29:00'),
(1497, 5, 'Uživatel AR SK editoval všechny články.', '2014-08-12 09:21:08'),
(1496, 5, 'Uživatel AR SK editoval článek Meranie rýchlosti laserom', '2014-08-12 09:20:28'),
(1495, 5, 'Uživatel AR SK byl úspěšně vymazán. Statické radary pri cestách', '2014-08-12 09:15:58');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_menus`
--

CREATE TABLE IF NOT EXISTS `prefix_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(150) NOT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '0',
  `priority` int(10) unsigned NOT NULL DEFAULT '0',
  `submenu` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `link_UNIQUE` (`link`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Vypisuji data pro tabulku `prefix_menus`
--

INSERT INTO `prefix_menus` (`id`, `name`, `link`, `description`, `image`, `visibility`, `priority`, `submenu`) VALUES
(13, 'Hlavná stránka', 'homepage', 'dassa', '', 0, 1, 0),
(14, 'Poradňa', 'poradna', 'asdasda', '', 1, 2, 0),
(15, 'Články a zaujímavosti', 'informacie-o-antiradaroch', 'dassda', '', 1, 3, 0),
(16, 'Obchodné podmienky', 'obchodne-podmienky', 'adsas', '', 1, 4, 0),
(17, 'Montáž', 'montaz', 'dasa', '', 1, 5, 0),
(18, 'Kontakt', 'kontakt', 'asd', '', 1, 6, 0),
(19, 'Forum', 'forum', '', '', 1, 8, 1),
(21, 'FAQ - časté dotazy', 'faq-caste-otazky', '', '', 1, 7, 1),
(27, 'Produkty', 'produkty', '', '', 1, 0, 0),
(28, 'Prenosné antiradary', 'prenosne-antiradary', '', '', 1, 1, 1),
(29, 'Pevné antiradary', 'pevne-antiradary', '', '', 1, 2, 1),
(30, 'Laserové rušičky', 'laserove-rusicky', '', '', 1, 3, 1),
(31, 'Príslušenstvo', 'prislusenstvo', '', '', 1, 5, 1),
(32, 'Kompletné sady', 'kompletne-sady', '', '', 0, 4, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_orders`
--

CREATE TABLE IF NOT EXISTS `prefix_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `firm` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `district` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `region` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ico` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `dic` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `note` text COLLATE utf8_bin,
  `fromF` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `deliveryPrice` double DEFAULT NULL,
  `deliveryType` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `deliveryTime` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `commission` int(11) NOT NULL DEFAULT '0',
  `installments` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `payment` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `shop` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `language` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `currency` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `track` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(20) COLLATE utf8_bin NOT NULL,
  `productCount` int(11) NOT NULL,
  `pricedph` double NOT NULL,
  `paid` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `firm_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `firm_zip` varchar(255) COLLATE utf8_bin NOT NULL,
  `firm_city` varchar(255) COLLATE utf8_bin NOT NULL,
  `facture_lang` int(11) NOT NULL DEFAULT '0',
  `send` int(1) NOT NULL DEFAULT '0',
  `senden` int(1) NOT NULL DEFAULT '0',
  `export` int(1) NOT NULL DEFAULT '0',
  `createuser` int(11) NOT NULL,
  `doneuser` int(11) NOT NULL,
  `invoice_wdph` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`),
  FULLTEXT KEY `username` (`username`,`surname`,`firm`,`code`,`phone`,`address`,`city`,`note`,`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=642 ;

--
-- Vypisuji data pro tabulku `prefix_orders`
--

INSERT INTO `prefix_orders` (`id`, `code`, `createDate`, `username`, `surname`, `address`, `city`, `zip`, `firm`, `district`, `region`, `ico`, `dic`, `email`, `phone`, `note`, `fromF`, `state`, `deliveryPrice`, `deliveryType`, `discount`, `deliveryTime`, `commission`, `installments`, `payment`, `shop`, `language`, `currency`, `track`, `status`, `type`, `productCount`, `pricedph`, `paid`, `country`, `firm_address`, `firm_zip`, `firm_city`, `facture_lang`, `send`, `senden`, `export`, `createuser`, `doneuser`, `invoice_wdph`) VALUES
(635, '3001/2014', '2014-08-06 13:47:00', 'TSS Group a.s.', 'pan Porubčan', 'K Zábraniu 1653', 'Trenčín', 91101, 'TSS Group a.s.', NULL, NULL, '2020116505', '0', 'porubcan@tssgroup.sk', '', '', NULL, 'sk', 0, '', NULL, NULL, 0, '', 'P', 'www.antiradary.k', 'sk', '€', '', 'new', '', 39, 0, 'N', 'Slovenská republika', 'K Zábraniu 1653', '91101', 'Trenčín', 5, 0, 1, 0, 6, 6, 'false'),
(637, '3002/2014', '2014-08-11 12:57:57', 'TSS Group, a.s.', 'Pán Porubčan', 'K Zábraniu 1653', 'Trenčín', 91101, 'TSS Group, a.s.', NULL, NULL, '36323551', '2020116505', 'porubcan@tssgroup.sk', '', '', NULL, 'sk', 0, '', NULL, NULL, 0, '', 'P', 'www.antiradary.k', 'sk', '€', NULL, 'new', '', 5, 0, 'N', 'Slovenská republika', 'k Zábraniu 1653', '91101', 'Trenčín', 5, 0, 1, 0, 5, 0, 'false'),
(638, '3003/2014', '2014-08-11 13:48:45', 'Jiří', 'Veselý', 'Gravitační 693', 'Sluncovní', 12345, '', NULL, NULL, '', '', 'uzto@zacinabejt.dlouhy', '123456789', '', NULL, 'cz', 0, 'PPL', NULL, NULL, 0, '', 'H', 'antiradary.sk', 'sk', '€', NULL, 'broken', '', 1, 0, 'N', 'Česká republika', '', '', '', 5, 0, 0, 0, 0, 0, 'false'),
(639, '3004/2014', '2014-08-12 13:48:18', 'Patrik', 'Sabon', 'Dělnická 12', 'Praha', 17000, 'Reachlocal -test prosím nereagujte na tuto objednávku. Děkuji', NULL, NULL, '1234567', '0', 'patrik.sabon@reachlocal.cz', '601570739', NULL, NULL, 'sk', NULL, 'PPL', NULL, NULL, 0, NULL, 'D', 'antiradary.sk', 'sk', '€', NULL, 'broken', '', 0, 0, 'N', 'Slovenská republika', 'Dělnická 12', '17000', 'Praha', 5, 0, 0, 0, 0, 0, 'false'),
(640, '3005/2014', '2014-08-13 13:36:58', 'AntiRadary.NET s.r.o.', 'pan Šatník', 'Na Sekyrce 1392', 'Praha 6', 160, 'AntiRadary.NET s.r.o.', NULL, NULL, '28512995', 'CZ28512995', '', '', '', NULL, 'sk', 0, '', NULL, NULL, 0, '', 'P', 'www.antiradary.k', 'sk', '€', NULL, 'new', '', 2, 0, 'N', 'Česká republika', 'Na Sekyrce 1392', '160 00', 'Praha 6', 5, 0, 0, 0, 6, 0, 'true'),
(641, '3006/2014', '2014-08-13 13:52:40', 'TSS Group, a.s.', 'Pán Porubčan', 'K Zábraniu 1653', 'Trenčín', 91101, 'TSS Group, a.s.', NULL, NULL, '36323551', '2020116505', 'porubcan@tssgroup.sk', '', '', NULL, 'sk', 0, '', NULL, NULL, 0, '', 'P', 'www.antiradary.k', 'sk', '€', NULL, 'new', '', 5, 0, 'N', 'Slovenská republika', 'k Zábraniu 1653', '91101', 'Trenčín', 5, 0, 1, 0, 5, 0, 'false');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_orders_emails`
--

CREATE TABLE IF NOT EXISTS `prefix_orders_emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orderkey` int(10) unsigned DEFAULT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `address` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `facture` varchar(1) COLLATE utf8_bin DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=80 ;

--
-- Vypisuji data pro tabulku `prefix_orders_emails`
--

INSERT INTO `prefix_orders_emails` (`id`, `orderkey`, `createDate`, `address`, `admin`, `facture`) VALUES
(54, 635, '2014-08-07 08:31:13', 'petr@antiradary.net', 6, 'Y'),
(55, 635, '2014-08-07 12:41:52', 'petr@antiradary.net', 6, 'Y'),
(56, 635, '2014-08-07 12:44:16', 'petr@antiradary.net', 6, 'N'),
(57, 635, '2014-08-07 12:48:58', 'tomas.petr@bk.ru', 3, 'N'),
(58, 635, '2014-08-07 12:49:23', 'tomas.petr@bk.ru', 3, 'Y'),
(59, 635, '2014-08-07 15:52:10', 'tomas.petr@bk.ru', 3, 'Y'),
(60, 635, '2014-08-07 15:52:53', 'tomas.petr@bk.ru', 3, 'N'),
(61, 635, '2014-08-07 16:10:07', 'tomas.petr@bk.ru', 3, 'N'),
(62, 635, '2014-08-07 16:15:21', 'tomas.petr@bk.ru', 3, 'N'),
(63, 635, '2014-08-07 16:18:19', 'tomas.petr@bk.ru', 3, 'N'),
(64, 635, '2014-08-07 16:23:37', 'tomas.petr@bk.ru', 3, 'N'),
(65, 635, '2014-08-07 16:24:34', 'tomas.petr@bk.ru', 3, 'N'),
(66, 635, '2014-08-07 16:27:24', 'tomas.petr@bk.ru', 3, 'N'),
(67, 635, '2014-08-07 16:29:19', 'tomas.petr@bk.ru', 3, 'N'),
(68, 635, '2014-08-07 16:30:25', 'porubcan@tssgroup.sk', 5, 'N'),
(69, 635, '2014-08-07 16:38:30', 'tomas.petr@bk.ru', 3, 'N'),
(70, 635, '2014-08-07 16:39:57', 'tomas.petr@bk.ru', 3, 'N'),
(71, 635, '2014-08-07 16:41:28', 'tomas.petr@bk.ru', 3, 'N'),
(72, 635, '2014-08-07 16:41:48', 'tomas.petr@bk.ru', 3, 'N'),
(73, 635, '2014-08-07 16:42:39', 'tomas.petr@bk.ru', 3, 'N'),
(74, 635, '2014-08-07 17:04:18', 'tomas.petr@bk.ru', 3, 'N'),
(75, 637, '2014-08-11 13:19:20', 'porubcan@tssgroup.sk', 5, 'N'),
(76, 637, '2014-08-12 12:19:49', 'petr@antiradary.net', 6, 'N'),
(77, 641, '2014-08-13 14:04:07', 'porubcan@tssgroup.sk', 5, 'N'),
(78, 640, '2014-08-13 15:06:33', 'petr@antiradary.net', 6, 'N'),
(79, 641, '2014-08-13 15:13:05', 'petr@antiradary.net', 6, 'N');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_order_language`
--

CREATE TABLE IF NOT EXISTS `prefix_order_language` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `supplier` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `ico` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dic` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dph` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `account_number` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `swift` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `iban` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `form_of_payment` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `date_of_issue` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `due_date` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `real_date` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `variable` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `myorder` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `subscriber` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `final_beneficiary` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cart` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `casch` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `transfer` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `delivery` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `stack` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `number` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `delivery_price` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `final_price` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `without_dph` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `with_dph` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `tax_base` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `vat_rate` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `amout_vat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `total` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `total_total` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `footer` text COLLATE utf8_bin,
  `none` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `prefix_order_language`
--

INSERT INTO `prefix_order_language` (`id`, `name`, `title`, `supplier`, `phone`, `ico`, `dic`, `dph`, `account_number`, `swift`, `iban`, `form_of_payment`, `date_of_issue`, `due_date`, `real_date`, `variable`, `myorder`, `subscriber`, `email`, `final_beneficiary`, `cart`, `casch`, `transfer`, `delivery`, `description`, `price`, `stack`, `number`, `delivery_price`, `final_price`, `without_dph`, `with_dph`, `tax_base`, `vat_rate`, `amout_vat`, `total`, `total_total`, `footer`, `none`) VALUES
(4, 'Čeština', 'FAKTURA - DAŇOVÝ DOKLAD č.', 'Dodavatel', 'Tel.:', 'IČ', 'DIČ', 'Plátce DPH', 'Číslo účtu', 'SWIFT', 'IBAN', 'Forma úhrady', 'Datum vystavení', 'Datum splatnosti', 'Datum uskutečnění zdanit. plnění', 'Variabilní symbol', 'Objednávka', 'Odběratel', 'Email', 'Konečný příjemce', 'Kartou', 'Hotově', 'Převodem', 'Dobírkou', 'Fakturujeme Vám dle Vaší objednávky', 'cena', 'ks', 'počet', 'Cena dopravy', 'Celková cena', 'bez DPH', 's DPH', 'Základ daní', 'Sazba DPH', 'Částka DPH', 'Celkem', 'CELKEM K ÚHRADĚ', 'Spoločnosť je zapísana  v OR okresného súdu v Košiciach I, odd Sro, vložka č. 35018/V-Zbl Vystavil: L. Martvoňová', 'Nezadán'),
(5, 'Slovenština', 'FAKTÚRA - DAŇOVÝ DOKLAD č.', 'Dodávateľ', 'Tel.:', 'IČ', 'DIČ', 'IČ DPH', 'Číslo účtu', 'SWIFT', 'IBAN', 'Forma úhrady', 'Dátum vystavenia', 'Dátum splatnosti', 'Daňová povinnosť', 'Variabilný symbol', 'Objednávka', 'Odberateľ', 'Email', 'Konečný príjemca', 'Kartou', 'Hotovosť', 'Prevodom', 'Dobierkou', 'Fakturujeme Vám podľa Vašej objednávky', 'Cena', 'ks', 'Počet', 'Cena dopravy', 'Celková cena', 'bez DPH', 's DPH', 'Základ dane', 'Sadzba dane', 'Čiastka DPH', 'Konečná cena', 'Celkom k úhrade', 'Spoločnosť je zapísana  v OR okresného súdu v Košiciach I, odd Sro, vložka č. 35018/V-Zbl Vystavil: L. Martvoňová', 'Nezadané'),
(6, 'English', 'INVOICE no.', 'Supplier', 'Tel.:', 'ID no.:', 'TAX id.:', 'VAT reg.:', 'Account no.:', 'SWIFT', 'IBAN', 'Payment:', 'Invoice Date', 'Payment due Date', 'Date taxation', 'Variable symbol', 'Order', 'Customer', 'Email', 'End user', 'Credit card payment', 'Cash payment', 'Bank transfer', 'Cash on delivery (COD)', 'We charge you according to the order', 'Price', 'Piece', 'Number', 'Transport price', 'Total amount', 'excl. VAT', 'incl. VAT', 'VAT', 'VAT rate', 'VAT amount', 'Total amount', 'Total amount to pay', 'The company is registered in the Commercial Register of the District Court Košice I, Section Sro, File No. 35018/V-Zbl', 'Nezadané');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_order_products`
--

CREATE TABLE IF NOT EXISTS `prefix_order_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(10) unsigned DEFAULT NULL,
  `orderkey` int(10) unsigned DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `discount` varchar(30) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `code` varchar(20) COLLATE utf8_bin NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `pricedph` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=121 ;

--
-- Vypisuji data pro tabulku `prefix_order_products`
--

INSERT INTO `prefix_order_products` (`id`, `product`, `orderkey`, `count`, `discount`, `name`, `code`, `price`, `pricedph`) VALUES
(109, 14, 635, 3, '', 'Escort 9500ci - SK, SN 66000263 66000250 66000277', 'Escort 9500ci - SK', 660, 792),
(110, 31, 635, 2, '', 'Escort MAX International SK, SN 65000754 65000747 ', 'emax', 370, 444),
(114, 36, 635, 2, '', 'Kábel do zapaľovača', 'PKDZB', 18.33, 21.996),
(115, 37, 635, 8, '', 'prísavka', 'CODE', 0.83, 0.996),
(116, 14, 637, 2, '', 'Escort 9500ci - SK, SN 66000219, 66000251', 'Escort 9500ci - SK', 660, 792),
(117, 18, 638, 10, '', 'Stinger VIP', 'CODE', 2332.5, 2799),
(118, 31, 639, 2, '', 'Escort MAX International SK', 'emax', 832.5, 999),
(119, 38, 640, 9, '', 'Escort 9500ix Euro', 'ZR9500IX', 270, 324),
(120, 38, 641, 1, '', 'Escort 9500ix Euro, SN 32014169', 'ZR9500IX', 300, 360);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_pages`
--

CREATE TABLE IF NOT EXISTS `prefix_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text,
  `content` longtext,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `link` varchar(150) NOT NULL,
  `score` int(10) unsigned NOT NULL DEFAULT '0',
  `visibility` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enableViews` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enableScore` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enableComments` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `editDate` int(11) NOT NULL DEFAULT '0',
  `author` int(11) NOT NULL,
  `category` int(11) NOT NULL DEFAULT '21',
  PRIMARY KEY (`id`,`category`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `link_UNIQUE` (`link`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Vypisuji data pro tabulku `prefix_pages`
--

INSERT INTO `prefix_pages` (`id`, `title`, `description`, `content`, `views`, `link`, `score`, `visibility`, `enableViews`, `enableScore`, `enableComments`, `createDate`, `editDate`, `author`, `category`) VALUES
(9, 'FAQ - časté otázky', '', '<div class="widget">\n                	<h3>FAQ - Otázky na ktoré sa najčastejšie pýtate</h3>\n					<div class="about_tabbed">     \n						<div class="panel-group" id="accordion2">\n							<div class="panel panel-default">\n								<div class="panel-heading active">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Ktorý prenosný antiradar je najlepší?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseOne" class="panel-collapse collapse in hda">\n									<div class="panel-body">\n                                        <p>Prenosné antiradary v našej ponuke sú všetky na rovnakej kvalitatívnej úrovni a dosahujú porovnateľné výsledky v detekovaní meračov rýchlosti typu RAMER.<br />\nMy odporučame <a href="/prenosne-antiradary/genevo-one/">antiradar Genevo One</a> a <a href="/prenosne-antiradary/escort-X50i/">Escort X50i </a> dostupné za prijateľné ceny.</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n							<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Je používanie antiradarov a laserových rušičiek na Slovensku zakázané alebo legálne?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseTwo" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Nová právna úprava výslovne stanovuje, že <strong>používanie</strong> antiradarov (a im podobných zariadení) alebo ich <strong>umiestnenie</strong> vo vozidle spôsobom, ktorý umožňuje ich použitie, je zakázané. Preto by vodiči nemali mať vo svojom vozidle takéto zariadenie ani umiestnené, inak musia rátať s pokutou.\nPoužívanie antiradarov a laserových rušičiek je teda na Slovensku zakázané!  Ak antiradar policajti pri kontrole odhalia, možu vodičovi vyrubiť niekoľkotisícovú pokutu alebo mu dokonca vziať technický preukaz. "Používať technické prostriedky a zariadenia, ktoré umožňujú odhaliť alebo ovplyvniť policajné radary merajúce rýchlosť na cestách, nový zákon jednoznačne zakazuje". Antiradary komplikujú polícii prácu pri dohľade nad bezpečnosťou cestnej premávky. Pre mužov v uniformách sú nebezpečnejšie tzv. rušičky, ničia signál policajného merača, na rozdiel od pasívnych antiradarov, ktoré iba policajný radar zamerajú.\nAk polícia odhalí pri kontrole v aute antiradar, či už pasívny detektor alebo rušičku, môže na mieste dať vodičovi blokovú pokutu vo výške 250e. Ak by mal niekto pevne namontovaný antiradar, tak takému vodičovi môže polícia zadržať osvedčenie o evidencii vozidla.</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n							<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Čo potrebujem na Slovensku? Antiradar alebo laserovú rušičku?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseThree" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Ideálna je kombinácia oboch zariadení. Antiradar síce dokáže detekovať meranie laserovým meračom rýchlosti, ale obvykle je už neskoro a Vaša rýchlosť je zameraná. Je to hlavne preto, že antiradar nemá až taký dosah, aby dokázal spoľahlivo a včas reagovať na meranie. Laserová rušička dokáže rušiť meranie iba laserovým meračom rýchlosti. Na meranie rýchlosti radarom typu Ramer nemá žiadnu činnosť, ani vodiča o tomto meraní neinformuje.\nPreto ideálne riešenie je kombinácia týchto dvoch zariadení - antiradar a laserová rušička.</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n							<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">Ktoré frekvencie je potrebné ponechať zapnuté pre používanie antiradarov na Slovensku a v ČR?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseFour" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Ktoré frekvencie je potrebné ponechať zapnuté pre používanie antiradarov na Slovensku a v ČR?</p>\n<p>Radary typu RAMER 7 a AD9 (používané v SK a CZ) pracujú vo frekvenčnom rozsahu 34,00GHz +/- 100MHz. Niekedy tieto radary spadajú pod spodnú alebo vrchnú časť frekvenčného rozsahu. Tento efekt vzniká pri vyšších teplotách, kedy sa mierne zmenia rozmery rezonančnej dutinky v policajnom radare alebo k zmene rozmeru došlo pri náraze na radarovú hlavicu. Následne klesne jeho pracovná frekvencia. Preto je potrebné mať na Slovensku zapnuté operačné pásmo v tomto rozsahu\n<br />( pásmo Ka, Ka Narrow - podľa typu použitého antiradaru)\n</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n							<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">Aké sú pokuty za prekročenie rýchlosti na Slovensku?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseFive" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Prekročenie najvyššej dovolenej rýchlosti ustanovenej pravidlami cestnej premávky alebo prekročenie rýchlosti obmedzenej dopravnou značkou</p>\n<pre>\n1. o viac ako 10 km/h                           50 Eur / 1.506,30 Sk\n2. o viac ako 20 km/h                           100 Eur / 3.012,60 Sk\n3. o viac ako 30 km/h                           200 Eur / 6.025,20 Sk\n4. o viac ako 40 km/h                           300 Eur / 9.037,80 Sk\n5. o viac ako 50 km/h                           400 Eur / 12.050,40 Sk\n6. o viac ako 60 km/h                           500 Eur / 15.063,00 Sk\n7. o viac ako 70 km/h                           650 Eur / 19.581,90 Sk\n</pre>\n<p>\n<strong>POZOR!</strong> Pri 3 pokutách za rýchlosť nad 60 € počas roka Vám hrozí dočasné <strong>odobratie VP</strong> a následné preskúšanie spojené s príslušnými poplatkami.\n</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n							\n<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">Koľko snímačov laserovej rušičky postačuje pre 100% ochranu pred laserovými meračmi rýchlosti?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseSix" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Počet snímačov sa môže líšiť od použitej laserovej rušičky a od vozidla, v ktorom je systém namontovaný. V menších vozidlách pri použití Antilaser G9 RX postačí na ochranu proti zameraniu spredu jeden snímač. Pokiaľ chcete byť chránený aj proti zameraniu zozadu, je potrebný ešte jeden snímač namontovaný v zadnej časti vozidla. Pokiaľ je vozidlo väčšie a chcete mať 100% ochranu je potrebné použiť viac snímačov.</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n							<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">Prečo u nás tzv. americké verzie antiradarov Escort a Beltronics nefungujú spoľahlivo?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseSeven" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Vzhľadom na to, že radarové merače typu Ramer 7 a AD9 pracujú vo frekvenčnom pásme 34,00 GHz +/- 100 MHz používanom len na SK a ČR, americké verzie nedokážu spoľahlivo detekovať toto frekvenčné pásmo a pracujú s veľkou chybovosťou.</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">Čo najčastejšie spôsobuje falošné poplachy u antiradarov?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseEight" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Dôležité je, aby bol antiradar správne nastavený na operačné pásmo krajiny, v ktorej je požívaný. Zapnutie iných pásiem môže spôsobovať detekciu tzv. rádio smogu, ktorý vzniká pri bežnom priemyselnom používaní nevyfiltrovaných lokálnych vysielačov a iných vysokofrekvenčných zdrojov (radarové detektory pri automaticky otváraných dverách atd.).</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine">Čo môže najčastejšie zapríčiniť zlyhanie laserovej rušičky pri meraní?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseNine" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>Medzi najčastejšie príčiny nesprávnej funkcie laserovej rušičky patria nesprávna montáž senzorov (postupujte podľa montážnych návodov) a nečistoty na prednej strane senzorov. Pokiaľ sú senzory správne namontované laserová rušička pracuje 100% a Vaše vozidlo nebude zamerané.</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n<div class="panel panel-default">\n								<div class="panel-heading">\n									<h4 class="panel-title">\n                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen">Aké sú slabiny policajných radarov?</a>\n									</h4>\n								</div><!-- end panel-heading -->\n								<div id="collapseTen" class="panel-collapse collapse">\n									<div class="panel-body">\n                                        <p>- radar RAMER vždy zviera s osou vozovky 22-stupňový uhol<br />\n- osové zakrivenie cesty nesmie byť vyššie ako 10 cm na 25 m vozovky v horizontálnom smere<br />\n- rýchlosť sa teda nedá merať z mosta, prípadne v oblukov cesty, dochádzalo by k skresľovaniu výsledkov<br />\n- chyba pri meraní nesmie byť vyššia ako plus/mínus 3 km/h. Pri extrémne prudkom spomalení teda vyhodnotí meranie ako chybné<br />\n- pri meraní za jazdy sa počas jedného merania (cca 2 s) nesmie rýchlosť zmeniť o viac ako 2 km/h, inak sa meranie anuluje</p>\n									</div><!-- end panel-body -->\n								</div><!-- end collapseOne -->\n							</div><!-- end panel -->\n						</div><!-- end panel-group -->\n					</div><!-- end about tabbed -->\n\n                </div>', 0, 'faq-caste-otazky', 397, 0, 0, 0, 0, '2014-07-03 20:55:34', 0, 3, 25),
(10, 'Obchodné podmienky', '', '<h1>Obchodné podmienky</h1><div class="space"></div>\n<h2>Objednávky</h2>\n<div class="art">Objednávať tovar je možné cez e-shop, telefonicky, faxom, e-mailom alebo osobne.<br /> Objednávky prijaté do 14.00 hod budú expedované ešte v ten pracovný deň, ak je tovar aktuálne na sklade. V prípade, že tovar nebude na sklade v požadovanom množstve, bude o tom zákazník informovaný.<br /> Objednávky prijaté po 14.00 hod budú expedované nasledujúci pracovný deň.</div>\n<h2>Platba za tovar</h2>\n<div class="art">Platba predom prevodom na účet alebo dobierkou cez kuriársku službu UPS.</div>\n<h2>Doprava tovaru</h2>\n<div class="art">Prepravu tovaru zabezpečuje kuriárska služba UPS Expres, pri objednávke nad 200 EUR hradí prepravné náklady predávajíci.</div>\n<h2>Reklamácie</h2>\n<div class="art">Dĺžka záručnej doby je štandardne 24 mesiacov. Reklamovaný tovar musí byť kompletný a nesmie byť mechanicky poškodený (odlomené časti, prelepované čtôtky sériových čísel), ani elektricky poškodený (napr. prepálovanie, ohorené konektory). K tovaru musí byť priložený riadne vyplnený záručný list.</div>', 0, 'obchodne-podmienky', 218, 1, 0, 0, 0, '2014-07-03 21:00:39', 0, 3, 25),
(11, 'Montáž', '', '<h1>Montáž antiradarov a laserových rušičiek</h1><div class="space"></div>\n<p> </p>\n<p> </p>\n<p>Montáž zabudovateľných antiradarov a laserových rušičiek  zabezpečujeme v našej prevádzke:</p>\n<p><br /> <strong>KELKOS, s.r.o. - Antiradary.sk, Domkárska 17, 821 05 Bratislava</strong></p>\n<p>Zariadenia vieme namontovať aj priamo u zákazníka, kdekoľvek na Slovensku, alebo v širokej sieti našich obchodných partnerov.<p> \n<p><br/>Objednanie montáže a bližšie informácie poskytujeme na tel. č.: 0910 800 011</p>\n', 0, 'montaz', 345, 0, 0, 0, 0, '2014-07-03 21:02:02', 0, 3, 25),
(12, 'Kontakt', '', '<div id="white-wrapper">\n     <div class="container padd-20">\n             <table>\n                                <tr>\n                                    <td><img src="../images/frontend/provozovna.jpg" class="wd-300" alt="provozovna"/></td>\n                                    <td class="valign-top wd-340">\n                                        <span  class="panel-title-20">\n                                            <strong>&nbsp;&nbsp;&nbsp;KELKOS, s. r. o. - Antiradary.sk</strong>\n                                        </span><br/>\n\n                                        <strong>&nbsp;&nbsp;&nbsp;&nbsp;Naša prevádzka v Bratislave</strong><br/>\n                                        &nbsp;&nbsp;&nbsp;&nbsp;Domkárska 17<br/>\n                                        &nbsp;&nbsp;&nbsp;&nbsp;821 05 Bratislava<br/>\n                                        &nbsp;&nbsp;&nbsp;&nbsp;Slovenská republika\n                                    </td>\n                                    <td class="wd-450">\n                                        <table>\n                                            <tr>\n                                                <td>&nbsp;</td>\n                                                <td class="right-align">&nbsp;</td>\n                                            </tr>\n                                            <tr>\n                                                <td>&nbsp;</td>\n                                                <td class="right-align">&nbsp;</td>\n                                            </tr>\n                                            <tr>\n                                                <td>IČO:</td>\n                                                <td class="right-align">47626623</td>\n                                            </tr>\n                                            <tr>\n                                                <td>IČ DPH:</td>\n                                                <td class="right-align">SK2024009625</td>\n                                            </tr>\n                                            <tr>\n                                                <td>Bankovné spojenie:</td>\n                                                <td class="right-align">&nbsp;&nbsp;<strong>FIO, banka, a.s. 2700544542/8330</strong></td>\n                                            </tr>\n                                        </table>\n                                    </td>\n                                </tr>\n                            </table>\n                        </div>\n                    </div>\n<div class="row padding-top margin-top">\n                                        <div class="contact_details">\n                                            <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">\n                                                <div class="text-center">\n                                                    <div class="wow swing animated">\n							<div class="contact-icon">\n                                                            <a href="#" class=""> <i class="fa"><img src=''../images/frontend/icons/point.png'' alt="point"/></i> </a>\n							</div><!-- end dm-icon-effect-1 -->\n                                                        <p>\n                                                            KELKOS, s.r.o. Štefánikova 1398/36<br/>\n                                                            071 01 Michalovce, Slovenská republika<br/>\n                                                        </p>\n                                                    </div><!-- end service-icon -->\n                                                </div><!-- end miniboxes -->\n                                            </div><!-- end col-lg-4 -->\n                \n                                            <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">\n                                                <div class="text-center">\n                                                    <div class="wow swing animated">\n							<div class="contact-icon">\n                                                            <a href="#" class=""> <i class="fa"><img src=''../images/frontend/icons/telephone.png'' alt="telephone"/></i> </a>\n							</div><!-- end dm-icon-effect-1 -->\n                                                        <p>\n                                                            Objednávky: 0910 800 011<br/>\n                                                            Informácie, technické otázky: 0910 800 011\n                                                        </p>\n                                                    </div><!-- end service-icon -->\n                                                </div><!-- end miniboxes -->\n                                            </div><!-- end col-lg-4 -->  \n\n                                            <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">\n                                                <div class="text-center">\n                                                    <div class="wow swing animated">\n							<div class="contact-icon">\n                                                            <a href="#" class=""> <i class="fa"><img src=''../images/frontend/icons/email.png'' alt="email"/></i> </a>\n							</div><!-- end dm-icon-effect-1 -->\n                                                        <p>\n                                                            Objednávky: objednavky@antiradary.sk<br/>\n                                                            Informácie: info@antiradary.sk\n                                                        </p>\n                                                    </div><!-- end service-icon -->\n                                                </div><!-- end miniboxes -->\n                                            </div><!-- end col-lg-4 -->                  \n                                        </div><!-- end contact_details -->\n                                    </div><!-- end margin-top --><br><br>\n    <section class="white-wrapper nopadding">\n    	<div class="container wd-100p">\n            <div id="map" class="contact-map">\n               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1331.153794430871!2d17.176731251522828!3d48.142874964589794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDA4JzMzLjYiTiAxN8KwMTAnMzUuNyJF!5e0!3m2!1scs!2s!4v1405370790473" class="wd-100p bnull" height="450"></iframe>\n        </div>', 0, 'kontakt', 562, 0, 0, 0, 0, '2014-07-03 21:02:51', 0, 3, 25);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_panels`
--

CREATE TABLE IF NOT EXISTS `prefix_panels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `content` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `position` varchar(1) NOT NULL DEFAULT 'R',
  `priority` int(10) unsigned NOT NULL DEFAULT '0',
  `visibility` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Vypisuji data pro tabulku `prefix_panels`
--

INSERT INTO `prefix_panels` (`id`, `name`, `icon`, `content`, `date`, `position`, `priority`, `visibility`) VALUES
(2, 'footer', '', '<footer id="footer-style-1">\n    	<div class="container">\n              <div class="left-align footer-1">Výhradný distributor Escort Radar, Genevo, Blinder pre Slovensko\n<div class="right-align footer-2"><img src="/images/frontend/provozovna.jpg" width="300" alt="provozovna"/><br/><br/>\n                        <span class="footer-3">Naša prevádzka v Bratislave</span><br/>\n                        <span class="footer-4">Domkárska 17, 821 05 Bratislava</span></div><br/><br/><img src="/images/frontend/logo/logo_genevo.png" class="footer-logo-left-top" alt="genevo logo"/><img src="/images/frontend/logo/logo_escort.png" class="footer-logo-right-top" alt="escort logo"/><br/><img src="/images/frontend/logo/logo_blinder.png" class="footer-logo-left-bottom" alt="logo blinder"/><img src="/images/frontend/logo/logo_beltronics.png" class="footer-logo-right-bottom" alt="beltronics logo"/></div>\n        </div><!-- end columns -->\n    </footer><!-- end #footer-style-1 -->\n', '2014-07-03 22:14:08', 'B', 0, 1),
(3, 'Copyright', '', '<div id="copyrights">\n    	<div class="container">\n            <div class="col-lg-5 copyright-1">\n                <div class="copyright-text">\n                    <p>Copyright © 2014 - Antiradary.sk</p>\n                </div><!-- end copyright-text -->\n            </div><!-- end widget -->\n            <div class="col-lg-7 clearfix copyright-2">\n		<div class="footer-menu">  \n                    <ul class="menu right-align">\n\n\n<script>\n  (function(i,s,o,g,r,a,m){i[''GoogleAnalyticsObject'']=r;i[r]=i[r]||function(){\n  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\n  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\n  })(window,document,''script'',''//www.google-analytics.com/analytics.js'',''ga'');\n\n  ga(''create'', ''UA-53443536-1'', ''auto'');\n  ga(''send'', ''pageview'');\n\n</script>', '2014-07-16 10:28:47', 'B', 0, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_product`
--

CREATE TABLE IF NOT EXISTS `prefix_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `price` double DEFAULT NULL,
  `pricedph` double DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `score` int(1) DEFAULT NULL,
  `warranty` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `visibility` int(1) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `stock` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `warehouse` int(11) NOT NULL DEFAULT '0',
  `sold` int(11) NOT NULL DEFAULT '0',
  `detail` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `params` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `company` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tbasic` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'Základní informace',
  `tdetails` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'Detaily',
  `tparams` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'Parametry',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Vypisuji data pro tabulku `prefix_product`
--

INSERT INTO `prefix_product` (`id`, `name`, `price`, `pricedph`, `description`, `content`, `score`, `warranty`, `image`, `link`, `visibility`, `category`, `priority`, `code`, `stock`, `warehouse`, `sold`, `detail`, `params`, `company`, `tbasic`, `tdetails`, `tparams`) VALUES
(12, 'Escort X50 International', NULL, 399, 'Escort X50i International bol vyvinutý na prelome rokov 20011/12 a technologicky sa jedná o absolútnu novinku.<br />\nKompletne prepracovaná základná doska, kompletne nový softvér a inovovaný laserový senzor...\n', '', 8, '2 roky', 'images/produkty/escort-x50i-main.jpg', 'escort-x50i-international-sk', 1, 25, 3, 'ZEX50I4', 'ANO', 0, 0, '<p>\n<b>Escort Passport 8500 X50i</b> je dodávaný v pekne prevedenj krabici, slúžiacej na prenos, ukladanie detektora a príslušenstvo.</p>\n<p>Dodáva sa s napájacím káblom SmartCord, ktorý pomáha ovládať zariadenie a umožňuje vizuálnu signalizáciu poplachu pri prevádzke              s vypnutým displejom.\n</p>\n\n<p>\n<b>Kľúčové vlastnosti:</b>\n<ul>\n<li>     Ľahko prenositeľný z vozidla do vozidla</li>\n<li>     Spoľahlivo detekuje policajné radary RAMER 7 i AD9</li>\n<li>     Antiradar Escort X50 Euro má najvyššiu citlivosť zo všetkých prenosných antiradarov</li>\n<li>     V praxi vynikajúce detekcie, najlepší pomer cena/výkon</li>\n<li>     "SmartPlug" - cigaretový napájač slúži tiež ako ovládač hlasitosti a obsahuje diódu informujúcu o alarme. Táto vlastnosť výrazne zvyšuje komfort pri používaní tohto antiradaru.</li>\n</ul>\n</p>', '<ul><b>Operačné pásma:</b>\n\n     <li>X-band 10.525 GHz ± 25 MHz</li>\n    <li> K-band 24.150 GHz ± 100 MHz</li>\n    <li> K Narrow 23.950-24.109 GHz</li>\n   <li>  K Narrow 24.110-24.174 GHz</li>\n   <li>  K Narrow 24.175-24.250 GHz</li>\n  <li>   K Pulsed Band: 24.150 ± 100 MHz</li>\n  <li>   Ka-band 34.700 GHz ± 1300 MHz</li>\n  <li>   Ka Narrow 34.0, 34,3, 34,7, 35,5 GHz ± 100 MHz</li>\n  <li>   Ku-band 13.400 GHz ± 25 MHz</li>\n  <li>   Laser 904nm, 33 MHz šírka pásma, 6kHz max</li>\n</ul>\n<ul>\n<b>Rozmery (mm):</b>\n\n    <li> 32 V x 70 Š x 120 D</li>\n</ul>\n<ul>\n<b>Súčasťou balenia je:</b>\n\n    <li> detektor</li>\n    <li> držiak detektora</li>\n    <li> kábel do zapaľovača</li>\n    <li> puzdro pre detektor</li>\n    <li> manuál</li>\n</ul>', 'Escort', '', '', ''),
(13, 'GENEVO ONE', NULL, 365, 'Antiradar GENEVO ONE je novinkou roka 2012 a prvým prenosným modelom novej značky GENEVO. Oproti vačšine konkurenčných modelov, obsahuje novinka GENEVO ONE GPS modul na detekciu úsekových meraní,... ', '', 6, '2 roky', 'images/produkty/genevo_one_cz_1.jpg', 'genevo-one', 1, 25, 2, 'G1', 'ANO', 0, 0, '<p>\n<b>Kľúčové vlastnosti:</b>\n<ul>\n<li>výborná detekcia, najlepší pomer cena/výkon</li>\n<li>vynikajúca citlivosť, mimimum falošných poplachov</li>\n<li>presná GPS databáza</li>\n<li>najmenší detektor na trhu</li>\n<li>jednoduchá obsluha</li>\n</ul>\n</p>', '<p>\n<b>Operačné pásma:</b>\n<ul>\n<li>Ka pásmo 34,3GHz, 34,0GHz ±120MHz</li>\n<li>K pásmo 24.125GHz ±70MHz</li>\n<li>X pásmo: 10.525GHz ±50MHz</li> \n<li>Laser 904nm</li> \n<li>GPS: SKYTRACK</li>\n</ul>\n</p>\n<p>\n<b>Rozmery (cm):</b>\n<ul>\n<li>6,2 V x 9,2 Š x 3,4 D</li>\n</ul>\n</p>', 'Genevo one', '', '', ''),
(14, 'Escort 9500ci - SK', NULL, 1599, 'Escort 9500ci - SK 100% detekuje MULTARADAR CD. Tento antiradar je v súčasnosti najlepšou ochranou Vášho vozidla pred všetkými formami radarových systémov...', '', 10, '2 roky', 'images/produkty/select-9500ci.jpg', 'escort-9500ci-international-sk', 1, 26, 3, 'Escort 9500ci - SK', 'ANO', 0, 0, '<p>\n<b>Kĺúčové vlastnosti:</b>\n<ul>\n<li>vynikajúca detekcia bez falošných poplachov</li>\n<li>diskrétna inštalácia</li><li>kompletná odolnosť voči všetkým detektorom detektorov radarov</li>\n<li>vďaka GPS modulu eliminuje falošné upozornenia</li>\n<li>detekuje slovenský MultaRadar CD</li>\n<li>GPS databáza pevných radarov</li>\n</ul>\n</p>', '<p>\n<b>Operačné pásma:</b>\n<ul>\n<li>Pásma X 10, 525 GHz ± 25 MHz</li>\n<li>Pásmo K 24, 150 GHz ± 100 MHz</li>\n</ul>\n</p>\n<p>\n<b>K Narrow:</b>\n<ul>\n<li>K1: 24,050 GHz-24,109 GHz</li>\n<li>K2: 24,110 GHz – 24,174 GHz</li>\n<li>K3: 24,175 GHz – 24,250 GHz</li>\n<li>K MTR – 24, 050 GHz – 24, 150 GHz</li>\n<li>Pásmo Ka 34,70 GHz ± 1300 MHz</li>\n<li>Laser 904 nm, šírka pásma 33 MHz</li>\n<li>Ka1 = 33,392 – 33,704 GHz</li>\n<li>Ka2 = 33,704 – 33, 896 GHz</li>\n<li>Ka3 = 33, 886 – 34, 198 GHz</li> \n<li>Ka4 = 34, 184 – 34, 592 GHz</li> \n<li>Ka5 = 34, 592 – 34, 808 GHz</li> \n<li>Ka6 = 34, 806 – 35, 166 GHz</li> \n<li>Ka7 = 35, 143 – 35, 383 GHz</li>\n<li>Ka8 = 35, 378 – 35, 618 GHz</li>\n<li>Ka9 = 35,595 – 35,835 GHz</li>\n<li>Ka10 = 35,830 – 35, 998 GHz</li>\n</ul>\n</p>\n<p>\n<b>Rozmery (cm):</b>\n<ul>\n<li>4,9cm x 1,8cm x 1,7cm (displej)</li>\n<li>4,9cm x 1,2cm x 1,7cm (ovládanie)</li>\n<li>9,4cm x 10,5cm x 3,1cm (radarová hlava)</li>\n<li>2,9cm x 7,4cm (radarová hlava spredu)</li>\n<li>5,7cm x 5,4cm x 5,7cm (reproduktor)</li>\n</ul>\n</p>\n', 'Escort', '', '', ''),
(15, 'Escort Qi45 - SK', NULL, 690, 'Escort Qi45 EURO  je prvým pevne zabudovaným radarovým detektorom od spoločnosti Escort Inc., ktorý je upravený pre európske podmienky a hlavne pre SR a ČR...\n\n', '', 7, '2 roky', 'images/produkty/escort45.jpg', 'escort-qi45-international-sk', 1, 26, 4, 'CODE', 'ANO', 0, 0, '<p>\n<b>Escort Qi45 EURO prichádza s podstatne modernejším displejom, ktorý je alfanumerický a pozostáva z 280 miniatúrnych LED, ktoré zabezpečia  vynikajúcu čitateľnosť za každých svetelných podmienok.</b> Svetelný senzor je integrovaný do displeja, takže jas displeja je regulovaný automaticky  podľa množstva svetla vo vozidle. Pomocou štyroch tlačidiel  displeja, alebo ich kombinácie si jednoducho zmeníte nastavenie podľa  vlastnej potreby. Ovládanie je jednoduché a rozhodnutie výrobcu neoddeliť ovládanie od displeja ocení asi väčšina užívateľov. Prínosom sú aj nové zvukové a hlasové upozornenia, sú zvučné a poplach neminiete ani pri hlasnejšie zapnutom rádiu.</p>\n<p>\n<b>Programovateľné položky menu</b>\n<ul>\n<li>jas displeja</li>\n<li>AutoMute – automatické stíšenie poplachu</li>\n<li>hlasitosť poplachov</li>\n<li>merač sily signálu</li>\n<li>nastavenie citlivosti</li>\n<li>pásma detekcie radarov</li>\n</ul>\n<p/>\n', '<p>\n<b>Operačné pásma:</b>\n<ul>\n<li>X pásmo: 10,475-10,575 GHz </li>\n<li>Ku pásmo: 13,400-13,500 GHz</li>\n<li>K pásmo: 24,050-24,250 GHz</li>\n<li>K pulzné pásmo: 24,050-24,250 GHz</li>\n<li>Ka SuperWide: 33,400-36,000 GHz</li>\n</ul>\n</p>\n<p>\n<b>Ka Narrow:</b>\n<ul>\n<li>KaN1: 33,700-33,900 GHz</li>\n<li>KaN2: 33,900-34,200 GHz /SR a ČR/</li>\n<li>KaN3: 34,200-34,400 GHz /SR a ČR/</li>\n<li>KaN4: 34,600-34,800 GHz</li>\n<li>KaN5: 35,400-35,600 GHz</li>\n<li>Ka-POP: 33,725-33,875 GHz /60ms/</li>\n</ul>\n</p>\n<p>\n<b>Laser:</b>\n<ul>\n<li>/detekcia/: 904nm ± 13nm /Quantum Limited Video Receiver</li>\n</ul>\n</p>\n<p>\n<b>Rozmery (cm):</b>\n<ul>\n<li>Displej/Ovládač: 2,5 (v) x 5,1 (š) x 1,25 (h)</li>\n<li>Anténa: 4,5 (v) x 8,0 (š) x 10,5 (h)</li>\n</ul>\n</p>\n', 'Escort', '', '', ''),
(16, 'Stinger Card', NULL, 1799, 'Stinger CARD je detekčný a ochranný high-end systém pre najdokonalejšie zabezpečenie Vášho vozidla. Umožňuje detekciu policajného radaru RAMER/MULTANOVA s vysokou... ', '', 6, '2 roky', 'images/produkty/CARD_display.jpg', 'stinger-card', 1, 26, 5, 'CODE', 'ANO', 0, 0, '', '', 'Escort', '', '', ''),
(17, 'Beltronics STi-R M Plus M-Edition', NULL, 1740, 'Detektor Beltronics STi-R M+ je určený pre pevné zabudovanie skrytou montážou do vozidla.... ', '', 9, '2 roky', 'images/produkty/StirR_M-edition.jpg', 'beltronics-sti-r-mp-m-edition', 1, 26, 6, 'CODE', 'ANO', 0, 0, '<p>\n<b>Beltronics Sti-R Plus M-Edition</b> má najpokročilejšiu radarovú anténu (prijímacia časť) a ponúka kvalitu, ktorú ocenia aj najnáročnejší zákazníci. Dôležitá je tiež funkcia pre tzv. znefunkčnenie. Z praktického hľadiska to znamená to, že ak Vás v cudzine zastaví policajná hliadka a nájde Vám radarový detektor Vaše obavy sú neopodstatnené. Stačí stľačiť tlačítko a software Beltronics STi-R Plus M-Edition je vymazaný a Váš radarový detektor, prestáva byť radarovým detektorom. Funkciu radarového detektoru si môžete samozrejme kedykoľvek aktivovať prostredníctvom PC.</p>\n<p>\n<b>Kľúčové vlastnosti:</b>\n<ul>\n<li>vynikajúca detekcia 10/10</li>\n<li>detekuje slovenský <strong>MultaRadar CD</strong></li>\n<li>žiadne falošné poplachy 10/10</li>                      \n<li>GPS databáza pevných radarov</li>\n<li>kvalitné prevedenie</li>\n<li><strong>100% nezistiteľnosť a diskrétnosť</strong>\n</ul>\n</p>              ', '<p>\n<b>Operačné pásma:</b>\n<ul>\n<li>Ka Narrow 34.0</li>\n<li>Ka-band 34.700 GHz ± 1300 MHz</li>\n<li>KMTR: 24,100 GHz ± 50 MHz</li>\n<li>K Narrow 1-23.950-24.110 GHz</li>\n<li>K Narrow 2-24.110-24.175 GHz</li>\n<li>K Narrow 3-24.175-24.250 GHz</li>\n<li>K-band 24.100 GHz ± 150 MHz</li>\n<li>X-band 10.525 GHz ± 25 MHz</li>\n<li>Laser 904nm, 33 MHz šírka pásma</li>\n</ul>\n</p>\n<p>\n<b>Rozmery (cm):</b>\n<ul>\n<li>4,9cm x 1,8cm x 1,7cm (displej)</li>\n<li>4,9cm x 1,2cm x 1,7cm (ovládanie)</li>\n<li>9,4cm x 10,5cm x 3,1cm (radarová hlava)</li>\n<li>2,9cm x 7,4cm (radarová hlava spredu)</li>\n<li>5,7cm x 5,4cm x 5,7cm (reproduktor)</li>\n</ul>\n</p>', 'Beltronics', '', '', ''),
(18, 'Stinger VIP', NULL, 2799, 'Stinger VIP-najdrahšia ochrana proti radarom, ktorá kedy bola vyvinutá...', '<p><strong>Stinger VIP-najdrahšia ochrana proti radarom, ktorá kedy bola vyvinutá.</strong></p>Vďaka GPS modulu a vstavanej databáze dokáže používateľa včas informovať o blízkosti stacionárnych radarov, či úsekových meračov rýchlosti. Stinger VIP je elektonicky nezistiteľný detektormi radarových detektorov, ktoré používa polícia v niektorých krajinách, v ktorých je používanie radarových detektorov zakázané.</p>\n<p>Zariadenia Stinger sú certifikované a homologované na pevnú montáž do vozidiel a sú označené značkami e4 a CE. Je to jediné zariadenie na trhu, ktoré komplexne rieši ochranu pred radarmi aj lidarmi [extra príslušenstvo] a ktoré môžete mat legálne namontované vo Vašom vozidle.</p>\n', 8, '2 roky', 'images/produkty/stinger_VIP.jpg', 'stinger-vip', 1, 26, 7, 'CODE', 'ANO', 0, 0, '<p>\n<b>Kľúčové vlastnosti:</b>\n<ul>\n<li>anténa MPHD zaručujúca optimálne varovanie pred radarmi s maximálnym potlačením falošných poplachov</li>\n<li>kompletná odolnosť voči všetkým detektorom detektorov radarov</li>\n<li>široké spektrum frekvencií pre maximálnu bezpečnosť doma a v zahraničí</li>\n<li>varovanie a aktívna ochrana pred laserovým meraním</li>\n<li>integrovaná GPS databáza pevných radarov v celej Európe</li>\n<li>farebný grafický displej a jednoduchá obsluha</li>\n</ul>\n</p>', '', 'Stinger', 'Základné informácie', 'Detaily', 'Parametre'),
(19, 'Blinder HP QUAD', NULL, 959, 'Jedná sa o prvý model v histórii firmy Blinder, kde došlo k použitiu laserovej vysielacej diódy v čidlách a týmto aj k niekoľkonásobnému zvýšeniu vysielacieho výkonu oproti starším...', '', 10, '2 roky', 'images/produkty/anti_blinder_hp-905_compact_quadl.jpg', 'blinder-hp-quad', 1, 27, 8, 'CODE', 'ANO', 0, 0, '<p>\nZariadenie sa skladá z riadiacej jednotky a otočného prepínača montovaného do kabíny vozidla. Ďalej sú tu 4 externé moduly, ktoré obsahujú laserové čidlá a vysielacie diódy laserových lúčov. Tieto moduly sa montujú podľa potreby do prednej a zadnej časti automobilu medzi registračnú značku a ľavé alebo pravé svetlo tak, že musia mať výhľad pred seba.</p>\n\n<p><b>Použitie otočného prepínača ponúka tri voľby pracovného režimu:</b>\n<ul>\n<li>parkovací asistent na neobmedzenú dobu</li>\n<li>detektor laserových meračov(užívateľ je informovaný o meraní a type merača, ale nedochádza k jeho rušeniu</li>\n<li>rušička laserových meračov rýchlosti</li>\n</ul>\n</p>\n<p>Pri ovládání pomocou prepínača na riadiacej jednotke je momožné voliť iba medzi parkovacím asistentom a laserovou rušičkou. Voľba nastavenia pracovného režimu je avizována buď hlasite, alebo je možné hlasové upozornenia vypnúť a zmena bude oznámená iba pípnutím.\n</p>\n\n<p><b>Prednosti Blinderu:</b>\n<ul>\n<li>dokonalá ochrana pred laserovými meračmi v celej Európe</li>\n<li>zapnutie parkovacieho asistenta na neobmedzenú dobu prepnutím hlavného vypínača</li>\n<li>minimálna veľkosť čidiel</li>\n<li>hlasové výstrahy</li>\n<li>zapnutie detekčnej funkcie laserových meračov rýchlosti</li>\n<li>možnosť nastavenie doby vysielania rušivých sekvencií</li>\n<li>aktualizácia softwaru pomocou pc alebo internetu</li>\n</ul>\n</p>', '<p><b>Výrobok obsahuje:</b>\n<ul>\n<li>4 Čidlá so zabudovaným laserovým detektorom/rušičom</li>\n<li>riadiacu jednotku</li>\n<li>externý otočný prepínač</li>\n<li>montážny a prepojovací materiál</li>\n<li>kábel pre pripojenie riadiacej jednotky k počítaču</li>\n<li>návod na použitie</li>\n</ul>\n</p>', 'Blinder', '', '', ''),
(20, 'Laser Interceptor', NULL, 624, 'Laser Interceptor je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti a zároveň môže slúžiť ako parkovací asistent...', '', 7, '2 roky', 'images/produkty/li-dual.jpg', 'laser-interceptor', 1, 27, 9, 'LI', 'ANO', 0, 0, '<p>\nZariadenie je stavebnica, ktorá sa skladá z riadiacej jednotky a aktívnych senzorov. Senzory sa umiestnia do prednej masky vozidla alebo v zadnej časti vozidla a riadiaca jednotka do interiéru spolu s ovládaním. Laser Interceptor vyvinul aj špeciálne snímače určené pre zadnú inštaláciu, čo u iného výrobcu nenájdeme.</p>\n<p>\n<b>Základné charakteristiky:</b>\n<ul>\n<li>zariadenie využíva technológiu laserových diód, ktoré v porovnaní s LED diodámi majú vysoký vysielací výkon </li>\n<li>zariadenie spoľahlivo funguje ako ochrana proti všetkým laserovým meračom používaným v SR a ČR </li>\n<li>senzory fungujú aj ako klasické parkovacie senzory </li>\n<li>zariadenie disponuje samostatným vypínačom aktívneho rušenia laserových meračov, až do opätovného zapnutia interferujúcej funkcie funguje iba ako parkovací asistent </li>\n<li>funkcia detekcie infračerveného podsvietenia kamier úsekového merania rýchlosti exluzívne pre SR </li>\n<li>systém môžete využiť aj na diaľkové otváranie brán </li>\n<li>laser Interceptor využíva hlasové varovné hlásenia </li>\n<li>softvér a varovné hlásenia v slovenskom i českom jazyku </li>\n<li>funkcia automatického vypnutia rušenia po Vami zvolenom časovom intervale (prinicip 5 sekúnd aktívneho rušenia, súčasného spomalenia na predpísanú rýchlosť a následného nameranie rýchlosti Vášho vozidla) </li>\n<li>možnosť upgrade softvéru na vyššiu verziu cez PC </li>\n<li>veľmi jednoduché ovládanie </li>\n</ul>\n</p>\n', '<p>\n<b>Špecifikácia</b>\n<ul>\n<li>Vlnová dľžka: 904nm </li>\n<li>Napätie: 12-15V DC </li>\n<li>Maximálny odber: 700mA </li>\n<li>Výkon reproduktora: 1W </li>\n<li>Rozmery predných senzorov: 100 x 34 x 15,5 mm (ŠxDxV) </li>\n<li>Rozmery zadných senzorov: 100 x 25 x 15,5 mm (ŠxDxV) </li>\n<li>Rozmer riadiacej jednotky: 125 x 55 x 25 mm (ŠxDxV)</li>\n</ul>\n</p>', 'Laser interceptor', '', '', ''),
(21, 'Laser Interceptor Triple', NULL, 816, 'Laser Interceptor je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti a zároveň môže slúžiť ako parkovací asistent...', '', 8, '2 roky', 'images/produkty/li-triple.jpg', 'laser-interceptor-triple', 0, 27, 10, 'CODE', 'ANO', 0, 0, '<p>\nZariadenie je stavebnica, ktorá sa skladá z riadiacej jednotky a aktívnych senzorov. Senzory sa umiestnia do prednej masky vozidla alebo v zadnej časti vozidla a riadiaca jednotka do interiéru spolu s ovládaním. Laser Interceptor vyvinul aj špeciálne snímače určené pre zadnú inštaláciu, čo u iného výrobcu nenájdeme.</p>\n<p>\n<b>Základné charakteristiky</b>\n<ul>\n<li>zariadenie využíva technológiu laserových diód, ktoré v porovnaní s LED diodámi majú vysoký vysielací výkon </li>\n<li>zariadenie spoľahlivo funguje ako ochrana proti všetkým laserovým meračom používaným v SR a ČR </li>\n<li>senzory fungujú aj ako klasické parkovacie senzory </li>\n<li>zariadenie disponuje samostatným vypínačom aktívneho rušenia laserových meračov, až do opätovného zapnutia interferujúcej funkcie funguje iba ako parkovací asistent </li>\n<li>funkcia detekcie infračerveného podsvietenia kamier úsekového merania rýchlosti exluzívne pre SR </li>\n<li>systém môžete využiť aj na diaľkové otváranie brán </li>\n<li>laser Interceptor využíva hlasové varovné hlásenia </li>\n<li>softvér a varovné hlásenia v slovenskom i českom jazyku </li>\n<li>funkcia automatického vypnutia rušenia po Vami zvolenom časovom intervale (prinicip 5 sekúnd aktívneho rušenia, súčasného spomalenia na predpísanú rýchlosť a následného nameranie rýchlosti Vášho vozidla) </li>\n<li>možnosť upgrade softvéru na vyššiu verziu cez PC </li>\n<li>veľmi jednoduché ovládanie </li>\n</ul>\n</p>\n', '<p>\n<b>Špecifikácia</b>\n<ul>\n<li>Vlnová dľžka: 904nm </li>\n<li>Napätie: 12-15V DC </li>\n<li>Maximálny odber: 700mA </li>\n<li>Výkon reproduktora: 1W </li>\n<li>Rozmery predných senzorov: 100 x 34 x 15,5 mm (ŠxDxV) </li>\n<li>Rozmery zadných senzorov: 100 x 25 x 15,5 mm (ŠxDxV) </li>\n<li>Rozmer riadiacej jednotky: 125 x 55 x 25 mm (ŠxDxV)</li>\n</ul>\n</p>', 'Laser interceptor', '', '', ''),
(22, 'Laser Interceptor Quad', NULL, 984, 'Laser Interceptor je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti a zároveň môže slúžiť ako parkovací asistent...', '', 9, '2 roky', 'images/produkty/li-quad.jpg', 'laser-interceptor-quad', 0, 27, 11, 'CODE', 'ANO', 0, 0, '<p>\nZariadenie je stavebnica, ktorá sa skladá z riadiacej jednotky a aktívnych senzorov. Senzory sa umiestnia do prednej masky vozidla alebo v zadnej časti vozidla a riadiaca jednotka do interiéru spolu s ovládaním. Laser Interceptor vyvinul aj špeciálne snímače určené pre zadnú inštaláciu, čo u iného výrobcu nenájdeme.</p>\n<p>\n<b>Základné charakteristiky</b>\n<ul>\n<li>zariadenie využíva technológiu laserových diód, ktoré v porovnaní s LED diodámi majú vysoký vysielací výkon </li>\n<li>zariadenie spoľahlivo funguje ako ochrana proti všetkým laserovým meračom používaným v SR a ČR </li>\n<li>senzory fungujú aj ako klasické parkovacie senzory </li>\n<li>zariadenie disponuje samostatným vypínačom aktívneho rušenia laserových meračov, až do opätovného zapnutia interferujúcej funkcie funguje iba ako parkovací asistent </li>\n<li>funkcia detekcie infračerveného podsvietenia kamier úsekového merania rýchlosti exluzívne pre SR </li>\n<li>systém môžete využiť aj na diaľkové otváranie brán </li>\n<li>laser Interceptor využíva hlasové varovné hlásenia </li>\n<li>softvér a varovné hlásenia v slovenskom i českom jazyku </li>\n<li>funkcia automatického vypnutia rušenia po Vami zvolenom časovom intervale (prinicip 5 sekúnd aktívneho rušenia, súčasného spomalenia na predpísanú rýchlosť a následného nameranie rýchlosti Vášho vozidla) </li>\n<li>možnosť upgrade softvéru na vyššiu verziu cez PC </li>\n<li>veľmi jednoduché ovládanie </li>\n</ul>\n</p>\n', '<p>\n<b>Špecifikácia</b>\n<ul>\n<li>Vlnová dľžka: 904nm </li>\n<li>Napätie: 12-15V DC </li>\n<li>Maximálny odber: 700mA </li>\n<li>Výkon reproduktora: 1W </li>\n<li>Rozmery predných senzorov: 100 x 34 x 15,5 mm (ŠxDxV) </li>\n<li>Rozmery zadných senzorov: 100 x 25 x 15,5 mm (ŠxDxV) </li>\n<li>Rozmer riadiacej jednotky: 125 x 55 x 25 mm (ŠxDxV)</li>\n</ul>\n</p>', 'Laser interceptor', '', '', ''),
(25, 'Napájací kábel SmartCord', NULL, 30, 'Kábel do zapaľovača pre antiradary. Je použitelný pre vačšinu typov antiradarov napájaných telefónnou zástrčkou... ', '<p>Kábel do zapaľovača pre antiradary. Je použiteľný pre vačšinu typov antiradarov napájaných telefónnou zástrčkou. SmartCord kábel je určený pre napájenie z 12V zástrčka cigaretového adaptéra. SmartCord je vybavený dvoma LED a tlačítkom MUTE.</p>', 5, '2 Roky', 'images/produkty/0spiralny_smart_b.jpg', 'napajaci-kabel-smartcord', 1, 28, 0, 'Napájací kábel SmarC', 'ANO', 0, 0, '', '', 'Escort / Beltronics', 'Základné informácie', 'Detaily', 'Parametry'),
(26, 'Kábel na pevnú montáž s displejom', NULL, 26, 'Kábel na pevnú montáž antiradarov slúži k jednoduchšiemu použitiu prenosného antiradaru, kde nahradzuje klasické napájanie pomocou zapaľovačového adaptéru a umožní....', '<p>Kábel na pevnú montáž antiradarov slúži k jednoduchšiemu použitiu prenosného antiradaru, kde nahradzuje klasické napájanie pomocou zapaľovačového adaptéru a umožní tak vodičovi komfortnejšie používanie detektora. Ponúkame verzie káblov na pevnú montáž pre antiradary Escort.</p>', 0, '2 roky', 'images/produkty/kabel_na_pevnú_montáz.jpg', 'kabel-na-pevnu-montaz-s-displejom', 1, 28, 0, 'kabel na pevnú montá', 'ANO', 0, 0, '', '', 'Escort / Beltronics', 'Základné informácie', 'Detaily', 'Parametre'),
(27, 'Horizontálny držiak', NULL, 22, 'Horizontálny držiak Super Cup pre antiradary. Je určený výhradne pre detektory Escort (X50, 9500, MAX)...\n\n', '<p>Horizontálny držiak Super Cup pre antiradary. Je určený výhradne pre detektory Escort (X50, 9500, MAX). Slúži pre horizontálnu montáž detektorov na čelné sklo vozidla.</p>', 0, '2 roky', 'images/produkty/horizontálny_držiak_2.jpg', 'horizontalny-drziak', 1, 28, 0, 'horizontálny držiak', 'ANO', 0, 0, '', '', 'Escort/Beltronics', 'Základné informácie', 'Detaily', 'Parametre'),
(28, 'Pripínacia spona', NULL, 11, 'Pripínacia spona pre antiradar. Je určená výhradne pre detektory Escort...\n', '<p>Pripínacia spona pre antiradar. Je určená výhradne pre detektory Escort. Slouží pre montáž detektoru na protislnečnú clonu.</p>\n', 0, '2 roky', 'images/produkty/0pripinaci-clona.jpg', 'pripinacia-spona', 1, 28, 0, 'pripínacia spona', 'ANO', 0, 0, '', '', 'Escort / Beltronics', 'Základné informácie', 'Detaily', 'Parametre'),
(29, 'Vertikálny držiak', NULL, 22, 'Vertikálny držiak s prísavkami na vertikálne uchytenie detektoru. Tento držiak zaisťuje vyššiu citlivosť a tým pádom...', '<p>Vertikálny držiak s prísavkami na vertikálne uchytenie detektoru. Tento držiak zaisťuje vyššiu citlivosť a tým pádom aj dlhšiu detekčnú vzdialenosť radarov oproti držiaku štandardnému - horizontálnemu.</p>', 0, '2 roky', 'images/produkty/vertikálny_držiak.jpg', 'vertikalny-drziak', 1, 28, 0, 'vertikálny držiak', 'ANO', 0, 0, '', '', 'Escort / Beltronics', 'Základné informácie', 'Detaily', 'Parametre'),
(30, 'Napájací kábel na pevnú montáž', NULL, 18, 'Jednoduchý kábel, ktorý se dokonale hodí na pevnú inštaláciu napájania prenosného datektoru. Kábel sa pripojuje priamo k 12V...', '<p>Jednoduchý kábel, ktorý se dokonale hodí na pevnú inštaláciu napájania prenosného datektoru. Kábel sa pripojuje priamo k 12V napájaniu Vášho vozidla, zapaľovací adaptér Vám tak zostává volný pre ďalšie autopríslušenstvo.</p>', 0, '2 roky', 'images/produkty/napájací_kábel.jpg', 'napajaci-kabel-na-pevnu-montaz', 1, 28, 0, 'napájací kábel na pe', 'ANO', 0, 0, '', '', 'Escort / Beltronics', 'Základné informácie', 'Detaily', 'Parametre'),
(31, 'Escort MAX International SK', NULL, 999, 'Prvý prenosný detektor, ktorý detekuje MULTARADAR CD skladom !!! Ako jediný vám ponúkame absolutnú novinku na trhu s radarovými detektormi...', '', 10, '2 roky', 'images/produkty/escort-max-main.jpg', 'escort-max-international-sk', 1, 25, 1, 'emax', 'ANO', 0, 0, '<p><b>Včasná detekcia s pozoruhodnou presnosťou</b></br>\nNová radarová hlava obsahuje pokročilú vojenskú technoléogiu s názvom Digital Signal Processing (DSP). Táto unikátna metóda skenovania umožňuje MAXu identifikovat skutočné hrozby rychlejšie a přesnejšie než akýkoľvek iný detektor na trhu. Rýchlejšia doba odozvy znamená pokročilé upozornenie pred radarovými hrozbami.</p> \n\n<p><b>Nový Multi-farevný OLED displej</b></br> \nNový multi-farebný displej je dalšou výhodou oproti konkurenčným detektorom! Nová brilantná grafika osvetľuje intuitívne ikony, ktoré identifikujú typ hrozby hneď na prvý pohľad. Okrem toho, užívateľsky volitelné podsvietenie vám umožní si vybrat, ktorá farba sa hodí nejlepšie k farba vášho tachometra.</p>\n\n<p><b>Intuitívne ovládacie prvky</b></br> \nNaše predvoľby umožňujú zmeniť niekoľko možností, vrátane radarových pásiem, ktoré by ste chceli filtrovať a o ktorých by ste chceli byť informováný, akonáhle je detekovaný signál.</p>\n\n<p><b> Umelá inteligencia</b></br> \nNaša patentovaná technológie používá samoučiaci sa algoritmus. Presná frekvencia sa učí automaticky odmietať nežiadúce falošné signály(otvárače garáží, dvere a dalšie...). Výsledkom je nejpresnejšia ochrana s výbornou detekciou.</p>\n\n<p><b>Online funkcie</b></br>\nNa našich internetových stránkách ESCORT sú k dispozícii aktualizácie FW. Stačí si stiahnúť on-line program Escort a spustiť ho. Potom pripojíte MAX k počítaču s aktívnym pripojením k internetu a stiahnete najaktuálnejšiu GPS databázu. Dokonce si môžete zálohovať data alebo aktualizovať operačný software detektoru (firmware).</p>\n\n<p><b>High-Performance Laser ochrana</b></br>\nMAX má vysoko výkonné laserové čidla poskytujúce maximálne laserové varovanie, používajúce ochranu off-osy.</p>\n\n<p><b>Funkčnosť podľa rýchlosti</b></br>\nNaša patentovaná technológia využívajúca GPS umožňuje detektoru poskytovať upozornenie na základe toho, čo vozidlo v skutečnosti robí. Na diaľnici potrebujete tú najlepšiu citlivosť s dlhým dosahom. V pomalších rýchlostiach je možné citlivosť nastaviť tak, aby znížila množstvo falošných poplachov. Dokonce sme zmenili aktuálne upozornenie na krátký dvojitý tón, keď sa vaše vozidlo pohybuje menej než 32 kmh.</p>\n\n<p><b>Zrozumiteľné hlasové upozornenie</b></br>\nUnikátne hlasové upozornenie MAXu poskytuje jasné zdelenie a varovanie. Teraz už môžete mať svoje oči na diaľnici bez zbytočných rušivých vplyvov.</p>\n', '<p>\n<b>Operačné pásma:</b>\n<ul>\n<li>Pásma X 10, 525 GHz ± 25 MHz</li>\n<li>Pásmo K 24, 150 GHz ± 100 MHz</li></ul>\n\n<b>K Narrow:</b>\n<ul>\n<li>K1: 24,050 GHz-24,109 GHz</li>\n<li>K2: 24,110 GHz – 24,174 GHz</li>\n<li>K3: 24,175 GHz – 24,250 GHz</li>\n<li>K MTR – 24, 050 GHz – 24, 150 GHz</li>\n<li>Pásmo Ka 34,70 GHz ± 1300 MHz</li>\n<li>Laser 904 nm, šírka pásma 33 MHz</li>\n<li>Ka1 = 33,392 – 33,704 GHz</li>\n<li>Ka2 = 33,704 – 33, 896 GHz</li>\n<li>Ka3 = 33, 886 – 34, 198 GHz</li> \n<li>Ka4 = 34, 184 – 34, 592 GHz</li> \n<li>Ka5 = 34, 592 – 34, 808 GHz</li> \n<li>Ka6 = 34, 806 – 35, 166 GHz</li> \n<li>Ka7 = 35, 143 – 35, 383 GHz</li>\n<li>Ka8 = 35, 378 – 35, 618 GHz</li>\n<li>Ka9 = 35,595 – 35,835 GHz</li>\n<li>Ka10 = 35,830 – 35, 998 GHz</li>\n</ul>\n</p>\n', 'Escort', '', '', ''),
(32, 'Genevo FF2 (DUAL)', NULL, 599, '<p>Genevo FF je parkovací asistent, ktorý ocenia vodiči pri parkovaní....</p>  ', '', 4, '2 roky', '', 'genevo-ff', 0, 27, 0, '', 'ANO', 0, 0, '', '', 'Genevo', '', '', ''),
(34, 'Escort MAX + Genevo FF2', NULL, 1499, '', '', 4, '2 roky', '', 'escort-max-genevo-ff2', 0, 29, NULL, 'CODE', 'ANO', 0, 0, '', '', 'Escort/Genevo', '', '', ''),
(35, 'Escort 9500ci + Blinder Quad', NULL, 2799, '', '', 6, '2 roky', '', 'escort-9500ci-blinder-quad', 0, 29, NULL, 'CODE', 'ANO', 0, 0, '', '', 'Escort/Blinder', '', '', ''),
(36, 'Kábel do zapaľovača', NULL, 22, '', '', 0, '2 roky', '', 'kabel-do-zapa-ovaca', 0, 28, NULL, 'PKDZB', 'ANO', 0, 0, '', '', 'Escort / Beltronics', '', '', ''),
(37, 'prísavka', NULL, 1, '', '', 0, '2 roky', '', 'prisavka', 0, 28, NULL, 'CODE', 'ANO', 0, 0, '', '', 'Escort / Beltronics', '', '', ''),
(38, 'Escort 9500ix Euro', NULL, 324, '', '', 0, '', '', 'escort-9500ix-euro', 0, 25, NULL, 'ZR9500IX', '', 0, 0, '', '', '', '', '', ''),
(39, 'BLI-HP905-QUAD', NULL, 444, '', '', 0, '', '', 'bli-hp905-quad', 0, 27, NULL, 'ZHP905Q', '', 0, 0, '', '', '', '', '', ''),
(40, 'Escort Laser Shifter', NULL, 630, 'Laser Shifter je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti. ', '', 8, '2 roky', '', 'escort-laser-shifter', 0, 27, NULL, 'ZELS', 'ANO', 0, 0, '', '', 'Laser Shifter', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_productimg`
--

CREATE TABLE IF NOT EXISTS `prefix_productimg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(10) unsigned DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=176 ;

--
-- Vypisuji data pro tabulku `prefix_productimg`
--

INSERT INTO `prefix_productimg` (`id`, `product`, `image`) VALUES
(153, 13, 'images/produkty/genevo one 2 jpg.jpg'),
(154, 13, 'images/produkty/genevo one jpg.jpg'),
(155, 14, 'images/produkty/9500ci.jpg'),
(156, 14, 'images/produkty/select-9500ci.jpg'),
(157, 15, 'images/produkty/escort45_1.jpg'),
(158, 15, 'images/produkty/escort45_2.jpg'),
(159, 15, 'images/produkty/escort45_3.jpg'),
(160, 15, 'images/produkty/escort45.jpg'),
(161, 17, 'images/produkty/beltronics jpg.jpg'),
(162, 17, 'images/produkty/beltronics-sti-r-plus-m-edition jpg.jpg'),
(163, 17, 'images/produkty/StirR_M-edition.jpg'),
(164, 18, 'images/produkty/stinger Vip. jpg.jpg'),
(165, 18, 'images/produkty/stinger_VIP.jpg'),
(166, 19, 'images/produkty/anti_blinder_hp-905_compact_quadl.jpg'),
(167, 19, 'images/produkty/Quad_m jpg.jpg'),
(168, 12, 'images/escort-x50i-euro-cz-3.jpg'),
(169, 31, 'images/ROB_9117.jpg'),
(170, 31, 'produkty/ROB_9119.jpg'),
(173, 31, 'produkty/ROB_9136.jpg');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_product_additionals`
--

CREATE TABLE IF NOT EXISTS `prefix_product_additionals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `extra` int(10) unsigned DEFAULT NULL,
  `product` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Vypisuji data pro tabulku `prefix_product_additionals`
--

INSERT INTO `prefix_product_additionals` (`id`, `extra`, `product`) VALUES
(1, 12, 15),
(2, 13, 15),
(3, 25, 12),
(5, 26, 12),
(6, 27, 12),
(7, 28, 12),
(8, 29, 12),
(9, 30, 12),
(15, 29, 31),
(17, 25, 31),
(18, 30, 31);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_product_solds`
--

CREATE TABLE IF NOT EXISTS `prefix_product_solds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(10) unsigned DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=23 ;

--
-- Vypisuji data pro tabulku `prefix_product_solds`
--

INSERT INTO `prefix_product_solds` (`id`, `product`, `date`, `stock`) VALUES
(17, 14, '2014-08-12 09:29:48', 3),
(18, 31, '2014-08-12 09:29:48', 2),
(19, 36, '2014-08-12 09:29:48', 2),
(20, 37, '2014-08-12 09:29:48', 8),
(21, 14, '2014-08-12 10:34:49', 2),
(22, 38, '2014-08-13 14:03:55', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_product_tab`
--

CREATE TABLE IF NOT EXISTS `prefix_product_tab` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `content` text COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=84 ;

--
-- Vypisuji data pro tabulku `prefix_product_tab`
--

INSERT INTO `prefix_product_tab` (`id`, `product`, `name`, `content`) VALUES
(31, 25, 'Základní informace', '<p>Kábel do zapaľovača pre antiradary. Je použiteľný pre vačšinu typov antiradarov napájaných telefónnou zástrčkou. SmartCord kábel je určený pre napájenie z 12V zástrčka cigaretového adaptéra. SmartCord je vybavený dvoma LED a tlačítkom MUTE.</p>'),
(36, 12, 'Základné informácie ', '<p><b>Prenosný pasívny antiradar Escort X50i International - SK bol vyvinutý začiatkom roku 2009 špeciálne pre detekciu európskych radarov.</b> V súčasnosti bola uvedená na trh nová verzia International s ešte vyššou citlivosťou v decentnej čiernej farbe. Okrem vysokej citlivosti sa tento antiradar vyznačuje vynikajúcim odrušením proti falošným poplachom, takže takmer vždy, keď sa na ozve varovný signál, je nablízku policajný radar alebo laser.\r\n</p>\r\n\r\n<p>\r\nAntiradar <b>Escort X50i spoľahlivo detekuje ako X, K, Ka superwide pásmo</b>, predovšetkým Ka Narrow (zúžené Ka pásmo), ktoré je bezpodmienečnou nutnosťou pre správnu detekciu radarov v ČR a na Slovensku. Patentovaný procesor digitálneho spracovania signálu (DSP) umožňuje vysokú citlivosť detekcie s minimom falošných poplachov a samozrejmosťou je aj predné a zadné laserové čidlo. Obsahuje aj ďalšie unikátne funkcie a inovované prvky, napr. AutoMute (automatické stlmenie varovných hlásení) alebo AutoSensitivity (redukcia falošných poplachov).\r\n</p>\r\n'),
(35, 12, 'Detaily', '<p>Jedná sa o produkt špeciálne vyvinutý pre Európsky (Slovenský) trh s podporou úzkeho Ka pásma (Ka narrow). Pozor! Nezamieňať s produktom Escort X50 pre USA, ktorý nie je vhodný pre použitie v SR.\r\n</p>\r\n\r\n<p>\r\n<b>Escort Passport 8500 X50i</b> je dodávaný v pekne prevedenj krabici, slúžiacej na prenos, ukladanie detektora a príslušenstvo.</p>\r\n<p>Dodáva sa s napájacím káblom SmartCord, ktorý pomáha ovládať zariadenie a umožňuje vizuálnu signalizáciu poplachu pri prevádzke              s vypnutým displejom.\r\n</p>\r\n\r\n<p>\r\n<b>Kľúčové vlastnosti:</b>\r\n<ul>\r\n<li>     Ľahko prenositeľný z vozidla do vozidla</li>\r\n<li>     Spoľahlivo detekuje policajné radary RAMER 7 i AD9</li>\r\n<li>     Antiradar Escort X50 Euro má najvyššiu citlivosť zo všetkých prenosných antiradarov</li>\r\n<li>     V praxi vynikajúce detekcie, najlepší pomer cena/výkon</li>\r\n<li>     "SmartPlug" - cigaretový napájač slúži tiež ako ovládač hlasitosti a obsahuje diódu informujúcu o alarme. Táto vlastnosť výrazne zvyšuje komfort pri používaní tohto antiradaru.</li>\r\n</ul>\r\n</p>'),
(37, 12, 'Parametre', '<ul><b>Operačné pásma:</b>\r\n\r\n     <li>X-band 10.525 GHz ± 25 MHz</li>\r\n    <li> K-band 24.150 GHz ± 100 MHz</li>\r\n    <li> K Narrow 23.950-24.109 GHz</li>\r\n   <li>  K Narrow 24.110-24.174 GHz</li>\r\n   <li>  K Narrow 24.175-24.250 GHz</li>\r\n  <li>   K Pulsed Band: 24.150 ± 100 MHz</li>\r\n  <li>   Ka-band 34.700 GHz ± 1300 MHz</li>\r\n  <li>   Ka Narrow 34.0, 34,3, 34,7, 35,5 GHz ± 100 MHz</li>\r\n  <li>   Ku-band 13.400 GHz ± 25 MHz</li>\r\n  <li>   Laser 904nm, 33 MHz šírka pásma, 6kHz max</li>\r\n</ul>\r\n<ul>\r\n<b>Rozmery (mm):</b>\r\n\r\n    <li> 32 V x 70 Š x 120 D</li>\r\n</ul>\r\n<ul>\r\n<b>Súčasťou balenia je:</b>\r\n\r\n    <li> detektor</li>\r\n    <li> držiak detektora</li>\r\n    <li> kábel do zapaľovača</li>\r\n    <li> puzdro pre detektor</li>\r\n    <li> manuál</li>\r\n</ul>'),
(38, 13, 'Základné informácie', NULL),
(39, 13, 'Detaily', '<p>\r\n<b>Kľúčové vlastnosti:</b>\r\n<ul>\r\n<li>výborná detekcia, najlepší pomer cena/výkon</li>\r\n<li>vynikajúca citlivosť, mimimum falošných poplachov</li>\r\n<li>presná GPS databáza</li>\r\n<li>najmenší detektor na trhu</li>\r\n<li>jednoduchá obsluha</li>\r\n</ul>\r\n</p>'),
(40, 13, 'Parametre', '<p>\r\n<b>Operačné pásma:</b>\r\n<ul>\r\n<li>Ka pásmo 34,3GHz, 34,0GHz ±120MHz</li>\r\n<li>K pásmo 24.125GHz ±70MHz</li>\r\n<li>X pásmo: 10.525GHz ±50MHz</li> \r\n<li>Laser 904nm</li> \r\n<li>GPS: SKYTRACK</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>Rozmery (cm):</b>\r\n<ul>\r\n<li>6,2 V x 9,2 Š x 3,4 D</li>\r\n</ul>\r\n</p>'),
(41, 14, 'Základné informácie', '<p>Je určený pre pevné zabudovanie - skrytú montáž do vozidla. Je nástupcom modelu 8500ci, oproti ktorému se vyznačuje nielen vyššou citlivosťou, ale ako historicky prvý detektor nulovým počtom falošných poplachov, GPS databázou, ktorá dokáže so 100% úspešnosťou odhaliť úsekové meranie rýchlosti (update databáze je navždy zdarma), špeciálnou "duálnou" konštrukciou antény, zaisťujúcou absolútnu ochranu oproti VG2 (detektory antiradarov), používaných políciou v niektorých západoeuropských štátoch (Francúzsko, Holandsko), ale hlavne špeciálnym prepínačom schopným vyradiť detekčnú funkciu a tým, v prípade policajnej kontroly, <b>"legalizovať"</b> toto zariadenie vo všetkých krajinách sveta.</p>\r\n\r\n<p><b>Escort 9500ci International - SK 100% detekuje MULTARADAR CD. Tento antiradar je v súčasnosti najlepšou ochranou Vášho vozidla pred všetkými formami radarových systémov. Jeho najvačšou výhodou pre použitie na Slovensku je spoľahlivá detekcia Multaradaru CD, ktorý používa slovenská polícia v 22 vozidlách značky Škoda Fábia.</b> Tieto civilné vozidlá sú používané prevažne k skrytému meraniu, teda k tzv. objektívnej zodpovednosti.</p>\r\n'),
(42, 14, 'Detaily', '<p>\r\n<b>Kĺúčové vlastnosti:</b>\r\n<ul>\r\n<li>vynikajúca detekcia bez falošných poplachov</li>\r\n<li>diskrétna inštalácia</li><li>kompletná odolnosť voči všetkým detektorom detektorov radarov</li>\r\n<li>vďaka GPS modulu eliminuje falošné upozornenia</li>\r\n<li>detekuje slovenský MultaRadar CD</li>\r\n<li>GPS databáza pevných radarov</li>\r\n</ul>\r\n</p>'),
(43, 14, 'Parametre', '<p>\r\n<b>Operačné pásma:</b>\r\n<ul>\r\n<li>Pásma X 10, 525 GHz ± 25 MHz</li>\r\n<li>Pásmo K 24, 150 GHz ± 100 MHz</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>K Narrow:</b>\r\n<ul>\r\n<li>K1: 24,050 GHz-24,109 GHz</li>\r\n<li>K2: 24,110 GHz – 24,174 GHz</li>\r\n<li>K3: 24,175 GHz – 24,250 GHz</li>\r\n<li>K MTR – 24, 050 GHz – 24, 150 GHz</li>\r\n<li>Pásmo Ka 34,70 GHz ± 1300 MHz</li>\r\n<li>Laser 904 nm, šírka pásma 33 MHz</li>\r\n<li>Ka1 = 33,392 – 33,704 GHz</li>\r\n<li>Ka2 = 33,704 – 33, 896 GHz</li>\r\n<li>Ka3 = 33, 886 – 34, 198 GHz</li> \r\n<li>Ka4 = 34, 184 – 34, 592 GHz</li> \r\n<li>Ka5 = 34, 592 – 34, 808 GHz</li> \r\n<li>Ka6 = 34, 806 – 35, 166 GHz</li> \r\n<li>Ka7 = 35, 143 – 35, 383 GHz</li>\r\n<li>Ka8 = 35, 378 – 35, 618 GHz</li>\r\n<li>Ka9 = 35,595 – 35,835 GHz</li>\r\n<li>Ka10 = 35,830 – 35, 998 GHz</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>Rozmery (cm):</b>\r\n<ul>\r\n<li>4,9cm x 1,8cm x 1,7cm (displej)</li>\r\n<li>4,9cm x 1,2cm x 1,7cm (ovládanie)</li>\r\n<li>9,4cm x 10,5cm x 3,1cm (radarová hlava)</li>\r\n<li>2,9cm x 7,4cm (radarová hlava spredu)</li>\r\n<li>5,7cm x 5,4cm x 5,7cm (reproduktor)</li>\r\n</ul>\r\n</p>\r\n'),
(44, 15, 'Základné informácie', '<p><b>Escort Qi45 International - SK je prvým pevne zabudovaným radarovým detektorom  od spoločnosti Escort Inc., ktorý je upravený pre európske podmienky a  hlavne pre Slovensko a Česko.</b></p>\r\n<p>Radary typu  Ramer používané v SR a ČR sa výrazne odlišujú od radarov používaných v iných krajinách hlavne tým, že používajú frekvenciu 34,00GHz, ktorú  nepoužívajú žiadne iné štáty a  majú vysielací výkon podstatne nižší rádovo 0,5mW a preto je aj ich detekcia omnoho obtiažnejšia. Preto ak radarový detektor neobsahuje Ka Narrow pásmo so zaradenou  samostatnou frekvenciou 34,00GHz,  s radarmi Ramer si žiaľ neporadí.</p>\r\n<p>Escort Qi45 EURO je radarový detektor, ktorý má inovovanú anténu a jeho detekcia radarov je na vysokej úrovni. Falošné poplachy sú vynikajúco vyfiltrované a každý poplach je potrebné brať vážne. Qi45 nereaguje ani na mobilné telefóny. Model Qi45 je navyše  aj laserovým detektorom, senzor pre detekciu laseru je integrovaný  priamo do antény. Táto funkcia je však len doplnková a detekcia laseru je informatívna a neznamená náhradu za aktívnu  laserovú  rušičku.</p>'),
(45, 15, 'Detaily', '<p>\r\n<b>Escort Qi45 EURO prichádza s podstatne modernejším displejom, ktorý je alfanumerický a pozostáva z 280 miniatúrnych LED, ktoré zabezpečia  vynikajúcu čitateľnosť za každých svetelných podmienok.</b> Svetelný senzor je integrovaný do displeja, takže jas displeja je regulovaný automaticky  podľa množstva svetla vo vozidle. Pomocou štyroch tlačidiel  displeja, alebo ich kombinácie si jednoducho zmeníte nastavenie podľa  vlastnej potreby. Ovládanie je jednoduché a rozhodnutie výrobcu neoddeliť ovládanie od displeja ocení asi väčšina užívateľov. Prínosom sú aj nové zvukové a hlasové upozornenia, sú zvučné a poplach neminiete ani pri hlasnejšie zapnutom rádiu.</p>\r\n<p>\r\n<b>Programovateľné položky menu</b>\r\n<ul>\r\n<li>jas displeja</li>\r\n<li>AutoMute – automatické stíšenie poplachu</li>\r\n<li>hlasitosť poplachov</li>\r\n<li>merač sily signálu</li>\r\n<li>nastavenie citlivosti</li>\r\n<li>pásma detekcie radarov</li>\r\n</ul>\r\n<p/>\r\n'),
(46, 15, 'Parametre', '<p>\r\n<b>Operačné pásma:</b>\r\n<ul>\r\n<li>X pásmo: 10,475-10,575 GHz </li>\r\n<li>Ku pásmo: 13,400-13,500 GHz</li>\r\n<li>K pásmo: 24,050-24,250 GHz</li>\r\n<li>K pulzné pásmo: 24,050-24,250 GHz</li>\r\n<li>Ka SuperWide: 33,400-36,000 GHz</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>Ka Narrow:</b>\r\n<ul>\r\n<li>KaN1: 33,700-33,900 GHz</li>\r\n<li>KaN2: 33,900-34,200 GHz /SR a ČR/</li>\r\n<li>KaN3: 34,200-34,400 GHz /SR a ČR/</li>\r\n<li>KaN4: 34,600-34,800 GHz</li>\r\n<li>KaN5: 35,400-35,600 GHz</li>\r\n<li>Ka-POP: 33,725-33,875 GHz /60ms/</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>Laser:</b>\r\n<ul>\r\n<li>/detekcia/: 904nm ± 13nm /Quantum Limited Video Receiver</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>Rozmery (cm):</b>\r\n<ul>\r\n<li>Displej/Ovládač: 2,5 (v) x 5,1 (š) x 1,25 (h)</li>\r\n<li>Anténa: 4,5 (v) x 8,0 (š) x 10,5 (h)</li>\r\n</ul>\r\n</p>\r\n'),
(47, 16, 'Základné informácie', '<p>\r\nStinger CARD je detekčný a ochranný high-end systém pre najdokonalejšie zabezpečenie Vášho vozidla. Umožňuje detekciu policajného radaru <strong>RAMER/MULTANOVA</strong> s vysokou citlivosťou. Pomocou GPS modulu vie antiradar identifikovať a eliminovať nežiadúce falošné poplachy, označiť miesto častého merania a má databázu umiestnenia stacionárnych radarov. Je homologizovaný pre použitie vo vozidle!</p> \r\n\r\n<p>Stinger Card je na spoločnom európskom trhu predávaný so softvérom ktorý v súlade s legislatívou platnou vo väčšine európskych krajín neumožňuje detekciu radarov a lidarov. Ak používate svoj Stinger v krajine, ktorá nezakazuje používať tieto funkcie, máte možnosť si do Vášho Stingeru nahrať software, ktorý ponúka aj tieto funkcie. Samozrejme to platí aj opačne a pri vjazde do krajiny kde je používanie antiradarov zakázané, vie vodič tieto funkcie rýchlo a jednoducho vymazať. Stinger card je samozrejme vybavený aj GPS prijímačom. Užívateľ má môžnosť aktualizácie databázy pomocou PC interface [extra príslušenstvo] a programu Stinger Desktop.</p>\r\n'),
(48, 16, 'Detaily', '<p><b>Unikátne vlastnosti:</b></p>\r\n<p>\r\n<ul>\r\n<li>Maximálna citlivosť na radary v K pásme</li>\r\n<li>Maximálna citlivosť na radary v Ka pásme</li>\r\n<li>Homologizácia</li>\r\n<li>FalseListing</li>\r\n<li>Phased Aray anténa</li>\r\n<li>Možnosť pripojenia doplnkových modulov</li>\r\n<li>Možnosť pripojenia viacerých antén</li>\r\n<li>SpotList databáza</li>\r\n<li>Aktualizácia Firmware cez aplikácie Stinger Desktop</li> \r\n<li>Elegantné prevedenie veľkosti kreditnej karty</li>\r\n<li>Kapacitné dotykové tlačítka</li>\r\n<li>Jednoduchá montáž</li>\r\n</ul>\r\n</p>'),
(49, 16, 'Parametre', NULL),
(50, 17, 'Základné informácie', '<p>Beltronics STi-R M Plus M-Edition je určený pre pevné zabudovanie skrytou montážou do vozidla. Detektor je vybavený GPS modulom s databázou úsekového merania rýchlosti.Revolučná konštrukcia antény detektora zamedzuje odhaleniu v niektorých západoeurópskych krajinách ako napr. Holandsko, Francúzsko, vzhľadom na to, že v uvedených krajinách používa polícia tzv. "Detektory detektorov radarov". Vďaka špeciálnemu prepínaču je schopný vymazať funkciu detekcie a tým, v prípade policajnej kontroly "legalizovať" zariadenie vo všetkých krajinách sveta. \r\n\r\n<p><b>Beltronics STi-R M Plu M-Edition detekuje spoľahlivo aj nové Multaradary CD používané na Slovensku, v Poľsku a západnej Európe. Detektor nachádza hlavné uplatnenie u vodičov cestujúcich po Európe a v spojení s laserovou rušičkou zaisťuje vodičovi 100% ochranu proti všetkým radarom na Slovensku, v Poľsku a vo vybraných štátoch západnej Európy.</b></p> '),
(51, 17, 'Detaily', '<p>\r\n<b>Beltronics Sti-R Plus M-Edition</b> má najpokročilejšiu radarovú anténu (prijímacia časť) a ponúka kvalitu, ktorú ocenia aj najnáročnejší zákazníci. Dôležitá je tiež funkcia pre tzv. znefunkčnenie. Z praktického hľadiska to znamená to, že ak Vás v cudzine zastaví policajná hliadka a nájde Vám radarový detektor Vaše obavy sú neopodstatnené. Stačí stľačiť tlačítko a software Beltronics STi-R Plus M-Edition je vymazaný a Váš radarový detektor, prestáva byť radarovým detektorom. Funkciu radarového detektoru si môžete samozrejme kedykoľvek aktivovať prostredníctvom PC.</p>\r\n<p>\r\n<b>Kľúčové vlastnosti:</b>\r\n<ul>\r\n<li>vynikajúca detekcia 10/10</li>\r\n<li>detekuje slovenský <strong>MultaRadar CD</strong></li>\r\n<li>žiadne falošné poplachy 10/10</li>                      \r\n<li>GPS databáza pevných radarov</li>\r\n<li>kvalitné prevedenie</li>\r\n<li><strong>100% nezistiteľnosť a diskrétnosť</strong>\r\n</ul>\r\n</p>              '),
(52, 17, 'Parametre', '<p>\r\n<b>Operačné pásma:</b>\r\n<ul>\r\n<li>Ka Narrow 34.0</li>\r\n<li>Ka-band 34.700 GHz ± 1300 MHz</li>\r\n<li>KMTR: 24,100 GHz ± 50 MHz</li>\r\n<li>K Narrow 1-23.950-24.110 GHz</li>\r\n<li>K Narrow 2-24.110-24.175 GHz</li>\r\n<li>K Narrow 3-24.175-24.250 GHz</li>\r\n<li>K-band 24.100 GHz ± 150 MHz</li>\r\n<li>X-band 10.525 GHz ± 25 MHz</li>\r\n<li>Laser 904nm, 33 MHz šírka pásma</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<b>Rozmery (cm):</b>\r\n<ul>\r\n<li>4,9cm x 1,8cm x 1,7cm (displej)</li>\r\n<li>4,9cm x 1,2cm x 1,7cm (ovládanie)</li>\r\n<li>9,4cm x 10,5cm x 3,1cm (radarová hlava)</li>\r\n<li>2,9cm x 7,4cm (radarová hlava spredu)</li>\r\n<li>5,7cm x 5,4cm x 5,7cm (reproduktor)</li>\r\n</ul>\r\n</p>'),
(53, 18, 'Základné informácie', '<p><strong>Stinger VIP-najdrahšia ochrana proti radarom, ktorá kedy bola vyvinutá.</strong></p>Vďaka GPS modulu a vstavanej databáze dokáže používateľa včas informovať o blízkosti stacionárnych radarov, či úsekových meračov rýchlosti. Stinger VIP je elektonicky nezistiteľný detektormi radarových detektorov, ktoré používa polícia v niektorých krajinách, v ktorých je používanie radarových detektorov zakázané.</p>\r\n<p>Zariadenia Stinger sú certifikované a homologované na pevnú montáž do vozidiel a sú označené značkami e4 a CE. Je to jediné zariadenie na trhu, ktoré komplexne rieši ochranu pred radarmi aj lidarmi [extra príslušenstvo] a ktoré môžete mat legálne namontované vo Vašom vozidle.</p>\r\n'),
(54, 18, 'Detaily', '<p>\r\n<b>Kľúčové vlastnosti:</b>\r\n<ul>\r\n<li>anténa MPHD zaručujúca optimálne varovanie pred radarmi s maximálnym potlačením falošných poplachov</li>\r\n<li>kompletná odolnosť voči všetkým detektorom detektorov radarov</li>\r\n<li>široké spektrum frekvencií pre maximálnu bezpečnosť doma a v zahraničí</li>\r\n<li>varovanie a aktívna ochrana pred laserovým meraním</li>\r\n<li>integrovaná GPS databáza pevných radarov v celej Európe</li>\r\n<li>farebný grafický displej a jednoduchá obsluha</li>\r\n</ul>\r\n</p>'),
(55, 18, 'Parametre', NULL),
(57, 19, 'Základné informácie', '<p>Štvorčidlová verzia najnovšej laserovej rušičky od firmy Blinder International. Jedná se o prvý model v historii firmy Blinder, kde došlo k použitiu laserovej vysielacej diódy v čidlách a týmto i k niekoľkonásobnemu zvýšeniu vysielacieho výkonu oproti starším produktom. Laserová dióda je kombinovaná s klasickou IR diódou. Táto kombinácia zajisťuje vyššiu homogenitu vysielacieho lúča a napomáha tak k ešte spoľahlivejšiemu rušeniu všetkých známych meračov rýchlosti.</p> \r\n<p>Krátko po uvedení na trh sa stal Blinder HP-905 najobľúbenejšou a najpredávanejšou rušičkou na svete. A to hlavně kvôli minimálnym rozmerom čidiel, skvelej účinnosti a bezkonkurenčnému pomeru výkon/cena.</p>\r\n'),
(58, 19, 'Detaily', '<p>\r\nZariadenie sa skladá z riadiacej jednotky a otočného prepínača montovaného do kabíny vozidla. Ďalej sú tu 4 externé moduly, ktoré obsahujú laserové čidlá a vysielacie diódy laserových lúčov. Tieto moduly sa montujú podľa potreby do prednej a zadnej časti automobilu medzi registračnú značku a ľavé alebo pravé svetlo tak, že musia mať výhľad pred seba.</p>\r\n\r\n<p>\r\n<b>Použitie otočného prepínača ponúka tri voľby pracovného režimu:</b>\r\n<ul>\r\n<li>parkovací asistent na neobmedzenú dobu</li>\r\n<li>detektor laserových meračov(užívateľ je informovaný o meraní a type merača, ale nedochádza k jeho rušeniu</li>\r\n<li>rušička laserových meračov rýchlosti</li>\r\n</ul>\r\n</p>\r\n<p>Pri ovládání pomocou prepínača na riadiacej jednotke je momožné voliť iba medzi parkovacím asistentom a laserovou rušičkou. Voľba nastavenia pracovného režimu je avizována buď hlasite, alebo je možné hlasové upozornenia vypnúť a zmena bude oznámená iba pípnutím.\r\n</p>\r\n\r\n<p><b>Prednosti:</b>\r\n<ul>\r\n<li>dokonalá ochrana pred laserovými meračmi v celej Európe</li>\r\n<li>zapnutie parkovacieho asistenta na neobmedzenú dobu prepnutím hlavného vypínača</li>\r\n<li>minimálna veľkosť čidiel</li>\r\n<li>hlasové výstrahy</li>\r\n<li>zapnutie detekčnej funkcie laserových meračov rýchlosti</li>\r\n<li>možnosť nastavenie doby vysielania rušivých sekvencií</li>\r\n<li>aktualizácia softwaru pomocou pc alebo internetu</li>\r\n</ul>\r\n</p>\r\n'),
(79, 19, 'Parametre', '<p><b>Výrobok obsahuje:</b>\r\n<ul>\r\n<li>4 Čidlá so zabudovaným laserovým detektorom/rušičom</li>\r\n<li>riadiacu jednotku</li>\r\n<li>externý otočný prepínač</li>\r\n<li>montážny a prepojovací materiál</li>\r\n<li>kábel pre pripojenie riadiacej jednotky k počítaču</li>\r\n<li>návod na použitie</li>\r\n</ul>\r\n</p>\r\n'),
(59, 20, 'Základní informace', '<p>\r\n<b>Laser Interceptor je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti a zároveň môže slúžiť ako parkovací asistent alebo otvárač brán.</b><p/> \r\n<p>\r\nPOZOR! Pri nákupe si vždy skontrolujte, že kupujete verziu so softvérovou úpravou určenou pre slovenský a český trh. Ľahko ju spoznáte podľa hlasových varovných hlásení v slovenskom jazyku a funkciou automatického vypnutia aktívneho rušenia po Vami zvolenom časovom intervale. Vyvarujte sa nákupu u neautorizovaných predajcov, ktorí predávajú verziu určenú pre americký trh, a u ktorých nie je zabezpečená správna funkčnosť zariadenia pre použitie v ČR a SR! Na tieto verzie tiež bohužiaľ nemožno uplatniť záruku u výrobcu!</p>\r\n<p>\r\n<b>Rušenie</b> <br />Po dopade laserového lúča na merané vozidlo, začne rušička v zlomku sekundy vysielať náhodné pulzy proti meraču rýchlosti. Zároveň je vodičovi signalizovaný poplach. Laserový merač nie je schopný zmerať rýchlosť vozidla a meracie laserové zariadenie LIDAR buď hlási operátorovi chybu, alebo vôbec nič.\r\n</p>\r\n<p>\r\nUpozornenie! Používanie tohoto zariadenia, jeho montáž na vozidlo a/alebo rušenie policajných meračov rýchlosti môže byť zákonom zakázané!\r\n</p>\r\n'),
(60, 20, 'Detaily', '<p>\r\nZariadenie je stavebnica, ktorá sa skladá z riadiacej jednotky a aktívnych senzorov. Senzory sa umiestnia do prednej masky vozidla alebo v zadnej časti vozidla a riadiaca jednotka do interiéru spolu s ovládaním. Laser Interceptor vyvinul aj špeciálne snímače určené pre zadnú inštaláciu, čo u iného výrobcu nenájdeme.</p>\r\n<p>\r\n<b>Základné charakteristiky:</b>\r\n<ul>\r\n<li>zariadenie využíva technológiu laserových diód, ktoré v porovnaní s LED diodámi majú vysoký vysielací výkon </li>\r\n<li>zariadenie spoľahlivo funguje ako ochrana proti všetkým laserovým meračom používaným v SR a ČR </li>\r\n<li>senzory fungujú aj ako klasické parkovacie senzory </li>\r\n<li>zariadenie disponuje samostatným vypínačom aktívneho rušenia laserových meračov, až do opätovného zapnutia interferujúcej funkcie funguje iba ako parkovací asistent </li>\r\n<li>funkcia detekcie infračerveného podsvietenia kamier úsekového merania rýchlosti exluzívne pre SR </li>\r\n<li>systém môžete využiť aj na diaľkové otváranie brán </li>\r\n<li>laser Interceptor využíva hlasové varovné hlásenia </li>\r\n<li>softvér a varovné hlásenia v slovenskom i českom jazyku </li>\r\n<li>funkcia automatického vypnutia rušenia po Vami zvolenom časovom intervale (prinicip 5 sekúnd aktívneho rušenia, súčasného spomalenia na predpísanú rýchlosť a následného nameranie rýchlosti Vášho vozidla) </li>\r\n<li>možnosť upgrade softvéru na vyššiu verziu cez PC </li>\r\n<li>veľmi jednoduché ovládanie </li>\r\n</ul>\r\n</p>\r\n'),
(61, 20, 'Parametry', '<p>\r\n<b>Špecifikácia</b>\r\n<ul>\r\n<li>Vlnová dľžka: 904nm </li>\r\n<li>Napätie: 12-15V DC </li>\r\n<li>Maximálny odber: 700mA </li>\r\n<li>Výkon reproduktora: 1W </li>\r\n<li>Rozmery predných senzorov: 100 x 34 x 15,5 mm (ŠxDxV) </li>\r\n<li>Rozmery zadných senzorov: 100 x 25 x 15,5 mm (ŠxDxV) </li>\r\n<li>Rozmer riadiacej jednotky: 125 x 55 x 25 mm (ŠxDxV)</li>\r\n</ul>\r\n</p>'),
(62, 21, 'Základní informace', '<p>\r\n<b>Laser Interceptor je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti a zároveň môže slúžiť ako parkovací asistent alebo otvárač brán.<p/> \r\n</b><p>\r\nPOZOR! Pri nákupe si vždy skontrolujte, že kupujete verziu so softvérovou úpravou určenou pre slovenský a český trh. Ľahko ju spoznáte podľa hlasových varovných hlásení v slovenskom jazyku a funkciou automatického vypnutia aktívneho rušenia po Vami zvolenom časovom intervale. Vyvarujte sa nákupu u neautorizovaných predajcov, ktorí predávajú verziu určenú pre americký trh, a u ktorých nie je zabezpečená správna funkčnosť zariadenia pre použitie v ČR a SR! Na tieto verzie tiež bohužiaľ nemožno uplatniť záruku u výrobcu!</p>\r\n<p>\r\n<b>Rušenie</b> <br />Po dopade laserového lúča na merané vozidlo, začne rušička v zlomku sekundy vysielať náhodné pulzy proti meraču rýchlosti. Zároveň je vodičovi signalizovaný poplach. Laserový merač nie je schopný zmerať rýchlosť vozidla a meracie laserové zariadenie LIDAR buď hlási operátorovi chybu, alebo vôbec nič.\r\n</p>\r\n<p>\r\n<b>Verzia Triple obsahuje</b>\r\n<ul>\r\n<li>2 normálne senzory určené pre inštaláciu vpredu</li>\r\n<li>1 senzor pre inštaláciu vzadu</li>\r\n<li>1 riadiacu jednotku</li>\r\n</ul> \r\nUpozornenie! Používanie tohoto zariadenia, jeho montáž na vozidlo a/alebo rušenie policajných meračov rýchlosti môže byť zákonom zakázané!\r\n</p>\r\n'),
(63, 21, 'Detaily', '<p>\r\nZariadenie je stavebnica, ktorá sa skladá z riadiacej jednotky a aktívnych senzorov. Senzory sa umiestnia do prednej masky vozidla alebo v zadnej časti vozidla a riadiaca jednotka do interiéru spolu s ovládaním. Laser Interceptor vyvinul aj špeciálne snímače určené pre zadnú inštaláciu, čo u iného výrobcu nenájdeme.</p>\r\n<p>\r\n<b>Základné charakteristiky</b>\r\n<ul>\r\n<li>zariadenie využíva technológiu laserových diód, ktoré v porovnaní s LED diodámi majú vysoký vysielací výkon </li>\r\n<li>zariadenie spoľahlivo funguje ako ochrana proti všetkým laserovým meračom používaným v SR a ČR </li>\r\n<li>senzory fungujú aj ako klasické parkovacie senzory </li>\r\n<li>zariadenie disponuje samostatným vypínačom aktívneho rušenia laserových meračov, až do opätovného zapnutia interferujúcej funkcie funguje iba ako parkovací asistent </li>\r\n<li>funkcia detekcie infračerveného podsvietenia kamier úsekového merania rýchlosti exluzívne pre SR </li>\r\n<li>systém môžete využiť aj na diaľkové otváranie brán </li>\r\n<li>laser Interceptor využíva hlasové varovné hlásenia </li>\r\n<li>softvér a varovné hlásenia v slovenskom i českom jazyku </li>\r\n<li>funkcia automatického vypnutia rušenia po Vami zvolenom časovom intervale (prinicip 5 sekúnd aktívneho rušenia, súčasného spomalenia na predpísanú rýchlosť a následného nameranie rýchlosti Vášho vozidla) </li>\r\n<li>možnosť upgrade softvéru na vyššiu verziu cez PC </li>\r\n<li>veľmi jednoduché ovládanie </li>\r\n</ul>\r\n</p>\r\n'),
(64, 21, 'Parametry', '<p>\r\n<b>Špecifikácia</b>\r\n<ul>\r\n<li>Vlnová dľžka: 904nm </li>\r\n<li>Napätie: 12-15V DC </li>\r\n<li>Maximálny odber: 700mA </li>\r\n<li>Výkon reproduktora: 1W </li>\r\n<li>Rozmery predných senzorov: 100 x 34 x 15,5 mm (ŠxDxV) </li>\r\n<li>Rozmery zadných senzorov: 100 x 25 x 15,5 mm (ŠxDxV) </li>\r\n<li>Rozmer riadiacej jednotky: 125 x 55 x 25 mm (ŠxDxV)</li>\r\n</ul>\r\n</p>'),
(65, 22, 'Základní informace', '<p>\r\n<b>Laser Interceptor je viacúčelový laserový systém, ktorého primárnou funkciou je spoľahlivá ochrana vozidla proti laserovým meračom rýchlosti a zároveň môže slúžiť ako parkovací asistent alebo otvárač brán.</b><p/> \r\n<p>\r\nPOZOR! Pri nákupe si vždy skontrolujte, že kupujete verziu so softvérovou úpravou určenou pre slovenský a český trh. Ľahko ju spoznáte podľa hlasových varovných hlásení v slovenskom jazyku a funkciou automatického vypnutia aktívneho rušenia po Vami zvolenom časovom intervale. Vyvarujte sa nákupu u neautorizovaných predajcov, ktorí predávajú verziu určenú pre americký trh, a u ktorých nie je zabezpečená správna funkčnosť zariadenia pre použitie v ČR a SR! Na tieto verzie tiež bohužiaľ nemožno uplatniť záruku u výrobcu!</p>\r\n<p>\r\n<b>Rušenie</b> <br />Po dopade laserového lúča na merané vozidlo, začne rušička v zlomku sekundy vysielať náhodné pulzy proti meraču rýchlosti. Zároveň je vodičovi signalizovaný poplach. Laserový merač nie je schopný zmerať rýchlosť vozidla a meracie laserové zariadenie LIDAR buď hlási operátorovi chybu, alebo vôbec nič.\r\n</p>\r\n<p>\r\n<b>Verzia Quad obsahuje</b>\r\n<ul>\r\n<li>2 senzory určené pre inštaláciu vpredu</li>\r\n<li>2 senzory určené pre inštaláciu vzadu, 1 riadiacu jednotku</li>\r\n</ul> \r\nUpozornenie! Používanie tohoto zariadenia, jeho montáž na vozidlo a/alebo rušenie policajných meračov rýchlosti môže byť zákonom zakázané!\r\n</p>'),
(66, 22, 'Detaily', '<p>\r\nZariadenie je stavebnica, ktorá sa skladá z riadiacej jednotky a aktívnych senzorov. Senzory sa umiestnia do prednej masky vozidla alebo v zadnej časti vozidla a riadiaca jednotka do interiéru spolu s ovládaním. Laser Interceptor vyvinul aj špeciálne snímače určené pre zadnú inštaláciu, čo u iného výrobcu nenájdeme.</p>\r\n<p>\r\n<b>Základné charakteristiky</b>\r\n<ul>\r\n<li>zariadenie využíva technológiu laserových diód, ktoré v porovnaní s LED diodámi majú vysoký vysielací výkon </li>\r\n<li>zariadenie spoľahlivo funguje ako ochrana proti všetkým laserovým meračom používaným v SR a ČR </li>\r\n<li>senzory fungujú aj ako klasické parkovacie senzory </li>\r\n<li>zariadenie disponuje samostatným vypínačom aktívneho rušenia laserových meračov, až do opätovného zapnutia interferujúcej funkcie funguje iba ako parkovací asistent </li>\r\n<li>funkcia detekcie infračerveného podsvietenia kamier úsekového merania rýchlosti exluzívne pre SR </li>\r\n<li>systém môžete využiť aj na diaľkové otváranie brán </li>\r\n<li>laser Interceptor využíva hlasové varovné hlásenia </li>\r\n<li>softvér a varovné hlásenia v slovenskom i českom jazyku </li>\r\n<li>funkcia automatického vypnutia rušenia po Vami zvolenom časovom intervale (prinicip 5 sekúnd aktívneho rušenia, súčasného spomalenia na predpísanú rýchlosť a následného nameranie rýchlosti Vášho vozidla) </li>\r\n<li>možnosť upgrade softvéru na vyššiu verziu cez PC </li>\r\n<li>veľmi jednoduché ovládanie </li>\r\n</ul>\r\n</p>\r\n'),
(67, 22, 'Parametry', '<p>\r\n<b>Špecifikácia</b>\r\n<ul>\r\n<li>Vlnová dľžka: 904nm </li>\r\n<li>Napätie: 12-15V DC </li>\r\n<li>Maximálny odber: 700mA </li>\r\n<li>Výkon reproduktora: 1W </li>\r\n<li>Rozmery predných senzorov: 100 x 34 x 15,5 mm (ŠxDxV) </li>\r\n<li>Rozmery zadných senzorov: 100 x 25 x 15,5 mm (ŠxDxV) </li>\r\n<li>Rozmer riadiacej jednotky: 125 x 55 x 25 mm (ŠxDxV)</li>\r\n</ul>\r\n</p>'),
(68, 25, 'Detaily', NULL),
(69, 25, 'Parametry', NULL),
(70, 26, 'Základní informace', '<p>Kábel na pevnú montáž antiradarov slúži k jednoduchšiemu použitiu prenosného antiradaru, kde nahradzuje klasické napájanie pomocou zapaľovačového adaptéru a umožní tak vodičovi komfortnejšie používanie detektora. Ponúkame verzie káblov na pevnú montáž pre antiradary Escort.</p>'),
(71, 27, 'Základní informace', '<p>Horizontálny držiak Super Cup pre antiradary. Je určený výhradne pre detektory Escort (X50, 9500, MAX). Slúži pre horizontálnu montáž detektorov na čelné sklo vozidla.</p>'),
(72, 28, 'Základní informace', '<p>Pripínacia spona pre antiradar. Je určená výhradne pre detektory Escort. Slouží pre montáž detektoru na protislnečnú clonu.</p>\r\n'),
(73, 29, 'Základní informace', '<p>Vertikálny držiak s prísavkami na vertikálne uchytenie detektoru. Tento držiak zaisťuje vyššiu citlivosť a tým pádom aj dlhšiu detekčnú vzdialenosť radarov oproti držiaku štandardnému - horizontálnemu.</p>'),
(74, 30, 'Základní informace', '<p>Jednoduchý kábel, ktorý se dokonale hodí na pevnú inštaláciu napájania prenosného datektoru. Kábel sa pripojuje priamo k 12V napájaniu Vášho vozidla, zapaľovací adaptér Vám tak zostává volný pre ďalšie autopríslušenstvo.</p>'),
(75, 31, 'Základné informácie', '<p><b>Novy ESCORT PASSPORT Max - SK </b>je prvý detektor s funkciou (HD Radar). Prináša prelomový radarový výkon, ako žiadny iný detektor na trhu. To sa vzťahuje na všetky radarové a laserové pásma. To a mnoho dalších vylepšení vám umožní šoférovanie bez obáv. Escort MAX je technologicky najvyspelejší radarový detektor na svete a ESCORT s ním opäť zdvíha latku. Jedná o prvý presnosný detektor, ktorý spoľahlivo detekuje Multaradar CD</p>\r\n'),
(76, 31, 'Detaily', '<p><b>Včasná detekcia s pozoruhodnou presnosťou</b></br>\r\nNová radarová hlava obsahuje pokročilú vojenskú technoléogiu s názvom Digital Signal Processing (DSP). Táto unikátna metóda skenovania umožňuje MAXu identifikovat skutočné hrozby rychlejšie a přesnejšie než akýkoľvek iný detektor na trhu. Rýchlejšia doba odozvy znamená pokročilé upozornenie pred radarovými hrozbami.</p> \r\n\r\n<p><b>Nový Multi-farevný OLED displej</b></br> \r\nNový multi-farebný displej je dalšou výhodou oproti konkurenčným detektorom! Nová brilantná grafika osvetľuje intuitívne ikony, ktoré identifikujú typ hrozby hneď na prvý pohľad. Okrem toho, užívateľsky volitelné podsvietenie vám umožní si vybrat, ktorá farba sa hodí nejlepšie k farba vášho tachometra.</p>\r\n\r\n<p><b>Intuitívne ovládacie prvky</b></br> \r\nNaše predvoľby umožňujú zmeniť niekoľko možností, vrátane radarových pásiem, ktoré by ste chceli filtrovať a o ktorých by ste chceli byť informováný, akonáhle je detekovaný signál.</p>\r\n\r\n<p><b> Umelá inteligencia</b></br> \r\nNaša patentovaná technológie používá samoučiaci sa algoritmus. Presná frekvencia sa učí automaticky odmietať nežiadúce falošné signály(otvárače garáží, dvere a dalšie...). Výsledkom je nejpresnejšia ochrana s výbornou detekciou.</p>\r\n\r\n<p><b>Online funkcie</b></br>\r\nNa našich internetových stránkách ESCORT sú k dispozícii aktualizácie FW. Stačí si stiahnúť on-line program Escort a spustiť ho. Potom pripojíte MAX k počítaču s aktívnym pripojením k internetu a stiahnete najaktuálnejšiu GPS databázu. Dokonce si môžete zálohovať data alebo aktualizovať operačný software detektoru (firmware).</p>\r\n\r\n<p><b>High-Performance Laser ochrana</b></br>\r\nMAX má vysoko výkonné laserové čidla poskytujúce maximálne laserové varovanie, používajúce ochranu off-osy.</p>\r\n\r\n<p><b>Funkčnosť podľa rýchlosti</b></br>\r\nNaša patentovaná technológia využívajúca GPS umožňuje detektoru poskytovať upozornenie na základe toho, čo vozidlo v skutečnosti robí. Na diaľnici potrebujete tú najlepšiu citlivosť s dlhým dosahom. V pomalších rýchlostiach je možné citlivosť nastaviť tak, aby znížila množstvo falošných poplachov. Dokonce sme zmenili aktuálne upozornenie na krátký dvojitý tón, keď sa vaše vozidlo pohybuje menej než 32 kmh.</p>\r\n\r\n<p><b>Zrozumiteľné hlasové upozornenie</b></br>\r\nUnikátne hlasové upozornenie MAXu poskytuje jasné zdelenie a varovanie. Teraz už môžete mať svoje oči na diaľnici bez zbytočných rušivých vplyvov.</p>\r\n'),
(77, 31, 'Parametre', '<p>\r\n<b>Operačné pásma:</b>\r\n<ul>\r\n<li>Pásma X 10, 525 GHz ± 25 MHz</li>\r\n<li>Pásmo K 24, 150 GHz ± 100 MHz</li></ul>\r\n\r\n<b>K Narrow:</b>\r\n<ul>\r\n<li>K1: 24,050 GHz-24,109 GHz</li>\r\n<li>K2: 24,110 GHz – 24,174 GHz</li>\r\n<li>K3: 24,175 GHz – 24,250 GHz</li>\r\n<li>K MTR – 24, 050 GHz – 24, 150 GHz</li>\r\n<li>Pásmo Ka 34,70 GHz ± 1300 MHz</li>\r\n<li>Laser 904 nm, šírka pásma 33 MHz</li>\r\n<li>Ka1 = 33,392 – 33,704 GHz</li>\r\n<li>Ka2 = 33,704 – 33, 896 GHz</li>\r\n<li>Ka3 = 33, 886 – 34, 198 GHz</li> \r\n<li>Ka4 = 34, 184 – 34, 592 GHz</li> \r\n<li>Ka5 = 34, 592 – 34, 808 GHz</li> \r\n<li>Ka6 = 34, 806 – 35, 166 GHz</li> \r\n<li>Ka7 = 35, 143 – 35, 383 GHz</li>\r\n<li>Ka8 = 35, 378 – 35, 618 GHz</li>\r\n<li>Ka9 = 35,595 – 35,835 GHz</li>\r\n<li>Ka10 = 35,830 – 35, 998 GHz</li>\r\n</ul>\r\n</p>\r\n'),
(81, 32, 'Základné informácie', '<p>Genevo FF je parkovací asistent, ktorý ocenia vodiči pri parkovaní. Jeho výhodou je, že dokáže rozpoznať prekážku na kratšiu vzdialenosť ako klasické štandardné parkovacie senzory a tým pomáha vodičom spoľahlivo a bezpečne zaparkovať na stiesnených parkoviskách, v podzemných garážach. GENEVO FF Parking asistent pracuje s infračerveným signálom. Neustále kontroluje blížiacu sa prekážku (napr. iné auto, budovu, plot) a akonáhle sa prekážka priblíži, asistent upozorní vodiča na nebezpečie pomocou audiovizuálnej signalizácie.</p>   '),
(82, 32, 'Detaily', NULL),
(83, 32, 'Parametre', NULL);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_product_types`
--

CREATE TABLE IF NOT EXISTS `prefix_product_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `pricedph` double DEFAULT NULL,
  `visibility` int(1) DEFAULT NULL,
  `code` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=79 ;

--
-- Vypisuji data pro tabulku `prefix_product_types`
--

INSERT INTO `prefix_product_types` (`id`, `product`, `name`, `pricedph`, `visibility`, `code`) VALUES
(69, 15, 'Speciální verze produktu', 700, 0, 'EZUDAS3'),
(72, 12, 'Escort X50 International', 399, 0, 'ZEX50I'),
(73, 12, 'Escort X50 International (záruka + 1 rok = 3 roky)', 490, 0, 'ZEX50I3'),
(74, 12, 'Escort X50 International (záruka + 2 roky = 4 roky)', 563, 0, 'ZEX50I4'),
(75, 20, 'Laser Interceptor dual', 624, 0, 'LI2'),
(76, 20, 'Laser Interceptor Triple', 816, 0, 'LI3'),
(77, 20, 'Laser Interceptor Quad', 984, 0, 'LI4'),
(78, 32, 'Genevo FF4 (QUAD)', 999, 0, '');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_security_admin_keys`
--

CREATE TABLE IF NOT EXISTS `prefix_security_admin_keys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=877 ;

--
-- Vypisuji data pro tabulku `prefix_security_admin_keys`
--

INSERT INTO `prefix_security_admin_keys` (`id`, `created`) VALUES
(875, 1407947445),
(876, 1407947456);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_settings`
--

CREATE TABLE IF NOT EXISTS `prefix_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `prefix_settings`
--

INSERT INTO `prefix_settings` (`id`, `name`, `value`) VALUES
(1, 'siteurl', 'AntiRadary.SK'),
(2, 'sitename', 'Výhradný distributor Escort Radar, Genevo, Blinder pre Slovensko'),
(3, 'sitedescription', 'Sme najväčším predajcom antiradarov a laserových rušičiek na Slovensku. Sme také výhradným distribútorom Escort Radar, Genevo a Blinder.'),
(4, 'user_can_register', '0'),
(5, 'site_email', 'objednavky@antiradary.sk'),
(6, 'use_smiles', '0'),
(7, 'require_registration_email', '0'),
(8, 'copyright', ''),
(9, 'social', ''),
(10, 'footer', ''),
(11, 'pagination', '4'),
(12, 'comment_only_user', '1'),
(13, 'username', ''),
(14, 'surname', ''),
(15, 'web_phone', '0910 800 011'),
(16, 'web_title', 'Antiradary.sk'),
(17, 'keywords', 'antiradary, laserové rušičky, lasery, radar, radary, beltronics'),
(18, 'log_number', '50'),
(20, 'email', 'Vaša objednávka bola úspešne prijatá.'),
(21, 'order_paggination', '1'),
(22, 'price_dph', '1.2'),
(23, 'company', 'Kelkos, s. r. o.'),
(24, 'company_tel', '(+421) 910 800 011'),
(25, 'company_address', 'Štefánikova 1398/36'),
(26, 'company_email', 'objednavky@antiradary.sk'),
(27, 'company_city', 'Michalovce'),
(28, 'company_zip', '071 01'),
(29, 'company_url', 'www.antiradary.sk'),
(30, 'ic', '47626623'),
(31, 'dic', '2024009625'),
(32, 'account_number', '2700544542/8330'),
(33, 'swift', 'FIOZSKBA'),
(34, 'iban', 'SK5783300000002700544542'),
(35, 'pdf_footer', ''),
(36, 'order_number', '3000'),
(37, 'last_order', '3006'),
(38, 'stamp', 'images/faktury/razitko-s-podpisem.jpg'),
(39, 'ppl_expres_price', '20'),
(40, 'messenger_price', '170'),
(41, 'due_date', '7'),
(42, 'taxation_date', '7'),
(43, 'default_language', '5'),
(44, 'conditions', ''),
(45, 'thanks', 'Ďakujeme za Vašu objednávku.'),
(46, 'default_additionals', '28'),
(47, 'invoice_wdph', 'true');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_subcategories`
--

CREATE TABLE IF NOT EXISTS `prefix_subcategories` (
  `parent` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`parent`,`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_submenus`
--

CREATE TABLE IF NOT EXISTS `prefix_submenus` (
  `menu` int(10) unsigned NOT NULL,
  `submenu` int(10) unsigned NOT NULL,
  PRIMARY KEY (`menu`,`submenu`),
  KEY `fk_prefix_menus_has_prefix_menus_prefix_menus2_idx` (`submenu`),
  KEY `fk_prefix_menus_has_prefix_menus_prefix_menus1_idx` (`menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `prefix_submenus`
--

INSERT INTO `prefix_submenus` (`menu`, `submenu`) VALUES
(14, 19),
(14, 21),
(27, 28),
(27, 29),
(27, 30),
(27, 31),
(27, 32);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_tags`
--

CREATE TABLE IF NOT EXISTS `prefix_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article` int(10) unsigned DEFAULT NULL,
  `page` int(10) unsigned DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=325 ;

--
-- Vypisuji data pro tabulku `prefix_tags`
--

INSERT INTO `prefix_tags` (`id`, `article`, `page`, `tag`) VALUES
(60, NULL, NULL, 'sda'),
(61, NULL, NULL, 'dsad'),
(62, NULL, NULL, 'as'),
(68, NULL, NULL, 'faq'),
(69, NULL, NULL, 'caste'),
(70, NULL, NULL, 'otazky'),
(71, NULL, NULL, 'antiradary'),
(73, NULL, NULL, 'obchodne'),
(74, NULL, NULL, 'podmienky'),
(75, NULL, NULL, 'antiradary'),
(76, NULL, NULL, 'montaz'),
(77, NULL, NULL, 'antiradary'),
(78, NULL, NULL, 'kontakt'),
(98, NULL, NULL, ''),
(99, NULL, NULL, ''),
(100, NULL, NULL, ''),
(101, NULL, NULL, ''),
(102, NULL, NULL, ''),
(103, NULL, 16, ''),
(104, NULL, 17, ''),
(107, NULL, NULL, ''),
(108, NULL, NULL, ''),
(109, NULL, NULL, ''),
(112, NULL, 14, ''),
(150, NULL, 20, ''),
(151, NULL, NULL, ''),
(209, NULL, NULL, 'sdd'),
(210, NULL, NULL, ''),
(211, NULL, 22, ''),
(214, NULL, NULL, ''),
(215, NULL, NULL, ''),
(216, NULL, 24, ''),
(273, 16, NULL, ''),
(281, NULL, 11, ''),
(310, NULL, 12, ''),
(311, NULL, 9, ''),
(312, 17, NULL, ''),
(314, 9, NULL, ''),
(318, 10, NULL, ''),
(319, 11, NULL, ''),
(322, 12, NULL, ''),
(324, 15, NULL, '');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_tasks`
--

CREATE TABLE IF NOT EXISTS `prefix_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `comment` text CHARACTER SET utf8 COLLATE utf8_bin,
  `author` int(11) DEFAULT NULL,
  `phone` varchar(1) NOT NULL DEFAULT 'n',
  `email` varchar(1) NOT NULL DEFAULT 'n',
  `image` varchar(255) NOT NULL,
  `done` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Vypisuji data pro tabulku `prefix_tasks`
--

INSERT INTO `prefix_tasks` (`id`, `name`, `createDate`, `type`, `status`, `content`, `comment`, `author`, `phone`, `email`, `image`, `done`) VALUES
(15, 'Ceny dopravy', '2014-08-05 06:05:30', 'Fixnutí chyby', 'Hotovo', '4. Potom další pokračování .. Dáš ZVOLTE ZPUSOB PLATBY tak u toho si můžu nastavit ceny ?? Kde je nastavím ? Zatím můžu zaškrtnout všehcno bez rozdílu ceny (Nic se nepřičte)\n\n\n------\n\nV NASTAVENI ESHOPU', '', 3, 'n', 'y', 'tasks/DSC_0064.jpg', 3),
(25, 'Galerie produktů', '2014-08-05 06:05:33', 'Fixnutí chyby', 'Čeká na kontrolu', 'Ať je velikost toho náhledu fixní, nebo podle největší fotky. Mám strašně nerad když při každým kliknutí na další fotku musim znova tu šipku pro další fotku hledat...\n\n----------\nno není to úplně jak si představuješ -> snaha byla hrabal jsem se v javascriptu těch knihoven ale je to strašně všechno propojený a co jsem koukal na nejaky lightboxy tak všude se to takhle "resizuje"... zkoušel jsem různě ty velikosti měnit ale buď byl layout moc velkej vůči malejm obrázkům nebo zas moc velkej.. nebo obrázek nebyl zarovnanej a měl špatně poměr stran atd, tak jsem nahral ty co jsou na radar detectors to je takovy prijatelnejší si mysím, tak ho zkus jestli to bude OK. ', 'Zkus to ještě .. Jako jak jsem ti to psal na Escortradar.cz \nAť je fixní okýnko a v tom se bude měnit jenom fotky a je jedno jak budou velký nebo malý ... \nJako tady: http://www.alza.cz/macbook-air-13-cz-d1480658.htm\n\n\nhttp://www.antiradary.sk/produkt/escort-max-international-sk\n\ntakhle se mi to povedlo vymyslet (ale všimni si, že do hlavního obrázku nahráváš strašně malej obrázek, přestože tam má být taky velký) když to udělmám kompletně fixní tak to bude hnusný a roztažený... pokud tam budeš nahrávat větší nebo stejně velký obrázky jako 600px*500px tak to bude fixní a nebude se to hejbat.  (koukni na ty 3, ty jsou fixní protože jsou veliky jen ten první je 5x menší než ostatní přesto že je hlavní)', 3, 'n', 'y', '', 3),
(26, 'Pohraj si ještě se zarovnáváním na mobilech atd.', '2014-08-05 06:05:37', 'Fixnutí chyby', 'Hotovo', 'http://www.antiradary.sk/admin/settings/testdisplay/\n\nTaky ať to menu zůstane rozbalený. Zase se na to musí klikat... :).', '', 4, 'n', 'y', '', 4),
(27, 'Skladová evidence', '2014-08-13 09:15:52', 'Fixnutí chyby', 'Hotovo', 'Po otevření skladové evidence se zobrazí jednotlivé produkty. \n\nDoplnit ke každému záznamu (před počty kusů na skladě) datum poslední změny.\n--- hotovo ---\n\n Tento datum bude formou odkazu, tzn. po kliknutí na datum se otevřou záznamy již s aktivním filtrem produktu, u kterého na datum kliknu. \n\n--- hotovo ---\n\n', '', 6, 'n', 'y', '', 6),
(30, 'Vytváření objednávky - nové faktury', '2014-08-05 06:05:51', 'Spěchá', 'Hotovo', '1) Při zadávání zboží do objednávky/faktury (dále jenom OF) není možné zadat počet kusů, cenu. Tzn. při výběru zboží se musí objevit stejná pole, jako při editaci již hotové OF. \n\nNENÍ HOTOVO !!!!!!!!\n\n-- hotovo --\n\n\nJAKMILE V ADMINISTRACI ZMĚNÍM CENU PRODUKTU, NA FAKTUŘE ZŮSTANE PŮVODNÍ !!!!! DOLADIT ÚPRAVY CEN, MNOŽSTVÍ APOD. ZBYTEK VIZ NÍŽE.....\n\n--- hotovo ---\n\n\n\n2) Volby "Odeslat" a "Odesláno". Pokud kliknu na Odeslat, má se objevit "fajkfa" či jiný potvrzovací znak, který říká, že zboží se má odeslat zákazníkovi (ZBOŽÍ SE NEMÁ ODEČÍST ZE SKLADU). K tomu má odejít mail s objednávkou a se stavem ODESLAT na přednastavenou  mailovou adresou. \n\n-- hotovo -- \n\nPokud kliknu na Odesláno, má se zboží odečíst ze skladu a objeví se znak autíčka (tzn. zboží odesláno). \n3) Přidat příznak "Zaplaceno". \n   Funkčnost: a) zboží odesláno = kliknutím na zaplaceno se přidá příznak zaplaceno \n                 a OF jde do vyřízených.\n              b) zboží není odesláno = objeví se příznak zaplaceno + příznak odeslat.  \n\nTento bod nefunguje správně. Takže ještě jednou: pokud je zboží odesláno, tzn. je tam symbol autíčko, pak po stisku zaplaceno se přidá smajlík zaplaceno a faktura jde do vyřízených. NEBUDE NASKAKOVAT FAJFKA, ŽE SE MÁ ODESLAT ZBOŽÍ A NEPŮJDE MAIL.\n\n-- myslim ze uz to funguje spravne --\n\nPokud ZBOŽÍ NENÍ ODESLÁNO, naskočí fajfka a jde mail. ', '', 6, 'n', 'y', '', 6),
(31, 'Odečet zboží ze skladu', '2014-08-05 06:05:54', 'Fixnutí chyby', 'Hotovo', 'Po kliknutí na "odesláno", případně na "vyřízeno" je nutno zkontrolovat, zda zboží z této OF je odečteno ze skladu a pokud ne, odečtou se jednotlivé položky podle kódu zboží. Pokud je faktura vyřízena a zruší se, musí se zboží vrátit na sklad.', '', 3, 'n', 'y', '', 3),
(32, 'Další položka v levém menu', '2014-08-05 06:05:57', 'Fixnutí chyby', 'Hotovo', 'Udělat novou položku v levím menu, kteráá bude odkazovat na email... \nJmenovat se to bude Email: a bude odkazovat:\nhttp://webmail.antiradary.sk/\n', '', 3, 'n', 'y', '', 3),
(33, 'Produkt', '2014-08-05 06:06:00', 'Fixnutí chyby', 'Hotovo', 'Takže když seš v produktu..\nhttp://antiradary.sk/produkt/escort-x50i\n\nVerze: Nemá ceny ... (+200 Kč) \n\n', '', 2, 'y', 'y', '', 2),
(34, 'Produkty', '2014-08-05 06:06:03', 'Fixnutí chyby', 'Hotovo', 'http://antiradary.sk/produkty/prenosne-antiradary\n\nVýpis produktů ... Tak máš ten popis a ten je uřízlej a není vidět čitaj dalěj .. udělej s tím něco...', '', 2, 'n', 'y', '', 2),
(36, 'Sklad 2', '2014-08-13 09:18:11', 'Fixnutí chyby', 'Hotovo', 'Nevím, jak se v tuto chvíli odečítá zboží ze skladu. Nicméně je nutné, aby se do skladové evidence přidávaly záznamy z faktur. Tzn. pokud dám volbu odesláno (vyřízeno) a zboží se odečte ze skladu, musí to být formou záznamu ve skladové evidenci. Do záznamů se uloží datum, kód zboží, počet ks (mínusem) a v textu (poznámce) bude číslo faktury. Takže při přepnutí ve skladu na záznamy budou vidět prodeje, dodávky zboží i přesuny mezi sklady. \n\n--- hotovo ---\n\nNefunguje datum. Takže doplnit vždy správné datum a pokud možno i čas záznamu. NAVÍC BY TAM MĚL NABĚHNOUT UŽIVATEL (PODLE PŘIHLÁŠENÍ), KTERÝ TEN KROK UDĚLAL A NE TEN, KDO VYTVOŘIL FAKTURU. \n\n--- hotovo ---', '', 6, 'n', 'y', '', 6),
(37, 'Kolonka detaily', '2014-08-05 06:06:12', 'Fixnutí chyby', 'Hotovo', 'http://antiradary.sk/produkt/escort-x50i-international\n\nDej si detaily a tam ten text je krátkej .. v Základní informace je po celý ploše a tady je useklej.. uděleje to jako u Zálkladní informace', '', 2, 'n', 'y', '', 2),
(38, 'Verze a ceny produktů', '2014-08-05 06:06:18', 'Fixnutí chyby', 'Hotovo', 'Ať se v produktu dají upravovat stávájící: Verze a ceny produktů', '', 2, 'n', 'y', '', 2),
(39, 'Překlad', '2014-08-05 06:06:24', 'Fixnutí chyby', 'Hotovo', 'http://antiradary.sk/produkt/escort-x50i-international\n\n\nZákladní informace Detaily Prarametry Příslušenství Verze \n\n\nPotřebuju to přeložit, Kde to udělám ?? A to samý při upravě a vytváření produktu .. Ty položky si chci přeložit\n\n--------------\n\nV EDITACI / PŘIDÁNÍ PRODUKTU JSOU NA TO KOLONKY', '', 2, 'n', 'y', '', 2),
(40, 'Změna názvu URL', '2014-08-05 06:06:27', 'Fixnutí chyby', 'Hotovo', 'Když změním název. Tak se URL nebude měnit... URL se bude měnit jenom když nebude vyplněný...\n', '', 2, 'n', 'y', '', 2),
(41, 'Cena', '2014-08-05 06:06:30', 'Fixnutí chyby', 'Hotovo', 'Proč zmizla cena ???\n\nhttp://antiradary.sk/produkty/prenosne-antiradary\n\nEscort X50i není cena', '', 2, 'n', 'y', '', 2),
(42, 'Hvězdičky', '2014-08-05 06:06:33', 'Fixnutí chyby', 'Hotovo', 'Ať se hvězdičky ukazujou i při výpisech produktu např.http://antiradary.sk/produkty/prenosne-antiradary\n\nTak máš cenu tak ve prosřed budou hvězdičky', '', 2, 'n', 'y', '', 2),
(43, 'OBJEDNÁVKA PŘES WEB', '2014-08-05 06:06:36', 'Fixnutí chyby', 'Hotovo', 'Je nutné přesunout jednotlivé odstavce v objednávkovém formuláři. \nV každém případě musí být tlačítko "odeslat" a na konci stránky, aby zákazník viděl po vyplnění adresy a způsobu platby rekapitulaci a až na konci potvrdil odeslání objednávky. ', '', 6, 'n', 'y', '', 6),
(45, 'U produktů', '2014-08-05 06:06:39', 'Fixnutí chyby', 'Hotovo', 'Skladem Ať tam vůbec není.. V upravě produktů', '', 2, 'n', 'y', '', 2),
(46, 'U produktů 2', '2014-08-05 06:06:42', 'Fixnutí chyby', 'Hotovo', 'V uprevě produktu místo sklad a kolik jich tam je (to smaž) tak nahraď Dostupnost: (Vyplním si sám) Buď ano / ne / Na dotaz ... TO si napíšu sám .. Mslím že stejně to je na Radar-detectors..', '', 2, 'n', 'y', '', 2),
(47, 'Obrázky ?', '2014-08-05 06:06:45', 'Fixnutí chyby', 'Hotovo', 'Maximalní velikost obrázku pro článek je 500 kB.\n\nOdebrat tohle omezení\n\n-------\nnavyseno z 500kb na 5MB (5000kb)\n\n--------------\n\nPořád to nefunguje ....', 'omezení kompletně odebráno z článků a produktů', 2, 'n', 'y', '', 2),
(48, 'AJAX', '2014-08-05 10:21:08', 'Fixnutí chyby', 'Hotovo', 'Zajaxovat několik prvků ve frontendu', 'konečně jsem ten ajax rozjel i na frontendu sice to byly jen drobnosti jako mazani produktu z košíku atd ale už to konečně je :-D', 3, 'n', 'y', '', 3),
(49, 'Tasky', '2014-08-05 06:06:51', 'Návrh na zlepšení', 'Hotovo', 'Rozdělit tasky do skupin pro přehlednost ', '', 3, 'n', 'y', '', 3),
(50, 'Login', '2014-08-05 06:06:54', 'Fixnutí chyby', 'Hotovo', 'Vlastní login -> tenhle je free z netu a musí tam být autorovo jméno což není a nebude', '', 3, 'n', 'y', '', 3),
(51, 'Sklad 3', '2014-08-05 06:06:57', 'Fixnutí chyby', 'Hotovo', 'logy se zobrazuji od spoda dolu -> takže obrátit', '', 3, 'n', 'y', '', 3),
(52, 'Taby v produktu', '2014-08-05 06:07:00', 'Spěchá', 'Hotovo', '- ať se ty taby dají přejmenovat nějak normálně \n--- hotovo ---\n\n- ať se dají smazat / přidat další taby\n--- hotovo ---\n\n- (po přidání novýho tabu je třeba aktualizovat tu stránku -> asi to hodím automaticky to refreshovaní je špatný)\n--- hotovo ---\n\n- nahodit tam starý texty z db\n--- hotovo ---\n\n- smažu ten překlad z editace\n--- hotovo ---\n\n-smažu stránku v přidání produktu\n--- hotovo ---\n\n-smažu i překlad v přídání produktu\n--- hotovo ---', '- dal jsem pryč základní informace, parametry a detaily (ty se dají přidávat přes ty taby)\n- texty ale zmiznuly (ty co uz tam byly) ale jsou uložený v DB tak je tam nahážu\n- verze a příslušenství se přeložit nedá ale jelikož to bude stejný tak mi to sem napište jak to bude a ja to tam natvrdo hodím (nebo to mám taky překládat? nevidím důvod protože se to měnit nebude ale kdyžtak dodělám)\n\njo btw u tabu se musí dávat čudlík upravit (pod tím textem) ne klasicky upravit produkt!!!', 3, 'n', 'y', 'tasks/Snímek obrazovky 2014-07-30 v 17.15.08.png', 3),
(53, 'Texty', '2014-08-05 06:07:03', 'Fixnutí chyby', 'Hotovo', 'http://antiradary.sk/produkt/escort-max-international-sk\n\nText je celej potom klikneš a text zmizí a funguje jenom příslušenství ', '', 2, 'n', 'y', '', 2),
(54, 'Překlad frontendu', '2014-08-05 06:07:06', 'Spěchá', 'Hotovo', 'přeložit frontend stejně jako backend', 'aha ono tam není co překládat :-D taže na ty taby použiju to co se překládá v adminu :-)', 3, 'n', 'y', '', 3),
(55, 'Footer', '2014-08-13 08:24:58', 'Fixnutí chyby', 'Hotovo', 'Hele upravil jsem footer a smazalo se jeho jméno ... :-) \n\nViz tab: Panely ', '', 2, 'n', 'y', '', 2),
(56, 'Menu', '2014-08-13 08:24:49', 'Fixnutí chyby', 'Hotovo', 'Dej si menu ... a Články a zaujímavosti ... Má URL articles .. ale pritom na webu to jsou články ..', 'jop to byl jen prefix ze starý verze systému, kde články neměli vlastní url adresu a tak se používal prefix "articles" stejne tak jako hlavní stránka používá "homepage" noc nic důležitýho ... už tam jsou "/clanky".', 2, 'n', 'y', '', 2),
(57, 'Překlad', '2014-08-05 10:21:17', 'Návrh na zlepšení', 'Hotovo', 'http://www.antiradary.sk/admin/translate/default/', '', 3, 'n', 'y', 'tasks/Snímek obrazovky 2014-08-01 v 16.24.55.png', 3),
(58, 'Překlad "flash messages"', '2014-08-05 10:21:27', 'Návrh na zlepšení', 'Hotovo', 'Administrace už se celá dá přeložit, co ale nejde jsou takový ty texty.. jako např: Článek "něco" byl úspěšně přidán." a podobně. Prostě zprávy co se vypisují po nějaké akci.', '', 3, 'n', 'y', '', 3),
(59, 'Překlad javascriptových hlášek', '2014-08-05 10:21:35', 'Spěchá', 'Hotovo', 'Přeložit všechny validační pravidla u formů atd.', '', 3, 'n', 'y', '', 3),
(60, 'http://antiradary.sk/faq-caste-otazky', '2014-08-05 06:07:39', 'Fixnutí chyby', 'Hotovo', 'http://antiradary.sk/faq-caste-otazky\n\n\nAKE SU POKUTY \n\nKOLKO SNIMACOV \n\nJE SPOJENÝ', '', 2, 'n', 'y', '', 2),
(61, 'Poradna', '2014-08-13 16:22:13', 'Návrh na zlepšení', 'Čeká na kontrolu', 'http://www.antiradary.net/forum-diskuse/\n\n-------------------------------------------\n\nAkorát vem design z templatu\n\n\n----------------------------------------------\nSpam tam teď už je .. A já ho neumím smazat protože mě systém nevidí jako administrátora nebo co...\n    -> muzes to mazat akorat musis bejt prihlasenej viz screenshot (to cerveny kolecko u jmena autora)', 'jeste chybi captcha -> udelam vecer ted koncim :)\n\n- přidal jsem "neviditelnou captchu" :-) co jsem cetl tak captchu precte kazdej bot takze to je shit hodil jsem tam overeni pres cas\n\n- admin muze pridat cokoli , kdykoli\n- user muze pridat pouze jeden prispevek (vlakno) za 1 den\n- user muze pridat pouze jeden post (reply na nejaky vlakno) 1x za hodinu (tady bych mozna trochu pridal)\n- přidal jsem antispamovou kontrolu', 2, 'y', 'y', 'tasks/snimek-obrazovky-2014-08-13-v-18-21-29-png', 3),
(62, 'Ukoly', '2014-08-13 08:24:40', 'Fixnutí chyby', 'Hotovo', 'Kdo dal ukol do vyřízenejch přídat slupeček ..', 'tak a je to  (ten kdo ukol vytvoril je ted v hotovejch jako i ten kdo ten task dokoncil protoze nejde zpetne zjistit kdo to tam presunul kdyz to s timhle nepocitalo) :) ale od ted by to melo slapat', 2, 'n', 'y', '', 2),
(63, 'Objednavky sklady', '2014-08-13 08:24:24', 'Fixnutí chyby', 'Hotovo', 'Takže priorita jsou objednávky sklady a dealeři .. Podle Olivi vratil se z dovolený ... ', 'já nevím.. asi všechno? Oliva už nepíše :-)', 2, 'n', 'y', '', 2),
(65, 'Resetování kódu', '2014-08-05 10:21:49', 'Fixnutí chyby', 'Hotovo', 'U objednávek se neresetuje kód 1.1', 'do cronu jsem pridal spousteni (1.1) scriptu, kterej resetuje cisla objednavky\n\nsetup.sk -> antiradary.sk -> ftp -> webcron', 3, 'n', 'y', '', 3),
(66, 'Skladová evidence - souhrn', '2014-08-05 10:21:59', 'Fixnutí chyby', 'Hotovo', 'vůbec nefunguje', '', 3, 'n', 'y', '', 3),
(67, 'Skladová evidence - součty', '2014-08-07 13:09:58', 'Fixnutí chyby', 'Hotovo', 'vůbec nefunguje', '', 3, 'n', 'y', '', 3),
(68, 'Dealeři', '2014-08-08 12:11:44', 'Fixnutí chyby', 'Čeká na kontrolu', 'Nefungují provize a tak celkově dealeři co se objednávek týče', '', 3, 'n', 'y', '', 3),
(69, 'Main Page', '2014-08-13 11:03:58', 'Fixnutí chyby', 'Čeká na kontrolu', 'Ahoj na main page máš ty tři články dole ... \n\nProč jsou fiklý ty texty ? \n\nJe antiradar a laserová rušička spoľahlivé zariadenie? Tohle má bejt plný ', '', 2, 'n', 'y', '', 3),
(70, 'Doplňky', '2014-08-13 16:19:39', 'Fixnutí chyby', 'Čeká na kontrolu', 'Poprosím o změnu .. Když máš v produktu dopňky tak ať jsou vypsaný a seřazený podle abecedy všechny ne jenom příslušenství .', '', 2, 'n', 'y', '', 3),
(71, 'Kategorie', '2014-08-13 15:08:42', 'Fixnutí chyby', 'Čeká na kontrolu', 'Když v kategorii nebude žádný produkt aktivní.. tak se nezobrazuje', 'nelze kategori se nevypisujou jakoze menu -> vsechny kategorie \ndo menu jsou pridany submenu ktery jen simulujou ze to jsou kategorie tudiz pokud tam zadnej item nebude tak to musis hold vypnout rucne coz si mylsim ze neni takovej problem staci kliknout na to ze se nebude zobrazovat', 2, 'n', 'y', '', 3),
(72, 'Dodělání skladu', '2014-08-13 15:51:47', 'Fixnutí chyby', 'Čeká na kontrolu', 'Je potřeba upravit sklad. \n\n1) Záložka 1.Sklad přejmenovat na 1.Sklad Praha\n2) Vytvořit ještě jednu záložku 2. Sklad Bratislava\n3) Ostatní záložky přečíslovat na 3., 4., ......\n\n4) Pokud si klikneš na jakýkoliv produkt, objeví se ti v horní liště počet -276 (a to u všech produktů stejně). Tady by se měl zobrazovat aktuální stav daného produktu. Nevím, co to je za číslo, ale oprav to na ukazatel stavu produktu na skladě u aktuálně rozbalených záznamů.\n\n', '', 6, 'n', 'y', '', 3);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_userinfos`
--

CREATE TABLE IF NOT EXISTS `prefix_userinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `facebook` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user`),
  KEY `fk_prefix_userinfos_prefix_users1_idx` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `prefix_userinfos`
--

INSERT INTO `prefix_userinfos` (`id`, `username`, `surname`, `birthday`, `facebook`, `skype`, `user`) VALUES
(1, 'Petr', 'Horňák', '0000-00-00 00:00:00', 'dsad', 'sad', 2),
(2, 'Tomáš', 'Petr', '0000-00-00 00:00:00', 'sada', '', 3),
(3, 'Robert', 'Šatník', '0000-00-00 00:00:00', '...', '...', 4),
(4, 'AR', 'SK', '0000-00-00 00:00:00', '', '', 5),
(5, 'Petr', 'Oliva', '0000-00-00 00:00:00', '', '', 6);

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_users`
--

CREATE TABLE IF NOT EXISTS `prefix_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registrationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastLogin` int(11) NOT NULL DEFAULT '0',
  `adminLevel` varchar(10) NOT NULL DEFAULT 'guest',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `prefix_users`
--

INSERT INTO `prefix_users` (`id`, `account`, `password`, `email`, `registrationDate`, `lastLogin`, `adminLevel`) VALUES
(2, 'peter@antiradary.net', '01dda73a679d2c37644671d8a7a32e38e4e594897cf9e55820b6878e03d82ec280074483fa96da3e882f8e510648c5dce80551cf97551a15bffbc85711c0b2ac', 'peter@antiradary.net', '2014-06-17 01:29:27', 0, 'admin'),
(3, 'tomas.petr@bk.ru', '4852519831c1542ce14b31be2cf58572e8c0c586249ba584598f831e2307361dfc8dee917057b7708cf54faf00a87ceef51a2d3d95c6f59a2bcafd0255f57545', 'tomas.petr@bk.ru', '2014-06-18 17:40:26', 0, 'admin'),
(4, 'robert', 'e69e9c1fa90268b4ac505bc4067897acfd5ff1512ba7081eff5e3215dd7d74a3cca20df43952e93592abd394e076a29d4405bcf4247444f95b9aa8588c0efa1f', 'robert@antiradary.net', '2014-07-07 03:20:39', 0, 'admin'),
(5, 'antiradary.sk', 'b4f6f96e6e8d54f2a18bdbaeb439fa6754a3064f960548a8289402be7c68fbdfd111e6e5fc9d886543cb5b9b202df098d12d8c53f56397b2aaf785e2336b2c1f', 'objednavky@antiradary.sk', '2014-07-11 09:50:59', 0, 'admin'),
(6, 'Oliva', '93c78871600069128b0cbb2020106ffdae7a567a625f8b8a03964e4bb4ee5049b2f4f7365ce7a55fe16e4eb8f9862fc3198e8ca2865d9cff8aae77ff9bff4a94', 'petr.oliva@antiradary.net', '2014-07-22 06:53:28', 0, 'admin');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_warehouse`
--

CREATE TABLE IF NOT EXISTS `prefix_warehouse` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product` int(10) unsigned DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stack` int(11) DEFAULT NULL,
  `type` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `note` text COLLATE utf8_bin,
  `user` int(10) unsigned DEFAULT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  `edit` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Vypisuji data pro tabulku `prefix_warehouse`
--

INSERT INTO `prefix_warehouse` (`id`, `product`, `date`, `stack`, `type`, `note`, `user`, `time`, `edit`) VALUES
(1, 12, '2014-07-22 07:45:25', 0, 'sklad', 'Poznámka', 2, 155, '2014-08-12 09:10:14'),
(2, 13, '2014-07-23 14:10:55', 0, 'sklad', 'Poznámka', 2, 155, '2014-08-12 09:10:14'),
(3, 14, '2014-07-10 03:13:07', 35, 'sklad', 'Dodávka z Maďarska', 2, 155, '2014-08-12 12:01:46'),
(4, 15, '2014-07-10 03:15:19', 0, 'sklad', 'Poznámka', 2, 31, '2014-08-12 09:10:14'),
(5, 16, '2014-07-10 00:20:17', 0, 'sklad', 'Poznámka', 2, 0, '2014-08-12 09:10:14'),
(6, 17, '2014-07-23 14:10:56', 0, 'sklad', 'Poznámka', 2, 124, '2014-08-12 09:10:14'),
(7, 18, '2014-07-10 02:17:52', 0, 'sklad', 'Poznámka', 2, 0, '2014-08-12 09:10:14'),
(8, 19, '2014-07-10 00:20:58', 0, 'sklad', 'Poznámka', 2, 0, '2014-08-12 09:10:14'),
(9, 20, '2014-07-10 03:15:22', 0, 'sklad', 'Poznámka', 2, 93, '2014-08-12 09:10:14'),
(10, 21, '2014-07-10 00:21:16', 0, 'sklad', 'Poznámka', 2, 0, '2014-08-12 09:10:14'),
(11, 22, '2014-07-10 00:21:28', 0, 'sklad', 'Poznámka', 2, 0, '2014-08-12 09:10:15'),
(25, 25, '2014-07-28 17:27:01', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(26, 26, '2014-07-29 13:48:36', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(27, 27, '2014-07-23 14:10:56', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(28, 28, '2014-07-21 12:10:07', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(29, 29, '2014-07-21 12:19:00', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(30, 30, '2014-07-28 17:27:01', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(31, 31, '2014-07-29 13:42:13', 24, 'sklad', 'Dodávka z Maďarska', NULL, 0, '2014-08-13 09:19:30'),
(32, 32, '2014-08-01 11:51:40', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:15'),
(34, 34, '2014-08-01 12:09:07', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:10:16'),
(35, 35, '2014-08-01 12:12:19', 0, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:09:21'),
(39, 36, '2014-08-07 07:54:03', -2, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:29:48'),
(40, 37, '2014-08-07 07:56:15', -8, 'sklad', 'Poznámka', NULL, 0, '2014-08-12 09:29:48'),
(41, 38, '2014-08-12 12:30:13', 14, 'sklad', 'Dodávka z Maďarska', NULL, 0, '2014-08-13 14:03:55'),
(42, 39, '2014-08-12 12:32:58', 15, 'sklad', 'Dodávka z Maďarska', NULL, 0, '2014-08-12 12:38:08'),
(43, 40, '2014-08-13 12:07:15', 0, 'sklad', '', NULL, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_warehouse_log`
--

CREATE TABLE IF NOT EXISTS `prefix_warehouse_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `stack` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_bin,
  `product` int(11) NOT NULL,
  `warehouse` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=83 ;

--
-- Vypisuji data pro tabulku `prefix_warehouse_log`
--

INSERT INTO `prefix_warehouse_log` (`id`, `date`, `code`, `stack`, `user`, `note`, `product`, `warehouse`) VALUES
(73, '2014-08-12 09:29:48', 'Escort 9500ci - SK', -3, 6, '3001/2014', 14, 'sklad'),
(74, '2014-08-12 09:29:48', 'emax', -2, 6, '3001/2014', 31, 'sklad'),
(75, '2014-08-12 09:29:48', 'PKDZB', -2, 6, '3001/2014', 36, 'sklad'),
(76, '2014-08-12 09:29:48', 'CODE', -8, 6, '3001/2014', 37, 'sklad'),
(77, '2014-08-12 10:34:49', 'Escort 9500ci - SK', -2, 6, '3002/2014', 14, 'sklad'),
(78, '2014-08-12 12:01:46', 'Escort 9500ci - SK', 40, 6, 'Dodávka z Maďarska', 14, 'sklad'),
(79, '2014-08-12 12:33:57', 'ZR9500IX', 15, 6, 'Dodávka z Maďarska', 38, 'sklad'),
(80, '2014-08-12 12:38:08', 'ZHP905Q', 15, 6, 'Dodávka z Maďarska', 39, 'sklad'),
(81, '2014-08-12 12:40:46', 'emax', 24, 6, 'Dodávka z Maďarska', 31, 'sklad'),
(82, '2014-08-13 14:03:55', 'ZR9500IX', -1, 5, '3006/2014', 38, 'sklad');

-- --------------------------------------------------------

--
-- Struktura tabulky `prefix_widgets`
--

CREATE TABLE IF NOT EXISTS `prefix_widgets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `priority` int(11) DEFAULT NULL,
  `visibility` int(1) DEFAULT NULL,
  `user` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `prefix_widgets`
--

INSERT INTO `prefix_widgets` (`id`, `class`, `name`, `content`, `priority`, `visibility`, `user`, `type`) VALUES
(1, 'white-wrapper', 'Nadpis', '<div class="container">\n                <div class="messagebox">\n                    <h2>\n                        Neviete si rady s výberom správneho antiradaru?<br>\n                        Kontaktujte našich odborníkov na telefóne <span class="header-co"><strong>0910 80 00 11</strong></span><br>\n                        alebo nás navštívte na prevádzke v Bratislave.\n</h2>\n                    </div>\n                <!-- end messagebox -->\n            </div>', 1, 1, 3, 'html'),
(2, 'grey-wrapper jt-shadow padding-top', 'kategorie', '<div class="container">\n            <h2 class="panel-title-40 center-align">Ponúkame iba tie najlepšie antiradary pre Váš automobil</h2>\n    <div class="col-lg-4 first">\n        <div class="service-with-image">\n            <div class="entry">\n                 <a href="/produkty/prenosne-antiradary"><img src="http://www.antiradary.sk/images/produkty/prenosne-antiradary.jpg" class="img-responsive wd-365" alt="přenosné antiradary"></a>\n                <span class="service-title">\n                    <a href="/produkty/prenosne-antiradary"><span class="fa"></span>PRENOSNÉ ANTIRADARY</a>\n                </span>\n            </div><!-- end entry -->\n            <div class="service-desc wd-365">\n                <p>Ponúkame Vám najlepšie prenosné antiradary, ktoré môžete dnes nájsť na trhu. Pasívne radarové detektory sú spoľahlivou ochranou pred meračmi rýchlosti typu RAMER a MULTARADAR CD.</p>\n                <a href="/produkty/prenosne-antiradary" class="readmore">Čítajte Viac...</a>\n            </div><!-- end service-desc -->\n        </div><!-- end service-with-image -->\n    </div><!-- end col-lg-4 -->\n    <div class="col-lg-4">\n        <div class="service-with-image">\n            <div class="entry">\n                <a href="/produkty/pevne-antiradary"><img src="http://www.antiradary.sk/images/produkty/pevne-antiradary.jpg" class="img-responsive wd-365" alt="pevné antiradary"></a>\n                    <span class="service-title">\n                        <a href="/produkty/pevne-antiradary"><span class="fa"></span>PEVNÉ ANTIRADARY</a>\n                    </span>\n            </div><!-- end entry -->\n            <div class="service-desc wd-365">\n                <p>Dokonalejšou formou antiradarov sú určite zabudované resp. pevné antiradary. Ponúkame osvedčené modely zabudovateľných antiradarov. Ideálne riešenie pre vozidlá s pokovenými sklami.</p>\n                <a href="/produkty/pevne-antiradary" class="readmore">Čítajte Viac...</a>\n            </div><!-- end service-desc -->\n        </div><!-- end service-with-image -->\n    </div><!-- end col-lg-4 -->\n    \n    <div class="col-lg-4">\n        <div class="service-with-image">\n            <div class="entry">\n                <a href="/produkty/laserove-rusicky"><img src="http://www.antiradary.sk/images/produkty/laserove-rusicky.jpg" class="img-responsive wd-365" alt="laserové rušičky"></a>\n                <span class="service-title">\n                    <a href="/produkty/laserove-rusicky"><span class="fa"></span>LASEROVÉ RUŠIČKY</a>\n                </span>\n            </div><!-- end entry -->\n            <div class="service-desc wd-365">\n                <p>Najúčinnejšia ochrana pred laserovými meračmi na cestách. Široký výber najpoužívnejších laserových rušičiek - značky ako BLINDER a LASER INTERCEPTOR Vás spoľahlivo ochránia pred pokutami. </p>\n                <a href="/produkty/laserove-rusicky" class="readmore">Čítajte Viac...</a>\n            </div><!-- end service-desc -->\n        </div><!-- end service-with-image -->\n    </div><!-- end col-lg-4 -->\n\n</div><!-- end service-desc -->', 2, 1, 3, 'latte'),
(3, 'white-wrapper', 'spodní', '<div class="container padd-bot">\n<div class="messagebox">\n<h2>\nSme najväčším predajcom antiradarov na Slovensku...<br/>\n</h2>\n<p class="left-align">Sme výhradným distribútorom antiradarov značky ESCORT, BLINDER a GENEVO pre Slovenskú republiku. Veríme, že naša úzka spolupráca s týmito výrobcami, ktorí sú špičkou vo svojom odbore, prinesie našim zákazníkom viac nových produktov a viac spokojnosti.</p>\n\n<p class="left-align">Ak patríte k ľuďom, ktorí majú radi rýchlosť a nechcete platiť pokuty, ste na správnej adrese. V našom internetovom obchode nájdete široký výber radarových detektorov - antiradarov a laserových rušičiek, ktoré Vás spoľahlivo ochránia pred policajnými meračmi rýchlosti. V našom sortimente nájdete len overené a kvalitné značky a to za najlepšie ceny na trhu. Naviac u nás neplatíte prepravné náklady a objednaný tovar vám dovezieme do 24 hodín.</p>\n\n<p class="left-align">Stačí si len vybrať ten správny antiradar...</p></div><!-- end messagebox -->\n</div><!-- end container -->', 3, 1, 3, 'html'),
(6, 'grey-wrapper jt-shadow padding-top', 'zaujímavé informacie', '<div class="container padd-bot">\n    <h2 class="panel-title-40 center-align">Zaujímavé informácie o antiradaroch</h2>\n        <div class="services_vertical">\n        {foreach $articles as $artc}\n           {if $artc->image != ''''}\n              <div class="col-lg-4">\n                 <table>\n                    <tr class="fl-left">\n                       <td class="padd-top-24"><img src="{$basePath}/{$artc->image}" width="100" alt="{$artc->title}"/></td>\n                       <td class="padd-left-10 valign-top"><a href="/informacie-o-antiradaroch/{$artc->link}"><h3>{$artc->title|truncate:50}</h3></a>{$artc->description|truncate:80}</td></tr></table></div>\n           {else}\n                <div class="col-lg-4">\n                  <table>\n                    <tr>\n                      <td class="padd-10"><a href="/informacie-o-antiradaroch/{$artc->link}"><h3>{$artc->title}</h3></a>{$artc->description|truncate:80}</td></tr></table></div>\n           {/if}\n{/foreach}\n<div class="clearfix"></div>\n</div><!-- end container -->\n</div>', 4, 1, 3, 'latte');

-- --------------------------------------------------------

--
-- Struktura tabulky `turnover`
--

CREATE TABLE IF NOT EXISTS `turnover` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dealer` int(10) unsigned DEFAULT NULL,
  `orderkey` int(10) unsigned DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `turnover`
--

INSERT INTO `turnover` (`id`, `dealer`, `orderkey`, `date`) VALUES
(1, 65, 636, '2014-08-08 11:45:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

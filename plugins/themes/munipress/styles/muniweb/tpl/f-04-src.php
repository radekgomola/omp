<?php
	$title = 'Zdrojová složka src';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>04</strong>
						Zdrojová složka src
					</h1>
				</div>

				<div class="sk-annot--main">
					<h2>
						<strong>04.01</strong>
						složka CSS
					</h2>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní popis</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Pro psaní CSS byl vybrán preprocesor <a href="http://sass-lang.com/">SASS</a> v kombinaci s mixinovou knihovnou <a href="http://bourbon.io/">Bourbon</a> pro usnadnění práce.
						</p>
						<p>
							CSS je inspirováno <a href="http://atomicdesign.bradfrost.com/">Atomic designem</a> v kombinaci s <a href="http://getbem.com/introduction/">BEM</a> syntaxí. Od Atomic designu se odvíjí i základní adresářová struktura:
						</p>
						<ol>
							<li>
								<strong>atoms</strong> – základní stavební kameny frameworku. Jsou to nejmenší součásti frameworku, které jsou dále používány v molekulách a organismech. Typově jsou to např. jednotlivé formulářové prvky, štítky, typografie apod.
								<ol>
									<li>forms - formulářové prvky (tlačítka, inputy, ...)</li>
									<li>icons - ikony <a href="http://fontawesome.io/">FontAwesome</a></li>
								</ol>
							</li>
							<li>
								<strong>molecules</strong> – skupiny atomů a speciální struktury HTML. V našem případě je dále dělíme na boxy, výpisy, formuláře a menu. Molekuly v HTML poznáme na první pohled, protože jsou prefixované klíčovými slovy box-, crossroad-, form- či menu-, které jsou dále k nalezení v odpovídajících složkách.
								<ol>
									<li>box</li>
									<li>crossroad</li>
									<li>form</li>
									<li>menu</li>
								</ol>
							</li>
							<li>
								<strong>organisms</strong> – větší části kódu, nejčastěji vznikají sloučením více různých molekul. V našem případě jsou organismy použity pro hlavičky a patičky.
							</li>
						</ol>
						<p class="bold">Naše nástavba – složka lib</p>
						<ol>
							<li>font.scss - definice webfontů</li>
							<li><a href="https://necolas.github.io/normalize.css/">normalize.scss</a> - slouží k normalizaci rozdílů u základních elementů napříč prohlížeči. Pozor soubor byl doplněn o nové definice oproti výchozí knihovně</li>
							<li><a href="a-00-framework.html">sk-framework.scss</a> - definice SK mini frameworku (např. třídy pro práci s textem)</li>
							<li>sk.scss - definice vlastních mixin</li>
							<li>variables.scss - nastavení všech proměnných - barvy, fonty, odsazení a breakpointy.</li>
						</ol>
						<p class="bold">Styly pro dokumentaci - využívají se pouze pro dokumentaci</p>
						<ol>
							<li>documentation.scss - speciální styly pro vzhled dokumentace</li>
							<li>documentation/highlight.css - syntax highlighter</li>
						</ol>
					</div>
				</div>

				<div id="zaklani-stylopis" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Generování základního stylopisu</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Hlavní soubor pro generování CSS je soubor style.scss, ze kterého se kompiluje soubor style.css. Zdrojový style.scss soubor obsahuje:
						</p>
						<ol>
							<li>Základní definice pro element html</li>
							<li>import <a href="http://bourbon.io/">Bourbonu</a></li>
							<li>import lib.scss - importování naší nástavby CSS se základními mixinami, fontem, normalizem apod. Pozor nelinkuje se sk-framework</li>
							<li>import typography.scss - nastavení základní typografie</li>
							<li>import atoms.scss - nastavení importu souborů s atomy ve správném pořadí. Jednotlivé atomy jsou popsané <a href="./#atomy">zde</a></li>
							<li>import molecules.scss - nastavení importu souborů s molekulami ve správném pořadí. Jednotlivé molekuly jsou popsané <a href="./#molekuly">zde</a></li>
							<li>import organisms.scss - nastavení importu souborů s organismy ve správném pořadí. Jednotlivé organismy jsou popsané <a href="./#organismy">zde</a></li>
							<li>reset horního marginu pro *:first-child – vždy resetujeme horní margin elementů u prvních položek v bloku</li>
							<li>import sk-frameworku - linkuje se až jako poslední kvůli váze selectorů</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Generování stylopisů pro jednotlivé fakulty</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Pro fakulty jsou předpřipravené stylopisy style-__zkratka-fakulty__.scss, které generují vlastní style__zkratka-fakulty__.css. Princip je stejný jako styl pro <a href="#zaklani-stylopis">základní stylopis</a>. Tyto sass soubory jsou umístěny v root složce css, stejně jako style.scss, a oproti tomuto souboru obsahují předefinování některých proměnných - zejména pro barevné odlišnosti. Pokud byste potřebovali více úprav pro jednotlivé fakulty, pak upravte soubor fakulty podobně jako je popsáno <a href="#todo">zde</a>.
						</p>
						<p>
							Nikdy nelinkujte style.css a stylopis pro jednotlivé faktulty zároveň. Jelikož se nejedná pouze o tzv. skin css, ale plnohodnotné css - stačí linkovat vygenerovaný stylopis se sufixem patřičné fakulty.
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Generování vlastního stylopisu</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Pro generování vlastního stylopisu je připravený soubor style-custom.scss. Tento stylopis importuje rovnou koncové soubory (atomů, molekul a organismů), aby bylo možné je jednoduše:
						</p>
						<ul>
							<li>odstranit pokud nejsou potřeba,</li>
							<li>nebo upravit dle potřeby,</li>
							<li>nebo nahradit jiným souborem,</li>
							<li>upravit pořadí linkování apod.</li>
						</ul>
						<p>
							<strong>Pozor:</strong> tento soubor byl vytvořen při tvorbě dokumentace a může se stát, že budou některé komponenty chybět. Proto doporučujeme před započetím prací na tomto soboru znovu překopírovat importy ze souborů lib.scss, atoms.scss, molecules.scss a organisms.scss.
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Generování speciálních stylů pro wysiwyg</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Tento souboru obsahuje pouze typografii a import bourbonu s proměnnými. Soubor pro wysiwyg editory, díky kterému dokáží editory zobrazit totožný vzhled jako na webu. Tento soubor se generuje ze souboru wysiwyg.scss a vzniká z něj stylopis wysiwyg.css. <strong>Tento soubor by se neměl objevit na ostré verzi webů - slouží pouze pro administraci.</strong>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Generování tiskového stylu</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Bude připraveno
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Generování speciálních stylů pro dokumentaci</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Pro nastylování vzhledu dokumentace bylo potřeba vytvořit pár definic CSS. Proto vznikl extra stylopis documentation.css, abychom zbytečně tyto styly nevkládali do produkčního CSS. Generuje se ze souboru documentation.scss. Tento soubor je linkovaný v hlavičce. <strong>Tento soubor by se neměl objevit na ostré verzi webů.</strong>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Debugování CSS</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Pro jednoduší dohledání zdrojových sass souborů je implementováno mapování. V Chrome devtools při vyselectování DOM elementu je u stylů ukázáno, z jakého souboru a na jakém řádku se definice nacházejí.
						</p>
						<p>
							Mapování je navíc doplněno o konvenci v pojmenovávání selektorů, které obsahují prefixy box, crossroad, form a menu pro molekuly. Ostatní neprefixované selectory jsou buďto selectory z našeho frameworku, atomy či organismy.
						</p>
					</div>
				</div>

				<div class="sk-annot--main">
					<h2>
						<strong>04.02</strong>
						složka TPL
					</h2>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní popis</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Tato složka obsahuje PHP soubory, ze kterých se kompilují standardní HTML šablony. Šablony jsou rozděleny do několika typů:
						</p>
						<ol>
							<li>Dokumentace frameworku - ty mají prefix f-</li>
							<li>Design manuál - ty mají prefix d-</li>
							<li>Atomy - ty mají prefixy a-</li>
							<li>
								Molekuly - ty mají prefix m-
								<ul>
									<li>01 - pro formuláře
									<li>02 - pro boxy
									<li>03 - pro menu
									<li>04 - pro rozcestníky
								</ul>
							</li>
							<li>Organismy - ty mají prefix o-</li>
							<li>Příklady stránek - ty mají prefix s-</li>
							<li>Příklady stránek Filozofické fakulty - ty mají prefix ff-</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Složka se soubory pro ajaxové requesty</h2>
					</div>
					<div class="u-mb-50">
						<p>Složka se soubory pro simulaci ajaxu. Nachází se v kořenu adresáře src. Tyto soubory obsahují, co je přesně potřeba vracet při ajaxovém požadavku.</p>
						<ol>
							<li><strong>suggest.php</strong> - simulace našeptávače.</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Soubory pro dokumentaci</h2>
					</div>
					<div class="u-mb-50">
						<p><strong>Pozor</strong>, při implementaci odstraňte linkování souborů pro dokumentaci v hlavičce (header.php) a patičce (footer.php). Jsou okomentovány.</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sociální meta tagy</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Kromě standardních metatagů se v elementu head objevují i meta tagy pro sociální sítě. Tyto meta tagy slouží k lepšímu popisu stránky pro sociální sítě - zpětné linky na sociálních sítích pak budou vypadat lépe.
						</p>
						<p>
							<strong>Facebook</strong>
						</p>
						<ul>
							<li>Doporučuji nastavit nadpis stránky, aktuální url, popisek stránky, název stránky a obrázek (ten ideálně generovat v rozměru 1200x630, jinak vkládat nějaký obrázek okolo 1000px</li>
							<li>Aktuálně je nastaven univerzální obrázek s logem MU</li>
						</ul>
						<p><strong>Twitter</strong></p>
						<ul>
							<li>Je dobré nastavit twitter účet, nadpis, popisek a obrázek - ten by neměl být nižší než 120x120px</li>
							<li>Aktuálně je nastaven univerzální obrázek s logem MU a twitter účet <a href="https://twitter.com/muni_cz">@muni_cz</a></li>
						</ul>
						<p>Pokud nechcete tyto elementy vyplňovat, pak je prosím odstraňte.</p>
					</div>
				</div>

				<div class="sk-annot--main">
					<h2>
						<strong>04.03</strong>
						složka FONTS
					</h2>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní popis</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Složka s webfonty. Aktuálně obsahuje webfont Meta Web Pro a FontAwesome v různých formátech, pro zajištění funkčnosti v co nejvíce prohlížečích.
						</p>
					</div>
				</div>

				<div class="sk-annot--main">
					<h2>
						<strong>04.04</strong>
						složka IMG
					</h2>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní popis</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Složka se všemi obrázky, které jsou dále rozdělené do složek:
						</p>
						<ol>
							<li>
								<strong>bg</strong> - složka s obrázky linkovanými v CSS. Tato složka navíc obsahuje 3 podsložky, icons, sprites, sprites-retina, které slouží ke generování spritů a custom icon fontů.
								<ol>
									<li><strong>icons</strong> - do této složky se vkládají svg, ze kterých se generuje custom webfont pro ikonky s mixinami do SASSu. Aktuálně se nevyužívá - pro ikonky se používá font Awesome. Pokud budete vkládat nějaké nové ikonky, pak je potřeba každou ikonku vsadit do jednotného plátna / rozměru - 1000x1000px (zvětšené na stejnou velikost - dle většího rozměru).</li>
									<li><strong>sprite</strong> - z png obrázků z této složky se vygeneruje sprite s mixinami do SASSu. Aktuálně se nevyžívá.</li>
									<li><strong>sprites-retina</strong> - z png obrázků z této složky se vygeneruje retina sprite s mixinami do SASSu. Aktuálně se nevyžívá.</li>
								</ol>
							</li>
							<li><strong>social</strong> - složka s obecnými obrázky, které se linkují pomocí meta tagů v elementu head</li>
							<li><strong>illust</strong> - složka s ilustračními obrázky linkovanými v HTML</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ikonky</h2>
					</div>
					<div class="u-mb-50">
						<p>Pro ikonky se využívá webfont knihovna FontAwesome, ukázky a dokumentace použití <a href="a-05-ikonky.html">ikonek</a>. Podrobnější dokumentace a lepší hledání ikonek <a href="ttp://fontawesome.io/icons/">zde</a>.</p>
					</div>
				</div>

				<div class="sk-annot--main">
					<h2>
						<strong>04.04</strong>
						složka JS
					</h2>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní popis</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Všechny js jsou psány v <a href="http://coffeescript.org/">CoffeeScriptu</a>
						</p>
						<p>
							Páteřní soubor se jmenuje app.coffee, který obsahuje router jednotlivých komponent JavaScriptu - ty jsou umístěné ve složce components.
						</p>
						<p>
							JavaScripty jsou opět rozděleny do několika složek:
						</p>
						<ol>
							<li>
								<strong>static</strong> - JS knihovny, které se nijak nekompilují a pouze přesunou do vygenerované složky /web/js/.
								<ol>
									<li>jquery.js - knihovna <a href="http://www.jquery.com">jQuery</a>
									<li>d3.js a nv.d3.js - knihovny pro <a href="https://d3js.org/">grafy</a>
									<li>graphs.js - inicializace grafů. Slouží pouze jako ukázka. Linkuje se pouze na <a href="a-16-grafy.html">stránce s grafy</a>.
									<li>documentation.js - javascripty pouze pro správnou funkčnost dokumentace.
									<li>highlight.pack.js - syntaxe highlighter - používá se pro <strong>dokumentaci</strong>.
								</ol>
							</li>
							<li>
            					<strong>lib</strong> - knihovny, které nelze stahovat přes bower
            					<ol>
									<li><a href="http://wicky.nillia.ms/headroom.js/">headroom.js</a> - plugin pro skrývání / odkrývání hlavičky při scrollu. Není dobře udělaný jako bower balíček, proto se musí linkovat extra.
								</ol>
							</li>
							<li>
            					<strong>components</strong> - inicializace komponent pro jednotlivé atomy, molekuly a organismy
            					<ol>
									<li>accordion.coffee - inicializace accordionů. Používá se zde: <strong>TODO</strong></li>
									<li>cycle.coffee - inicializace carouselů. Využívá plugin <a href="http://jquery.malsup.com/cycle2/">jquery-cycle2</a>. Používá se zde:</li>
									<li>eventActions.coffee - bindování událostí na dokument. Zejména click událostí. Používá se zde:</li>
									<li>header.coffee - incializace skrývání / odkrývání hlavičky při scrollu a bindování událostí pro rozklik hlavičky při respozivních verzích. Pro skrývání/odkrývání slouží plugin <a href="http://wicky.nillia.ms/headroom.js/">headroom.js</a>. Používá se zde:</li>
									<li>headerMenu.coffee - skrývání položek při menším rozlišení či větším počtu položek, které se nevlezou na jeden řádek + události s tím související. Používá se zde:</li>
									<li>lightbox.coffee - inicializace lightboxu. Lightboxy vycházejí z pluginu <a href="http://fancyapps.com/fancybox/">Fancybox</a> a <a href="https://github.com/mattbryson/TouchSwipe-Jquery-Plugin">jquery-touchswipe</a>. Používá se zde:</li>
									<li>map.coffee - obsluha zobrazení layoutu vyhledávání u mapy. Používá se zde:</li>
									<li>matchHeight.coffee - srovnání výšek. Využívá bower balíček <a href="http://brm.io/jquery-match-height/">matchHeight</a>. Používá se zde:</li>
									<li>scrollbar.coffee - inicializace custom scrollbarů. Využívá plugin <a href="http://baijs.com/tinyscrollbar/">Tiny Scrollbar</a>. Používá se zde:</li>
									<li>scrollNav.coffee - skrývání položek v .js-scroll-nav při zmenšeném rozlišení nebo velkém počtu položek. Využívá plugin <a href="https://github.com/felixexter/scrollbarWidth">scrollbarWidth</a>. Používá se zde:</li>
									<li>secondarySubmenu.coffee - počítání offset pozice při hover submenu na navigaci. Používá se zde:</li>
									<li>selectize.coffee - inicializace custom selectboxu. Používá se zde:</li>
									<li>tabs.coffee - inicializace tabů. Používá se zde:</li>
									<li>tooltip.coffee - inicializace tooltipů. Využívá plugin <a href="http://tipso.object505.com/">Tipso</a>. ODKAZ Používá se zde:</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bower balíčky</h2>
					</div>
					<div class="u-mb-50">
						<p>Balíčky natahované přes balíčkovací systém bower. Tyto balíčky jsou dále používaný v jednotlivých komponentách.</p>
						<ul>
							<li><a href="http://brm.io/jquery-match-height/">matchHeight</a> - plugin pro srovnávání výšek, který řeší i změnu šířky okna.</li>
							<li><a href="http://jquery.malsup.com/cycle2/">jquery-cycle2</a> - plugin pro carousely.</li>
							<li><a href="http://tipso.object505.com/">tipso</a> - plugin pro tooltipy.</li>
							<li><a href="https://github.com/felixexter/scrollbarWidth">scrollbarWidth</a> - plugin pro detekci šířky scrollbaru</li>
							<li><a href="http://baijs.com/tinyscrollbar/">tinyscrollbar</a> - plugin pro custom scrollbary</li>
							<li><a href="http://fancyapps.com/fancybox/">fancybox</a> - plugin pro lightboxy</li>
							<li><a href="https://github.com/mattbryson/TouchSwipe-Jquery-Plugin">jquery-touchswipe</a> - plugin pro touch eventy</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

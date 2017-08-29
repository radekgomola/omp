<?php
	$title = 'Rozjetí DevStacku';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02</strong>
						Rozjetí DevStacku
					</h1>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Aktuální verze</h2>
					</div>
					<div class="u-mb-50">
						<p>
							Aktuální verzi šablon najdete na <a href="https://github.com/ICS-MU/MuniWeb">GitHubu</a>, který si prosím naklonujte do svého počítače.
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Windows</h2>
					</div>
					<div class="u-mb-50">
						<ol>
							<li>
								<strong>Před rozjetím projektu je potřeba nainstalovat</strong>
								<ol>
									<li><a href="https://nodejs.org/">Node.js</a></li>
									<li><a href="https://git-scm.com/download/">GIT pro command line</a></li>
									<li><a href="http://www.imagemagick.org/script/binary-releases.php">ImageMagick</a></li>
									<li><a href="https://www.apachefriends.org/download.html">PHP</a></li>
								</ol>
							</li>
							<li>
								<strong>Nyní je potřeba nastavit PHP</strong>
								<ol>
									<li>Přidat PHP do PATH – <a href="http://kizu514.com/blog/wp-content/uploads/2015/09/1-Edit-Path.jpg">ukázka</a></li>
									<li>Přidat npm do PATH stejně jako PHP, cesta k npm: C:\Users\__your_account__\AppData\Roaming\npm (namísto __your_acount__ zadejte název vašeho účtu na PC)</li>
								</ol>
							</li>
							<li>
								<strong>Nainstalovat globální balíčky pomocí npm</strong>
								<ol>
									<li>Bower – v command line: npm install bower -g</li>
									<li>Gulp – v command line: npm install gulp-cli -g</li>
								</ol>
							</li>
							<li>
								<strong>Nyní je vše nainstalováno a můžeme přejít k rozjetí projektu</strong>
								<ol>
									<li>Nainstalovat npm balíčky - v command line: npm install</li>
									<li>Nainstalovat bower balíčky - v command line: bower install</li>
									<li>Spustit gulp - v command line: gulp (při dalším spouštění stačí již pouze příkaz gulp, pokud tedy není potřeba doinstalovat nové bower/npm balíčky)</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Mac</h2>
					</div>
					<div class="u-mb-50">
						<ol>
							<li>
								<strong>Před rozjetím projektu je potřeba naistalovat</strong>
								<ol>
									<li><a href="https://itunes.apple.com/app/xcode/id497799835?mt=12">xCode</a> z AppStoru + projít prvním spuštěním</li>
									<li><a href="https://developer.apple.com/downloads/index.action?=command%20line%20tools">Command Line Tools</a> z Apple Developers (musí být k nainstalované verzi xCodu)</li>
									<li><a href="http://brew.sh/">Homebrew</a> - $ /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"</li>
									<li><a href="https://nodejs.org/">Node.js</a> – $ brew install node</li>
								</ol>
							</li>
							<li>
								<strong>Přidat cesty k nodu do souboru .profile, který naleznete /Users/uživatel/.profile</strong>
								<div class="light">
									homebrew=/usr/local/bin:/usr/local/sbin<br />
									export PATH=/usr/local/share/npm/bin:$PATH<br />
									export PATH=$homebrew:$PATH
								</div>
							</li>
							<li>
								<strong>Nainstalovat další závislosti</strong>
								<ol>
									<li>Bower – $ npm install bower -g</li>
									<li>Gulp – $ npm install gulp-cli -g</li>
									<li>ImageMagick – $ brew install imagemagick</li>
									<li>
										PHP
										<ol>
											<li>$ brew tap homebrew/dupes</li>
											<li>$ brew tap josegonzalez/homebrew-php</li>
											<li>$ brew install php54</li>
										</ol>
									</li>
								</ol>
							</li>
							<li>
								<strong>Spuštění projektu</strong>
								<ol>
									<li>$ sh start.sh</li>
									<li class="light">
										Tento příkaz automaticky spustí:
										<ol>
											<li>npm install --no-progress</li>
											<li>bower install</li>
											<li>gulp (při dalším spouštění stačí již pouze příkaz gulp, pokud tedy není potřeba doinstalovat nové bower/npm balíčky)</li>
										</ol>
									</li>
								</ol>
							</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Příkazy k práci s devstackem</h2>
					</div>
					<div class="u-mb-50">
						<ul>
							<li><strong>gulp</strong> - Příkaz pro vykompilování již nastaveného projektu a spuštění watcherů</li>
							<li><strong>gulp min</strong> - Příkaz pro vykompilování minifikovaného projektu (minifikují se JS, CSS a obrázky). U tohoto příkazu se nepouští watcher</li>
							<li><strong>gulp minwatch</strong> - Příkaz pro vykompilování minifikovaného projektu a spuštění watcherů</li>
							<li><strong>gulp export</strong> - Příkaz pro vyexportování minifikovaného projektu do zipu (ideální pro verzování)</li>
						</ul>
						<p>Další <a href="f-06-gulp.html">Gulp tasky</a></p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zobrazení vykompilované verze v prohlížeči</h2>
					</div>
					<div class="u-mb-50">
						<p>Po rozjetí devstacku šablony běží na virtuální adrese http://localhost:3000/tpl (není-li obsazen port - přesná adresa se případně zobrazí v konzoli po spuštění příkazu gulp) nebo lze klasicky otevřít index.html z /web/tpl/</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Dokumentace jednotlivých složek devstacku</h2>
					</div>
					<div class="u-mb-50">
						<ul>
							<li><a href="https://nodejs.org/en/">Node.js</a> - balíčkovací ekosystém</li>
							<li><a href="https://www.npmjs.com/">NPM</a> - balíčkovací manager pro Node.js</li>
							<li><a href="http://www.imagemagick.org/script/index.php">ImageMagick</a> - knihovna pro práci s obrázky</li>
							<li><a href="http://gulpjs.com/">Gulp</a> - nástroj pro automatizaci workflow</li>
							<li><a href="https://bower.io/">Bower</a> - package manager pro web</li>
							<li><a href="http://sass-lang.com/">SASS</a> - preprocesor pro CSS</li>
							<li><a href="http://coffeescript.org/">CoffeeScript</a> - preprocesor pro JS</li>
							<li><a href="https://secure.php.net/">PHP</a> - skriptovací jazyk použitý ke generování statických HTML šablon</li>
							<li><a href="https://cs.wikipedia.org/wiki/Xcode">xCode</a> - vývojářské nástroje pro OSx</li>
							<li><a href="http://brew.sh/">Brew</a> - package manager pro OSx</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

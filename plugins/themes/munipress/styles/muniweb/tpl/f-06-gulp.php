<?php
	$title = 'Gulp tasky';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>06</strong>
						Gulp tasky
					</h1>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Popis tasků</h2>
					</div>
					<div class="u-mb-50">
						<p>Gulp tasky jsou v adresáři tasks a jsou psány v <a href="http://coffeescript.org/">CoffeeScriptu</a> stejně jako JavaScripty projektu. Gulp tasky slouží ke kompletnímu nastavení devstacku. Jmenovitě:</p>
						<ul>
							<li>browserSync.coffee - díky tomuto tasku se bude automaticky refreshovat browsery</li>
							<li>build.coffee - spouští sekvenci pro sestavení celého webu (obrázky, skripty, styly, ...)</li>
							<li>clean.coffee - vymazání složky web</li>
							<li>coffee-main.coffee - task pro coffee script</li>
							<li>compress.coffee - task pro zazipování obsahu exportované složky</li>
							<li>config.json - konfigurační soubor</li>
							<li>copy-images.coffee - taks pro kopírování obrázků</li>
							<li>copy-js.coffee - task pro kopírování JS</li>
							<li>copy-root.coffee - task pro kopírování souborů z root složky, které se nijak dále nezpracovávají (nekompilují)</li>
							<li>default.coffee - defaultní task, který se spustí po příkazu gulp. Tento task spustí tasky build a watch</li>
							<li>export.coffee - task, který zminifikuje projekt a navíc vytvoří zip archiv s aktuálním datem</li>
							<li>iconfont.coffee - task pro generování icon fontů</li>
							<li>imagemin.coffee - task minifikace obrázků</li>
							<li>min.coffee  task, který vše zminifikuje</li>
							<li>minwatch.coffee - task, který vše zminifikuje a spustí navíc task watch</li>
							<li>php2html.coffee - task pro generování PHP do HTML</li>
							<li>sass.coffee - task pro preprocesor sass</li>
							<li>spritepacker-retina.coffee task pro generování retina spritů</li>
							<li>spritepacker.coffee - task pro generování spritů</li>
							<li>watch.coffee - nastaví sledování změny souborů a spouštění korespondujících tasků</li>
							<li>webpack.coffee - task pro sestavování javascriptu a jeho závislostí</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

<?php
	$title = 'Adresářová struktura';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03</strong>
						Adresářová struktura
					</h1>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zdrojové složky devstacku</h2>
					</div>
					<div class="u-mb-50">
						<p>Po stažení projektu z GITu (<a href="https://github.com/ICS-MU/MuniWeb">https://github.com/ICS-MU/MuniWeb</a>) naleznete tyto složky a soubory</p>
						<ul>
							<li><a href="f-04-src.html">src</a> - složka se zdrojovými soubory</li>
							<li><a href="f-06-gulp.html">tasks</a> - konfigurace devstacku</li>
							<li>.gitignore - definice ignorovaných složek pro GIT</li>
							<li>Gulpfile.coffee - základní soubor pro konfiguraci task runneru pro Gulp - zbytek ve složce tasks</li>
							<li>README.md - dokumentace pro GitHub page</li>
							<li>bower.json - definice bower závislostí webu</li>
							<li>package.json - definice npm závislostí devstacku</li>
							<li>start.sh - spouštěcí shell skript pro MAC</li>
						</ul>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Vykompilované složky</h2>
					</div>
					<div class="u-mb-50">
						<p>Po rozjetí devstacku se vytvoří další složky:</p>
						<ul>
							<li><a href="#todo">bower_components</a> - nainstalované bower balíčky</li>
							<li><a href="#todo">node_modules</a> - node balíčky</li>
							<li><a href="f-05-web.html">web</a> - vykompilované šablony s CSS, JS, fonty a obrázky</li>
						</ul>
						<p>Tyto složky nikdy nepushujte do GITu.</p>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

<?php
	$title = 'Hlavičky';
	$hideHeader = true;
	$hideFooter = true;
	include 'part/header.php';
?>

	<br /><br />

	<div class="sk-annot--main">
		<h1>
			<strong>01.01.02</strong>
			Hlavičky - standardní - typ 2
		</h1>
		<p>
			<strong>Zdrojové CSS:</strong> /src/css/organism/_header.scss<br />
			<strong>Zdrojové JS:</strong><br />
			/src/js/components/header.coffee<br />
			/src/js/components/headerMenu.coffee
		</p>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Jen s primárním menu</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Výchozí organismus s hlavičkou. Slouží pro něj div.header.
				</p>
				<p>
					 <strong>V tomto případě menu obsahuje pouze primární část</strong>
				</p>
				<p>
					Tento typ hlavičky má zaimplementovaný JavaScript, který skrývá položky do vyjížděcího menu, pokud je hodně položek nebo se nevlezou kvůli responzivní verzi na jeden řádek. Tento princip se používá od tabletové verze. V mobilní verzi se rovnou položky rozklikávají.
				</p>
				<p>
					Při implementaci si dejte prosím pozor na již vygenerovaný obsah JavaScriptem. Pro zajištění správné funkčnosti jsou JS nadefinované v header.coffee a headerMenu.coffee
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				$type1 = true;
				include 'part/headers/type1.php';
				$type1 = false;
			?>
		</div>
	</div>

<?php
	include 'part/footer.php';
?>

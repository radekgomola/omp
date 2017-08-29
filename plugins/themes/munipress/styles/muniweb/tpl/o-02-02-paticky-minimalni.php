<?php
	$title = 'Patičky - minimalizované';
	$hideHeader = true;
	$hideFooter = true;
	include 'part/header.php';
?>

	<br /><br />

	<div class="sk-annot--main">
		<h1>
			<strong>02.01</strong>
			Patičky - minimalizované
		</h1>
		<p>
			<strong>Zdrojové CSS:</strong> /src/css/organism/_footer-light.scss
		</p>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Minimalizovaná patička</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Výchozí organismus s minimalizovanou patičkou. Slouží pro něj div.footer-light
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				include 'part/footers/type2.php';
			?>
		</div>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Minimalizovaná patička - tmavá verze</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Tento organismus vychází z defaultního organismu. Navíc je na .footer-light přidán modifikátor footer-light--dark, který obarví patičku do černé barvy.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				$footerLightDark = true;
				include 'part/footers/type2.php';
			?>
		</div>
	</div>

<?php
	include 'part/footer.php';
?>

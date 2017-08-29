<?php
	$title = 'Hlavičky - minimální';
	$hideHeader = true;
	$hideFooter = true;
	include 'part/header.php';
?>

	<br /><br />

	<div class="sk-annot--main">
		<h1>
			<strong>01.03</strong>
			Hlavičky - minimální
		</h1>
		<p>
			<strong>Zdrojové CSS:</strong> /src/css/organism/_header-min.scss
		</p>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Defaultní</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Výchozí organismus s minimalizovanou hlavičkou. Slouží pro něj div.header-min a je určen pro spřízněné weby nad hlavičku.
				</p>
				<p>
					Každá barevná varianta je připravena ve dvou provedení. Jednou se zarovnáním obsahu na střed containeru a jedna od kraje ke kraji. Pro naši ukázku byl mezi tyto ukázky umístěn element br pro odsazení.
				</p>
				<p>
					Pro ušetření requestů je logo řešeno pomocí inline svg.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				include 'part/headers/type2.php';
			?>
			<br />
			<?php
				$headerMinFull = true;
				include 'part/headers/type2.php';
				$headerMinFull = false;
			?>
		</div>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Inverzní</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Tento organismus vychází z defaultního organismu. Navíc je na .header-min přidán modifikátor header-min--inverse, který obarví hlavičku do bílé barvy.
				</p>
				<p>
					Pro nasimulování byla tato hlavička obalena do <a href="m-02-06-s-pozadim.html">molekuly s pozadím</a>.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<div class="box-bg box-bg--primary box-bg--full">
				<?php
					$headerMinInverse = true;
					include 'part/headers/type2.php';
					$headerMinInverse = false;
				?>
				<br />
				<?php
					$headerMinInverse = true;
					$headerMinFull = true;
					include 'part/headers/type2.php';
					$headerMinInverse = false;
					$headerMinFull = false;
				?>
			</div>
		</div>
	</div>

	<div class="sk-example">
		<div class="row-main">
			<div class="sk-annot">
				<h2 class="sk-annot__title">Tmavá</h2>
			</div>
			<div class="sk-example__comment">
				<p>
					Tento organismus vychází z defaultního organismu. Navíc je na .header-min přidán modifikátor header-min--dark, který obarví hlavičku do černé barvy.
				</p>
				<p>
					Pro nasimulování byla tato hlavička obalena do <a href="m-02-06-s-pozadim.html">molekuly s pozadím</a>.
				</p>
			</div>
		</div>
		<div class="sk-example__content u-mb-50">
			<?php
				$headerMinDark = true;
				include 'part/headers/type2.php';
				$headerMinDark = false;
			?>
			<br />
			<?php
				$headerMinDark = true;
				$headerMinFull = true;
				include 'part/headers/type2.php';
				$headerMinDark = false;
				$headerMinFull = false;
			?>
		</div>
	</div>

<?php
	include 'part/footer.php';
?>

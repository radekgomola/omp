<?php
	$title = 'Mapy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.10</strong>
						Boxy - Mapy
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_map.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro mapy s placeholderem, který informuje o načítání mapy. Samotnou mapu vkládejte do elementu .box-map__map, který překryje .box-map__placeholder.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-map">
							<div class="box-map__placeholder">
								<div class="box-map__inner">
									<p class="box-map__icon"><span class="icon icon-map-o"></span></p>
									<p class="box-map__text">Načítám mapu&hellip;</p>
								</div>
							</div>
							<div class="box-map__map"></div>
						</div>
					</div>
				</div>

			</div>
		</div>

<?php
	include 'part/footer.php';
?>

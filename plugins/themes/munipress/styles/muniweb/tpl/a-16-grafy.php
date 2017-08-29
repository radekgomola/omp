<?php
	$title = 'Grafy';
	$hasGraphs = true;
	include 'part/header.php';
?>


		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>16</strong>
						Grafy
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong>
						../src/css/molecules/box/_graph.scss<br />
						<strong>Zdrojové JS:</strong><br />
						../js/d3.js<br />
						../js/nv.d3.js<br />
						../js/graphs.js
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sloupcový graf (horizontální a vertikální)</h2>
					</div>
					<div class="sk-example__comment">
						<p>Pro grafy se využívá plugin <a href="https://d3js.org/">D3</a>, který byl vybrán ze strany MUNI.</p>
						<p>V našem případě scripty linkujeme pouze na této stránce v patičce. Soubor graphs.js je inicializace pluginu (document ready).</p>
						<p>Tomto první případě jsou grafy poskládané do <a href="a-02-grid.html">gridu</a>.</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--6-12">
								<div class="box-graph">
									<svg class="box-graph__svg" id="graph-1"></svg>
								</div>
							</div>

							<div class="grid__cell size--l--6-12">
								<div class="box-graph">
									<svg class="box-graph__svg" id="graph-2"></svg>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sloupcový graf (skupiny)</h2>
					</div>
					<div class="sk-example__comment">
						<p>Viz první komentář sloupcového grafu.</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-graph">
							<svg class="box-graph__svg" id="graph-3"></svg>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Spojnicový graf</h2>
					</div>
					<div class="sk-example__comment">
						<p>Viz první komentář sloupcového grafu.</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-graph">
							<svg class="box-graph__svg" id="graph-4"></svg>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Koláčový graf</h2>
					</div>
					<div class="sk-example__comment">
						<p>Viz první komentář sloupcového grafu.</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--6-12">
								<div class="box-graph">
									<svg class="box-graph__svg" id="graph-6"></svg>
								</div>
							</div>

							<div class="grid__cell size--l--6-12">
								<div class="box-graph box-graph--donut">
									<svg class="box-graph__svg" id="graph-7"></svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

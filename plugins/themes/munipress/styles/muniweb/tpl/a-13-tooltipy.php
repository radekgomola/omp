<?php
	$title = 'Tooltipy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>13</strong>
						Tooltipy
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/atoms/_tooltip.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/_tooltip.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							K zobrazení tooltipu se využívá plugin <a href="http://tipso.object505.com/">Tipso</a>. Vložením classy .tooltip na jakýkoliv element se na hoveru / touch eventu zobrazí bublina. V našem případě se obsah bubliny natahuje z atributu title, ale lze načítat ajaxový požadavek či obsah jiného elementu.
						</p>
						<p>
							Pro zvýraznění odkazu slouží atom tooltip-link, který pouze zvýrazní klíčové slovo. Pokud bychom chtěli mít aktivní i tento odkaz, pak přesuňte classu tooltip na .tooltip-link
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							Etiam at urna sollicitudin, suscipit libero at, tellus. <a href="#" class="tooltip-link">Pellentesque sodales <span class="icon icon-question-circle tooltip" title="Maecenas venenatis ac vulputate malesuada orci est consectetuer."></span></a>, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor.
						</p>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

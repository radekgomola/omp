<?php
	$title = 'Drobečková navigace';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03.03</strong>
						Menu - Drobečková navigace
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/menu/_breadcrumb.scss
					</p>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s drobečkovou navigaci. Pro tuto molekulu slouží div.menu-breadcrumb
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<?php
						include 'part/molecules/menu-breadcrumb.php';
					?>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

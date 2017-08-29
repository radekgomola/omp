<?php
	$title = 'Tagy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>11</strong>
						Tagy
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/atoms/_tag.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro zobrazení tagů slouží atom .tag
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<span class="tag">255</span>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Barevné varianty</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná pravidla jako u defaultního. Pouze se na .tag přidá modifikátor tag--* (zkratka fakulty). V našem případě jsme pro pěkné naformátování umístili tagy do atomu <a href="a-02-grid.html">gridu</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--auto">
								<span class="tag tag--muni">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--law">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--med">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--sci">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--fi">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--fss">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--fsps">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--phil">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--ped">
									255
								</span>
							</div>
							<div class="grid__cell size--auto">
								<span class="tag tag--econ">
									255
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

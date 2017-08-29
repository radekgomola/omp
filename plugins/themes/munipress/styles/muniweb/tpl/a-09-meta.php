<?php
	$title = 'Meta informace';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>09</strong>
						Meta informace
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/atoms/_meta.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Defaultní atom pro meta informace - p.meta se subitemy .meta__item, které zobrazí mezi položkami čáru. Atom slouží např. pro zobrazení data a autora u článku apod.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="meta">
							<span class="meta__item">19. 6. 2016</span>
							<a href="#" class="meta__item">Jméno autora</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bloková</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázka je tvořená v atomu <a href="a-02-grid.html">gridu</a>. Na element .meta se přidává modifikátor .meta--block, který odstraní čáry mezi vnitřními elementy .meta__item a začne je zalamovat na samostatný řádek.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--6-12">
								<p class="meta meta--block">
									<strong class="meta__item">od 9:00 do 10:00</strong>
									<span class="meta__item">pro Studenti FF</span>
									<a href="#" class="meta__item">Fakulta FF</a>
								</p>
							</div>
							<div class="grid__cell size--l--6-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim quam, natus ut nemo quia reiciendis magnam, doloribus odio temporibus veritatis laboriosam accusamus minus doloremque a quibusdam, eum asperiores repellendus. Quae!</p>
								<p class="meta meta--block">
									<strong class="meta__item">od 9:00 do 10:00</strong>
									<span class="meta__item">pro Studenti FF</span>
									<a href="#" class="meta__item">Fakulta FF</a>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Inline</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Na element .meta se přidává modifikátor .meta--inline, který pouze odstraní čáry mezi vnitřními elementy .meta__item
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="meta meta--inline">
							<strong class="meta__item">od 9:00 do 10:00</strong>
							<span class="meta__item">pro Studenti FF</span>
							<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
						</p>
					</div>
				</div>


			</div>
		</div>

<?php
	include 'part/footer.php';
?>

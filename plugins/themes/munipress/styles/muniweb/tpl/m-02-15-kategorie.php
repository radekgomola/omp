<?php
	$title = 'Kategorie';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.15</strong>
						Boxy – Kategorie
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_category.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro box s nadpisem a buttonem. Slouží hlavně pro výpis kategorií, která je vložena do <a href="./m-04-01-obecny.html">rozcestníku</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<a href="#" class="box-category">
							<h2 class="box-category__title">Doktorské studium</h2>
							<p>
								<span class="btn btn-s btn-white btn-border">
									<span>Čtěte dál</span>
								</span>
							</p>
						</a>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Alternativní barva</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro obarvení je potřeba přidat box-category--white na .box-category a upravit classy na tlačítku.
						</p>
					</div>
					<div class="sk-example__content">
						<a href="#" class="box-category box-category--white">
							<h2 class="box-category__title">Doktorské studium</h2>
							<p>
								<span class="btn btn-s btn-primary btn-border">
									<span>Čtěte dál</span>
								</span>
							</p>
						</a>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Primární barva webu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro obarvení je potřeba přidat box-category--primary na .box-category a upravit classy na tlačítku.
						</p>
					</div>
					<div class="sk-example__content">
						<a href="#" class="box-category box-category--primary">
							<h2 class="box-category__title">Doktorské studium</h2>
							<p>
								<span class="btn btn-s btn-white btn-border">
									<span>Čtěte dál</span>
								</span>
							</p>
						</a>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bez obrázku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro odstranění obrázků je potřeba přidat box-category--no-img na .box-category.
						</p>
					</div>
					<div class="sk-example__content">
						<a href="#" class="box-category box-category--white box-category--no-img">
							<h2 class="box-category__title">Doktorské studium</h2>
							<p>
								<span class="btn btn-s btn-primary btn-border">
									<span>Čtěte dál</span>
								</span>
							</p>
						</a>
						<a href="#" class="box-category box-category--no-img">
							<h2 class="box-category__title">Doktorské studium</h2>
							<p>
								<span class="btn btn-s btn-white btn-border">
									<span>Čtěte dál</span>
								</span>
							</p>
						</a>
						<a href="#" class="box-category box-category--primary box-category--no-img">
							<h2 class="box-category__title">Doktorské studium</h2>
							<p>
								<span class="btn btn-s btn-white btn-border">
									<span>Čtěte dál</span>
								</span>
							</p>
						</a>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka použití ve výpise</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní molekuly v kombinaci s molekulou <a href="./m-04-01-obecny.html">rozcestníku</a>. Slouží k výpisu více kategorií za sebou.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--m--2-4 size--l--4-12">
									<a href="#" class="box-category">
										<h2 class="box-category__title">Doktorské studium</h2>
										<p>
											<span class="btn btn-s btn-white btn-border">
												<span>Čtěte dál</span>
											</span>
										</p>
									</a>
								</li>
								<li class="grid__cell size--m--2-4 size--l--4-12">
									<a href="#" class="box-category box-category--white">
										<h2 class="box-category__title">Doktorské studium</h2>
										<p>
											<span class="btn btn-s btn-primary btn-border">
												<span>Čtěte dál</span>
											</span>
										</p>
									</a>
								</li>
								<li class="grid__cell size--m--2-4 size--l--4-12">
									<a href="#" class="box-category box-category--primary">
										<h2 class="box-category__title">Doktorské studium</h2>
										<p>
											<span class="btn btn-s btn-white btn-border">
												<span>Čtěte dál</span>
											</span>
										</p>
									</a>
								</li>
								<li class="grid__cell size--m--2-4">
									<a href="#" class="box-category box-category--white">
										<h2 class="box-category__title">Doktorské studium</h2>
										<p>
											<span class="btn btn-s btn-primary btn-border">
												<span>Čtěte dál</span>
											</span>
										</p>
									</a>
								</li>
								<li class="grid__cell size--m--2-4">
									<a href="#" class="box-category">
										<h2 class="box-category__title">Doktorské studium</h2>
										<p>
											<span class="btn btn-s btn-white btn-border">
												<span>Čtěte dál</span>
											</span>
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

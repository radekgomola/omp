<?php
	$title = 'Hero header';
	// $hasHero = true;
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta výhradně pro zobrazení úvodních informací hned pod hlavičkou nebo jako sekce na plnou výšku obrazovky.
						</p>
						<p>
							Na hlavičku .header se musí přidat modifikátor .header--hero, když podsune tuto molekulu pod hlavičku.
						</p>
						<p>
							V této komponentě je využit atom <a href="a-04-tlacitka.html">tlačítka</a>.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Máme pro vás nejširší nabídku oborů</h1>
									<p>
										<a href="#" class="btn btn-primary">
											<span>Mám zájem</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S bílým textem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní komponenty. Navíc jsou pro obarvení textu použity modifikační classy z <a href="a-00-framework.html">SK mini frameworku</a>.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1 class="white">Máme pro vás nejširší nabídku oborů</h1>
									<p>
										<a href="#" class="btn btn-primary">
											<span>Mám zájem</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S pozadím pro text</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní komponenty. Navíc pro obarvení pozadí za obsahem je přidán modifikátor box-hero-header__content--bg na box-hero-header__content.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content box-hero-header__content--bg">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Kdo jsme?</h1>
									<p>
										Věříme, že vzdělávání není jen otázkou věku nebo sociálního postavení. Aktivně podporujeme výzkum. Máme otevřené oči a ovlivňujeme život kolem nás.
									</p>
									<p>
										<strong>Od roku 1919 vytváříme podmínky pro chytřejší svět.</strong>
									</p>
									<p class="btn-wrap">
										<a href="#" class="btn btn-white">
											<span>Projděte se naší historií</span>
										</a>
										<a href="#" class="btn btn-primary">
											<span>Podívejte se, co chystáme</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S pozadím pro text</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní komponenty. Navíc pro obarvení pozadí na bílou barvu jsou přidány modifikátory box-hero-header__content--bg a  box-hero-header__content--bg--white na box-hero-header__content.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content box-hero-header__content--bg box-hero-header__content--bg--white">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Kdo jsme?</h1>
									<p>
										Věříme, že vzdělávání není jen otázkou věku nebo sociálního postavení. Aktivně podporujeme výzkum. Máme otevřené oči a ovlivňujeme život kolem nás.
									</p>
									<p>
										<strong>Od roku 1919 vytváříme podmínky pro chytřejší svět.</strong>
									</p>
									<p class="btn-wrap">
										<a href="#" class="btn btn-white">
											<span>Projděte se naší historií</span>
										</a>
										<a href="#" class="btn btn-primary">
											<span>Podívejte se, co chystáme</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Plná výška obrazovky</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní komponenty. Pro zobrazení obrázku na celou výšku obrazovky je potřeba přidat na box-hero-header modifikátor box-hero-header--full.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header box-hero-header--full">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content box-hero-header__content--bg box-hero-header__content--bg--white">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Kdo jsme?</h1>
									<p>
										Věříme, že vzdělávání není jen otázkou věku nebo sociálního postavení. Aktivně podporujeme výzkum. Máme otevřené oči a ovlivňujeme život kolem nás.
									</p>
									<p>
										<strong>Od roku 1919 vytváříme podmínky pro chytřejší svět.</strong>
									</p>
									<p class="btn-wrap">
										<a href="#" class="btn btn-white">
											<span>Projděte se naší historií</span>
										</a>
										<a href="#" class="btn btn-primary">
											<span>Podívejte se, co chystáme</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Plná výška obrazovky - obsah zarovnaný doprava</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z komponenty na celou výšku obrazovky. Pro zobrazení obsahu napravo je potřeba přidat na box-hero-header__content modifikátor box-hero-header__content--right.
						</p>
						<p>
							<strong>Toto zarovnání lze použít i na komponentu, která není na celou výšku obrazovky</strong>
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header box-hero-header--full">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content box-hero-header__content--right box-hero-header__content--bg box-hero-header__content--bg--white">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Kdo jsme?</h1>
									<p>
										Věříme, že vzdělávání není jen otázkou věku nebo sociálního postavení. Aktivně podporujeme výzkum. Máme otevřené oči a ovlivňujeme život kolem nás.
									</p>
									<p>
										<strong>Od roku 1919 vytváříme podmínky pro chytřejší svět.</strong>
									</p>
									<p class="btn-wrap">
										<a href="#" class="btn btn-white">
											<span>Projděte se naší historií</span>
										</a>
										<a href="#" class="btn btn-primary">
											<span>Podívejte se, co chystáme</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Plná výška obrazovky - obsah zarovnaný dolů</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z komponenty na celou výšku obrazovky. Pro zobrazení obsahu napravo je potřeba přidat na box-hero-header__content modifikátor box-hero-header__content--bottom.
						</p>
						<p>
							<strong>Toto zarovnání lze použít pouze na komponentu, která je na celou výšku obrazovky</strong>
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header box-hero-header--full">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content box-hero-header__content--bottom box-hero-header__content--bg box-hero-header__content--bg--white">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Kdo jsme?</h1>
									<p>
										Věříme, že vzdělávání není jen otázkou věku nebo sociálního postavení. Aktivně podporujeme výzkum. Máme otevřené oči a ovlivňujeme život kolem nás.
									</p>
									<p>
										<strong>Od roku 1919 vytváříme podmínky pro chytřejší svět.</strong>
									</p>
									<p class="btn-wrap">
										<a href="#" class="btn btn-white">
											<span>Projděte se naší historií</span>
										</a>
										<a href="#" class="btn btn-primary">
											<span>Podívejte se, co chystáme</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Plná výška obrazovky - obsah zarovnaný dolů a doprava</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Kombinace dvou předchozích příkladů.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-hero-header box-hero-header--full">
						<div class="box-hero-header__img" style="background-image: url('../img/illust/hero-header.jpg');"></div>
						<div class="box-hero-header__content box-hero-header__content--bottom box-hero-header__content--right box-hero-header__content--bg box-hero-header__content--bg--white">
							<div class="row-main">
								<div class="box-hero-header__content-inner">
									<h1>Kdo jsme?</h1>
									<p>
										Věříme, že vzdělávání není jen otázkou věku nebo sociálního postavení. Aktivně podporujeme výzkum. Máme otevřené oči a ovlivňujeme život kolem nás.
									</p>
									<p>
										<strong>Od roku 1919 vytváříme podmínky pro chytřejší svět.</strong>
									</p>
									<p class="btn-wrap">
										<a href="#" class="btn btn-white">
											<span>Projděte se naší historií</span>
										</a>
										<a href="#" class="btn btn-primary">
											<span>Podívejte se, co chystáme</span>
										</a>
									</p>
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

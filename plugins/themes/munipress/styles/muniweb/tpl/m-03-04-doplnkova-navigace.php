<?php
	$title = 'Doplňková navigace';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03.04</strong>
						Menu - Doplňková navigace
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong><br />
						/src/css/molecules/menu/_inside.scss<br />
						/src/css/molecules/menu/_content.scss<br />
						<strong>Zdrojové JS:</strong><br />
						/src/js/components/scrollNav.coffee<br />
						/src/js/components/links.coffee
					</p>
				</div>

				<div id="target-1" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s menu pro obsah. Toto menu je určené k zobrazení uvnitř .main. Pro tuto molekulu slouží div.menu-inside.
						</p>
						<p>
							Pokud chceme, aby se nám položky při větším počtu ořezávaly a zobrazily se šipky k doscrollování na ně, pak se na .menu-inside__list vloží modifikátor js-scroll-nav. Na tuto class je nabindovaný JavaScript, který se stará o obsluhu skrytých položek.
						</p>
						<p>
							Na odkazy je v tomto případě nasimulován i JavaScript, který po kliku na tento odkaz zascrolluje na id atribut s atributu href.
						</p>
						<p>
							Aktivní položka se vytvoří přidáním modifikátoru is-inside na menu-secondary__link.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-inside" role="navigation">
							<div class="menu-inside__wrap">
								<ul class="menu-inside__list js-scroll-nav">
									<li class="menu-inside__item">
										<a href="#target-1" class="menu-inside__link link-slide">Co se naučíte</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-2" class="menu-inside__link link-slide">Profil absolventa</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-3" class="menu-inside__link link-slide">Kombinace oborů</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-4" class="menu-inside__link link-slide">Přijímací zkouška</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-5" class="menu-inside__link link-slide">Důležité termíny</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-6" class="menu-inside__link">Předmety</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div id="target-2" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní s buttonem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tato komponenta vychází z defaultní komponenty, jen je straně použít button. Lze vytvořit vložením modifikátoru with-side na .menu-inside a přidámím obsahu s .menu-inside__side.
						</p>
						<p>
							V této komponentě na využit atom <a href="a-04-tlacitka.html">tlačítka</a>. Namísto buttonu můžeme také použít např. element select.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-inside with-side" role="navigation">
							<div class="menu-inside__wrap">
								<ul class="menu-inside__list js-scroll-nav">
									<li class="menu-inside__item">
										<a href="#target-1" class="menu-inside__link link-slide">Co se naučíte</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-2" class="menu-inside__link link-slide">Profil absolventa</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-3" class="menu-inside__link link-slide">Kombinace oborů</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-4" class="menu-inside__link link-slide">Přijímací zkouška</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-5" class="menu-inside__link link-slide">Důležité termíny</a>
									</li>
									<li class="menu-inside__item">
										<a href="#target-6" class="menu-inside__link">Předmety</a>
									</li>
								</ul>
							</div>
							<div class="menu-inside__side">
								<a href="#" class="btn btn-s btn-primary">
									<span>Podejte přihlášku</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div id="target-3" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní se zarovnání vpravo</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tato komponenta vychází z předchozí komponenty (Defaltní s buttonem). Lze vytvořit vložením modifikátoru menu-inside--right na .menu-inside. Není potřeba využívat button (bez buttonu je potřeba odtranit modifikátor with-side a element s buttonem)
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-inside menu-inside--right with-side" role="navigation">
							<div class="menu-inside__wrap">
								<ul class="menu-inside__list js-scroll-nav">
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 1</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 2</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link is-active">Menu item 3</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link with-icon">
											<span class="icon icon-calendar-o"></span>
											Menu item 4
										</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 5</a>
									</li>
								</ul>
							</div>
							<div class="menu-inside__side">
								<a href="#" class="btn btn-s btn-primary">
									<span>Button</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div id="target-4" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní se zarovnání doprostřed</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tato komponenta vychází z předchozí komponenty (Defaultní s buttonem). Lze vytvořit vložením modifikátoru menu-inside--center na .menu-inside. Není potřeba využívat button (bez buttonu je potřeba odstranit modifikátor with-side a element s buttonem)
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-inside menu-inside--center" role="navigation">
							<div class="menu-inside__wrap">
								<ul class="menu-inside__list js-scroll-nav">
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 1</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 2</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link is-active">Menu item 3</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link with-icon">
											<span class="icon icon-calendar-o"></span>
											Menu item 4
										</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 5</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div id="target-5" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní se zarovnání doprostřed</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tato komponenta vychází z defaultní komponenty. Lze vytvořit vložením modifikátoru menu-inside--light na .menu-inside.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-inside menu-inside--light" role="navigation">
							<div class="menu-inside__wrap">
								<ul class="menu-inside__list js-scroll-nav">
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 1</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 2</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link is-active">Menu item 3</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 4</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Menu item 5</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div id="target-6" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Typ 2</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Další typ jak vypsat menu pro obsah. Toto menu je určené k zobrazení uvnitř .main. Pro tuto molekulu slouží div.menu-content.
						</p>
						<p>
							Pokud chceme, aby se nám položky při větším počtu ořezávaly a zobrazily se šipky k doscrollování na ně, pak se na .menu-inside__list vloží modifikátor js-scroll-nav. Na tuto class je nabindovaný JavaScript, který se stará o obsluhu skrytých položek.
						</p>
						<p>
							Na odkazy je v tomto případě nasimulován i JavaScript, který po kliku na tento odkaz zascrolluje na id atribut s atributu href.
						</p>
						<p>
							Aktivní položka se vytvoří přidáním modifikátoru is-active na menu-content__link.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-content">
							<div class="menu-content__wrap" role="navigation">
								<ul class="menu-content__list js-scroll-nav">
									<li class="menu-content__item">
										<a href="#target-1" class="menu-content__link link-slide">Menu item 1</a>
									</li>
									<li class="menu-content__item">
										<a href="#target-2" class="menu-content__link link-slide">Menu item 2</a>
									</li>
									<li class="menu-content__item">
										<a href="#target-3" class="menu-content__link link-slide is-active">Menu item 3</a>
									</li>
									<li class="menu-content__item">
										<a href="#target-4" class="menu-content__link link-slide with-icon">
											<span class="icon icon-calendar-o"></span>
											Menu item 4
										</a>
									</li>
									<li class="menu-content__item">
										<a href="#target-5" class="menu-content__link link-slide">Menu item 5</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Typ 3</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Toto menu kompletně vychází z molekuly <a href="m-04-02-jednoduche.html">jednoduchého rozcestníku</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-links crossroad-links--type-3 crossroad-links--size--auto" role="navigation">
							<ul class="crossroad-links__list">
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">IS MU</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Studijní oddělení</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Harmonogram</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">E-learning</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Knihovna</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Menu item 6</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Typ 3 - s pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Toto menu kompletně vychází z molekuly <a href="m-04-02-jednoduche.html">jednoduchého rozcestníku</a>. Navíc je na crossroad-links přidán modifikátor crossroad-links--background, který změní pozadí dle primární barvy.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-links crossroad-links--background crossroad-links--size--auto" role="navigation">
							<ul class="crossroad-links__list">
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">IS MU</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Studijní oddělení</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Harmonogram</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">E-learning</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Knihovna</a>
								</li>
								<li class="crossroad-links__item">
									<a href="#" class="crossroad-links__link">Menu item 6</a>
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

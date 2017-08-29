<?php
	$title = 'Postranní menu';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03.01</strong>
						Menu - Postranní menu
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/menu/_side.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/menuSide.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro menu umístěné někde v postranním sloupci. Slouží hlavně pro výpis podkategorií z hlavního menu.
						</p>
						<p>
							V menu je připraveno rozklikávání, které je obsluhováno JavaScriptem. Klikem na .menu-side__toggle se toggluje class is-open na obalujícím .menu-side__item.with-subitem a tím se rozbalují subpoložky. Pokud chceme mít některou položku rozevřenou při otevření, pak musíme tyto classy ručně přidat – ukázka na příkladu u položky Menu item 3
						</p>
						<p>
							Položky také vůbec nemusí rozklikávat a lze použít standardní vypsání. Pro toto stačí odstranit všechny classy .with-subitem a všechny elementy .menu-side__toggle.
						</p>
						<p>
							Aktivní položka se vytvoří přidáním modifikátoru is-active na menu-side__link.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-side" role="navigation">
							<ul class="menu-side__list menu-side__list--depth1">
								<li class="menu-side__item with-subitems">
									<a href="#" class="menu-side__link is-active">
										Menu item 1
										<span class="menu-side__toggle icon icon-angle-down"></span>
									</a>

									<ul class="menu-side__list menu-side__list--depth2">
										<li class="menu-side__item">
											<a href="#" class="menu-side__link">Submenu item 1</a>
										</li>
										<li class="menu-side__item with-subitems">
											<a href="#" class="menu-side__link is-active">
												Submenu item 2
												<span class="menu-side__toggle icon icon-angle-down"></span>
											</a>

											<ul class="menu-side__list menu-side__list--depth3">
												<li class="menu-side__item">
													<a href="#" class="menu-side__link">Submenu item 1</a>
												</li>
												<li class="menu-side__item with-subitems">
													<a href="#" class="menu-side__link is-active">
														Submenu item 2
														<span class="menu-side__toggle icon icon-angle-down"></span>
													</a>

													<ul class="menu-side__list menu-side__list--depth4">
														<li class="menu-side__item">
															<a href="#" class="menu-side__link">Submenu item 1</a>
														</li>
														<li class="menu-side__item">
															<a href="#" class="menu-side__link is-active">Submenu item 2</a>
														</li>
														<li class="menu-side__item">
															<a href="#" class="menu-side__link">Submenu item 3</a>
														</li>
													</ul>

												</li>
												<li class="menu-side__item">
													<a href="#" class="menu-side__link">Submenu item 3</a>
												</li>
											</ul>

										</li>
										<li class="menu-side__item">
											<a href="#" class="menu-side__link">Submenu item 3</a>
										</li>
									</ul>

								</li>
								<li class="menu-side__item">
									<a href="#" class="menu-side__link">Menu item 2</a>
								</li>
								<li class="menu-side__item with-subitems is-open">
									<a href="#" class="menu-side__link">
										Menu item 3
										<span class="menu-side__toggle icon icon-angle-down"></span>
									</a>

									<ul class="menu-side__list menu-side__list--depth2">
										<li class="menu-side__item">
											<a href="#" class="menu-side__link">Submenu item 1</a>
										</li>
										<li class="menu-side__item with-subitems is-open">
											<a href="#" class="menu-side__link is-active">
												Submenu item 2
												<span class="menu-side__toggle icon icon-angle-down"></span>
											</a>

											<ul class="menu-side__list menu-side__list--depth3">
												<li class="menu-side__item">
													<a href="#" class="menu-side__link">Submenu item 1</a>
												</li>
												<li class="menu-side__item with-subitems is-open">
													<a href="#" class="menu-side__link is-active">
														Submenu item 2
														<span class="menu-side__toggle icon icon-angle-down"></span>
													</a>

													<ul class="menu-side__list menu-side__list--depth4">
														<li class="menu-side__item">
															<a href="#" class="menu-side__link">Submenu item 1</a>
														</li>
														<li class="menu-side__item">
															<a href="#" class="menu-side__link is-active">Submenu item 2</a>
														</li>
														<li class="menu-side__item">
															<a href="#" class="menu-side__link">Submenu item 3</a>
														</li>
													</ul>

												</li>
												<li class="menu-side__item">
													<a href="#" class="menu-side__link">Submenu item 3</a>
												</li>
											</ul>

										</li>
										<li class="menu-side__item">
											<a href="#" class="menu-side__link">Submenu item 3</a>
										</li>
									</ul>
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

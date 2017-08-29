<?php
	$title = 'Horizontální navigace';
	$menuSecondary = true;
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03.02</strong>
						Menu - Horizontální navigace
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/menu/_secondary.scss<br />
						<strong>Zdrojové JS:</strong><br />
						/src/js/components/scrollNav.coffee<br />
						/src/js/components/secondarySubmenu.coffee
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
							Výchozí molekula se sekundární navigaci. Pro tuto molekulu slouží div.menu-secondary.
						</p>
						<p>
							Aktivní položka se vytvoří přidáním modifikátoru is-active na menu-secondary__link.
						</p>
						<p>
							Pokud chceme, aby se nám položky při větším počtu ořezávaly a zobrazily se šipky k doscrollování na ně, pak se na .menu-secondary__list vloží modifikátor js-scroll-nav. Na tuto class je nabindovaný JavaScript, který se stará o obsluhu skrytých položek.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="menu-secondary" role="navigation">
						<div class="row-main">
							<div class="menu-secondary__wrap">
								<ul class="menu-secondary__list js-scroll-nav">
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 1</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 2</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link is-active">Menu item 3</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 4</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 5</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 6</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 7</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 8</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 9</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní s ikonkami</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní komponenty. Pouze je ukázka menu s ikonkami. Na .menu-secondary__link se přidá modifikátor with-icon a dovnitř libovolná <a href="a-05-ikonky.html">ikonka</a>.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="menu-secondary" role="navigation">
						<div class="row-main">
							<div class="menu-secondary__wrap">
								<ul class="menu-secondary__list js-scroll-nav">
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link with-icon">
											<span class="icon icon-home"></span>
											Menu item 1
										</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link is-active with-icon">
											<span class="icon icon-calendar-o"></span>
											Menu item 2
										</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link with-icon">
											<span class="icon icon-comment"></span>
											Menu item 3
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní zarovnaná doprava</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní komponenty. Na .menu-secondary se přidá modifikátor menu-secondary--right.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="menu-secondary menu-secondary--right" role="navigation">
						<div class="row-main">
							<div class="menu-secondary__wrap">
								<ul class="menu-secondary__list js-scroll-nav">
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 1</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 2</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link is-active">Menu item 3</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní zarovnaná doprostřed</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní komponenty. Na .menu-secondary se přidá modifikátor menu-secondary--center.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="menu-secondary menu-secondary--center" role="navigation">
						<div class="row-main">
							<div class="menu-secondary__wrap">
								<ul class="menu-secondary__list js-scroll-nav">
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 1</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 2</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link is-active">Menu item 3</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S dropdown submenu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní komponenty a obsahuje navíc menu se subpoložkami. Kvůli ořezávání obsahu při větším počtu bylo potřeba přidat javascriptový helper, který vytáhne submenu z tohoto obalu a napozicuje submenu podle offsetů. K tomuto složí JavaScript secondarySubmenu.coffee
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="menu-secondary" role="navigation">
						<div class="row-main">
							<div class="menu-secondary__wrap">
								<ul class="menu-secondary__list js-scroll-nav">
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 1</a>
										<div class="menu-secondary__submenu">
											<ul class="menu-secondary__submenu__list">
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 11</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 12</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 13</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 14</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 15</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 2</a>
										<div class="menu-secondary__submenu">
											<ul class="menu-secondary__submenu__list">
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 21</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 22</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 23</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 24</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 25</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 3</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 4</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 5</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 6</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S dropdown submenu (široké)</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejné jako předchozí. Jen s modifikátorem .menu-secondary__submenu--wide na .menu-secondary__submenu pro nastavení větší šířky submenu. Obdobný "--wide" modifikátor funguje i na submenu v hlavním menu v hlavičce.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="menu-secondary" role="navigation">
						<div class="row-main">
							<div class="menu-secondary__wrap">
								<ul class="menu-secondary__list js-scroll-nav">
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 1</a>
										<div class="menu-secondary__submenu menu-secondary__submenu--wide">
											<ul class="menu-secondary__submenu__list">
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 11</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 12</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 13</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 14</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 15</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 2</a>
										<div class="menu-secondary__submenu menu-secondary__submenu--wide">
											<ul class="menu-secondary__submenu__list">
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 21</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 22</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link is-active">Submenu item 23</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 24</a>
												</li>
												<li class="menu-secondary__submenu__item">
													<a href="#" class="menu-secondary__submenu__link">Submenu item 25</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 3</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 4</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 5</a>
									</li>
									<li class="menu-secondary__item">
										<a href="#" class="menu-secondary__link">Menu item 6</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

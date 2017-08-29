<?php if ($fixedHeader): ?>
	<div class="header-fixed-wrap">
<?php endif; ?>
<header class="header<?php if ($type5): ?> header--nav-under<?php endif; ?><?php if ($hasHero): ?> header--hero<?php endif; ?>">
	<div class="row-main">

		<?php if ($title == 'Úvodní stránka'): ?>
			<h1 class="header__logo" role="banner">
		<?php else: ?>
			<p class="header__logo" role="banner">
		<?php endif; ?>
			<a href="#">
				<?php if ($faculty == 'phil') : ?>
					<?php include 'logo-phil.php' ?>
				<?php else : ?>
					<?php include 'logo.php' ?>
				<?php endif; ?>

			</a>
		<?php if ($title == 'Úvodní stránka'): ?>
			</h1>
		<?php else: ?>
			</p>
		<?php endif; ?>

		<div class="header__lang" role="navigation">
			<p class="header__lang__selected">
				<a href="#" class="header__lang__selected__link">
					English
				</a>
			</p>
		</div>

		<form id="form-search" action="?" class="header__search" role="search">
			<fieldset>
				<p>
					<label for="search" class="header__search__label icon icon-search"><span class="vhide">Vyhledávání</span></label>
					<span class="inp-fix inp-icon inp-icon--after">
						<input type="text" name="search" id="search" class="inp-text" placeholder="Hledat v obsahu a v lidech" />
						<button type="submit" class="btn-icon icon icon-search">
							<span class="vhide">Vyhledat</span>
						</button>
					</span>
				</p>
			</fieldset>
		</form>

		<nav id="menu-main" class="header__menu" role="navigation">
			<div class="header__menu-main">
				<?php if ($type2 !== true && $type3 !== true): ?>
					<ul class="header__menu__primary">
						<li class="header__menu__primary__item with-submenu">
							<span class="header__menu__primary__links">
								<a href="#" class="header__menu__primary__link is-active">
									Uchazeči
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
							</span>
							<div class="header__menu__submenu">
								<ul class="header__menu__submenu__list">
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 1</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 2</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link is-active">Submenu item 3</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 4</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 5</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 6</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header__menu__primary__item with-submenu header__menu__primary__item--dark">
							<span class="header__menu__primary__links">
								<a href="#" class="header__menu__primary__link is-active">
									Uchazeči 2
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
							</span>
							<div class="header__menu__submenu">
								<ul class="header__menu__submenu__list">
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 1</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 2</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link is-active">Submenu item 3</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 4</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 5</a>
									</li>
									<li class="header__menu__submenu__item">
										<a href="#" class="header__menu__submenu__link">Submenu item 6</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="header__menu__primary__item with-subbox header__menu__primary__item--dark">
							<span class="header__menu__primary__links">
								<a href="#" class="header__menu__primary__link">
									Výzkum 2
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
							</span>
							<div class="header__menu__subbox">
								<a href="#" class="header__menu__subbox__close icon icon-chevron-left" aria-hidden="true"></a>
								<div class="grid grid--center">
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											Item group
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											<a href="#" class="header__menu__subbox__title__link">Item group</a>
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											<a href="#" class="header__menu__subbox__title__link">Item group</a>
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>


						<li class="header__menu__primary__item with-subbox header__menu__primary__item--dark">
							<span class="header__menu__primary__links">
								<a href="#" class="header__menu__primary__link">
									Výzkum 2
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
							</span>
							<div class="header__menu__subbox">
								<a href="#" class="header__menu__subbox__close icon icon-chevron-left" aria-hidden="true"></a>
								<div class="grid">
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											Item group
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											<a href="#" class="header__menu__subbox__title__link">Item group</a>
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											<a href="#" class="header__menu__subbox__title__link">Item group</a>
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--l--6-12">
										<p class="header__menu__subbox__title">
											Nadpis
										</p>
										<div class="header__menu__subbox__box">
											<div class="grid">
												<div class="grid__cell size--m--2-4 size--l--5-12">
													<table>
														<tr>
															<th>Pondělí</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Úterý</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Středa</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Čtvrtek</th>
															<td class="right">Není úředný den</td>
														</tr>
														<tr>
															<th>Pátek</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
													</table>
												</div>
												<div class="grid__cell size--m--2-4 size--l--7-12">
													<p>Mauris vulputate, mi vitae lobortis interdum, massa mi pulvinar velit, non sollicitudin magna erat ut erat. Duis arcu ante, dictum non.</p>
													<p>
														<a href="#" class="btn btn-s btn-white btn-border">
															<span>Button</span>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="header__menu__primary__item with-subbox">
							<span class="header__menu__primary__links">
								<a href="#" class="header__menu__primary__link">
									Výzkum
									<span class="icon icon-angle-down"></span>
								</a>
								<a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
							</span>
							<div class="header__menu__subbox">
								<a href="#" class="header__menu__subbox__close icon icon-chevron-left" aria-hidden="true"></a>
								<div class="grid">
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											Item group
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											<a href="#" class="header__menu__subbox__title__link">Item group</a>
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--m--1-3 size--l--2-12 header__menu__subbox__toggle">
										<p class="header__menu__subbox__title with-subitems">
											<a href="#" class="header__menu__subbox__title__link">Item group</a>
											<a href="#" class="header__menu__subbox__title__toggle icon icon-plus"></a>
										</p>
										<div class="header__menu__subbox__box">
											<ul class="header__menu__subbox__list">
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item A</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item B</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item C</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item D</a>
												</li>
												<li class="header__menu__subbox__list__item">
													<a href="#" class="header__menu__subbox__link">Menu item E</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="grid__cell size--l--6-12">
										<p class="header__menu__subbox__title">
											Nadpis
										</p>
										<div class="header__menu__subbox__box">
											<div class="grid">
												<div class="grid__cell size--m--2-4 size--l--5-12">
													<table>
														<tr>
															<th>Pondělí</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Úterý</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Středa</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
														<tr>
															<th>Čtvrtek</th>
															<td class="right">Není úředný den</td>
														</tr>
														<tr>
															<th>Pátek</th>
															<td class="right">09:00 - 12:00</td>
														</tr>
													</table>
												</div>
												<div class="grid__cell size--m--2-4 size--l--7-12">
													<p>Mauris vulputate, mi vitae lobortis interdum, massa mi pulvinar velit, non sollicitudin magna erat ut erat. Duis arcu ante, dictum non.</p>
													<p>
														<a href="#" class="btn btn-s btn-primary btn-border">
															<span>Button</span>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="header__menu__primary__item">
							<a href="#" class="header__menu__primary__link">
								O nás
							</a>
						</li>
						<?php if ($type1 === true): ?>
							<li class="header__menu__primary__item">
								<a href="#" class="header__menu__primary__link">
									Další odkaz
								</a>
							</li>
							<li class="header__menu__primary__item">
								<a href="#" class="header__menu__primary__link">
									Další odkaz
								</a>
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>

				<?php if ($type1 !== true): ?>
					<ul class="header__menu__secondary<?php if ($type3 === true): ?> header__menu__secondary--left<?php endif; ?>">
						<li class="header__menu__secondary__item">
							<a href="#" class="header__menu__secondary__link is-active">Studenti</a>
						</li>
						<li class="header__menu__secondary__item header__menu__secondary__item--dark">
							<a href="#" class="header__menu__secondary__link">Zaměstnanci</a>
						</li>
						<li class="header__menu__secondary__item">
							<a href="#" class="header__menu__secondary__link">Absolventi</a>
						</li>
						<?php if ($type2 === true || $type3 === true): ?>
							<li class="header__menu__secondary__item">
								<a href="#" class="header__menu__secondary__link">Další odkaz</a>
							</li>
							<li class="header__menu__secondary__item">
								<a href="#" class="header__menu__secondary__link">Další odkaz</a>
							</li>
							<li class="header__menu__secondary__item">
								<a href="#" class="header__menu__secondary__link">Další odkaz</a>
							</li>
							<li class="header__menu__secondary__item">
								<a href="#" class="header__menu__secondary__link">Další odkaz</a>
							</li>
						<?php endif; ?>
					</ul>
				<?php endif; ?>
			</div>
			<a href="#" class="header__menu__title">
				<span class="icon icon-bars"></span>
				Menu
			</a>
			<div class="header__menu-toggle" aria-hidden="true"></div>
		</nav>
	</div>

	<?php if (isset($menuSecondary)): ?>
		<?php if (($menuSecondary === true) or ($menuSecondary == 'type1')): ?>
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
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type2')): ?>
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
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type3')): ?>
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
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type4')): ?>
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
		<?php endif; ?>

		<?php if (($menuSecondary === true) or ($menuSecondary == 'type5')): ?>
		<div class="row-main" style="margin: 60px auto -30px;">
			<div class="sk-annot">
				<h2 class="sk-annot__title">S dropdown submenu</h2>
			</div>
		</div>
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
		<?php endif; ?>
	<?php endif; ?>
</header>

<?php if ($fixedHeader): ?>
	</div>
<?php endif; ?>

<?php
	$title = 'Vyhledávání na mapě';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<?php
				include 'part/molecules/menu-breadcrumb.php';
			?>

			<div class="box-map-search">
				<div class="box-bg box-bg--medium box-bg--full u-pb-0">
					<div class="row-main">
						<form action="?" class="form-inline form-inline--search">
							<p class="size--m--2-4 size--l--4-12">
								<label for="inline-search" class="vhide">E-mail input</label>
								<span class="inp-fix inp-icon inp-icon--after">
									<input type="text" name="search" id="inline-search" class="inp-text" placeholder="Zadejte hledaný výraz" />
									<button type="submit" class="btn-icon icon icon-search">
										<span class="vhide">Vyhledat</span>
									</button>
								</span>
							</p>
							<p class="form-inline__btn">
								<button type="submit" class="btn btn-primary btn-s nowrap">
									<span>Hledat</span>
								</button>
							</p>
						</form>
					</div>
					<div class="menu-inside menu-inside--light" role="navigation">
						<div class="row-main">
							<div class="menu-inside__wrap">
								<ul class="menu-inside__list js-scroll-nav">
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link is-active">Vše</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Výstavy</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Přednášky</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Party</a>
									</li>
									<li class="menu-inside__item">
										<a href="#" class="menu-inside__link">Festivaly</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="box-map-search__wrap">
					<div class="row-main">
						<div class="grid">
							<div class="grid__cell size--l--8-12 push--l--4-12">
								<div class="box-map-search__map" id="map"></div>
								<p class="box-map-search__back">
									<a href="#" class="btn btn-primary btn-s">
										<span>Zpět na výsledky</span>
									</a>
								</p>
							</div>
							<div class="grid__cell size--l--4-12 pull--l--8-12">
								<div class="box-vcards-list box-vcards-list--small">
									<div class="js-scrollbar js-scrollbar--y">
										<div class="scrollbar">
											<div class="track">
												<div class="thumb"></div>
											</div>
										</div>
										<div class="viewport">
											<div class="overview">
												<ul class="box-vcards-list__list">
													<?php
														for ($i=0; $i < 16; $i++) :
													?>
													<li class="box-vcards-list__item box-vcards-list__item--noimg">
														<a href="#" class="box-vcards-list__inner">
															<div class="box-vcards-list__content">
																<h2 class="box-vcards-list__name">Fakulta sociálních studií <span class="icon icon-map-marker"></span></h2>
																<p class="box-vcards-list__position">Joštova 218/10, Brno</p>
															</div>
														</a>
													</li>
													<li class="box-vcards-list__item box-vcards-list__item--noimg">
														<a href="#" class="box-vcards-list__inner">
															<div class="box-vcards-list__content">
																<h2 class="box-vcards-list__name">Filozofická fakulta <span class="icon icon-map-marker"></span></h2>
																<p class="box-vcards-list__position">Arne Nováka 1, Brno</p>
															</div>
														</a>
													</li>
													<?php endfor; ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			ics.map.create({
				target: 'map'
			});
		</script>

<?php
	include 'part/footer.php';
?>

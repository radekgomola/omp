<?php
	$title = 'Detail propagačního předmětu';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<?php
				include 'part/molecules/menu-breadcrumb.php';
			?>

			<div class="row-main">
				<div class="grid">
					<div class="grid__cell size--l--6-12">
						<h1 class="h2 hide-l-up">Mikina Masaryk University s potiskem</h1>
						<div class="box-slider-pager js-slider-pager">
							<div class="box-slider js-slider">
								<div class="box-slider__wrap">
									<div class="box-slider__list">
										<?php for ($i=0; $i < 3; $i++): ?>
										<div class="box-slider__item">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<?php endfor; ?>
									</div>
									<a href="#" class="box-slider__prev">
										<span class="vhide">Předchozí</span>
										<span class="icon icon-angle-left"></span>
									</a>
									<a href="#" class="box-slider__next">
										<span class="vhide">Následující</span>
										<span class="icon icon-angle-right"></span>
									</a>
								</div>
							</div>
							<div class="box-slider box-slider--carousel js-slider">
								<div class="box-slider__wrap">
									<div class="box-slider__list">
										<?php for ($i=0; $i < 3; $i++): ?>
										<div class="box-slider__item">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<?php endfor; ?>
									</div>
								</div>
								<a href="#" class="box-slider__prev">
									<span class="vhide">Předchozí</span>
									<span class="icon icon-angle-left"></span>
								</a>
								<a href="#" class="box-slider__next">
									<span class="vhide">Následující</span>
									<span class="icon icon-angle-right"></span>
								</a>
							</div>
						</div>
					</div>

					<div class="grid__cell size--l--6-12">
						<p class="h2 show-l-up">Mikina Masaryk University s potiskem</p>
						<hr />
						<div class="grid">
							<div class="grid__cell size--m--2-4 size--l--6-12">
								<h2 class="h5">Barvy</h2>
								<div class="box-product-attrs">
									<ul class="box-product-attrs__list">
										<li class="box-product-attrs__item box-product-attrs__item--color" style="background: #ffbe0b;">Žlutá</li>
										<li class="box-product-attrs__item box-product-attrs__item--color" style="background: #fb5607;">Červená</li>
										<li class="box-product-attrs__item box-product-attrs__item--color" style="background: #3a86ff;">Modrá</li>
									</ul>
								</div>
							</div>
							<div class="grid__cell size--m--2-4 size--l--6-12">
								<h2 class="h5">Dostupné velikosti</h2>
								<div class="box-product-attrs">
									<ul class="box-product-attrs__list">
										<li class="box-product-attrs__item">S</li>
										<li class="box-product-attrs__item">M</li>
										<li class="box-product-attrs__item">L</li>
										<li class="box-product-attrs__item">XL</li>
									</ul>
								</div>
							</div>
						</div>
						<hr />
						<h2 class="h5">Kde koupit</h2>
						<p>
							<a href="#" class="link-icon link-icon--before"><span class="icon icon-map-pin"></span><strong>Společenské knihy na Fakultě sociálních studií MU</strong></a><br />
							Joštova 10
						</p>
						<p>
							<a href="#" class="link-icon link-icon--before"><span class="icon icon-map-pin"></span><strong>Lékařské knihy v Univerzitním kampusu Bohunice</strong></a><br />
							pavilon A9, v 1. poschodí (u knihovny)
						</p>
						<hr />
						<p class="h2 font-secondary thin u-mt-0">
							<strong>450</strong> Kč
						</p>
					</div>
				</div>

				<h2 class="h3">Oblíbené</h2>
				<div class="crossroad-std">
					<div class="grid">
						<div class="grid__cell size--s--1-2 size--l--3-12">
							<a href="#" class="box-product">
								<p class="box-product__img">
									<span class="box-product__top">TOP</span>
									<img src="../img/illust/product.jpg" width="270" height="203" alt="">
								</p>
								<div class="box-product__content">
									<h3 class="box-product__title">Dámské tričko MU</h3>
									<p class="box-product__price">
										<strong>160,-</strong> Kč
									</p>
								</div>
							</a>
						</div>
						<div class="grid__cell size--s--1-2 size--l--3-12">
							<a href="#" class="box-product">
								<p class="box-product__img">
									<img src="../img/illust/product.jpg" width="270" height="203" alt="">
								</p>
								<div class="box-product__content">
									<h3 class="box-product__title">Mikina Masaryk University s potiskem</h3>
									<p class="box-product__price">
										<strong>450,-</strong> Kč
									</p>
								</div>
							</a>
						</div>
						<div class="grid__cell size--s--1-2 size--l--3-12">
							<a href="#" class="box-product">
								<p class="box-product__img">
									<img src="../img/illust/product.jpg" width="270" height="203" alt="">
								</p>
								<div class="box-product__content">
									<h3 class="box-product__title">Pánská polokošile</h3>
									<p class="box-product__price">
										<strong>430,-</strong> Kč
									</p>
								</div>
							</a>
						</div>
						<div class="grid__cell size--s--1-2 size--l--3-12">
							<a href="#" class="box-product">
								<p class="box-product__img">
									<img src="../img/illust/product.jpg" width="270" height="203" alt="">
								</p>
								<div class="box-product__content">
									<h3 class="box-product__title">Pánské tričko ALUMNI</h3>
									<p class="box-product__price">
										<strong>300,-</strong> Kč
									</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<p class="center">
					<a href="#" class="btn btn-primary btn-s">
						<span>Kompletní nabídka</span>
					</a>
				</p>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

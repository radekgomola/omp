<?php
	$title = 'Produkty';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main u-mb-30">
				<div class="sk-annot--main">
					<h1>
						<strong>02.16</strong>
						Boxy – Produkty
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong><br />
						/src/css/molecules/box/_product.scss<br />
						/src/css/molecules/box/_product-attrs.scss<br />
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro box s produktem. Slouží hlavně pro výpis kategorií, která je vložena do <a href="./m-04-01-obecny.html">rozcestníku</a>.
						</p>
					</div>
					<div class="grid">
						<div class="grid__cell size--s--1-2 size--l--3-12">
							<div class="sk-example__content">
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
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka použití ve výpise</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní molekuly v kombinaci s molekulou <a href="./m-04-01-obecny.html">rozcestníku</a>. Slouží k výpisu více produktů za sebou.
						</p>
					</div>
					<div class="sk-example__content">
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
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Atributy produktů</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z molekuly pro výpis atributů (.box-product-attrs). Defaultní je ukázka s velikostmi, do které lze vložit "jakkoliv" dlouhý obsah. Pro použití barvy je potřeba přidat modifikátor box-product-attrs__item--color s inline stylem barvy na .box-product-attrs__item
						</p>
						<p>
							Pro změnu velikosti nadpisů byly použity modifikátory z <a href="a-00-framework.html#molekuly">SK mini frameworku</a>
						</p>
					</div>
					<div class="sk-example__content">
						<h2 class="h5">Dostupné velikosti</h2>
						<div class="box-product-attrs">
							<ul class="box-product-attrs__list">
								<li class="box-product-attrs__item">S</li>
								<li class="box-product-attrs__item">M</li>
								<li class="box-product-attrs__item">L</li>
								<li class="box-product-attrs__item">Lorem ipsum dolor</li>
							</ul>
						</div>
						<h2 class="h5">Barvy</h2>
						<div class="box-product-attrs">
							<ul class="box-product-attrs__list">
								<li class="box-product-attrs__item box-product-attrs__item--color" style="background: #ffbe0b;">Žlutá</li>
								<li class="box-product-attrs__item box-product-attrs__item--color" style="background: #fb5607;">Červená</li>
								<li class="box-product-attrs__item box-product-attrs__item--color" style="background: #3a86ff;">Modrá</li>
								<li class="box-product-attrs__item box-product-attrs__item--color box-product-attrs__item--border" style="background: #fff;">Bílá</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

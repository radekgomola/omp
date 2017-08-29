<?php
	$title = 'Články';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.13</strong>
						Boxy – Články
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_article.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Řádkový</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta článku je pouze .box-article. V našem případě ji zanořujeme do molekuly <a href="./m-04-01-obecny.html">rozcestníku</a>, který slouží k výpisu více vizitek za sebou.
						</p>
						<p>
							V této molekule by neměl být obrázek větší než 270x270 px.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article">
										<p class="box-article__img">
											<img src="../img/illust/article.jpg" alt="" width="270" height="151" />
										</p>
										<p class="box-article__meta meta">
											<span class="meta__item">19.11.2015</span>
										</p>
										<h2 class="box-article__title">Soutěž Pro vodu - úvodní worshop "Od nápadu k realizaci"</h2>
										<p class="box-article__desc">
											Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
										</p>
									</a>
								</li>
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article">
										<p class="box-article__img">
											<img src="../img/illust/article.jpg" alt="" width="270" height="151" />
										</p>
										<p class="box-article__meta meta">
											<span class="meta__item">19.11.2015</span>
											<span class="meta__item">Jméno autora</span>
										</p>
										<h2 class="box-article__title">Soutěž Pro vodu - úvodní worshop "Od nápadu k realizaci"</h2>
										<p class="box-article__desc">
											Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
										</p>
									</a>
								</li>
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article">
										<p class="box-article__img">
											<img src="../img/illust/article.jpg" alt="" width="270" height="151" />
										</p>
										<p class="box-article__meta meta">
											<span class="meta__item">19.11.2015</span>
										</p>
										<h2 class="box-article__title">Soutěž Pro vodu - úvodní worshop "Od nápadu k realizaci"</h2>
										<p class="box-article__desc">
											Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Řádkový - boxový</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta článku je pouze .box-article-list. V našem případě ji zanořujeme do molekuly <a href="./m-04-01-obecny.html">rozcestníku</a>, který slouží k výpisu více vizitek za sebou.
						</p>
						<p>
							V této molekule by neměl být obrázek větší než 600x300 px. Pokud nechceme používat obrázek, pak přidáme modifikátor box-article-list--noimg na box-article-list a odstraníme obrázek s jeho obalem.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article-list">
										<p class="box-article-list__img">
											<img src="../img/illust/article-list.jpg" alt="" width="600" height="300" />
										</p>
										<div class="box-article-list__content">
											<p class="box-article-list__meta meta">
												<span class="meta__item">19.11.2015</span>
											</p>
											<h2 class="box-article-list__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article-list">
										<p class="box-article-list__img">
											<img src="../img/illust/article-list.jpg" alt="" width="600" height="300" />
										</p>
										<div class="box-article-list__content">
											<p class="box-article-list__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-list__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article-list box-article-list--noimg">
										<div class="box-article-list__content">
											<p class="box-article-list__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-list__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article-list box-article-list--noimg">
										<div class="box-article-list__content">
											<p class="box-article-list__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-list__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Řádkový - boxový - velký</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tato molekula vychází z předchozí molekuly (Řádkový - boxový). Navíc je přidán modifikátor box-article-list--big na elemet .box-article-list, který zvýrazní celý box.
						</p>
						<p>
							V této molekule by neměl být obrázek větší než 600x500 px.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article-list box-article-list--big">
										<p class="box-article-list__img">
											<img src="../img/illust/article-list-big.jpg" alt="" width="600" height="500" />
										</p>
										<div class="box-article-list__content">
											<h2 class="box-article-list__title">Studujte na Muni</h2>
											<ul class="icon-ul">
												<li>
													<span class="icon-li icon icon-check-circle-o"></span>
													Máme nejširší nabídku oborů a kombinací
												</li>
												<li>
													<span class="icon-li icon icon-check-circle-o"></span>
													Čekají na vás moderní prostory a špičkové vybavení
												</li>
												<li>
													<span class="icon-li icon icon-check-circle-o"></span>
													Brno je největší studentské město v Česku
												</li>
											</ul>
											<p>
												<span class="btn btn-primary">
													<span>Mám zájem</span>
												</span>
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--l--12-12">
									<a href="#" class="box-article-list box-article-list--big">
										<p class="box-article-list__img">
											<img src="../img/illust/article-list-big.jpg" alt="" width="600" height="500" />
										</p>
										<div class="box-article-list__content">
											<h2 class="box-article-list__title">Studujte na Muni</h2>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi enim officiis harum quis nostrum molestias fuga ea illum maiores? Consequuntur soluta quas similique. Dolor facilis, eaque ea omnis sunt rerum.</p>
											<p>
												<span class="btn btn-primary">
													<span>Mám zájem</span>
												</span>
											</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sloupcová</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta článku je pouze .box-article-grid. V našem případě ji zanořujeme do molekuly <a href="./m-04-01-obecny.html">rozcestníku</a>, který slouží k výpisu více vizitek za sebou.
						</p>
						<p>
							V této molekule by neměl být obrázek větší než 270x270 px. Obrázky v tomto výpise by všechny měly být ve stejném poměru. Pokud nechceme používat obrázek pak přidáme modifikátor box-article-grid--noimg na box-article-grid a odstraníme obrázek s jeho obalem.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid box-article-grid--noimg">
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid box-article-grid--noimg">
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid box-article-grid--noimg">
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid box-article-grid--noimg">
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-grid__meta meta">
												<span class="meta__item"><strong>Jméno autora</strong>, fakulta</span>
											</p>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
											<p class="center">
												<span class="btn btn-primary btn-border btn-s">
													<span>Čtěte dál</span>
												</span>
											</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sloupcová - s číslováním</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z předchozí komponenty (Sloupcová). Pouze se přidává meta informace s číslovkou.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item bold primary">1.</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item bold primary">2.</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item bold primary">3.</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item bold primary">4.</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item bold primary">1.</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-article-grid">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid-small.jpg" alt="" width="270" height="136" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item bold primary">2.</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--6-12">
									<a href="#" class="box-category box-category--white">
										<h2 class="box-category__title">Magisterské studium</h2>
										<p>
											<span class="btn btn-s btn-primary btn-border">
												<span>Čtěte dál</span>
											</span>
										</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sloupcová - velká</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní sloupcové komponenty. Pouze je na .box-article-grid přidán modifikátor .box-article-grid--big, který zvětší obsah. V našem případě ji zanořujeme do molekuly <a href="./m-04-01-obecny.html">rozcestníku</a>, který slouží k výpisu více vizitek za sebou.
						</p>
						<p>
							V této molekule by neměl být obrázek větší než 570x570 px. Obrázky v tomto výpise by všechny měly být ve stejném poměru. Pokud nechceme používat obrázek pak přidáme modifikátor box-article-grid--noimg na box-article-grid a odstraníme obrázek s jeho obalem.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--m--2-4 size--l--6-12">
									<a href="#" class="box-article-grid box-article-grid--big">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid.jpg" alt="" width="570" height="285" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--m--2-4 size--l--6-12">
									<a href="#" class="box-article-grid box-article-grid--big">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid.jpg" alt="" width="570" height="285" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
										</div>
									</a>
								</li>
								<li class="grid__cell size--m--2-4 size--l--6-12">
									<a href="#" class="box-article-grid box-article-grid--big">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid.jpg" alt="" width="570" height="285" />
										</p>
										<div class="box-article-grid__content">
											<p class="box-article-grid__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--m--2-4 size--l--6-12">
									<a href="#" class="box-article-grid box-article-grid--big">
										<p class="box-article-grid__img">
											<img src="../img/illust/article-grid.jpg" alt="" width="570" height="285" />
										</p>
										<div class="box-article-grid__content">
											<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
											<p>
												<span class="btn btn-primary btn-border btn-s">
													<span>Čtěte dál</span>
												</span>
											</p>
										</div>
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

<?php
	$title = 'Obecný';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>04.01</strong>
						Rozcestníky – Obecný
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/crossroad/_std.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka výpisu s šířkou na 100%</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tyto výpisy se používají při výpisu boxových molekul, které by měly být seznamem - nejsou samostatně stojící boxy. Např. výpis novinek, vyjáření klientů, aktualit, článků, události apod.
						</p>
						<p>
							Pro výpis slouží obal div.crossroad-std – ten se stará o odsazení ze spodu a odsazení mezi řádky, pro které se využívá atom <a href="a-02-grid.html">grid</a>, pomocí něj lze udělat sloupce dle potřeby pro jednotlivé breakpointy. Grid také není řešen pomocí elementů div, ale sémantičtěji pomocí elementů ul a li, které definují položky jako seznam.
						</p>
						<p>
							Nezapomínejte na modifikátory .size--*--*-*, pro menší rozlišení - viz. dokumentace atomu <a href="a-02-grid.html">grid</a>
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--12-12">
									100%
								</li>
								<li class="grid__cell size--l--12-12">
									100%
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka výpisu s šířkou na 50%</h2>
					</div>
					<div class="sk-example__comment">
						<p>Ukázka použití gridu - hlavní popis najdete na prvním příkladu.</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--6-12">
									50%
								</li>
								<li class="grid__cell size--l--6-12">
									50%
								</li>
								<li class="grid__cell size--l--6-12">
									50%
								</li>
								<li class="grid__cell size--l--6-12">
									50%
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka výpisu s šířkou na 33.33%</h2>
					</div>
					<div class="sk-example__comment">
						<p>Ukázka použití gridu - hlavní popis najdete na prvním příkladu.</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--4-12">
									33.3333%
								</li>
								<li class="grid__cell size--l--4-12">
									33.3333%
								</li>
								<li class="grid__cell size--l--4-12">
									33.3333%
								</li>
								<li class="grid__cell size--l--4-12">
									33.3333%
								</li>
								<li class="grid__cell size--l--4-12">
									33.3333%
								</li>
								<li class="grid__cell size--l--4-12">
									33.3333%
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka výpisu s šířkou na 25%</h2>
					</div>
					<div class="sk-example__comment">
						<p>Ukázka použití gridu - hlavní popis najdete na prvním příkladu.</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
								<li class="grid__cell size--l--3-12">
									25%
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka kombinovaného výpisu</h2>
					</div>
					<div class="sk-example__comment">
						<p>Ukázka použití gridu - hlavní popis najdete na prvním příkladu.</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--6-12">
									1/2 grid
								</li>
								<li class="grid__cell size--l--3-12">
									1/4 grid
								</li>
								<li class="grid__cell size--l--3-12">
									1/4 grid
								</li>
								<li class="grid__cell size--l--4-12">
									1/3 grid
								</li>
								<li class="grid__cell size--l--4-12">
									1/3 grid
								</li>
								<li class="grid__cell size--l--4-12">
									1/3 grid
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Reálná ukázka výpisu článků</h2>
					</div>
					<div class="sk-example__comment">
						<p>Ukázka použití gridu s reálným obsahem molekul boxů <a href="m-02-13-clanky.html">článků</a>. Pokud je nad výpisem použit nadpis h2, pak by měly být uvnitř nadpisy třetí úrovně (h3) - podrobněji je popsáno u <a href="a-01-typografie.html">typografie</a>. Pod výpisem je pak použit atom <a href="a-04-tlacitka.html">buttonu</a> s obalujícím elementem p s modifikátorem z <a href="a-00-framework.html">SK mini frameworku</a>.</p>
					</div>
					<div class="sk-example__content">
						<h2>Nejnovější články</h2>
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
											<h3 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h3>
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
											<h3 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h3>
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
											</p>
											<h3 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h3>
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
											</p>
											<h3 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h3>
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
											<h3 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h3>
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
											<h3 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h3>
											<p class="box-article-list__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<p class="center">
							<a href="#" class="btn btn-primary btn-s">
								<span>Další články</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

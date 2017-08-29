<?php
	$title = 'Alterantivní grafický modul';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.22</strong>
						Alternativní grafický modul
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_alternative.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro box s pozadím. Slouží hlavně pro výpisy, kdy je molekula vložena do <a href="./m-04-01-obecny.html">rozcestníku</a>.
						</p>
					</div>
					<div class="grid">
						<div class="grid__cell size--s--1-2 size--l--3-12">
							<div class="sk-example__content">
								<a href="#" class="box-alternative">
									<p class="box-alternative__img">
										<img src="../img/illust/alternative.jpg" alt="" width="270" height="285" />
									</p>
									<div class="box-alternative__content">
										<h2 class="box-alternative__title">Progresivní dramaturgie v opeře</h2>
										<p class="box-alternative__author">Mgr. Šárka Havlíčková Kysová, Ph.D.</p>
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
							Vychází z defaultní molekuly v kombinaci s molekulou <a href="./m-04-01-obecny.html">rozcestníku</a>. Slouží k výpisu více molekul za sebou.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-alternative">
										<p class="box-alternative__img">
											<img src="../img/illust/alternative.jpg" alt="" width="270" height="285" />
										</p>
										<div class="box-alternative__content">
											<h2 class="box-alternative__title">Progresivní dramaturgie v opeře</h2>
											<p class="box-alternative__author">Mgr. Šárka Havlíčková Kysová, Ph.D.</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-alternative">
										<p class="box-alternative__img">
											<img src="../img/illust/alternative.jpg" alt="" width="270" height="285" />
										</p>
										<div class="box-alternative__content">
											<h2 class="box-alternative__title">Progresivní dramaturgie v opeře</h2>
											<p class="box-alternative__author">Mgr. Šárka Havlíčková Kysová, Ph.D.</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-alternative">
										<p class="box-alternative__img">
											<img src="../img/illust/alternative.jpg" alt="" width="270" height="285" />
										</p>
										<div class="box-alternative__content">
											<h2 class="box-alternative__title">Progresivní dramaturgie v opeře</h2>
											<p class="box-alternative__author">Mgr. Šárka Havlíčková Kysová, Ph.D.</p>
										</div>
									</a>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-alternative">
										<p class="box-alternative__img">
											<img src="../img/illust/alternative.jpg" alt="" width="270" height="285" />
										</p>
										<div class="box-alternative__content">
											<h2 class="box-alternative__title">Progresivní dramaturgie v opeře</h2>
											<p class="box-alternative__author">Mgr. Šárka Havlíčková Kysová, Ph.D.</p>
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

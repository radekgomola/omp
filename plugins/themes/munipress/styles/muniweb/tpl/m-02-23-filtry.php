<?php
	$title = 'Filtry';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.23</strong>
						Filtry
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_filter.scss
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
							Výchozí molekula je pouze .box-filter a elementy s tímto prefixem.
						</p>
						<p>
							V našem příkladě jsme do boxu s filtrem ještě umístili <a href="m-02-06-s-pozadim.html">box s pozadím</a>, <a href="a-03-formulare.html">inline formulář</a>, <a href="a-03-formulare.html">inputy</a>, <a href="a-04-tlacitka.html">tlačítka</a>, <a href="a-11-tagy.html">tagy</a> a <a href="a-01-typografie.html">tabulku</a> z typografie.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-filter">
						<div class="box-bg box-bg--small box-bg--full">
							<div class="row-main">
								<div class="form-inline">
									<p class="size--l--3-12">
										<label for="search-new" class="vhide">Název, autoři,...</label>
										<span class="inp-fix inp-icon inp-icon--after">
											<input type="text" id="search-new" class="inp-text" placeholder="Název, autoři,...">
											<button type="submit" class="btn-icon icon icon-search">
												<span class="vhide">Vyhledat</span>
											</button>
										</span>
									</p>
									<p class="box-filter__btn">
										<button type="submit" class="btn btn-primary btn-s nowrap">
											<span>Hledat</span>
										</button>
									</p>
									<p class="box-filter__link">
										<a href="#">Filtrovat dle ústavu</a>
									</p>
								</div>
							</div>
						</div>
						<div class="row-main">
							<table>
								<tbody>
									<tr>
										<td>
											<a href="#"><strong>A European Guidance Counselling Concept for International Youth Mobility</strong></a><br>
											(ERASMUS+ 2014-1-DE02-KA202-001)
										</td>
									</tr>
									<tr>
										<td>
											<a href="#"><strong>A European Guidance Counselling Concept for International Youth Mobility</strong></a><br>
											(ERASMUS+ 2014-1-DE02-KA202-001)
										</td>
									</tr>
									<tr>
										<td>
											<a href="#"><strong>A European Guidance Counselling Concept for International Youth Mobility</strong></a><br>
											(ERASMUS+ 2014-1-DE02-KA202-001)
										</td>
									</tr>
									<tr>
										<td>
											<a href="#"><strong>A European Guidance Counselling Concept for International Youth Mobility</strong></a><br>
											(ERASMUS+ 2014-1-DE02-KA202-001)
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka s tagy</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula je pouze .box-filter a elementy s tímto prefixem.
						</p>
						<p>
							V našem příkladě jsme do boxu s filtrem ještě umístili <a href="m-02-06-s-pozadim.html">box s pozadím</a>, <a href="a-03-formulare.html">inline formulář</a>, <a href="a-03-formulare.html">inputy</a>, <a href="a-04-tlacitka.html">tlačítka</a>, <a href="a-11-tagy.html">tagy</a> a <a href="a-01-typografie.html">tabulku</a> z typografie.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-filter">
						<div class="box-bg box-bg--small box-bg--full">
							<div class="row-main">
								<div class="form-inline">
									<p class="size--l--3-12">
										<label for="filter" class="vhide">Název grantu, kritérium,..</label>
										<span class="inp-fix inp-icon inp-icon--after">
											<input type="text" id="filter" class="inp-text" placeholder="Název grantu, kritérium,...">
											<button type="submit" class="btn-icon icon icon-search">
												<span class="vhide">Vyhledat</span>
											</button>
										</span>
									</p>
									<p class="box-filter__btn">
										<button type="submit" class="btn btn-primary btn-s nowrap">
											<span>Filtrovat</span>
										</button>
									</p>
									<p class="box-filter__close">
										<a href="" class="btn btn-primary btn-s btn-icon-after">
											<span>
												<span class="box-filter__close-text">Zavřít</span>
												<span class="icon icon-close"></span>
											</span>
										</a>
									</p>
								</div>
								<p class="box-filter__label">
									Zvolte si kritéria pro filtrování příslušných grantů
								</p>
								<p>
									<span class="tag tag--flat">
										PhD
									</span>
									<span class="tag tag--flat tag--white">
										do 35 let
									</span>
									<span class="tag tag--flat">
										Postdoc
										<a href="#" class="tag__remove">
											<span class="vhide">Ostranit</span>
											<span class="icon icon-close"></span>
										</a>
									</span>
									<span class="tag tag--flat tag--white">
										Postdoc
										<a href="#" class="tag__remove">
											<span class="vhide">Ostranit</span>
											<span class="icon icon-close"></span>
										</a>
									</span>
								</p>
							</div>
						</div>
						<div class="row-main">
							<div class="box-filter__table">
								<table>
									<tbody>
										<?php for ($i=0; $i < 4; $i++) : ?>
											<tr>
												<td>
													<a href="#"><strong>FRMU</strong></a>
												</td>
												<td>
													2. 11. 2015
												</td>
												<td>
													<span class="tag tag--flat tag--white">
														Postdoc
													</span>
													<span class="tag tag--flat tag--white">
														do 35 let
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<a href="#"><strong>Mezioborové výzkumné projekty</strong></a>
												</td>
												<td>
													2. 11. 2015
												</td>
												<td>
													<span class="tag tag--flat tag--white">
														do 35 let
													</span>
												</td>
											</tr>
										<?php endfor; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

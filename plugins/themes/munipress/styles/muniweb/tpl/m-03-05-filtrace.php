<?php
	$title = 'Filtrace';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03.05</strong>
						Menu - Filtrace
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/menu/_filter.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro filtrační menu. Slouží pro něj molekula .menu-filter.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-filter" role="navigation">
							<ul class="menu-filter__list">
								<li class="menu-filter__item">
									<a href="#" class="menu-filter__link">Menu item 1</a>
								</li>
								<li class="menu-filter__item">
									<a href="#" class="menu-filter__link">Menu item 2</a>
								</li>
								<li class="menu-filter__item">
									<a href="#" class="menu-filter__link is-active">Menu item 3</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zvětšená</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro zvětšení je potřeba přidat menu-filter--big na .menu-filter.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="menu-filter menu-filter--big" role="navigation">
							<ul class="menu-filter__list">
								<li class="menu-filter__item">
									<a href="#" class="menu-filter__link">Menu item 1</a>
								</li>
								<li class="menu-filter__item">
									<a href="#" class="menu-filter__link">Menu item 2</a>
								</li>
								<li class="menu-filter__item">
									<a href="#" class="menu-filter__link is-active">Menu item 3</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Se selectem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro zobrazení vedle sebe je použit atom <a href="a-02-grid.html">gridu</a>. Pro select je využit defaultní atom <a href="a-03-formulare.html">selectu</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<form action="?" class="form-filter">
							<div class="grid grid--bottom">
								<div class="grid__cell size--l--5-12">
									<p>
										<label for="type-1">Nadpis pole</label><br />
										<span class="inp-fix inp-fix--select">
											<select name="type" id="type-1" class="inp-select">
												<option value="0">Celá MUNI</option>
												<option value="law">Právnická fakulta</option>
												<option value="med">Lékařská fakulta</option>
												<option value="sci">Přírodovědecká fakulta</option>
												<option value="fi">Fakulta informatiky</option>
												<option value="fss">Fakulta sociálnách studií</option>
												<option value="fsps">Fakulta sportovních studií</option>
												<option value="phil">Filozofická fakulta</option>
												<option value="ped">Pedagogická fakulta</option>
												<option value="econ">Ekonomicko-správní fakulta</option>
											</select>
										</span>
									</p>
								</div>
								<div class="grid__cell size--l--7-12">
									<div class="menu-filter menu-filter--low" role="navigation">
										<ul class="menu-filter__list">
											<li class="menu-filter__item">
												<a href="#" class="menu-filter__link is-active">Vše</a>
											</li>
											<li class="menu-filter__item">
												<a href="#" class="menu-filter__link">Výstavy</a>
											</li>
											<li class="menu-filter__item">
												<a href="#" class="menu-filter__link">Přednášky</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Se selectem - zvětšená</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z předchozího příkladu. Navíc je zvětšený <a href="a-03-formulare.html">select</a> a i menu-filter, dle svých dokumentací.
						</p>
					</div>
					<div class="sk-example__content">
						<form action="?" class="form-filter">
							<div class="grid grid--bottom">
								<div class="grid__cell size--l--5-12">
									<p>
										<label for="type">Nadpis pole</label><br />
										<span class="inp-fix inp-fix--select">
											<select name="type" id="type" class="inp-select inp-select--big">
												<option value="0">Celá MUNI</option>
												<option value="law">Právnická fakulta</option>
												<option value="med">Lékařská fakulta</option>
												<option value="sci">Přírodovědecká fakulta</option>
												<option value="fi">Fakulta informatiky</option>
												<option value="fss">Fakulta sociálnách studií</option>
												<option value="fsps">Fakulta sportovních studií</option>
												<option value="phil">Filozofická fakulta</option>
												<option value="ped">Pedagogická fakulta</option>
												<option value="econ">Ekonomicko-správní fakulta</option>
											</select>
										</span>
									</p>
								</div>
								<div class="grid__cell size--l--7-12">
									<div class="menu-filter menu-filter--big" role="navigation">
										<ul class="menu-filter__list">
											<li class="menu-filter__item">
												<a href="#" class="menu-filter__link is-active">Vše</a>
											</li>
											<li class="menu-filter__item">
												<a href="#" class="menu-filter__link">Výstavy</a>
											</li>
											<li class="menu-filter__item">
												<a href="#" class="menu-filter__link">Přednášky</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

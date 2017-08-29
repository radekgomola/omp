<?php
	$title = 'Události';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.14</strong>
						Boxy – Události
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_event.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta události je pouze .box-event. V našem případě ji zanořujeme do molekuly <a href="./m-04-01-obecny.html">rozcestníku</a>, který slouží k výpisu více vizitek za sebou.
						</p>
						<p>
							Tato komponenta využívá atom <a href="a-10-datum.html">datebox</a> pro zobrazení kalendáře a atom <a href="a-09-meta.html">meta</a> pro zobrazní doplňujících informací.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-event">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
											<p class="meta meta--block">
												<strong class="meta__item">od 9:00 do 10:00</strong>
											</p>
										</div>
									</div>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-event">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
											<p class="meta meta--block">
												<strong class="meta__item">od 9:00 do 10:00</strong>
												<span class="meta__item">pro Studenti FF</span>
												<a href="#" class="meta__item">Fakulta FF</a>
											</p>
										</div>
									</div>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-event">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
										</div>
									</div>
								</li>
								<li class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-event">
										<div class="box-event__content">
											<div class="datebox datebox--old">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
											<p class="box-event__label-wrap">
												<span class="box-event__label"><span class="icon icon-check"></span> Akce už proběhla</span>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní s jinou pozicí kalendáře</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní komponenty – pouze je zobrazen kalendář na straně. Takovou komponentu vytvoříme pomocí modifikátoru box-event--side na .box-event
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--m--2-4">
									<div class="box-event box-event--side">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
											<p class="meta meta--block">
												<strong class="meta__item">od 9:00 do 10:00</strong>
											</p>
										</div>
									</div>
								</li>
								<li class="grid__cell size--m--2-4">
									<div class="box-event box-event--side">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní s pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta vycházející z defaultní komponenty – pouze je přidáno pozadí. Takovou komponentu vytvoříme pomocí modifikátoru box-event--highlighted na .box-event
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--m--2-4 size--l--3-12">
									<div class="box-event box-event--highlighted">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
											<p class="meta meta--block">
												<strong class="meta__item">od 9:00 do 10:00</strong>
											</p>
										</div>
									</div>
								</li>
								<li class="grid__cell size--m--2-4 size--l--6-12">
									<div class="box-event box-event--highlighted">
										<div class="box-event__content">
											<div class="datebox">
												<p class="datebox__day">
													Čtvrtek
												</p>
												<p class="datebox__date">
													24.&nbsp;3.
												</p>
											</div>
											<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
											<p class="meta meta--block">
												<strong class="meta__item">od 9:00 do 10:00</strong>
												<span class="meta__item">pro Studenti FF</span>
												<a href="#" class="meta__item">Fakulta FF</a>
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Detail události</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Komponenta pro naformátování detailu události.
						</p>
						<p>
							Tato komponenta využívá molekuly <a href="a-01-typografie.html">ikonkový seznam</a> a <a href="a-04-tlacitka.html">tlačítka</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-event-detail">
							<h2 class="muni box-event-detail__title">Interaktivní výstava k 140. výročí časopisu Komenský</h2>
							<ul class="list-icon">
								<li class="list-icon__item">
									<span class="icon icon-fw icon-calendar"></span>
									<strong>2. – 26. 6. 2016 </strong>
								</li>
								<li class="list-icon__item">
									<span class="icon icon-fw icon-clock-o"></span>
									<strong>9:00 – 16:00</strong>
								</li>
								<li class="list-icon__item">
									<span class="icon icon-fw icon-map-marker"></span>
									Knihovna Pedagogické fakulty Masarykovy univerzity <br />
									Poříčí 538/31
								</li>
							</ul>
							<hr/>
							<p>
								Časopis Komenský, vydávaný Pedagogickou fakultou Masarykovy univerzity, slaví 140 let. Nejstarší pedagogické periodikum v České republice připravilo k tomuto výročí interaktivní výstavu, kterou si můžete prohlédnout od 2. do 30. března v knihovně Pedagogické fakulty MU. Vernisáž výstavy začne 2. března v 15 hodin.
							</p>
							<p class="box-event-detail__btn">
								<span class="btn btn-primary btn-s"><span>Stáhnout do kalendáře</span></span>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Detail události s mapou</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							V tomto případě nejde o nic jiného, než zanoření komponenty s detailem události do jedné buňky atomu <a href="a-02-grid.html">gridu</a> a do druhé buňky vložení molekuly s <a href="m-02-10-mapy.html">mapou</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="grid">
							<div class="grid__cell size--m--2-4">
								<div class="box-event-detail">
									<h2 class="muni box-event-detail__title">Interaktivní výstava k 140. výročí časopisu Komenský</h2>
									<ul class="list-icon">
										<li class="list-icon__item">
											<span class="icon icon-fw icon-calendar"></span>
											<strong>2. – 26. 6. 2016 </strong>
										</li>
										<li class="list-icon__item">
											<span class="icon icon-fw icon-clock-o"></span>
											<strong>9:00 – 16:00</strong>
										</li>
										<li class="list-icon__item">
											<span class="icon icon-fw icon-map-marker"></span>
											Knihovna Pedagogické fakulty Masarykovy univerzity <br />
											Poříčí 538/31
										</li>
									</ul>
									<hr/>
									<p>
										Časopis Komenský, vydávaný Pedagogickou fakultou Masarykovy univerzity, slaví 140 let. Nejstarší pedagogické periodikum v České republice připravilo k tomuto výročí interaktivní výstavu, kterou si můžete prohlédnout od 2. do 30. března v knihovně Pedagogické fakulty MU. Vernisáž výstavy začne 2. března v 15 hodin.
									</p>
									<p class="box-event-detail__btn">
										<span class="btn btn-primary btn-s"><span>Stáhnout do kalendáře</span></span>
									</p>
								</div>
							</div>
							<div class="grid__cell size--m--2-4">
								<div class="box-map">
									<div class="box-map__map"></div>
									<div class="box-map__placeholder">
										<div class="box-map__inner">
											<p class="box-map__icon"><span class="icon icon-map-o"></span></p>
											<p class="box-map__text">Načítám mapu&hellip;</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka kombinace s pozadím, napisem, tlačítkem a utilitami pro dostylování</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Na tomto příkladu se ukazuje kombinace <a href="m-02-06-s-pozadím.html">boxu s pozadím</a>, util class z <a href="a-00-framework.html">SK mini frameworku</a>, <a href="a-04-tlacitka.html">tlačítek</a>, molekuly pro <a href="m-04-01.html">výpis</a> a defaultní molekuly události.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-bg box-bg--full">
						<div class="row-main">
							<h2 class="h3 u-mb-30">Další akce</h2>
							<div class="crossroad-std">
								<ul class="grid">
									<li class="grid__cell size--s--1-2 size--l--4-12">
										<div class="box-event">
											<div class="box-event__content">
												<div class="datebox">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
												<p class="meta meta--block">
													<strong class="meta__item">od 9:00 do 10:00</strong>
												</p>
											</div>
										</div>
									</li>
									<li class="grid__cell size--s--1-2 size--l--4-12">
										<div class="box-event">
											<div class="box-event__content">
												<div class="datebox">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
												<p class="meta meta--block">
													<strong class="meta__item">od 9:00 do 10:00</strong>
												</p>
											</div>
										</div>
									</li>
									<li class="grid__cell size--s--1-2 size--l--4-12">
										<div class="box-event">
											<div class="box-event__content">
												<div class="datebox">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Setkání u kulatého stolu na téma Aktuální problémy výuky literatury na vysoké škole</a></h3>
												<p class="meta meta--block">
													<strong class="meta__item">od 9:00 do 10:00</strong>
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<p class="center">
								<a href="#" class="btn btn-primary"><span>Kalendář akcí</span></a>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row-main">
				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka jak poskládat kalendář akcí</h2>
					</div>
					<div class="sk-example__content">
						<div class="box-bg">
							<form action="?" class="form-filter">
								<div class="grid grid--bottom">
									<div class="grid__cell size--m--2-4 size--l--5-12">
										<p>
											<label for="type">Nadpis pole</label><br />
											<span class="inp-fix inp-fix--select">
												<select name="type" id="type" class="inp-select js-select">
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
									<div class="grid__cell size--m--2-4 size--l--7-12">
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

							<div class="box-timeline-dates">
								<div class="box-timeline-dates__box">
									<h3 class="box-timeline-dates__title">Listopad 2016</h3>
									<ul class="box-timeline-dates__list">
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side box-event--has-btn">
												<div class="box-event__content">
													<div class="datebox datebox--phil">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.<br />
															– 4.&nbsp;5.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
													<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
													<p class="meta meta--inline">
														<strong class="meta__item">od 9:00 do 10:00</strong>
														<span class="meta__item">pro Studenti FF</span>
														<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
													</p>
												</div>
											</div>
										</li>
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side box-event--highlighted box-event--has-btn">
												<div class="box-event__content">
													<div class="datebox datebox--ped">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
													<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
													<p class="meta meta--inline">
														<strong class="meta__item">od 9:00 do 10:00</strong>
														<span class="meta__item">pro Studenti FF</span>
														<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
													</p>
												</div>
											</div>
										</li>
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--econ">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
													<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
													<p class="meta meta--inline">
														<strong class="meta__item">od 9:00 do 10:00</strong>
														<span class="meta__item">pro Studenti FF</span>
														<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
													</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="box-timeline-dates__box">
									<h3 class="box-timeline-dates__title">Prosinec 2016</h3>
									<ul class="box-timeline-dates__list">
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--phil">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
													<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
													<p class="meta meta--inline">
														<strong class="meta__item">od 9:00 do 10:00</strong>
														<span class="meta__item">pro Studenti FF</span>
														<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
													</p>
												</div>
											</div>
										</li>
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--ped">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
													<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
													<p class="meta meta--inline">
														<strong class="meta__item">od 9:00 do 10:00</strong>
														<span class="meta__item">pro Studenti FF</span>
														<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
													</p>
												</div>
											</div>
										</li>
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--econ">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
													<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
													<p class="meta meta--inline">
														<strong class="meta__item">od 9:00 do 10:00</strong>
														<span class="meta__item">pro Studenti FF</span>
														<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
													</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="box-timeline-dates__box">
									<h3 class="box-timeline-dates__title">Bez perexů</h3>
									<ul class="box-timeline-dates__list">
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--phil">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												</div>
											</div>
										</li>
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--ped">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												</div>
											</div>
										</li>
										<li class="box-timeline-dates__item">
											<div class="box-event box-event--side">
												<div class="box-event__content">
													<div class="datebox datebox--econ">
														<p class="datebox__day">
															Čtvrtek
														</p>
														<p class="datebox__date">
															24.&nbsp;3.
														</p>
													</div>
													<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

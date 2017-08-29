<?php
	$title = 'Tlačítka';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>04</strong>
						Tlačítka
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/atoms/forms/_buttons.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/btnDropdown.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Primární tlačítka webu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tlačítko může být využito pro elementy &lt;button&gt; i &lt;a&gt; Vždy je struktura .btn > span. Důležítá je classa .btn, na kterou se dále přidávají modifikátory pro obarvení, velikost apod. Defaultní tlačítko je .btn.btn-primary
						</p>
						<p>
							Pro zobrazení více tlačítek za sebou slouží obal .btn-wrap, který se stará o správné odsazení tlačítek.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="btn-wrap">
							<a href="#" class="btn btn-primary">
								<span>Mám zájem</span>
							</a>
							<button type="submit" class="btn btn-primary">
								<span>Mám zájem</span>
							</button>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velikostní varianty webu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Zatím se používá pouze zmenšená verze tlačítka, které se docílí přidáním classy btn-s na .btn.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="btn-wrap">
							<a href="#" class="btn btn-primary btn-s">
								<span>Zobrazit více aktualit</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Sekundární tlačítka webu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Sekundární tlačítko se zobrazuje bez pozadí pouze s borderem. Slouží k tomu modifikátor btn-border. Defaultní primární tlačítko má tedy classy .btn.btn-primary.btn-border
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="btn-wrap">
							<a href="#" class="btn btn-primary btn-border">
								<span>Mám zájem</span>
							</a>
							<a href="#" class="btn btn-primary btn-s btn-border">
								<span>Zobrazit více aktualit</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Disabled tlačítka</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro elementy a se přidá na .btn modifikátor is-disabled a ideálně by se měl odstranit href atribut.
						</p>
						<p>
							Pro elementy button stačí přidat atribut disabled="disabled".
						</p>
						<p>
							Disabled stav lze použít pro jakoukoliv modifikaci buttonu ať už primární, sekundární, s ikonkou apod.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="btn-wrap">
							<a class="btn btn-primary is-disabled">
								<span>Mám zájem</span>
							</a>
							<button type="submit" class="btn btn-primary" disabled="disabled">
								<span>Mám zájem</span>
							</button>
							<a class="btn btn-primary btn-border is-disabled">
								<span>Mám zájem</span>
							</a>
							<button type="submit" class="btn btn-primary btn-s btn-border" disabled="disabled">
								<span>Mám zájem</span>
							</button>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Tlačítka s ikonkami</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro správné zobrazení se používá modifikátor btn-icon-before / btn-icon-after na základním elementu .btn. Lze vložit jakýkoliv atom <a href="a-05-ikonky.html">ikonky</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="btn-wrap">
							<a href="#" class="btn btn-primary btn-s btn-icon-before">
								<span>
									<span class="icon icon-calendar-o"></span>
									Do Google kalendáře
								</span>
							</a>
							<a href="#" class="btn btn-primary btn-icon-before">
								<span>
									<span class="icon icon-calendar-o"></span>
									Do Google kalendáře
								</span>
							</a>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-primary btn-s btn-icon-after">
								<span>
									Do Google kalendáře
									<span class="icon icon-calendar-o"></span>
								</span>
							</a>
							<a href="#" class="btn btn-primary btn-icon-after">
								<span>
									Do Google kalendáře
									<span class="icon icon-calendar-o"></span>
								</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Tlačítka s popupem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tlačítko s vyjížděcím submenu. Hlavní kostrou je .btn-dropdown, do kterého se vkládá tlačítko s libovolnými modifikátory a .btn-dropdown__menu se seznamem odkazů.
						</p>
						<p>
							Klikem na .btn se toggluje modifikátor is-open na obalující .btn-dropdown, což způsobí zobrazení popupu.
						</p>
						<p>
							Popup .btn-drowdown__menu má několik modifikátorů pro zobrazení na příslušném místě od tlačítka:<br />
							<strong>btn-dropdown__menu--right</strong> - doprava od tlačítka<br />
							<strong>btn-dropdown__menu--left</strong> - doleva od tlačítka<br />
							<strong>btn-dropdown__menu--down</strong> - dolů od tlačítka<br />
							<strong>btn-dropdown__menu--up</strong> - nahoru od tlačítka<br />
							Ke logickému otevírání je potřeba upravit i ikonka, aby ukazovala kam se bude popup otevírat: icon-angle-right, icon-angle-left, icon-angle-down či icon-angle-up.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="btn-wrap">
							<div class="btn-dropdown">
								<a href="#" class="btn btn-primary btn-s btn-icon-after">
									<span>
										Nabídka
										<span class="icon icon-angle-right"></span>
									</span>
								</a>
								<div class="btn-dropdown__menu btn-dropdown__menu--right">
									<ul class="btn-dropdown__list">
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Pellentesque mollis</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Donec efficitur rhoncus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Quisque ut lacus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-user"></span>
												Donec vel diam
											</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-envelope-o"></span>
												<span class="tag">255</span>
												<span class="ctx">Aliquam non</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-dropdown">
								<a href="#" class="btn btn-primary btn-s btn-icon-before">
									<span>
										<span class="icon icon-angle-left"></span>
										Nabídka
									</span>
								</a>
								<div class="btn-dropdown__menu btn-dropdown__menu--left">
									<ul class="btn-dropdown__list">
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Pellentesque mollis</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Donec efficitur rhoncus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Quisque ut lacus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-user"></span>
												Donec vel diam
											</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-envelope-o"></span>
												<span class="tag">255</span>
												<span class="ctx">Aliquam non</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-dropdown">
								<a href="#" class="btn btn-primary btn-s btn-icon-after">
									<span>
										Nabídka
										<span class="icon icon-angle-down"></span>
									</span>
								</a>
								<div class="btn-dropdown__menu btn-dropdown__menu--down">
									<ul class="btn-dropdown__list">
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Pellentesque mollis</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Donec efficitur rhoncus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Quisque ut lacus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-user"></span>
												Donec vel diam
											</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-envelope-o"></span>
												<span class="tag">255</span>
												<span class="ctx">Aliquam non</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="btn-dropdown">
								<a href="#" class="btn btn-primary btn-s btn-icon-after">
									<span>
										Nabídka
										<span class="icon icon-angle-up"></span>
									</span>
								</a>
								<div class="btn-dropdown__menu btn-dropdown__menu--up">
									<ul class="btn-dropdown__list">
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Pellentesque mollis</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Donec efficitur rhoncus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link">Quisque ut lacus</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-user"></span>
												Donec vel diam
											</a>
										</li>
										<li class="btn-dropdown__item">
											<a href="#" class="btn-dropdown__link with-icon">
												<span class="icon icon-envelope-o"></span>
												<span class="tag">255</span>
												<span class="ctx">Aliquam non</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Tlačítka fakult</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Barevná tlačítka jednotlivých fakult. Pokud chcete na svém webu používat tlačítka barev jiných fakult, pak namísto btn-primary (která má barvu dle vaší fakulty – není-li stanoveno jinak) použijte btn-* se zkratkou fakulty:<br />
							$muni: #002776;<br />
							$law: #7f379b;<br />
							$med: #f01928;<br />
							$sci: #01af40;<br />
							$fi: #f2d45c;<br />
							$fss: #007b69;<br />
							$fsps: #009aa6;<br />
							$phil: #00a3e2;<br />
							$ped: #ffa030;<br />
							$econ: #782328;
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<strong>Právnická fakulta</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-law">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-law btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-law btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-law btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Lékařská fakulta</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-med">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-med btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-med btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-med btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Přírodovědecká fakulta</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-sci">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-sci btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-sci btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-sci btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Fak. informatiky</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-fi">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fi btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fi btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fi btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Fak. sociálních studií</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-fss">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fss btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fss btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fss btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Fak. sportovních studií</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-fsps">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fsps btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fsps btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-fsps btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Filozofická fakulta</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-phil">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-phil btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-phil btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-phil btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Pedagogická fakulta</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-ped">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-ped btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-ped btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-ped btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Ekonomocko - správní fakulta</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-econ">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-econ btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-econ btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-econ btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
						<br />
						<p>
							<strong>Masarykova univerzita</strong>
						</p>
						<p class="btn-wrap">
							<a href="#" class="btn btn-muni">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-muni btn-s">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-muni btn-border">
								<span>Mám zájem</span>
							</a>

							<a href="#" class="btn btn-muni btn-s btn-border">
								<span>Mám zájem</span>
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Speciální tlačítka pro tmavá pozadí</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro bílé tlačítko slouží modifikátor btn-white, který se vkládá namísto modifikátoru btn-primary.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="sk-bg">
						<div class="row-main">
							<p class="btn-wrap">
								<a href="#" class="btn btn-white">
									<span>Inverzní tlačítko</span>
								</a>

								<a href="#" class="btn btn-white btn-s">
									<span>Inverzní tlačítko</span>
								</a>

								<a href="#" class="btn btn-white btn-border">
									<span>Inverzní tlačítko</span>
								</a>

								<a href="#" class="btn btn-white btn-s btn-border">
									<span>Inverzní tlačítko</span>
								</a>
							</p>
						</div>
					</div>
					<div class="sk-bg sk-bg-blue">
						<div class="row-main">
							<p class="btn-wrap">
								<a href="#" class="btn btn-white">
									<span>Inverzní tlačítko</span>
								</a>

								<a href="#" class="btn btn-white btn-s">
									<span>Inverzní tlačítko</span>
								</a>

								<a href="#" class="btn btn-white btn-border">
									<span>Inverzní tlačítko</span>
								</a>

								<a href="#" class="btn btn-white btn-s btn-border">
									<span>Inverzní tlačítko</span>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

<?php
	$title = 'Vizitky';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.11</strong>
						Boxy – Vizitky
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_vcard.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazení konktaktu. Obrázek by neměl být větší než 140x180 px
						</p>
						<p>
							Tato molekula využívá atomy <a href="a-05-ikonky.html">ikonek</a> a <a href="a-06-odkazy.html">odkazů</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-vcard">
							<div class="box-vcard__inner">
								<p class="box-vcard__img">
									<img src="../img/illust/vcard.jpg" alt="" width="140" height="180" />
								</p>
								<div class="box-vcard__content">
									<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
									<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
									<hr>
									<p>
										Arna Nováka 1/1<br />
										602 00 Brno<br />
										bud. C/02013
									</p>
									<p>
										<a href="#" class="bold link-icon link-icon--after">Zobrazit na mapě <span class="icon icon-map-marker"></span></a>
									</p>

									<table class="table-vcard">
										<tbody>
											<tr>
												<th>Telefon:</th>
												<td>549 49 1545</td>
											</tr>
											<tr>
												<th>E-mail:</th>
												<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
											</tr>
											<tr>
												<th>WWW:</th>
												<td><a href="http://phil.muni.cz/dekan">http://phil.muni.cz/dekan</a></td>
											</tr>
										</tbody>
									</table>
									<p>
										<a href="#" class="bold link-icon link-icon--after">Napsat zprávu <span class="icon icon-envelope"></span></a>
									</p>

									<div class="box-vcard__foot">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec posuere lectus, quis ultricies lorem. Cras fermentum ante felis, eget varius metus cursus eu. Nam pharetra ut metus et sagittis. Pellentesque at nisl finibus, dapibus massa nec, aliquam nibh. Nunc blandit tellus ex, ut fringilla justo hendrerit nec. Nunc quis lorem ut diam sodales vehicula. Cras nisl sapien, accumsan nec nulla ac, sagittis tincidunt massa. Vivamus nec eros eros. Cras dignissim ligula in mollis aliquam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bez obrázku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní molekuly – pouze je přidán modifikátor box-vcard--noimg na box-vcard a odstranit obrázek s jeho obalem z html. Tím se box roztáhne na celou šířku a nebude držet místo pro obrázek.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-vcard box-vcard--noimg">
							<div class="box-vcard__inner">
								<div class="box-vcard__content">
									<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
									<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
									<hr>
									<p>
										Arna Nováka 1/1<br />
										602 00 Brno<br />
										bud. C/02013
									</p>
									<p>
										<a href="#" class="bold link-icon link-icon--after">Zobrazit na mapě <span class="icon icon-map-marker"></span></a>
									</p>

									<table class="table-vcard">
										<tbody>
											<tr>
												<th>Telefon:</th>
												<td>549 49 1545</td>
											</tr>
											<tr>
												<th>E-mail:</th>
												<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
											</tr>
											<tr>
												<th>WWW:</th>
												<td><a href="http://phil.muni.cz/dekan">http://phil.muni.cz/dekan</a></td>
											</tr>
										</tbody>
									</table>
									<p>
										<a href="#" class="bold link-icon link-icon--after">Napsat zprávu <span class="icon icon-envelope"></span></a>
									</p>

									<div class="box-vcard__foot">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec posuere lectus, quis ultricies lorem. Cras fermentum ante felis, eget varius metus cursus eu. Nam pharetra ut metus et sagittis. Pellentesque at nisl finibus, dapibus massa nec, aliquam nibh. Nunc blandit tellus ex, ut fringilla justo hendrerit nec. Nunc quis lorem ut diam sodales vehicula. Cras nisl sapien, accumsan nec nulla ac, sagittis tincidunt massa. Vivamus nec eros eros. Cras dignissim ligula in mollis aliquam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velká vizitka</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z defaultní molekuly – pouze je přidán modifikátor box-vcard--big na box-vcard. Tím vznikne prostor pro větší obrázek (210x270 px)
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-vcard box-vcard--big">
							<div class="box-vcard__inner">
								<p class="box-vcard__img">
									<img src="../img/illust/vcard.jpg" alt="" width="210" height="270" />
								</p>
								<div class="box-vcard__content">
									<h2 class="box-vcard__name">Mgr. Daniel Mikšík</h2>
									<p class="box-vcard__position">vedoucí pracoviště</p>
									<hr>
									<table class="table-vcard">
										<tbody>
											<tr>
												<th>Kancelář:</th>
												<td>budova B1/B1.N03.009</td>
											</tr>
											<tr>
												<th>Telefon:</th>
												<td>549 49 1507, 777 111 651</td>
											</tr>
											<tr>
												<th>E-mail:</th>
												<td><a href="mailto:miksik@phil.muni.cz">miksik@phil.muni.cz</a></td>
											</tr>
										</tbody>
									</table>
									<p>
										<strong>Pomůže vám s těmito otázkami</strong>
									</p>
									<ul>
										<li>projekty – příprava, sledování, nastavení úvazků</li>
										<li>přeúčtování mezd </li>
										<li>odměny</li>
										<li>změny pracovních smluv</li>
										<li>nástup zaměstnanců, ukončování pracovních poměrů</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velká vizitka bez obrázku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z velké molekuly – pouze je přidán modifikátor box-vcard--big na box-vcard. Tím vznikne prostor pro větší obrázek (210x270 px)
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-vcard box-vcard--big box-vcard--noimg">
							<div class="box-vcard__inner">
								<div class="box-vcard__content">
									<h2 class="box-vcard__name">Mgr. Daniel Mikšík</h2>
									<p class="box-vcard__position">vedoucí pracoviště</p>
									<hr>
									<table class="table-vcard">
										<tbody>
											<tr>
												<th>Kancelář:</th>
												<td>budova B1/B1.N03.009</td>
											</tr>
											<tr>
												<th>Telefon:</th>
												<td>549 49 1507, 777 111 651</td>
											</tr>
											<tr>
												<th>E-mail:</th>
												<td><a href="mailto:miksik@phil.muni.cz">miksik@phil.muni.cz</a></td>
											</tr>
										</tbody>
									</table>
									<p>
										<strong>Pomůže vám s těmito otázkami</strong>
									</p>
									<ul>
										<li>projekty – příprava, sledování, nastavení úvazků</li>
										<li>přeúčtování mezd </li>
										<li>odměny</li>
										<li>změny pracovních smluv</li>
										<li>nástup zaměstnanců, ukončování pracovních poměrů</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velká vizitka - různé formátování obsahu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázka formátování obsahu pomocí atomu <a href="a-02-grid.html">gridu</a>
						</p>
					</div>
					<div class="sk-example__content">
						<?php
							include 'part/molecules/box-vcard-1.php';
						?>

						<div class="box-vcard box-vcard--big">
							<div class="box-vcard__inner">
								<p class="box-vcard__img">
									<img src="../img/illust/vcard.jpg" alt="" width="210" height="270" />
								</p>
								<div class="box-vcard__content">
									<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
									<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
									<hr>
									<div class="grid">
										<div class="grid__cell size--l--4-12">
											<p>
												Arna Nováka 1/1<br />
												602 00 Brno<br />
												bud. C/02013
											</p>
											<p>
												<a href="#" class="bold link-icon link-icon--after">Zobrazit na mapě <span class="icon icon-map-marker"></span></a>
											</p>
										</div>

										<div class="grid__cell size--m--2-4 size--l--8-12">
											<table class="table-vcard">
												<tbody>
													<tr>
														<th>Telefon:</th>
														<td>549 49 1545</td>
													</tr>
													<tr>
														<th>E-mail:</th>
														<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
													</tr>
													<tr>
														<th>WWW:</th>
														<td><a href="http://phil.muni.cz/dekan">http://phil.muni.cz/dekan</a></td>
													</tr>
												</tbody>
											</table>
											<p>
												<a href="#" class="bold link-icon link-icon--after">Napsat zprávu <span class="icon icon-envelope"></span></a>
											</p>
										</div>
									</div>

									<div class="box-vcard__foot">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec posuere lectus, quis ultricies lorem. Cras fermentum ante felis, eget varius metus cursus eu. Nam pharetra ut metus et sagittis. Pellentesque at nisl finibus, dapibus massa nec, aliquam nibh. Nunc blandit tellus ex, ut fringilla justo hendrerit nec. Nunc quis lorem ut diam sodales vehicula. Cras nisl sapien, accumsan nec nulla ac, sagittis tincidunt massa. Vivamus nec eros eros. Cras dignissim ligula in mollis aliquam.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="box-vcard box-vcard--big box-vcard--noimg">
							<div class="box-vcard__inner">
								<div class="box-vcard__content">
									<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
									<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
									<hr>
									<div class="grid">
										<div class="grid__cell size--l--4-12">
											<p>
												Arna Nováka 1/1<br />
												602 00 Brno<br />
												bud. C/02013
											</p>
											<p>
												<a href="#" class="bold link-icon link-icon--after">Zobrazit na mapě <span class="icon icon-map-marker"></span></a>
											</p>
										</div>

										<div class="grid__cell size--m--2-4 size--l--8-12">
											<table class="table-vcard">
												<tbody>
													<tr>
														<th>Telefon:</th>
														<td>549 49 1545</td>
													</tr>
													<tr>
														<th>E-mail:</th>
														<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
													</tr>
													<tr>
														<th>WWW:</th>
														<td><a href="http://phil.muni.cz/dekan">http://phil.muni.cz/dekan</a></td>
													</tr>
												</tbody>
											</table>
											<p>
												<a href="#" class="bold link-icon link-icon--after">Napsat zprávu <span class="icon icon-envelope"></span></a>
											</p>
										</div>
									</div>

									<div class="box-vcard__foot">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec posuere lectus, quis ultricies lorem. Cras fermentum ante felis, eget varius metus cursus eu. Nam pharetra ut metus et sagittis. Pellentesque at nisl finibus, dapibus massa nec, aliquam nibh. Nunc blandit tellus ex, ut fringilla justo hendrerit nec. Nunc quis lorem ut diam sodales vehicula. Cras nisl sapien, accumsan nec nulla ac, sagittis tincidunt massa. Vivamus nec eros eros. Cras dignissim ligula in mollis aliquam.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Malá vizitka</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Zmenšené vizitky. Lze je vytvořit modifikátorem box-vcard--simple nebo box-vcard--compact na .box-vcard a úpravou vnitřního HTML. Rozdíl mezi těmito dvěma modifikátory je pouze ve velikosti obsahu, kdy compact je menší (v našem případě jsou to ty příklady napravo).
						</p>
						<p>
							Obrázek by neměl být větší než 105x135 px. Pokud nechceme, aby byla vizitka odkazem, pak .box-vcard__inner vytvoříme pomocí elementu div, v opačném případně jej uděláme pomocí elementu a.
						</p>
						<p>
							Molekulu jsme pro lepší výpis zkombinovali s molekulou <a href="./m-04-01-obecny.html">rozcestníku</a>. Slouží k výpisu více vizitek za sebou.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--m--2-4">
									<div class="box-vcard box-vcard--simple">
										<a href="#" class="box-vcard__inner">
											<p class="box-vcard__img">
												<img src="../img/illust/vcard.jpg" alt="" width="105" height="135" />
											</p>
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
												<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
											</div>
										</a>
									</div>
								</li>
								<li class="grid__cell size--m--2-4">
									<div class="box-vcard box-vcard--compact">
										<div class="box-vcard__inner">
											<p class="box-vcard__img">
												<img src="../img/illust/vcard.jpg" alt="" width="105" height="135" />
											</p>
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
												<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
												<table class="table-vcard">
													<tbody>
														<tr>
															<th>Telefon:</th>
															<td>549 49 1545</td>
														</tr>
														<tr>
															<th>E-mail:</th>
															<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</li>
								<li class="grid__cell size--m--2-4">
									<div class="box-vcard box-vcard--simple">
										<a href="#" class="box-vcard__inner">
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
												<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
											</div>
										</a>
									</div>
								</li>
								<li class="grid__cell size--m--2-4">
									<div class="box-vcard box-vcard--compact">
										<div class="box-vcard__inner">
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
												<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
												<table class="table-vcard">
													<tbody>
														<tr>
															<th>Telefon:</th>
															<td>549 49 1545</td>
														</tr>
														<tr>
															<th>E-mail:</th>
															<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Vizitky výpis</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vypis menších ikonek. Pokud chceme použít řádek bez obrázku pak vložíme modifikátor box-vcards-list__item--noimg na .box-vcards-list__item. Obrázek by neměl být větší než 70x90 px.
						</p>
						<p>
							Molekuly jsme umístili do <a href="a-02-grid.html">gridu</a> pro ušetření místa.
						</p>
						<p>
							Výpis může být také statický (nebude odkazovat na detail osoby). Stačí z a.box-vcards-list__inner udělat element div.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="grid">
							<div class="grid__cell size--m--2-4">
								<div class="box-vcards-list">
									<ul class="box-vcards-list__list">
										<li class="box-vcards-list__item">
											<div class="box-vcards-list__inner">
												<p class="box-vcards-list__img">
													<img src="../img/illust/vcard.jpg" alt="" width="70" height="90" />
												</p>
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</div>
										</li>
										<li class="box-vcards-list__item">
											<a href="#" class="box-vcards-list__inner">
												<p class="box-vcards-list__img">
													<img src="../img/illust/vcard.jpg" alt="" width="70" height="90" />
												</p>
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</a>
										</li>
										<li class="box-vcards-list__item">
											<a href="#" class="box-vcards-list__inner">
												<p class="box-vcards-list__img">
													<img src="../img/illust/vcard.jpg" alt="" width="70" height="90" />
												</p>
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</a>
										</li>
										<li class="box-vcards-list__item">
											<a href="#" class="box-vcards-list__inner">
												<p class="box-vcards-list__img">
													<img src="../img/illust/vcard.jpg" alt="" width="70" height="90" />
												</p>
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="grid__cell size--m--2-4">
								<div class="box-vcards-list">
									<ul class="box-vcards-list__list">
										<li class="box-vcards-list__item box-vcards-list__item--noimg">
											<a href="#" class="box-vcards-list__inner">
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</a>
										</li>
										<li class="box-vcards-list__item box-vcards-list__item--noimg">
											<a href="#" class="box-vcards-list__inner">
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</a>
										</li>
										<li class="box-vcards-list__item box-vcards-list__item--noimg">
											<a href="#" class="box-vcards-list__inner">
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
											</a>
										</li>
										<li class="box-vcards-list__item box-vcards-list__item--noimg">
											<a href="#" class="box-vcards-list__inner">
												<div class="box-vcards-list__content">
													<h2 class="box-vcards-list__name">prof. PhDr. Milan Pol, CSc.</h2>
													<p class="box-vcards-list__position">děkan Filozofické fakulty MU</p>
												</div>
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
						<h2 class="sk-annot__title">Ukázka použití ve výpise</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vychází z různých typů vizitek v kombinaci s molekulou <a href="./m-04-01-obecny.html">rozcestníku</a>. Slouží k výpisu více vizitek za sebou.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="crossroad-std">
							<ul class="grid">
								<li class="grid__cell size--l--12-12">
									<div class="box-vcard box-vcard--big">
										<div class="box-vcard__inner">
											<p class="box-vcard__img">
												<img src="../img/illust/vcard.jpg" alt="" width="210" height="270" />
											</p>
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">Mgr. Daniel Mikšík</h2>
												<p class="box-vcard__position">vedoucí pracoviště</p>
												<hr>
												<table class="table-vcard">
													<tbody>
														<tr>
															<th>Kancelář:</th>
															<td>budova B1/B1.N03.009</td>
														</tr>
														<tr>
															<th>Telefon:</th>
															<td>549 49 1507, 777 111 651</td>
														</tr>
														<tr>
															<th>E-mail:</th>
															<td><a href="mailto:miksik@phil.muni.cz">miksik@phil.muni.cz</a></td>
														</tr>
													</tbody>
												</table>
												<p>
													<strong>Pomůže vám s těmito otázkami</strong>
												</p>
												<ul>
													<li>projekty – příprava, sledování, nastavení úvazků</li>
													<li>přeúčtování mezd </li>
													<li>odměny</li>
													<li>změny pracovních smluv</li>
													<li>nástup zaměstnanců, ukončování pracovních poměrů</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="grid__cell size--l--6-12">
									<div class="box-vcard">
										<div class="box-vcard__inner">
											<p class="box-vcard__img">
												<img src="../img/illust/vcard.jpg" alt="" width="140" height="180" />
											</p>
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">prof. PhDr. Milan Pol, CSc.</h2>
												<p class="box-vcard__position">děkan Filozofické fakulty MU</p>
												<hr>
												<p>
													Arna Nováka 1/1<br />
													602 00 Brno<br />
													bud. C/02013
												</p>
												<p>
													<a href="#" class="bold link-icon link-icon--after">Zobrazit na mapě <span class="icon icon-map-marker"></span></a>
												</p>

												<table class="table-vcard">
													<tbody>
														<tr>
															<th>Telefon:</th>
															<td>549 49 1545</td>
														</tr>
														<tr>
															<th>E-mail:</th>
															<td><a href="mailto:dekan@phil.muni.cz">dekan@phil.muni.cz</a></td>
														</tr>
														<tr>
															<th>WWW:</th>
															<td><a href="http://phil.muni.cz/dekan">http://phil.muni.cz/dekan</a></td>
														</tr>
													</tbody>
												</table>
												<p>
													<a href="#" class="bold link-icon link-icon--after">Napsat zprávu <span class="icon icon-envelope"></span></a>
												</p>

												<div class="box-vcard__foot">
													<p>
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec posuere lectus, quis ultricies lorem. Cras fermentum ante felis, eget varius metus cursus eu. Nam pharetra ut metus et sagittis. Pellentesque at nisl finibus, dapibus massa nec, aliquam nibh. Nunc blandit tellus ex, ut fringilla justo hendrerit nec. Nunc quis lorem ut diam sodales vehicula. Cras nisl sapien, accumsan nec nulla ac, sagittis tincidunt massa. Vivamus nec eros eros. Cras dignissim ligula in mollis aliquam.
													</p>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li class="grid__cell size--l--6-12">
									<div class="box-vcard">
										<div class="box-vcard__inner">
											<p class="box-vcard__img">
												<img src="../img/illust/vcard.jpg" alt="" width="140" height="180" />
											</p>
											<div class="box-vcard__content">
												<h2 class="box-vcard__name">Mgr. Daniel Mikšík</h2>
												<p class="box-vcard__position">vedoucí pracoviště</p>
												<hr>
												<table class="table-vcard">
													<tbody>
														<tr>
															<th>Kancelář:</th>
															<td>budova B1/B1.N03.009</td>
														</tr>
														<tr>
															<th>Telefon:</th>
															<td>549 49 1507, 777 111 651</td>
														</tr>
														<tr>
															<th>E-mail:</th>
															<td><a href="mailto:miksik@phil.muni.cz">miksik@phil.muni.cz</a></td>
														</tr>
													</tbody>
												</table>
												<p>
													<strong>Pomůže vám s těmito otázkami</strong>
												</p>
												<ul>
													<li>projekty – příprava, sledování, nastavení úvazků</li>
													<li>přeúčtování mezd </li>
													<li>odměny</li>
													<li>změny pracovních smluv</li>
													<li>nástup zaměstnanců, ukončování pracovních poměrů</li>
												</ul>
											</div>
										</div>
									</div>
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

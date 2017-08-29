<?php
	$title = 'Carousely';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.09</strong>
						Boxy - Carousely
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_slider.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/cycle.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní carousel</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro carousel. Carousel se překlikávají pomocí JavaScriptu. Pro správnou funčnost carouselu je potřeba nastavit na obal class .js-slider. Dále dodržet strukturu vnitřních elementů .box-slider__wrap &lt; .box-slider__list &lt; .box-slider__item. V ukázce jsme carousel obalili do gridu 8/12.
						</p>
						<p>
							Do .box-slider__item lze vkládat různé molekuly. V našich ukázkách jsme využili atom <a href="a-12-obrazky.html">obrázky</a>.
						</p>
						<p>
							Přidání nadpisu a popisku obrázku se nastavuje pomocí atributů data-title a date-desc na elementu .box-slider__item.
						</p>
						<p>
							Délka zobrazení jednotlivých slidů lze nastavit pomocí data-atributu. Délka se zadává v ms.
						</p>
						<p>
							Šipky se zobrazují na touch zařízeních ihned a na no-touch zařízeních na hover. K tomuto pomáhá detekce z pluginu modernizr.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="grid grid--center">
							<div class="grid__cell size--l--8-12">
								<div class="box-slider js-slider" data-timeout="1000">
									<div class="box-slider__wrap">
										<div class="box-slider__list">
											<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="http://placehold.it/768x576" width="768" height="576" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
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

									<div class="box-slider__overlay"></div>
									<div class="box-slider__pager"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S popiskem pod</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Přidání modifikátoru box-slider--small na box-slider se zobrazí popisek a stránkování až pod obrázek.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="grid grid--center">
							<div class="grid__cell size--l--4-12">
								<div class="box-slider box-slider--small js-slider">
									<div class="box-slider__wrap">
										<div class="box-slider__list">
											<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
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

									<div class="box-slider__overlay"></div>
									<div class="box-slider__pager"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázky použití v různých gridech</h2>
					</div>
					<div class="sk-example__content">
						<div class="grid">
							<div class="grid__cell size--l--8-12">
								<div class="box-slider js-slider" data-timeout="1000">
									<div class="box-slider__wrap">
										<div class="box-slider__list">
											<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="http://placehold.it/768x576" width="768" height="576" alt="">
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
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

									<div class="box-slider__overlay"></div>
									<div class="box-slider__pager"></div>
								</div>
							</div>

							<div class="grid__cell size--l--4-12">
								<div class="box-slider box-slider--small js-slider">
									<div class="box-slider__wrap">
										<div class="box-slider__list">
											<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
											</div>
											<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
												<div class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
												</div>
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

									<div class="box-slider__overlay"></div>
									<div class="box-slider__pager"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="grid">
						<div class="grid__cell size--l--6-12">
							<div class="box-slider js-slider">
								<div class="box-slider__wrap">
									<div class="box-slider__list">
										<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
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

								<div class="box-slider__overlay"></div>
								<div class="box-slider__pager"></div>
							</div>
						</div>

						<div class="grid__cell size--l--3-12">
							<div class="box-slider box-slider--small js-slider">
								<div class="box-slider__wrap">
									<div class="box-slider__list">
										<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
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

								<div class="box-slider__overlay"></div>
								<div class="box-slider__pager"></div>
							</div>
						</div>

						<div class="grid__cell size--l--3-12">
							<div class="box-slider box-slider--small js-slider">
								<div class="box-slider__wrap">
									<div class="box-slider__list">
										<div class="box-slider__item" data-title="Nadpis slidu" data-desc="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<div class="box-slider__item" data-title="Nadpis druhého slidu" data-desc="Lorem ipsum dolor sit amet...">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
										</div>
										<div class="box-slider__item" data-title="Nadpis třetího slidu" data-desc="Ipsum ipsum ipsum">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
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

								<div class="box-slider__overlay"></div>
								<div class="box-slider__pager"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example" style="margin-top: 60px;">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní carousel video</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí komponenta jen je uvnitř použitý atom s videem.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="grid grid--center">
							<div class="grid__cell size--l--6-12">
								<div class="box-slider box-slider--video js-slider">
									<div class="box-slider__wrap">
										<div class="box-slider__list">
											<div class="box-slider__item box-slider__item--video" data-title="Nadpis video slidu">
												<a href="#" class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
													<span class="image__play">
														<span class="icon icon-play"></span>
														Přehrát
													</span>
												</a>
											</div>
											<div class="box-slider__item box-slider__item--video" data-title="Nadpis druhého video slidu">
												<a href="#" class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
													<span class="image__play">
														<span class="icon icon-play"></span>
														Přehrát
													</span>
												</a>
											</div>
											<div class="box-slider__item box-slider__item--video" data-title="Nadpis třetího video slidu">
												<a href="#" class="image image--4by3">
													<div class="image__holder">
														<div class="image__inner">
															<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
														</div>
													</div>
													<span class="image__play">
														<span class="icon icon-play"></span>
														Přehrát
													</span>
												</a>
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

									<div class="box-slider__overlay"></div>
									<div class="box-slider__pager"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="grid" style="margin-top: 60px;">
					<div class="grid__cell size--l--6-12">
						<div class="sk-example">
							<div class="sk-annot">
								<h2 class="sk-annot__title">Posuvný carousel</h2>
							</div>
							<div class="sk-example__comment">
								<p>
									Ukázka kobinace dvou Carouselů. Je to speciální Carousel pro detail produktu, u kterého je potřeba dodržet strukturu HTML.
								</p>
							</div>
							<div class="sk-example__content">
								<div class="box-slider-pager js-slider-pager">
									<div class="box-slider js-slider">
										<div class="box-slider__wrap">
											<div class="box-slider__list">
												<?php for ($i=0; $i < 8; $i++): ?>
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
												<?php for ($i=0; $i < 8; $i++): ?>
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
						</div>
					</div>

					<div class="grid__cell size--l--6-12">
						<div class="sk-example">
							<div class="sk-annot">
								<h2 class="sk-annot__title">Tři položky</h2>
							</div>
							<div class="sk-example__comment">
								<p>
									Ukázka posuvného carouselu se třemi položkami
								</p>
							</div>
							<div class="sk-example__content">
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
						</div>
					</div>
				</div>

				<div class="grid" style="margin-top: 60px;">
					<div class="grid__cell size--l--6-12">
						<div class="sk-example">
							<div class="sk-annot">
								<h2 class="sk-annot__title">Dvě položky</h2>
							</div>
							<div class="sk-example__comment">
								<p>
									Ukázka posuvného carouselu se dvěmi položkami.
								</p>
							</div>
							<div class="sk-example__content">
								<div class="box-slider-pager js-slider-pager">
									<div class="box-slider js-slider">
										<div class="box-slider__wrap">
											<div class="box-slider__list">
												<?php for ($i=0; $i < 2; $i++): ?>
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
												<?php for ($i=0; $i < 2; $i++): ?>
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
						</div>
					</div>
					<div class="grid__cell size--l--6-12">
						<div class="sk-example">
							<div class="sk-annot">
								<h2 class="sk-annot__title">Jedna položka</h2>
							</div>
							<div class="sk-example__comment">
								<p>
									Ukázka posuvného carouselu s jendou položkou.
								</p>
							</div>
							<div class="sk-example__content">
								<div class="box-slider-pager js-slider-pager">
									<div class="box-slider js-slider">
										<div class="box-slider__wrap">
											<div class="box-slider__list">
												<?php for ($i=0; $i < 1; $i++): ?>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Carousel pás</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázka posuvného carouselu s více položkami na řádku. U tohoto carouselu je nadpis a popisek rovnou v HTML (není tedy generovaný pomocí data atributů).
						</p>
						<p>
							Do elementu .box-slider__item lze vložit různé komponenty / atomy.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-slider box-slider--carousel js-slider">
							<div class="box-slider__wrap">
								<div class="box-slider__list">
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item box-slider__item--video">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
													<span class="image__play image__play--small">
														<span class="icon icon-play"></span>
													</span>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku video</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
									<div class="box-slider__item">
										<a href="#">
											<div class="image image--4by3">
												<div class="image__holder">
													<div class="image__inner">
														<img src="../img/illust/carousel.jpg" alt="" width="768" height="576" />
													</div>
												</div>
											</div>
											<div class="box-slider__content">
												<h2 class="box-slider__title">Nadpis článku</h2>
												<p>
													Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající
												</p>
											</div>
										</a>
									</div>
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
							<div class="box-slider__pager"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

<?php
	$title = 'Vyjádření klientů';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.01</strong>
						Boxy – Vyjádření klientů
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/molecules/box/_testimonial.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__umbrac">
						<p>
							Tento blok v Umbracu vytvoříte...
						</p>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s vyjádřením. Autor nemusí být odkazem. Pozor na správné použití uvozovek v tagu .box-testimonial__comment.
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial">
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author">
								<a href="#">
									<strong>Jana Nejedlá</strong><br />
									studentka druhého ročníku
								</a>
							</cite>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S avatarem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s vyjádřením doplněná o avatar. Na box-testimonial__author se přidává modifikátor with-img. Obrázek by měl mít rozměr 62x62px. Opět nemusí být autor odkazem.
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial">
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author with-img">
								<a href="#">
									<span class="box-testimonial__author__img">
										<img src="../img/illust/avatar.png" alt="Avatar" width="62" height="62" />
									</span>
									<strong>Jana Nejedlá</strong><br />
									studentka druhého ročníku
								</a>
							</cite>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S avatarem a ohraničením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s avatarem doplněná o ohraničení. Na box-testimonial se přidává modifikátor box-testimonial--bordered. Může se použít i verze bez avataru.
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial box-testimonial--bordered">
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author with-img">
								<a href="#">
									<span class="box-testimonial__author__img">
										<img src="../img/illust/avatar.png" alt="Avatar" width="62" height="62" />
									</span>
									<strong>Jana Nejedlá</strong><br />
									studentka druhého ročníku
								</a>
							</cite>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S avatarem a ohraničením nahoře a dole</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s avatarem doplněná o ohraničení nahoře a dole. Na box-testimonial se přidává modifikátor box-testimonial--bordered-top-bottom. Může se použít i verze bez avataru.
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial box-testimonial--bordered-top-bottom">
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author with-img">
								<a href="#">
									<span class="box-testimonial__author__img">
										<img src="../img/illust/avatar.png" alt="Avatar" width="62" height="62" />
									</span>
									<strong>Jana Nejedlá</strong><br />
									studentka druhého ročníku
								</a>
							</cite>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S avatarem a pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s avatarem doplněná o pozadí primární barvy. Na box-testimonial se přidává modifikátor box-testimonial--background. Může se použít i verze bez avataru.
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial box-testimonial--background">
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author with-img">
								<a href="#">
									<span class="box-testimonial__author__img">
										<img src="../img/illust/avatar.png" alt="Avatar" width="62" height="62" />
									</span>
									<strong>Jana Nejedlá</strong><br />
									studentka druhého ročníku
								</a>
							</cite>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S velkým avatarem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s vyjádřením doplněná o velký avatar. Oproti výchozí molekule byl na box-testimonial přidán modifikátor box-testimonial--avatar a lehce bylo změněno html. Obrázek by měl mít rozměr 240x240px. Autor a obrázek může být doplněn o odkaz.
						</p>
						<p>
							CTA tlačítko lze použít kterékoliv z atomu <a href="a-04-tlacitka.html">Button</a>
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial box-testimonial--avatar">
							<p class="box-testimonial__img">
								<img src="../img/illust/avatar-bigger.png" alt="Avatar" width="240" height="240" />
							</p>
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author">
								<strong>Jana Nejedlá</strong><br />
								studentka druhého ročníku
							</cite>
							<p>
								<a href="#" class="btn btn-primary btn-s">
									<span>Button</span>
								</a>
							</p>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S velkým avatarem a ohraničením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z molekuly <strong>S velkým avatarem</strong> doplněná o ohraničení. Oproti molekule byl na box-testimonial přidán ještě modifikátor box-testimonial--bordered. Obrázek by měl mít rozměr 180x180px.
						</p>
						<p>
							CTA tlačítko lze použít kterékoliv z atomu <a href="a-04-tlacitka.html">Button</a>
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial box-testimonial--avatar box-testimonial--bordered">
							<p class="box-testimonial__img">
								<img src="../img/illust/avatar-big.png" alt="Avatar" width="180" height="180" />
							</p>
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author">
								<strong>Jana Nejedlá</strong><br />
								studentka druhého ročníku
							</cite>
							<p>
								<a href="#" class="btn btn-primary btn-s">
									<span>Button</span>
								</a>
							</p>
						</blockquote>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S avatarem a pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z molekuly <strong>S velkým avatarem</strong> doplněná o pozadí. Oproti molekule byl na box-testimonial přidán ještě modifikátor box-testimonial--background. Obrázek by měl mít rozměr 180x180px.
						</p>
						<p>
							CTA tlačítko lze použít kterékoliv z atomu <a href="a-04-tlacitka.html">Button</a>
						</p>
					</div>
					<div class="sk-example__content">
						<blockquote class="box-testimonial box-testimonial--avatar box-testimonial--background">
							<p class="box-testimonial__img">
								<img src="../img/illust/avatar-big.png" alt="Avatar" width="180" height="180" />
							</p>
							<p class="box-testimonial__comment">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
							<cite class="box-testimonial__author">
								<strong>Jana Nejedlá</strong><br />
								studentka druhého ročníku
							</cite>
							<p>
								<a href="#" class="btn btn-white btn-border btn-s">
									<span>Button</span>
								</a>
							</p>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S fotkou a ohraničením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z molekuly <a href="m-02-17-hero-boxy.html">Hero box</a>. Pouze je upravené HTML, aby bylo více sémantické (přidány cite a blockquote elementy)
						</p>
						<p>
							CTA tlačítko lze použít kterékoliv z atomu <a href="a-04-tlacitka.html">Button</a>
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<blockquote class="box-hero box-hero--bordered">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<p class="big">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
									<cite class="box-testimonial__author">
										<strong class="dark">Jana Nejedlá</strong><br />
										studentka druhého ročníku
									</cite>
									<p>
										<a href="#" class="btn btn-primary btn-s">
											<span>Button</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</blockquote>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S fotkou a pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z molekuly <a href="m-02-17-hero-boxy.html">Hero box</a>. Pouze je upravené HTML, aby bylo více sémantické (přidány cite a blockquote elementy)
						</p>
						<p>
							CTA tlačítko lze použít kterékoliv z atomu <a href="a-04-tlacitka.html">Button</a>
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<blockquote class="box-hero box-hero--background">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<p class="big">„Dějepis mě bavil už na gymnáziu, navíc mě zaujala prezentace oboru na veletrhu škol. Na brněnské historii je hodně předmětů, mnoho jich je výběrových a dost také záleží na vyučujícím. Dobré jsou výuky mladých doktorandů, ti jsou do toho zapálení. Nadstandardní jsou některé výběrové kurzy.“</p>
									<cite class="box-testimonial__author">
										<strong>Jana Nejedlá</strong><br />
										studentka druhého ročníku
									</cite>
									<p>
										<a href="#" class="btn btn-white btn-border btn-s">
											<span>Button</span>
										</a>
									</p>
								</div>
							</div>
						</div>
					</blockquote>
				</div>
			</div>

		</div>

<?php
	include 'part/footer.php';
?>

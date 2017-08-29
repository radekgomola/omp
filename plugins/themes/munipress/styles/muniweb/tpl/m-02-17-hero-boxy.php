<?php
	$title = 'Hero boxy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box - nadpisy</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							1) Obyčejný - výchozí<br/>
							2) Inverzní - modifikační třída .box-hero--background<br/>
							3) Ohraničený - modifikační třída .box-hero--bordered<br/>
							4) Inverzní s grafickými prvky - modifikační třídy .box-hero--background a .box-hero--particles<br/>
							5) Ohraničený s grafickými prvky - modifikační třídy .box-hero--bordered a .box-hero--particles
						</p>
						<p>
							Pro vytvoření této ukázky jsme mezi boxy vložili elementy br pro odsazení.
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="box-hero">
						<div class="row-main">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
					<br />
					<div class="box-hero box-hero--background">
						<div class="row-main">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="box-hero box-hero--bordered">
						<div class="row-main">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="box-hero box-hero--background box-hero--particles">
						<div class="row-main">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="box-hero box-hero--bordered box-hero--particles">
						<div class="row-main">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row-main">
				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box uvnitř layoutu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Platí i pro všechny následující případy. <br>
							1) .hero-box stačí vnořit do layoutového kontejneru .row-main <br>
							2) .row-main uvnitř .hero-box smazán
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-hero box-hero--bordered">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box - odsazení</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí stav je bez odsazení.<br>
							1) modifikační třída .box-hero--space <br>
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi, necessitatibus ducimus, deleniti aliquid voluptas et eum minus amet explicabo distinctio dolore, porro, eveniet molestias facere ipsam temporibus possimus debitis?
						</p>
						<div class="box-hero box-hero--bordered box-hero--space">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi, necessitatibus ducimus, deleniti aliquid voluptas et eum minus amet explicabo distinctio dolore, porro, eveniet molestias facere ipsam temporibus possimus debitis?
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box - velikosti</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ve výchozím stavu je box vysoký dle obsahu. Pokud se nastaví třídy velikostí obsah se začne centrovat. Pokud obsah přeteče zadanou velikost, box se natáhne.
							<br>
							1) modifikační třída .box-hero--size-s <br>
							2) modifikační třída .box-hero--size-m <br>
							3) modifikační třída .box-hero--size-l <br>
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-hero box-hero--bordered box-hero--space box-hero--size-s">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
						<div class="box-hero box-hero--bordered box-hero--space box-hero--size-m">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
						<div class="box-hero box-hero--bordered box-hero--space box-hero--size-l">
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box - s obrázkem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Obrázek je implementován klasickým IMG tagem. Budeme moci pohodlně využít SRCSET. <br>
							Obrázek je obalen div.box-hero__img a je v kódu dříve než obsah (nutné pro responsive).
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-hero box-hero--bordered box-hero--size-s">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
						<br>
						<div class="box-hero box-hero--background box-hero--size-s">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box na celou šířku - s obrázkem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Obrázek je implementován klasickým IMG tagem. Budeme moci pohodlně využít SRCSET. <br>
							Obrázek je obalen div.box-hero__img a je v kódu dříve než obsah (nutné pro responsive).
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="box-hero box-hero--bordered box-hero--size-s">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="box-hero box-hero--background box-hero--size-s">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Hero box - různé kombinace a obsahy</h2>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="row-main">
						<div class="box-hero box-hero--size-m">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2 class="h1">Studujte na Muni</h2>
									<ul class="icon-ul big">
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
							</div>
						</div>
						<br>
						<div class="box-hero box-hero--background box-hero--size-m">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2 class="h1">Oblečení a doplňky s logem univerzity</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</p>
									<p>
										<span class="btn btn-white btn-border btn-s">
											<span>Mám zájem</span>
										</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="box-hero box-hero--bordered box-hero--size-m box-hero--particles">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Jsme univerzita na celý život</h2>
									<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</strong></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</p>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="box-hero box-hero--bordered box-hero--size-s box-hero--particles">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Vyberte si obor</h2>
									<div class="form-inline">
										<p class="size--m--4-4 size--l--8-12">
											<label for="email" class="vhide">Hledej</label>
											<span class="inp-fix">
												<input type="email" name="email" id="email" class="inp-text" placeholder="Co byste chtěli studovat">
											</span>
										</p>
										<p>
											<a href="#" class="btn btn-primary btn-s nowrap">
												<span>Hledat</span>
											</a>
										</p>
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
						<h2 class="sk-annot__title">Hero box - převrácená verze</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Varianta s obrázkem nalevo. Stačí přidat .box-hero--inverse na box-hero
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="row-main">
						<div class="box-hero box-hero--inverse box-hero--bordered box-hero--size-s">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
								</div>
							</div>
						</div>
					</div>

					<div class="box-hero box-hero--inverse box-hero--bordered box-hero--size-s">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Studenti</h2>
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

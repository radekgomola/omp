<?php
	$title = 'Lightbox';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>15</strong>
						Lightbox
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/atoms/_lightbox.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/_lightbox.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Fullscreen bez galerie</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro lightbox byl vybrán plugin <a href="http://fancyapps.com/fancybox/">Fancybox</a>, kde naleznete také kompletní dokumentaci.
						</p>
						<p>
							V našem případě se lightbox volá pomocí classy js-lightbox a jednotlivé galerie se párují pomocí atributu rel.
						</p>
						<p>
							Pro modifikaci slouží data atributy,  které jsou umístěné na elementu .js-lightbox:<br />
							<strong>data-title</strong> – nadpis obrázku<br />
							<strong>data-caption</strong> - delší popis obrázku<br />
							<strong>data-gallery</strong> - přidáním hodnoty "false" se nezobrazí malé náhledy v lightboxu<br />
							<strong>data-fullscreen</strong> - přidáním hodnoty "false" se galerie nezobrazí na celou šířku a výšku obrazovky
						</p>
						<p>
							Jednou ze specialit Fancyboxu je otevírání videa (na js-lightbox se přidá class fancybox.iframe). <strong>Aktuálně lightbox není připravený pro zobrazení jiného obsahu než obrázků / videa.</strong>
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-gallery">
							<div class="grid">
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-1" data-gallery='false' data-title="Nadpis fotky" data-caption="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="image js-lightbox fancybox.iframe" rel="gallery-1" data-gallery='false'>
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-1" data-gallery='false' data-title="Bez dlouhého popisku">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-1" data-gallery='false' data-title="Nadpis 4" data-caption="Další popisek">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Fullscreen s galerií</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Dokumentace viz. <strong>Fullscreen bez galerie</strong>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-gallery">
							<div class="grid">
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-2" data-title="Nadpis fotky" data-caption="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="image js-lightbox fancybox.iframe" rel="gallery-2">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-2" data-title="Bez dlouhého popisku">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-2" data-title="Nadpis 4" data-caption="Další popisek">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Nefullscreen</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Dokumentace viz. <strong>Fullscreen bez galerie</strong>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-gallery">
							<div class="grid">
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-3" data-fullscreen="false" data-title="Nadpis fotky" data-caption="Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ...">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="http://www.youtube.com/embed/L9szn1QQfas?autoplay=1" class="image js-lightbox fancybox.iframe" rel="gallery-3" data-fullscreen="false">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-3" data-fullscreen="false" data-title="Bez dlouhého popisku">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
								</div>
								<div class="grid__cell size--xs--1-2 size--m--1-4 size--l--3-12">
									<a href="../img/illust/16-9.png" class="image js-lightbox" rel="gallery-3" data-fullscreen="false" data-title="Nadpis 4" data-caption="Další popisek">
										<div class="image__holder">
											<div class="image__inner">
												<img src="../img/illust/16-9.png" alt="" />
											</div>
										</div>
									</a>
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

<?php
	$title = 'Pro média';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<?php
				include 'part/molecules/menu-breadcrumb.php';
			?>

			<div class="box-hero box-hero--bordered box-hero--particles">
				<div class="row-main">
					<div class="box-hero__particles"></div>
					<div class="box-hero__content">
						<div class="box-hero__content-inner">
							<h1 class="h1">Pro média</h1>
						</div>
					</div>
				</div>
			</div>

			<div class="row-main">
				<div class="crossroad-links crossroad-links--type-3 crossroad-links--size--auto">
					<ul class="crossroad-links__list">
						<li class="crossroad-links__item">
							<a href="#" class="crossroad-links__link">IS MU</a>
						</li>
						<li class="crossroad-links__item">
							<a href="#" class="crossroad-links__link">Studijní oddělení</a>
						</li>
						<li class="crossroad-links__item">
							<a href="#" class="crossroad-links__link">Harmonogram</a>
						</li>
						<li class="crossroad-links__item">
							<a href="#" class="crossroad-links__link">E-learning</a>
						</li>
						<li class="crossroad-links__item">
							<a href="#" class="crossroad-links__link">Knihovna</a>
						</li>
						<li class="crossroad-links__item">
							<a href="#" class="crossroad-links__link">Menu item 6</a>
						</li>
					</ul>
				</div>

				<div class="crossroad-std">
					<ul class="grid">
						<li class="grid__cell">
							<a href="#" class="box-hero box-hero--background box-hero--size-s">
								<div class="box-hero__img">
									<img src="../img/illust/testimonial-photo.jpg" alt="" width="980" height="653">
								</div>
								<div class="box-hero__particles"></div>
								<div class="box-hero__content">
									<div class="box-hero__content-inner">
										<p class="meta">
											<span class="meta__item">19.11.2015</span>
										</p>
										<h2 class="h4">Na Masarykově univerzitě vznikla nová protinádorová vakcína pro děti. Testuje se</h2>
										<p>Novou vakcínu, která pomáhá zvýšit úspěšnost léčby solidních nádorů u dětí, vyvinuli odborníci a lékaři z Lékařské fakulty Masarykovy univerzity (LF MU), Fakultní nemocnice Brno (FN Brno) a Masarykova onkologického ústavu díky podpoře ministerstva školství.</p>
									</div>
								</div>
							</a>
						</li>
						<?php for ($i=0; $i < 12; $i++): ?>
						<li class="grid__cell size--s--1-2 size--l--3-12">
							<a href="#" class="box-article-grid box-article-grid--noimg">
								<div class="box-article-grid__content">
									<p class="box-article-grid__meta meta">
										<span class="meta__item">19.11.2015</span>
									</p>
									<h3 class="box-article-grid__title">Česká vědkyně poprvé sledovala, jak se dělí lidské vajíčko</h3>
									<p class="box-article-list__desc">
										Zuzana Holubcová přispěla k pochopení příčin ženské neplodnosti.
									</p>
								</div>
							</a>
						</li>
						<?php endfor; ?>
					</ul>
				</div>

				<p class="center">
					<a href="#" class="btn btn-primary btn-s">
						<span>Starší tiskové zprávy</span>
					</a>
				</p>

				<h2 class="h3">Kontakty</h2>
				<div class="crossroad-std">
					<ul class="grid">
						<?php for ($i=0; $i < 3; $i++): ?>
						<li class="grid__cell size--m--2-4 size--l--6-12">
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
						<?php endfor; ?>
					</ul>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

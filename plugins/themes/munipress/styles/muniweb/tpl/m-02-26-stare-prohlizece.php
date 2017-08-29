<?php
	$title = 'Staré prohlížeče';
	$hasGraphs = true;
	include 'part/header.php';
?>


		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>17</strong>
						Staré prohlížeče
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_fixed-notice.scss<br />
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Vložit <strong>před uzavírací tag body</strong>. Aby se zapnula funčnost detekce starých prohlížečů - je potřeba vložit class <strong>box-fixed-notice--old-browsers</strong>. Jinak lze tuto notifikaci použít na cokoliv. Detekuje se podle podmíněných komentářů na html (.old-browser, .ie9)
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-fixed-notice">
							<div class="row-main">
								<p class="box-fixed-notice__text">
									Pro správnou funkci tohoto webu si prosím nainstalujte některý z novějších prohlížečů.
								</p>
								<p class="box-fixed-notice__btn-wrap">
									<a href="#" class="btn btn-white btn-border btn-s">
										<span>Více informací</span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

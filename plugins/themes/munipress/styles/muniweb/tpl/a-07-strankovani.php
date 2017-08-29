<?php
	$title = 'Stránkování';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>07</strong>
						Stránkování
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/atoms/_paging.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S přepínačem stránek</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro stránkování slouží atom .paging, který se nejčastěji používá za molekulou <a href="m-04-01-obecny.html">výpisu</a>.
						</p>
						<p>
							Stránkování lze používat také bez přepínaše počtu stránek 50/100/300.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="paging">
							<span class="paging__pages">
								<a href="#" class="paging__pages__prev link-icon link-icon--before">
									<span class="icon icon-long-arrow-left"></span>
									Předchozí
								</a>
								<a href="#" class="paging__pages__item">1</a>
								<span class="paging__pages__item">&hellip;</span>
								<a href="#" class="paging__pages__item">18</a>
								<a href="#" class="paging__pages__item">19</a>
								<strong class="paging__pages__item is-active">20</strong>
								<a href="#" class="paging__pages__item">21</a>
								<a href="#" class="paging__pages__item">22</a>
								<span class="paging__pages__item">&hellip;</span>
								<a href="#" class="paging__pages__item">100</a>
								<a href="#" class="paging__pages__next link-icon link-icon--after">
									Další
									<span class="icon icon-long-arrow-right"></span>
								</a>
							</span>
							<span class="paging__pager">
								<strong class="paging__pager__item is-active">50</strong>
								<a href="#" class="paging__pager__item">100</a>
								<a href="#" class="paging__pager__item">300</a>
							</span>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">U prostřed</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná syntaxe jako u klasického stránkování jen na element .paging byl přidán modifikátor paging--center
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="paging paging--center">
							<span class="paging__pages">
								<a href="#" class="paging__pages__prev link-icon link-icon--before">
									<span class="icon icon-long-arrow-left"></span>
									Předchozí
								</a>
								<a href="#" class="paging__pages__item">1</a>
								<strong class="paging__pages__item is-active">2</strong>
								<a href="#" class="paging__pages__item">3</a>
								<a href="#" class="paging__pages__item">4</a>
								<a href="#" class="paging__pages__item">5</a>
								<a href="#" class="paging__pages__next link-icon link-icon--after">
									Další
									<span class="icon icon-long-arrow-right"></span>
								</a>
							</span>
							<span class="paging__pager">
								<strong class="paging__pager__item is-active">50</strong>
								<a href="#" class="paging__pager__item">100</a>
								<a href="#" class="paging__pager__item">300</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

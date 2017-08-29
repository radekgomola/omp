<?php
	$title = 'Ankety';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.02</strong>
						Boxy – Ankety
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/molecules/box/_poll.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S výsledky hlasování</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s hlasováním. Zvýrazněný řádek se dělá modifikátorem is-active na elementu .box-poll__inner.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-poll">
							<p class="box-poll__question">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ultricies ipsum. Nam id neque quis lorem vehicula?</p>
							<ul class="box-poll__list">
								<li class="box-poll__item">
									<a href="#" class="box-poll__inner is-active">
										<p class="box-poll__answer">
											<span class="box-poll__number">
												A.
											</span>
											Cras pretium pulvinar euismod.
										</p>
										<div class="box-poll__percent">
											<div class="box-poll__percent__inner" style="width: 42%;">
												<div class="box-poll__percent__number">42 %</div>
											</div>
										</div>
										<span class="box-poll__icon icon icon-check"></span>
									</a>
								</li>
								<li class="box-poll__item">
									<a href="#" class="box-poll__inner">
										<p class="box-poll__answer">
											<span class="box-poll__number">
												B.
											</span>
											Maecenas finibus volutpat arcu sit amet
										</p>
										<div class="box-poll__percent">
											<div class="box-poll__percent__inner" style="width: 68%;">
												<div class="box-poll__percent__number">68 %</div>
											</div>
										</div>
										<span class="box-poll__icon icon icon-check"></span>
									</a>
								</li>
							</ul>
							<p class="box-poll__info">
								Celkovo hlasovalo: <strong>1589</strong>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bez výsledků hlasování</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná struktura HTML jako výchozí molekula s hlasováním pouze byl odstraněn div.box-poll__percent s výsledky vyhledávání.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-poll">
							<p class="box-poll__question">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ultricies ipsum. Nam id neque quis lorem vehicula?</p>
							<ul class="box-poll__list">
								<li class="box-poll__item">
									<a href="#" class="box-poll__inner is-active">
										<p class="box-poll__answer">
											<span class="box-poll__number">
												A.
											</span>
											Cras pretium pulvinar euismod.
										</p>
										<span class="box-poll__icon icon icon-check"></span>
									</a>
								</li>
								<li class="box-poll__item">
									<a href="#" class="box-poll__inner">
										<p class="box-poll__answer">
											<span class="box-poll__number">
												B.
											</span>
											Maecenas finibus volutpat arcu sit amet
										</p>
										<span class="box-poll__icon icon icon-check"></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Výsledky hlasování</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná struktura HTML jako výchozí molekula s hlasováním pouze byla zrušena možnost kliknutí na .box-poll__inner - element a se změnil na div.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-poll">
							<p class="box-poll__question">Výsledky hlasování - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis ultricies ipsum. Nam id neque quis lorem vehicula?</p>
							<ul class="box-poll__list">
								<li class="box-poll__item">
									<div class="box-poll__inner is-active">
										<p class="box-poll__answer">
											<span class="box-poll__number">
												A.
											</span>
											Cras pretium pulvinar euismod.
										</p>
										<div class="box-poll__percent">
											<div class="box-poll__percent__inner" style="width: 42%;">
												<div class="box-poll__percent__number">42 %</div>
											</div>
										</div>
										<span class="box-poll__icon icon icon-check"></span>
									</div>
								</li>
								<li class="box-poll__item">
									<div class="box-poll__inner">
										<p class="box-poll__answer">
											<span class="box-poll__number">
												B.
											</span>
											Maecenas finibus volutpat arcu sit amet
										</p>
										<div class="box-poll__percent">
											<div class="box-poll__percent__inner" style="width: 68%;">
												<div class="box-poll__percent__number">68 %</div>
											</div>
										</div>
										<span class="box-poll__icon icon icon-check"></span>
									</div>
								</li>
							</ul>
							<p class="box-poll__info">
								Celkovo hlasovalo: <strong>1589</strong>
							</p>
						</div>
					</span>
				</li>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

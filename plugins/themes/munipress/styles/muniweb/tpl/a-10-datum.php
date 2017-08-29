<?php
	$title = 'Datum';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>10</strong>
						Datum
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/atoms/_datebox.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro zobrazení data slouží atom .datebox. Pro zajištění správného zalomení vkládejte na nezalomitelná místa entitu &amp;nbsp;
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="datebox">
							<p class="datebox__day">
								Čtvrtek
							</p>
							<p class="datebox__date">
								24.&nbsp;3.
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Se dvěma daty</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná pravidla jako u defaultního. Pouze se přídá odsazení &lt;br /&gt; a pomlčka &ndash;
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="datebox">
							<p class="datebox__day">
								Čtvrtek
							</p>
							<p class="datebox__date">
								24.&nbsp;3.<br />
								– 4.&nbsp;5.
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Standardní se dvěma daty</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná pravidla jako u defaultního či s dvěma daty. Pouze se na .datebox přidá modifikátor datebox--old
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="sk-annot">
							<h2 class="sk-annot__title">Proběhlá</h2>
						</div>
						<div class="datebox datebox--old">
							<p class="datebox__day">
								Čtvrtek
							</p>
							<p class="datebox__date">
								24.&nbsp;3.
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Barevné varianty</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná pravidla jako u defaultního či s dvěma daty. Pouze se na .datebox přidá modifikátor datebox--* (zkratka fakulty). V našem případě jsme pro pěkné naformátování umístili data do atomu <a href="a-02-grid.html">gridu</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--auto">
								<div class="datebox datebox--muni">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--law">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--med">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--sci">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--fi">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--fss">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--fsps">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--phil">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--ped">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
								</div>
							</div>
							<div class="grid__cell size--auto">
								<div class="datebox datebox--econ">
									<p class="datebox__day">
										Čtvrtek
									</p>
									<p class="datebox__date">
										24.&nbsp;3.
									</p>
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

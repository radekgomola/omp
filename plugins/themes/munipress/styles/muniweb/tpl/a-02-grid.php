<?php
	$title = 'Grid';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02</strong>
						Grid
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/atoms/_grid.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Desktop grid</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Základní definice řádku je class <strong>div.grid</strong><br />
							Základní definice sloupce je class <strong>div.grid__cell</strong><br />
							Základní definice šířky sloupce je class <strong>.size--l--1-12</strong>. Kdy <strong>l</strong> je definice breakpointu (l - desktop, m - tablet, s - mobil landscape, xs - mobil portrait) a následující dvojčíslí je zlomek (v příkladu je to <strong>1/12</strong>).<br />
							Od šířky 1200px je mezera mezi sloupci <strong>30px</strong> oproti standardní <strong>20px</strong>.<br />
							Desktop má dvanáctisloupcový grid. Prefix <strong>L</strong> (size--l--*, push--l--*, pull--l--*). Tento grid se používá od šířky <strong>1000px</strong>.
						</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--2-12">
									2
								</div>
								<div class="grid__cell size--l--2-12">
									2
								</div>
								<div class="grid__cell size--l--2-12">
									2
								</div>
								<div class="grid__cell size--l--2-12">
									2
								</div>
								<div class="grid__cell size--l--2-12">
									2
								</div>
								<div class="grid__cell size--l--2-12">
									2
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--3-12">
									3
								</div>
								<div class="grid__cell size--l--3-12">
									3
								</div>
								<div class="grid__cell size--l--3-12">
									3
								</div>
								<div class="grid__cell size--l--3-12">
									3
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--4-12">
									4
								</div>
								<div class="grid__cell size--l--4-12">
									4
								</div>
								<div class="grid__cell size--l--4-12">
									4
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--6-12">
									6
								</div>
								<div class="grid__cell size--l--6-12">
									6
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--7-12">
									7
								</div>
								<div class="grid__cell size--l--5-12">
									5
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--8-12">
									8
								</div>
								<div class="grid__cell size--l--4-12">
									4
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--9-12">
									9
								</div>
								<div class="grid__cell size--l--3-12">
									3
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--10-12">
									10
								</div>
								<div class="grid__cell size--l--2-12">
									2
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--11-12">
									11
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--l--12-12">
									12
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Tablet</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tablet má čtvrtinový grid. Prefix <strong>M</strong> (size--m--*, push--m--*, pull--m--*). Tento grid se používá od šířky <strong>700px</strong>. Existují dva gridy - 12 sloupcový, který funguje stejně jako výše a 4 sloupcový, pro který je připravena ukázka.
						</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--m--1-4"></div>
							<div class="grid__cell size--m--1-4"></div>
							<div class="grid__cell size--m--1-4"></div>
							<div class="grid__cell size--m--1-4"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--m--1-4">
									1
								</div>
								<div class="grid__cell size--m--1-4">
									1
								</div>
								<div class="grid__cell size--m--1-4">
									1
								</div>
								<div class="grid__cell size--m--1-4">
									1
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--m--2-4">
									2
								</div>
								<div class="grid__cell size--m--2-4">
									2
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--m--3-4">
									3
								</div>
								<div class="grid__cell size--m--1-4">
									1
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--m--4-4">
									4
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Mobile landscape</h2>
					</div>
					<div class="sk-example__comment">
						<p>Mobil landscape má polovinový grid. Prefix <strong>S</strong> (size--s--*, push--s--*, pull--s--*). Tento grid se používá od šířky <strong>480px</strong>.</p>
						<p>
							Pro tento grid se používají pouze poloviny.
						</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--s--1-2"></div>
							<div class="grid__cell size--s--1-2"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--s--1-2">
									1
								</div>
								<div class="grid__cell size--s--1-2">
									1
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--s--2-2">
									2
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Mobile portrait</h2>
					</div>
					<div class="sk-example__comment">
						<p>Mobil portrait má polovinový grid. Prefix <strong>xs</strong> (size--xs--*, push--xs--*, pull--xs--*). Tento grid se používá od šířky <strong>0px</strong>.</p>
						<p>
							Pro tento grid se používají pouze poloviny.
						</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--xs--1-2"></div>
							<div class="grid__cell size--xs--1-2"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--xs--1-2">
									1
								</div>
								<div class="grid__cell size--xs--1-2">
									1
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--xs--2-2">
									2
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Posouvání sloupců</h2>
					</div>
					<div class="sk-example__comment">
						<p>K přesouvání sloupců slouží classy <strong>.push--*--*</strong> a <strong>.pull--*--*</strong>. První hvězdička je definice breakpointu (l - desktop, m - tablet, s - mobil landscape, xs - mobil portrait) a následující hvězdička je zlomek šírky gridu (1/12, 1/4, 1/2).</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--l--4-12 push--l--8-12">
									Desktop grid - První v kódu
								</div>
								<div class="grid__cell size--l--8-12 pull--l--4-12">
									Desktop grid - Druhé v kódu
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--m--1-4 push--m--3-4">
									Tablet grid - První v kódu
								</div>
								<div class="grid__cell size--m--3-4 pull--m--1-4">
									Tablet grid - Druhé v kódu
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--s--1-2 push--s--1-2">
									Mobile landscape - První v kódu
								</div>
								<div class="grid__cell size--s--1-2 pull--s--1-2">
									Mobile landscape - Druhé v kódu
								</div>
							</div>
							<div class="grid">
								<div class="grid__cell size--xs--1-2 push--xs--1-2">
									Mobile portrait - První v kódu
								</div>
								<div class="grid__cell size--xs--1-2 pull--xs--1-2">
									Mobile portrait - Druhé v kódu
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Vertikální zarovnání</h2>
					</div>
					<div class="sk-example__comment">
						<p>Standradní zarovnání je nahoru. Další možností je zarovnání na střed (<strong>.grid--middle</strong>) nebo spodní okraj (<strong>.grid--bottom</strong>) - tyto třídy se vkládají na <strong>.grid</strong>.</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--l--4-12">
									Lorem ipsum dolor sit amet
								</div>
								<div class="grid__cell size--l--8-12">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed officiis facere veniam, commodi asperiores tempore, quia cum laboriosam molestiae impedit ut optio vero natus beatae nobis maiores magni neque vitae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed officiis facere veniam, commodi asperiores tempore, quia cum laboriosam molestiae impedit ut optio vero natus beatae nobis maiores magni neque vitae?
								</div>
							</div>

							<div class="grid grid--middle">
								<div class="grid__cell size--l--4-12">
									Lorem ipsum dolor sit amet
								</div>
								<div class="grid__cell size--l--8-12">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed officiis facere veniam, commodi asperiores tempore, quia cum laboriosam molestiae impedit ut optio vero natus beatae nobis maiores magni neque vitae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed officiis facere veniam, commodi asperiores tempore, quia cum laboriosam molestiae impedit ut optio vero natus beatae nobis maiores magni neque vitae?
								</div>
							</div>

							<div class="grid grid--bottom">
								<div class="grid__cell size--l--4-12">
									Lorem ipsum dolor sit amet
								</div>
								<div class="grid__cell size--l--8-12">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed officiis facere veniam, commodi asperiores tempore, quia cum laboriosam molestiae impedit ut optio vero natus beatae nobis maiores magni neque vitae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed officiis facere veniam, commodi asperiores tempore, quia cum laboriosam molestiae impedit ut optio vero natus beatae nobis maiores magni neque vitae?
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Horizontální zarovnání</h2>
					</div>
					<div class="sk-example__comment">
						<p>Standradní zarovnání je doleva. Další možností je zarovnání na střed (<strong>.grid--center</strong>) nebo doprava (<strong>.grid--right</strong>) - tyto třídy se vkládají na <strong>.grid</strong>.</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid">
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid">
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
							</div>
							<div class="grid grid--center">
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
							</div>
							<div class="grid grid--right">
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Bez mezer</h2>
					</div>
					<div class="sk-example__comment">
						<p>K resetu mezer mezi sloupci slouží modifikátor <strong>.grid--nogutter</strong>, který se přidává na .grid</p>
					</div>
					<div class="sk-grids">
						<div class="sk-grids-row grid grid--nogutter">
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
							<div class="grid__cell size--l--1-12"></div>
						</div>
						<div class="sk-example__content">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12 sk-light">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12 sk-light">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12 sk-light">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12 sk-light">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12 sk-light">
									1
								</div>
								<div class="grid__cell size--l--1-12">
									1
								</div>
								<div class="grid__cell size--l--1-12 sk-light">
									1
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

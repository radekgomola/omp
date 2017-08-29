<?php
	$title = 'Typografie';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>01</strong>
						Typografie
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/_typography.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Nadpisy</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro nadpisy používejte adekvátní elementy h1-h6 ideálně ve správném zanoření (tz. pod nadpisem h2 by se měly na podúrovni objevit nadpisy h3 nikoliv h4 či h5 apod. - nadpisy fungují stejně jako zanořené seznamy). Pokud pro nadpisy chcete použít menší velikost, pak stačí přidat class .h1, .h2, .h3, .h4, .h5 nebo .h6.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<h1>Nadpis 1</h1>
						<h2>Nadpis 2</h2>
						<h3>Nadpis 3</h3>
						<h4>Nadpis 4</h4>
						<h5>Nadpis 5</h5>
						<h6>Nadpis 6</h6>
					</div>
				</div>

				<div class="sk-annot--main">
					<h2>
						Seznamy
					</h2>
				</div>
				<div class="sk-example">
					<div class="sk-annot">
						<h3 class="sk-annot__title">Odrážkový seznam</h3>
					</div>
					<div class="sk-example__comment">
						<p>
							Klasický odrážkový seznam.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<ul>
							<li>Jablko</li>
							<li>
								Hruška
								<ul>
									<li>Odroda 1 lorem ipsum dolor sit amet conectetuer</li>
									<li>
										Odroda 2
										<ul>
											<li>Výrobky</li>
											<li>
												Skladovanie
												<ul>
													<li>Správné</li>
													<li>Nesprávné lorem ipsum</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Odkaz</a>
							</li>
							<li>Pomaranč lorem ipsum dolor sit amet consectetuer</li>
						</ul>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h3 class="sk-annot__title">Číselný seznam</h3>
					</div>
					<div class="sk-example__comment">
						<p>
							Klasický číselný seznam.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<ol>
							<li>Jablko</li>
							<li>
								Hruška
								<ol>
									<li>Odroda 1 lorem ipsum dolor sit amet conectetuer</li>
									<li>
										Odroda 2
										<ol>
											<li>Výrobky</li>
											<li>
												Skladovanie
												<ol>
													<li>Správné</li>
													<li>Nesprávné lorem ipsum</li>
												</ol>
											</li>
										</ol>
									</li>
								</ol>
							</li>
							<li>
								<a href="#">Odkaz</a>
							</li>
							<li>Pomaranč lorem ipsum dolor sit amet consectetuer</li>
						</ol>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h3 class="sk-annot__title">Ikonkový seznam</h3>
					</div>
					<div class="sk-example__comment">
						<p>
							Speciální seznam s ikonkami. Využívá atomy <a href="a-05-ikonky.html">ikonek</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<ul class="icon-ul">
							<li><i class="icon-li icon icon-percent"></i><strong>Jablko</strong></li>
							<li>
								<i class="icon-li icon icon-check-square"></i><strong>Hruška</strong>
								<ul class="icon-ul">
									<li><i class="icon-li icon icon-search"></i>Odroda 1 lorem ipsum dolor sit amet conectetuer</li>
									<li><i class="icon-li icon icon-check"></i>Odroda 2</li>
								</ul>
							</li>
							<li><i class="icon-li icon icon-phone"></i><strong>Pomaranč lorem ipsum dolor sit amet consectetuer</strong></li>
						</ul>
					</div>
				</div>

				<div class="sk-annot--main">
					<h2>
						Tabulky
					</h2>
					<p>
						<strong>Doplňkové CSS:</strong> /src/css/atoms/_order-icons.scss<br />
						<strong>Doplňkové JS:</strong> /src/js/components/tr-clickable.coffee
					</p>
				</div>
				<div class="sk-example">
					<div class="sk-annot">
						<h3 class="sk-annot__title">Defaultní tabulka</h3>
					</div>
					<div class="sk-example__comment">
						<p>
							Standardní tabulka s thead, tbody a tfoot. Zarovnání uvnitř buňky se řeší pomocí class z <a href="a-00-framework.html">SK mini frameworku</a> (horizontálně center, left, right a vertikálně top, bottom, middle). Defaultní zarovnání buněk je top.
						</p>
						<p>
							V thead je použit atoms .order-icons, který slouží k řazení položek. Přidáním classy is-active na icon-caret-* se zaktivní položka.
						</p>
						<p>
							Přidáním classy .tr-clickable se řádek tabulky udělá klikatelný. Pokud je více odkazů na řádku, tak bude řádek odkazovat na první nalezený odkaz - nedoporučuji vkládat více odkazů na řádek.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<table>
							<thead>
								<tr>
									<th>Nadpis sloupce</th>
									<th>
										Nadpis sloupce
										<span class="order-icons">
											<a href="#" class="icon icon-caret-down is-active"><span class="vhide">Sestupně</span></a>
											<a href="#" class="icon icon-caret-up"><span class="vhide">Vzestupně</span></a>
										</span>
									</th>
									<th><a href="#">Odkaz</a></th>
									<th><a href="#">Odkaz</a></th>
									<th class="right">
										Nadpis sloupce
										<span class="order-icons">
											<a href="#" class="icon icon-caret-down"><span class="vhide">Sestupně</span></a>
											<a href="#" class="icon icon-caret-up is-active"><span class="vhide">Vzestupně</span></a>
										</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Hodnota</th>
									<td>Hodnota</td>
									<td>Hodnota</td>
									<td>Hodnota</td>
									<td class="right">Hodnota</td>
								</tr>
								<tr>
									<th>Hodnota 2</th>
									<td>Hodnota 2</td>
									<td>Hodnota 2</td>
									<td>Hodnota 2</td>
									<td class="right">Hodnota 2</td>
								</tr>
								<tr>
									<th>Hodnota 3</th>
									<td>Hodnota 3</td>
									<td>Hodnota 3</td>
									<td>Hodnota 3</td>
									<td class="right">Hodnota 3</td>
								</tr>
								<tr>
									<th>Hodnota 4</th>
									<td><a href="#">Odkaz</a></td>
									<td>Hodnota 4</td>
									<td>Hodnota 4</td>
									<td class="right">Hodnota 4</td>
								</tr>
								<tr>
									<th>Hodnota 5</th>
									<td>Hodnota 5</td>
									<td>Hodnota 5</td>
									<td>Hodnota 5</td>
									<td class="right">Hodnota 5</td>
								</tr>
								<tr class="tr-clickable">
									<th><a href="#">Klikatelný řádek</a></th>
									<td>Hodnota 6</td>
									<td>Hodnota 6</td>
									<td>Hodnota 6</td>
									<td class="right">Hodnota 6</td>
								</tr>
								<tr>
									<th>Hodnota 7</th>
									<td>Hodnota 7</td>
									<td>Hodnota 7</td>
									<td>Hodnota 7</td>
									<td class="right">Hodnota 7</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td>Spolu:</td>
									<td>Výsledek</td>
									<td>Výsledek</td>
									<td>Výsledek</td>
									<td class="right">Výsledek</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h3 class="sk-annot__title">Tabulka s ohraničením</h3>
					</div>
					<div class="sk-example__comment">
						<p>
							Atom vycházející z defaultního atomu tabulky. Atom je navíc obalen do div.table-wrap. Ostatní vlastnosti jsou stejné.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="table-wrap">
							<table>
								<thead>
									<tr>
										<th>Nadpis sloupce</th>
										<th>
											Nadpis sloupce
											<span class="order-icons">
												<a href="#" class="icon icon-caret-down is-active"><span class="vhide">Sestupně</span></a>
												<a href="#" class="icon icon-caret-up"><span class="vhide">Vzestupně</span></a>
											</span>
										</th>
										<th><a href="#">Odkaz</a></th>
										<th><a href="#">Odkaz</a></th>
										<th class="right">
											Nadpis sloupce
											<span class="order-icons">
												<a href="#" class="icon icon-caret-down"><span class="vhide">Sestupně</span></a>
												<a href="#" class="icon icon-caret-up is-active"><span class="vhide">Vzestupně</span></a>
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Hodnota</th>
										<td>Hodnota</td>
										<td>Hodnota</td>
										<td>Hodnota</td>
										<td class="right">Hodnota</td>
									</tr>
									<tr>
										<th>Hodnota 2</th>
										<td>Hodnota 2</td>
										<td>Hodnota 2</td>
										<td>Hodnota 2</td>
										<td class="right">Hodnota 2</td>
									</tr>
									<tr>
										<th>Hodnota 3</th>
										<td>Hodnota 3</td>
										<td>Hodnota 3</td>
										<td>Hodnota 3</td>
										<td class="right">Hodnota 3</td>
									</tr>
									<tr>
										<th>Hodnota 4</th>
										<td><a href="#">Odkaz</a></td>
										<td>Hodnota 4</td>
										<td>Hodnota 4</td>
										<td class="right">Hodnota 4</td>
									</tr>
									<tr>
										<th>Hodnota 5</th>
										<td>Hodnota 5</td>
										<td>Hodnota 5</td>
										<td>Hodnota 5</td>
										<td class="right">Hodnota 5</td>
									</tr>
									<tr>
										<th>Hodnota 6</th>
										<td>Hodnota 6</td>
										<td>Hodnota 6</td>
										<td>Hodnota 6</td>
										<td class="right"><a href="#" class="btn btn-primary btn-s"><span>Tlačítko</span></a></td>
									</tr>
									<tr>
										<th>Hodnota 7</th>
										<td>Hodnota 7</td>
										<td>Hodnota 7</td>
										<td>Hodnota 7</td>
										<td class="right">Hodnota 7</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Spolu:</td>
										<td>Výsledek</td>
										<td>Výsledek</td>
										<td>Výsledek</td>
										<td class="right">Výsledek</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h3 class="sk-annot__title">Tabulky odsazené</h3>
					</div>
					<div class="sk-example__comment">
						<p>
							Atom vycházející z defaultního atomu tabulky. Přidáním classy table-padded na element table se odsadí první a poslední buňka řádku zleva a zprava. Ostatní vlastnosti jsou stejné.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="table-wrap">
							<table class="table-padded">
								<thead>
									<tr>
										<th>Nadpis sloupce</th>
										<th>
											Nadpis sloupce
											<span class="order-icons">
												<a href="#" class="icon icon-caret-down is-active"><span class="vhide">Sestupně</span></a>
												<a href="#" class="icon icon-caret-up"><span class="vhide">Vzestupně</span></a>
											</span>
										</th>
										<th><a href="#">Odkaz</a></th>
										<th><a href="#">Odkaz</a></th>
										<th class="right">
											Nadpis sloupce
											<span class="order-icons">
												<a href="#" class="icon icon-caret-down"><span class="vhide">Sestupně</span></a>
												<a href="#" class="icon icon-caret-up is-active"><span class="vhide">Vzestupně</span></a>
											</span>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Hodnota</th>
										<td>Hodnota</td>
										<td>Hodnota</td>
										<td>Hodnota</td>
										<td class="right">Hodnota</td>
									</tr>
									<tr class="tr-clickable">
										<th><a href="#">Klikatelný řádek</a></th>
										<td>Hodnota 2</td>
										<td>Hodnota 2</td>
										<td>Hodnota 2</td>
										<td class="right">Hodnota 2</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>Spolu:</td>
										<td>Výsledek</td>
										<td>Výsledek</td>
										<td>Výsledek</td>
										<td class="right">Výsledek</td>
									</tr>
								</tfoot>
							</table>
						</div>

						<table class="table-padded">
							<thead>
								<tr>
									<th>Nadpis sloupce</th>
									<th>
										Nadpis sloupce
										<span class="order-icons">
											<a href="#" class="icon icon-caret-down is-active"><span class="vhide">Sestupně</span></a>
											<a href="#" class="icon icon-caret-up"><span class="vhide">Vzestupně</span></a>
										</span>
									</th>
									<th><a href="#">Odkaz</a></th>
									<th><a href="#">Odkaz</a></th>
									<th class="right">
										Nadpis sloupce
										<span class="order-icons">
											<a href="#" class="icon icon-caret-down"><span class="vhide">Sestupně</span></a>
											<a href="#" class="icon icon-caret-up is-active"><span class="vhide">Vzestupně</span></a>
										</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Hodnota</th>
									<td>Hodnota</td>
									<td>Hodnota</td>
									<td>Hodnota</td>
									<td class="right">Hodnota</td>
								</tr>
								<tr>
									<th>Hodnota 2</th>
									<td>Hodnota 2</td>
									<td>Hodnota 2</td>
									<td>Hodnota 2</td>
									<td class="right">Hodnota 2</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td>Spolu:</td>
									<td>Výsledek</td>
									<td>Výsledek</td>
									<td>Výsledek</td>
									<td class="right">Výsledek</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka typografie</h2>
					</div>
					<div class="sk-example__content u-mb-50">
						<h1>Obecné styly - typografie</h1>
						<p class="big">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ab debitis possimus, similique tempore voluptate minus amet esse nobis dolorum aperiam quasi quaerat porro rem omnis labore laborum officia, ex.</p>
						<h2>Nadpis h2</h2>
						<div class="image image--right size--m--2-4 size--l--4-12">
							<div class="image__holder">
								<div class="image__inner">
									<img src="../img/illust/16-9.png" alt="" />
								</div>
							</div>
						</div>
						<p>Suspendisse <a href="#">odkaz v textu</a> vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse facilisis neque tempor enim imperdiet sodales. Vitae lobortis sapien vestibulum. Suspendisse vehicula libero vel nisi accumsan. Suspendisse vehicula libero vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse.</p>
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assuiber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<h3>Nadpis h3</h3>
						<p>Suspendisse <a href="#">odkaz v textu</a> vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse facilisis neque tempor enim imperdiet sodales. Vitae lobortis sapien vestibulum. Suspendisse vehicula libero vel nisi accumsan. Suspendisse vehicula libero vel nisi accumsan pretium. Etiam id massa ut neque iaculis auctor. Fermentum eu dictum risus consequat. Cras magna justo, iaculis non scelerisque eget, condimentum in tellus. Maecenas a sem quam. Suspendisse.</p>
						<hr />
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assuiber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<blockquote>
							<p>Bloková citace - Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta</p>
						</blockquote>
						<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.<br />Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam <strong>liber tempor cum soluta nobis</strong> eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<h4>Nadpis 4 úrovně</h4>
						<ol>
							<li>Číslovaný seznam</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</li>
							<li>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, uis nostrud exercitation ullamco laboris nisi ut iquip x ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
							<li>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
						</ol>
						<hr />
						<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
						<dl>
							<dt>Definiční seznam</dt>
							<dd>Hodnota definice</dd>
							<dt>Definiční seznam</dt>
							<dd>Hodnota definice</dd>
							<dt>Definiční seznam</dt>
							<dd>Hodnota definice</dd>
						</dl>
						<h5>Nadpis 5 úrovně</h5>
						<a href="#" class="ext">Ext. odkaz</a>
						<h6>Nadpis 6 úrovně</h6>
						<p><cite>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</cite></p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velikosti textů</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Velikost textu se mění classami z <a href="a-00-framework.html">SK mini frameworku</a> (big, small).
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="big">Velký text - Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Maxime corporis dolorum pariatur quisquam dolorem praesentium, ipsum nemo excepturi cum hic voluptas doloribus blanditiis iure cupiditate dolores in vel sunt. Necessitatibus!</p>
						<p>Normální - Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Maxime corporis dolorum pariatur quisquam dolorem praesentium, ipsum nemo excepturi cum hic voluptas doloribus blanditiis iure cupiditate dolores in vel sunt. Necessitatibus!</p>
						<p class="small">Malý text - Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit. Maxime corporis dolorum pariatur quisquam dolorem praesentium, ipsum nemo excepturi cum hic voluptas doloribus blanditiis iure cupiditate dolores in vel sunt. Necessitatibus!</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka typografie v gridu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Velikost textu se mění classami z <a href="a-00-framework.html">SK mini frameworku</a> (big, small). Umístění do sloupců je obsluhováno atomem <a href="a-02-grid.html">gridu</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--4-12">
								<h1>Nadpis H1</h1>
								<p>Phasellus ultrices adipiscing turpis. Fusce dignissim neque vitae justo. Morbi lacinia sagittis mauris. Sed fermentum pellentesque nisi. Duis interdum nisi at ligula.</p>
							</div>
							<div class="grid__cell size--l--4-12">
								<h2>Nadpis H2</h2>
								<p>Phasellus ultrices adipiscing turpis. Fusce dignissim neque vitae justo. Morbi lacinia sagittis mauris. Sed fermentum pellentesque nisi. Duis interdum nisi at ligula.</p>
							</div>
							<div class="grid__cell size--l--4-12">
								<h3>Nadpis H3</h3>
								<p>Phasellus ultrices adipiscing turpis. Fusce dignissim neque vitae justo. Morbi lacinia sagittis mauris. Sed fermentum pellentesque nisi. Duis interdum nisi at ligula.</p>
							</div>
							<div class="grid__cell size--l--4-12">
								<h4>Nadpis H4</h4>
								<p>Phasellus ultrices adipiscing turpis. Fusce dignissim neque vitae justo. Morbi lacinia sagittis mauris. Sed fermentum pellentesque nisi. Duis interdum nisi at ligula.</p>
							</div>
							<div class="grid__cell size--l--4-12">
								<h5>Nadpis H5</h5>
								<p>Phasellus ultrices adipiscing turpis. Fusce dignissim neque vitae justo. Morbi lacinia sagittis mauris. Sed fermentum pellentesque nisi. Duis interdum nisi at ligula.</p>
							</div>
							<div class="grid__cell size--l--4-12">
								<h6>Nadpis H6</h6>
								<p>Phasellus ultrices adipiscing turpis. Fusce dignissim neque vitae justo. Morbi lacinia sagittis mauris. Sed fermentum pellentesque nisi. Duis interdum nisi at ligula.</p>
							</div>
						</div>
						<div class="grid">
							<div class="grid__cell size--l--4-12">
								<p class="big">Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien sagittis a eleifend sed tristique.</p>
							</div>
							<div class="grid__cell size--l--8-12">
								<p>Cras quis neque at lectus tincidunt consectetuer. Proin volutpat, nisl ut tincidunt condimentum, neque justo tempus augue, id viverra lectus sem sed urna. Suspendisse potenti. Pellentesque lobortis rutrum purus.Pellentesque dictum augue. Aliquam sapien. Nulla condimentum sollicitudin lacus. Nullam et diam non dui consequat pulvinar. Fusce velit orci, aliquet et, condimentum sit amet, dapibus eget, odio. Etiam tempus, lectus vel posuere congue, nunc quam varius lectus, at rutrum diam sem sed turpis.</p>
								<p>In hendrerit justo non nisl. Donec convallis elementum leo. Vivamus tortor. In vehicula elementum ligula. Mauris egestas interdum libero. Sed non metus. Phasellus commodo. Cras tempus dolor nec magna accumsan tempus. Cras elit massa, consectetuer quis, consequat aliquet, ullamcorper in, massa. Maecenas velit velit, posuere id, tempus sit amet, scelerisque eu, tortor.</p>
								<div class="grid">
									<div class="grid__cell size--l--6-12">
										<p class="small">Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien.</p>
									</div>
									<div class="grid__cell size--l--6-12">
										<p class="small">Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien.</p>
									</div>
								</div>
							</div>
						</div>
						<p class="big">In hac habitasse platea dictumst. In id dui. Curabitur sodales semper arcu. Quisque posuere suscipit massa. Maecenas vehicula magna quis pede. Phasellus aliquet lacus eget nulla. Aliquam erat volutpat. Integer tristique vestibulum erat. Curabitur tempor tempor mi. Praesent metus.</p>
						<div class="grid">
							<div class="grid__cell size--l--3-12">
								<p>In hendrerit justo non nisl. Donec convallis elementum leo. Vivamus tortor. In vehicula elementum ligula. Mauris egestas interdum libero. Sed non metus. Phasellus commodo. Cras tempus dolor nec magna accumsan tempus.</p>
							</div>
							<div class="grid__cell size--l--3-12">
								<p>In hendrerit justo non nisl. Donec convallis elementum leo. Vivamus tortor. In vehicula elementum ligula. Mauris egestas interdum libero. Sed non metus. Phasellus commodo. Cras tempus dolor nec magna accumsan tempus.</p>
							</div>
							<div class="grid__cell size--l--3-12">
								<p>In hendrerit justo non nisl. Donec convallis elementum leo. Vivamus tortor. In vehicula elementum ligula. Mauris egestas interdum libero. Sed non metus. Phasellus commodo. Cras tempus dolor nec magna accumsan tempus.</p>
							</div>
							<div class="grid__cell size--l--3-12">
								<p>In hendrerit justo non nisl. Donec convallis elementum leo. Vivamus tortor. In vehicula elementum ligula. Mauris egestas interdum libero. Sed non metus. Phasellus commodo. Cras tempus dolor nec magna accumsan tempus.</p>
							</div>
						</div>
						<div class="grid">
							<div class="grid__cell size--l--6-12">
								<p class="small">Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium.</p>
							</div>
							<div class="grid__cell size--l--6-12">
								<p class="small">Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

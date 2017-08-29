<?php
	$title = 'SK framework';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>00</strong>
						SK mini framework
					</h1>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Obecné třídy</h2>
					</div>
					<div class="u-mb-50">
						<table>
							<thead>
								<tr>
									<th>Třída</th>
									<th>Určeno pro prvek</th>
									<th>Popis a ukázka</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>.l</td>
									<td>libovolný</td>
									<td>Floatovaný prvek doleva</td>
								</tr>
								<tr>
									<td>.r</td>
									<td>libovolný</td>
									<td>Floatovaný prvek doprava</td>
								</tr>

								<tr>
									<td>.cl</td>
									<td>libovolný</td>
									<td>Prvek čeká na obtékané elementy přiražené doleva</td>
								</tr>
								<tr>
									<td>.cr</td>
									<td>libovolný</td>
									<td>Prvek čeká na obtékané elementy přiražené doprava</td>
								</tr>
								<tr>
									<td>.cb</td>
									<td>libovolný</td>
									<td>Prvek se vykreslí až pod všemi plovoucími prvky</td>
								</tr>
								<tr>
									<td>.row</td>
									<td>blokový</td>
									<td>Definuje řádek v grid systému</td>
								</tr>
								<tr>
									<td>.cfx</td>
									<td>blokový</td>
									<td>Obalení do prvku s touto classou vyclearuje floaty</td>
								</tr>
								<tr>
									<td>.ctx</td>
									<td>blokový</td>
									<td>Obalení do prvku s touto classou vyclearuje block vedle floatů</td>
								</tr>
								<tr>
									<td>.vhide</td>
									<td>libovolný</td>
									<td>Skrýt prvek na monitoru (čtečkám zůstává prvek dostupný).</td>
								</tr>
								<tr>
									<td>.out</td>
									<td>libovolný</td>
									<td>Skrýt prvek na monitoru (čtečkám zůstává prvek dostupný). - jiný způsob</td>
								</tr>
								<tr>
									<td>.jsOut</td>
									<td>libovolný</td>
									<td>Skrýt prvek na monitoru (čtečkám zůstává prvek dostupný). Jen pokud má uživatel zapnutý JS</td>
								</tr>
								<tr>
									<td>.hide</td>
									<td>libovolný</td>
									<td>Skrýt prvek pro všechna zařízení</td>
								</tr>
								<tr>
									<td>.jsHide</td>
									<td>libovolný</td>
									<td>Skrýje prvek jen pokud má uživatel zapnutý JS</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Třídy pro práci s textem</h2>
					</div>
					<div class="u-mb-50">
						<table>
							<thead>
								<tr>
									<th>Třída</th>
									<th>Určeno pro prvek</th>
									<th>Popis a ukázka</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>.h1, .h2, .h3,<br /> .h4, .h5, .h6</td>
									<td>nadpisy, text</td>
									<td>Přestyluje element do stylu nadpisu / nadpisům změní velikost</td>
								</tr>
								<tr>
									<td>.center</td>
									<td>blokový</td>
									<td class="center">Zarovnání na střed</td>
								</tr>
								<tr>
									<td>.right</td>
									<td>blokový</td>
									<td class="right">Zarovnání doprava</td>
								</tr>
								<tr>
									<td>.left</td>
									<td>blokový</td>
									<td class="left">Zarovnání doleva</td>
								</tr>
								<tr>
									<td>.lower</td>
									<td>libovolný</td>
									<td class="lower">Minusky</td>
								</tr>
								<tr>
									<td>.upper</td>
									<td>libovolný</td>
									<td class="upper">Kapitálky</td>
								</tr>
								<tr>
									<td>.bold</td>
									<td>libovolný</td>
									<td class="bold">Tučné písmo</td>
								</tr>
								<tr>
									<td>.thin</td>
									<td>libovolný</td>
									<td><strong class="thin">Normální písmo</strong></td>
								</tr>
								<tr>
									<td>.italic</td>
									<td>libovolný</td>
									<td class="italic">Kurzíva</td>
								</tr>
								<tr>
									<td>.normal</td>
									<td>libovolný</td>
									<td><i class="normal">Písmo bez kurzívy</i></td>
								</tr>
								<tr>
									<td>.big</td>
									<td>libovolný</td>
									<td class="big">Větší písmo (24px)</td>
								</tr>
								<tr>
									<td>.small</td>
									<td>libovolný</td>
									<td class="small">Menší písmo (14px)</td>
								</tr>
								<tr>
									<td>.top</td>
									<td>buňky tabulky</td>
									<td>Vertikální zarovnání nahoru</td>
								</tr>
								<tr>
									<td>.bottom</td>
									<td>buňky tabulky</td>
									<td>Vertikální zarovnání dolů</td>
								</tr>
								<tr>
									<td>.middle</td>
									<td>buňky tabulky</td>
									<td>Vertikální zarovnání doprostřed</td>
								</tr>
								<tr>
									<td>.red</td>
									<td>libovolný</td>
									<td class="red">Červená</td>
								</tr>
								<tr>
									<td>.orange</td>
									<td>libovolný</td>
									<td class="orange">Oranžová</td>
								</tr>
								<tr>
									<td>.green</td>
									<td>libovolný</td>
									<td class="green">Zelená</td>
								</tr>
								<tr>
									<td>.light</td>
									<td>libovolný</td>
									<td class="light">Šedá</td>
								</tr>
								<tr>
									<td>.dark</td>
									<td>libovolný</td>
									<td class="dark">Tmavá</td>
								</tr>
								<tr>
									<td>.font-primary</td>
									<td>libovolný</td>
									<td class="font-primary">Primární font – 'Helvetica Neue',  Helvetica, Arial, sans-serif</td>
								</tr>
								<tr>
									<td>.font-secondary</td>
									<td>libovolný</td>
									<td class="font-secondary">Sekundární font – 'FF Meta Pro Bold', Tahoma, sans-serif</td>
								</tr>
								<tr>
									<td>.font-serif</td>
									<td>libovolný</td>
									<td class="font-serif">Serif font – Georgia, Times, 'Times New Roman', serif</td>
								</tr>
								<tr>
									<td>.font-consola</td>
									<td>libovolný</td>
									<td class="font-consola">Font pro kód – Consolas, monaco, monospace</td>
								</tr>
								<tr>
									<td>.nowrap</td>
									<td>libovolný</td>
									<td>Nezalomitelný obsah (např. pro ceny)</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div id="molekuly" class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Třídy pro modifikaci odsazení molekul</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Použitím těchto tříd na hlavním obalu jakékoliv molekuly lze nastavit vnitřní a vnější odsazení. Defaultní vnější odsazení většiny komponent je 50px ze spodu, ale né vždy je toto odsazení potřebné – v někteých případech je potřeba změnšit (použijeme u-mb-30) či úplně vypnout (použijeme u-mb-0).
						</p>
						<p>
							Tyto util classy se mohou využívat i pro typogrii – lze tedy odsadit např. element p či nadpisy apod.
						</p>
					</div>
					<div class="u-mb-50">
						<table>
							<thead>
								<tr>
									<th>Třída</th>
									<th>Určeno pro prvek</th>
									<th>Popis a ukázka</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>.u-mb-50</td>
									<td>div, nadpisy, p, ul, ol</td>
									<td>Nastaví margin ze spodu na 50px</td>
								</tr>
								<tr>
									<td>.u-mt-50</td>
									<td>div, nadpisy, p, ul, ol</td>
									<td>Nastaví margin ze zhora na 50px</td>
								</tr>
								<tr>
									<td>.u-mb-30</td>
									<td>div, nadpisy, p, ul, ol</td>
									<td>Nastaví margin ze spodu na 30px</td>
								</tr>
								<tr>
									<td>.u-mt-30</td>
									<td>div, nadpisy, p, ul, ol</td>
									<td>Nastaví margin ze zhora na 30px</td>
								</tr>
								<tr>
									<td>.u-mb-0</td>
									<td>div, nadpisy, p, ul, ol</td>
									<td>Nastaví margin ze spodu na 0px</td>
								</tr>
								<tr>
									<td>.u-mt-0</td>
									<td>div, nadpisy, p, ul, ol</td>
									<td>Nastaví margin ze zhora na 0px</td>
								</tr>
								<tr>
									<td>.u-pb-50</td>
									<td>div s pozadím nebo ohraničením</td>
									<td>Nastaví padding ze spodu na 50px</td>
								</tr>
								<tr>
									<td>.u-pt-50</td>
									<td>div s pozadím nebo ohraničením</td>
									<td>Nastaví padding ze zhora na 50px</td>
								</tr>
								<tr>
									<td>.u-pb-30</td>
									<td>div s pozadím nebo ohraničením</td>
									<td>Nastaví padding ze spodu na 30px</td>
								</tr>
								<tr>
									<td>.u-pt-30</td>
									<td>div s pozadím nebo ohraničením</td>
									<td>Nastaví padding ze zhora na 30px</td>
								</tr>
								<tr>
									<td>.u-pb-0</td>
									<td>div s pozadím nebo ohraničením</td>
									<td>Nastaví padding ze spodu na 0px</td>
								</tr>
								<tr>
									<td>.u-pt-0</td>
									<td>div s pozadím nebo ohraničením</td>
									<td>Nastaví padding ze zhora na 0px</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

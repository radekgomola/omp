<?php
	$title = 'Osobní stránka';
	$menuSecondary = 'type1';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<?php
				include 'part/molecules/menu-breadcrumb.php';
			?>

			<div class="row-main">
				<?php
					include 'part/molecules/box-vcard-1.php';
				?>

				<?php
					include 'part/molecules/box-tabs-1.php';
				?>

				<h2 class="h3">Napsali o mně</h2>
				<div class="crossroad-std">
					<ul class="grid">
						<?php for ($i=0; $i < 3; $i++): ?>
						<li class="grid__cell size--s--1-2 size--l--4-12">
							<a href="#" class="box-article-grid">
								<p class="box-article-grid__img">
									<img src="../img/illust/article-grid-small.jpg" alt="" width="370" height="186" />
								</p>
								<div class="box-article-grid__content">
									<p class="box-article-grid__meta meta">
										<span class="meta__item">19.11.2015</span>
									</p>
									<h2 class="box-article-grid__title">Cena rektora Masarykovy univerzity pro vynikající pedagogy</h2>
								</div>
							</a>
						</li>
						<?php endfor; ?>
					</ul>
				</div>

				<h3 class="h4">Osobní informace</h3>
				<table>
					<colgroup>
						<col style="width: 25%;">
						<col style="width: 75%;">
					</colgroup>
					<tbody>
						<tr>
							<th>Osobní identifikace</th>
							<td>1073 (univerzitní číslo osoby UČO)</td>
						</tr>
						<tr>
							<th>Vizitkové URL</th>
							<td><a href="#">www.muni.cz/ceitec/people/Ivan.Rektor</a>, <a href="#">www.muni.cz/people/Ivan.Rektor</a></td>
						</tr>
						<tr>
							<th>Interní informace</th>
							<td><a href="#" class="link-icon link-icon--after">Inet MU <span class="icon icon-lock"></span></a>, <a href="#" class="link-icon link-icon--after">IS MU <span class="icon icon-lock"></span></a>, <a href="#" class="link-icon link-icon--after">www.muni.cz <span class="icon icon-external-link"></span></a></td>
						</tr>
					</tbody>
				</table>

				<h3 class="h4">Členství v akademických a dalších orgánech MU</h3>
				<table>
					<colgroup>
						<col style="width: 25%;">
						<col style="width: 75%;">
					</colgroup>
					<tbody>
						<tr>
							<th>Kolegium ředitele</th>
							<td><a href="#">Středoevropský technologický institut</a></td>
						</tr>
						<tr>
							<th>Oborová rada</th>
							<td><a href="#">Neurovědy (čtyřleté)</a>, <a href="#">Neurologie (čtyřleté)</a></td>
						</tr>
					</tbody>
				</table>

				<h3 class="h4">Pracoviště</h3>
				<table>
					<colgroup>
						<col style="width: 25%;">
						<col style="width: 75%;">
					</colgroup>
					<tbody>
						<tr>
							<th>Fakulta/Ústav</th>
							<td><a href="#">Lékařská fakulta</a></td>
						</tr>
						<tr>
							<th>Katedra/Oddělení</th>
							<td><a href="#">I. neurologická klinika</a></td>
						</tr>
						<tr>
							<th>Pracovní zařazení</th>
							<td>profesor</td>
						</tr>
						<tr>
							<th>Telefon</th>
							<td>543 182 623</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td><a href="#" class="link-icon link-icon--after">ivan.rektor@fnusa.cz <span class="icon icon-envelope"></span></a>, <a href="#" class="link-icon link-icon--after">irektor@med.muni.cz <span class="icon icon-envelope"></span></a></td>
						</tr>
					</tbody>
				</table>

				<table>
					<colgroup>
						<col style="width: 25%;">
						<col style="width: 75%;">
					</colgroup>
					<tbody>
						<tr>
							<th>Fakulta/Ústav</th>
							<td><a href="#">Středoevropský technologický institut</a></td>
						</tr>
						<tr>
							<th>Katedra/Oddělení</th>
							<td><a href="#">Výzkumná skupina Multimodální a funkční neurozobrazování</a></td>
						</tr>
						<tr>
							<th>Pracovní zařazení</th>
							<td>profesor</td>
						</tr>
						<tr>
							<th>Kancelář</th>
							<td>bud. A35/1S062 <a href="#">Kamenice 753/5, Bohunice, Brno</a></td>
						</tr>
						<tr>
							<th>Telefon</th>
							<td>549 49 6057</td>
						</tr>
						<tr>
							<th>E-mail</th>
							<td><a href="#" class="link-icon link-icon--after">ivan.rektor@fnusa.cz <span class="icon icon-envelope"></span></a></td>
						</tr>
					</tbody>
				</table>

				<table>
					<colgroup>
						<col style="width: 25%;">
						<col style="width: 75%;">
					</colgroup>
					<tbody>
						<tr>
							<th>Fakulta/Ústav</th>
							<td><a href="#">Středoevropský technologický institut</a></td>
						</tr>
						<tr>
							<th>Katedra/Oddělení</th>
							<td><a href="#">Laboratoř multimodálního a funkčního neurozobrazování</a></td>
						</tr>
						<tr>
							<th>Pracovní zařazení</th>
							<td>profesor</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

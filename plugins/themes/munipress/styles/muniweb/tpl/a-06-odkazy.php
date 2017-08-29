<?php
	$title = 'Odkazy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>06</strong>
						Odkazy
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/_typography.scss a /src/css/atoms/_links.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Odkazy pro H1 – H6</h2>
					</div>
					<div class="sk-example__content u-mb-50">
						<h1><a href="#">Nadpis 1 s odkazem</a></h1>
						<h2><a href="#">Nadpis 2 s odkazem</a></h2>
						<h3><a href="#">Nadpis 3 s odkazem</a></h3>
						<h4><a href="#">Nadpis 4 s odkazem</a></h4>
						<h5><a href="#">Nadpis 5 s odkazem</a></h5>
						<h6><a href="#">Nadpis 6 s odkazem</a></h6>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Standardní odkazy</h2>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<strong>Standardní odkaz:</strong> <a href="#">Odkaz</a>
						</p>
						<p>
							<strong>Odkaz bez atributu href:</strong> <a>Odkaz</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Odkazy s ikonkami</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro odkazy s ikonkami slouží atom link-icon, kterému se přidává modifikátor link-icon--before / link-icon--after podle potřeby a ikonka dle atomu <a href="a-05-ikonky.html">ikonek</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<a href="#" class="link-icon link-icon--before">
								<span class="icon icon-calendar"></span>
								Ikonka před odkazem
							</a>
						</p>
						<p>
							<a href="#" class="link-icon link-icon--after">
								Externí odkaz
								<span class="icon icon-external-link"></span>
							</a>
						</p>
						<p>
							<a href="http://www.superkoderi.cz/">
								Automatický externí odkaz
							</a>
						</p>
						<p>
							<a href="#" class="link-icon link-icon--after">
								Napište nám!
								<span class="icon icon-envelope-o"></span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Multimediální odkazy</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro standardní odkazy s ikonkou slouží stejná konstrukce jako u Odkazů s ikonkami.
						</p>
						<p>
							Pro odkazy s informací o souboru slouží atom link-file s konstrukcí dle ukázky kódu.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<a href="#" class="link-icon link-icon--after">
								Video soubor
								<span class="icon icon-file-video-o"></span>
							</a>
						</p>
						<p>
							<a href="#" class="link-icon link-icon--after">
								Audio soubor
								<span class="icon icon-file-audio-o"></span>
							</a>
						</p>
						<p>
							<a href="#" class="link-file">
								<span class="link-file__name">
									Word dokument
								</span>
								<span class="file-type">
									<strong>.doc</strong> 589kB
								</span>
							</a>
						</p>
						<p>
							<a href="#" class="link-file">
								<span class="link-file__name">
									Excel dokument
								</span>
								<span class="file-type">
									<strong>.xls</strong> 589kB
								</span>
							</a>
						</p>
						<p>
							<a href="#" class="link-file">
								<span class="link-file__name">
									Powerpoint Dokument
								</span>
								<span class="file-type">
									<strong>.ppt</strong> 589kB
								</span>
							</a>
						</p>
						<p>
							<a href="#" class="link-file">
								<span class="link-file__name">
									PDF Dokument
								</span>
								<span class="file-type">
									<strong>.pdf</strong> 589kB
								</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Tabulka souborů</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tabulka se soubory je kombinací standardní tabulky z <a href="a-01-typografie.html">typografie</a> a atomu Multimediální odkazy viz. výše.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<table class="table-padded">
							<tbody>
								<tr class="tr-clickable">
									<th>
										<a href="#">Word dokument</a>
									</th>
									<td class="right">
										<span class="file-type">
											<strong>.doc</strong> 589kB
										</span>
									</td>
								</tr>
								<tr class="tr-clickable">
									<th>
										<a href="#">Excel dokument</a>
									</th>
									<td class="right">
										<span class="file-type">
											<strong>.xls</strong> 589kB
										</span>
									</td>
								</tr>
								<tr class="tr-clickable">
									<th>
										<a href="#">Powerpoint Dokument</a>
									</th>
									<td class="right">
										<span class="file-type">
											<strong>.ppt</strong> 589kB
										</span>
									</td>
								</tr>
								<tr class="tr-clickable">
									<th>
										<a href="#">PDF Dokument</a>
									</th>
									<td class="right">
										<span class="file-type">
											<strong>.pdf</strong> 589kB
										</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka použití v textu</h2>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							Etiam at urna sollicitudin,
							<a href="#" class="link-icon link-icon--after">
								sketcher.sk
								<span class="icon icon-external-link"></span>
							</a>
							libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. <a href="#">Sed euismod velit ac mauris</a> pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa. Nunc eget dui
							<a href="#" class="link-icon link-icon--after">
								kontaktujte nás
								<span class="icon icon-envelope-o"></span>
							</a>
						</p>
						<p>
							Eeuismod velit ac mauris pretium
							<a href="#" class="link-file">
								<span class="link-file__name">
									Zoznam prijatých nástupcov
								</span>
								<span class="file-type">
									<strong>.xls</strong> 589kB
								</span>
							</a>
							mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio s
						</p>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

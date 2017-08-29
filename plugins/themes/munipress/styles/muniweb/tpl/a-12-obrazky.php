<?php
	$title = 'Obrázky';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>11</strong>
						Obrázky
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/atoms/_image.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní – 16:9</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro zobrazení obrázků slouží atom .image, který drží pomocí image__holder:after container 16:9. Na výšku menší obrázky než container se vertikálně vycentrují – obdobně na šířku menší obrázky se horizontálně vycentrují. Větší obrázky se zmenší dle proporcí do containeru.
						</p>
					</div>
					<div class="sk-example__content size--m--6-12 u-mb-50">
						<div class="image">
							<div class="image__holder">
								<div class="image__inner">
									<img src="../img/illust/16-9.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní – 4:3</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná pravidla jako u Defaultního 16:9 jen se na atom .image přidává modifikátor image--4by3.
						</p>
					</div>
					<div class="sk-example__content size--m--6-12 u-mb-50">
						<div class="image image--4by3">
							<div class="image__holder">
								<div class="image__inner">
									<img src="../img/illust/4-3.png" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Popis obrázku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							K obrázkům lze vkládat popisky. Slouží pro ně element .image__caption, který se defaultně zobrazuje pod obrázkem. Přidáním modifikátoru image__caption--inside se popisek bude zobrazovat ve spodní části obrázku.
						</p>
						<p>
							V našem případě jsme pro pěkné naformátování umístili obrázky do atomu <a href="a-02-grid.html">gridu</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--m--2-4 size--l--4-12">
								<div class="image">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
									<p class="image__caption">Popis obrázku donec laoreet tellus et eros pharetra vehicula.</p>
								</div>
							</div>
							<div class="grid__cell size--m--2-4 size--l--4-12">
								<div class="image">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
									<p class="image__caption image__caption--inside">Copyright 2016, John Doe</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Obrázky na plnou šířku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Na defaultní atom .image se přidá modifikátor image--full, který omezí výšku holderu na max 600px, aby nebyly obrázky příliš velké na širokých obrazovkách (např. při rozlišení 1920px).
						</p>
					</div>
				</div>
				<div class="sk-example__content u-mb-50">
					<div class="image image--full">
						<div class="image__holder">
							<div class="image__inner"><img src="../img/illust/16-9.png" alt="" /></div>
						</div>
					</div>
				</div>
			</div>

			<div class="row-main">
				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Základní pozicování v textu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							První tři příklady ukazují, jak udělat obrázek obtékaný textem. Na atom .image se přidá modifikátor image--right. Obdobně by to fungovalo i s modifikátorem image--left. Navíc je přidána classa z <a href="a-02-grid.html">gridu</a>, která definuje šířku obrázků v containeru.
						</p>
						<p>
							Čtvrtý příklad je ukázka obrázku na plnou šířku obsahu. Jedná se vlastně o defaultní atom obrázku.
						</p>
						<p>
							Další dvě ukázky jsou obtékané obrázky s vysunutím z obsahu. Opět se na vysunutí a velikost používají classy z <a href="a-02-grid.html">gridu</a>. Pro tento příklad byl celý obsah vložen do gridu, který je po stranách odsazený.
						</p>
						<p>
							Dalším příklad je standardní atom obrázku použitý v polovičním gridu.
						</p>
						<p>
							Je možné libovolně kombinovat formáty 16:9 s 4:3 i včetně popisků.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="grid">
							<div class="grid__cell size--l--8-12 push--l--2-12">
								<div class="image image--right size--m--1-4 size--l--3-12">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
								</div>
								<p>Etiam at urna sollicitudin, suscipit libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. Sed euismod velit ac mauris pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa.</p>

								<div class="image image--right size--m--2-4 size--l--4-12">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
								</div>
								<p>Etiam at urna sollicitudin, suscipit libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. Sed euismod velit ac mauris pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa. Nunc eget dui diam. Aliquam a facilisis tortor.</p>

								<div class="image image--right size--m--2-4 size--l--6-12">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
								</div>
								<p>Etiam at urna sollicitudin, suscipit libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. Sed euismod velit ac mauris pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa. Nunc eget dui diam.</p>

								<div class="image">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
								</div>

								<p>Etiam at urna sollicitudin, suscipit libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. Sed euismod velit ac mauris pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa.</p>

								<div class="image image--right size--m--2-4 size--l--8-12 push-m--l--2-12">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
								</div>
								<p>Etiam at urna sollicitudin, suscipit libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. Sed euismod velit ac mauris pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa.</p>

								<div class="image image--left size--m--2-4 size--l--8-12 pull-m--l--2-12">
									<div class="image__holder">
										<div class="image__inner">
											<img src="../img/illust/16-9.png" alt="" />
										</div>
									</div>
								</div>
								<p>Etiam at urna sollicitudin, suscipit libero at, lobortis tellus. Pellentesque sodales, dui ac consectetur consequat, nisi mi feugiat urna, in vestibulum velit urna in justo. Aliquam a facilisis tortor. Aliquam condimentum odio sollicitudin tellus fermentum placerat. Sed euismod velit ac mauris pretium ondimentum. Duis non rhoncus odio, a varius orci. Nullam fermentum leo at quam rutrum blandit. Fusce varius eros sit amet nibh convallis, ac vehicula leo rutrum. Curabitur sed sollicitudin massa.</p>

								<div class="grid">
									<div class="grid__cell size--m--2-4">
										<div class="image image--4by3">
											<div class="image__holder">
												<div class="image__inner">
													<img src="../img/illust/4-3.png" alt="" />
												</div>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, repellendus. Dignissimos qui, tempora quas accusamus dolore itaque sint similique, amet dolorem, obcaecati inventore, optio sunt sit molestias vitae quasi. Eius!</p>
									</div>
									<div class="grid__cell size--m--2-4">
										<div class="image image--4by3">
											<div class="image__holder">
												<div class="image__inner">
													<img src="../img/illust/4-3.png" alt="" />
												</div>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque obcaecati doloribus rerum quidem, sed ad at tempore consequuntur quaerat ex. Odio quasi dolores magnam minus. Possimus sit, aliquam ipsum recusandae!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Obrázky pro wysiwyg</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							V některých případech nelze jednoduše vkládat obalující elementy pro obrázky. Např. v tzv. wysiwyg editorech, které dokáží maximálně vložit classu na obrázek. Proto po přidání classy .right nebo .left na obrázek se začnou obtékat textem (pomocí css pravidel float:left/right;).
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-content">
							<p><img src="../img/illust/16-9.png" alt="" class="right" width="200" height="112" />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, laudantium, error! Quis voluptatibus delectus laborum doloremque, nisi. Eaque sit expedita deleniti quibusdam dolorem molestiae nulla quas minima incidunt, nesciunt distinctio?</p>
							<p><img src="../img/illust/16-9.png" alt="" class="left" width="200" height="112" />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, laudantium, error! Quis voluptatibus delectus laborum doloremque, nisi. Eaque sit expedita deleniti quibusdam dolorem molestiae nulla quas minima incidunt, nesciunt distinctio?</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, laudantium, error! Quis voluptatibus delectus laborum doloremque, nisi. Eaque sit expedita deleniti quibusdam dolorem molestiae nulla quas minima incidunt, nesciunt distinctio?</p>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Příklad použití srcset a sizes atributů</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Jako dokumentaci doporučuji využít český článek na blogu <a href="http://www.vzhurudolu.cz/prirucka/srcset-sizes">Vzhůrudolů</a>.
						</p>
					</div>
				</div>

				<div class="sk-example__content u-mb-50">
					<div class="row-main">
						<p>
							<img src="../img/illust/img-1170x480.jpg" alt="Alternativní text" srcset="../img/illust/img-480x480.jpg 480w, ../img/illust/img-700x480.jpg 700w, ../img/illust/img-1000x480.jpg 1000w, ../img/illust/img-1170x480.jpg 1170w" sizes="(min-width: 1240px) 1170px, (min-width: 1000px) calc(100vw - 70px), (min-width: 700px) calc(100vw - 50px), calc(100vw - 30px)" />
						</p>
						<div class="grid">
							<div class="grid__cell size--xs--1-2">
								<p>
									<img src="../img/illust/img-570x570.jpg" alt="Alternativní text" srcset="../img/illust/img-235x235.jpg 235w, ../img/illust/img-315x315.jpg 315w, ../img/illust/img-475x475.jpg 475w, ../img/illust/img-570x570.jpg 570w" sizes="(min-width: 1240px) 570px, (min-width: 1000px) calc( (100vw - 90px) / 2 ), (min-width: 700px) calc( (100vw - 70px) / 2 ), calc( (100vw - 50px) / 2 )" />
								</p>
							</div>
							<div class="grid__cell size--xs--1-2">
								<p>
									<img src="../img/illust/img-570x570.jpg" alt="Alternativní text" srcset="../img/illust/img-235x235.jpg 235w, ../img/illust/img-315x315.jpg 315w, ../img/illust/img-475x475.jpg 475w, ../img/illust/img-570x570.jpg 570w" sizes="(min-width: 1240px) 570px, (min-width: 1000px) calc( (100vw - 90px) / 2 ), (min-width: 700px) calc( (100vw - 70px) / 2 ), calc( (100vw - 50px) / 2 )" />
								</p>
							</div>
						</div>
						<div class="box-hero box-hero--bordered box-hero--size-m box-hero--particles">
							<div class="box-hero__img">
								<img src="../img/illust/img-1000x480.jpg" alt="" srcset="../img/illust/img-480x480.jpg 480w, ../img/illust/img-700x480.jpg 700w" sizes="(min-width: 1240px) 585px, (min-width: 700px) calc( 100vw / 2 ), 100vw" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Jsme univerzita na celý život</h2>
									<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</strong></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</p>
								</div>
							</div>
						</div>
					</div>
					<p>
						<img src="../img/illust/img-1000x480.jpg" alt="" srcset="../img/illust/img-480x480.jpg 480w, ../img/illust/img-700x480.jpg 700w, ../img/illust/img-1000x480.jpg 1000w, ../img/illust/img-1440x480.jpg 1440w, ../img/illust/img-1920x480.jpg 1920w" sizes="100vw" />
					</p>
					<div class="box-hero box-hero--bordered box-hero--size-m box-hero--particles">
						<div class="row-main">
							<div class="box-hero__img">
								<img src="../img/illust/img-1000x480.jpg" alt="" srcset="../img/illust/img-480x480.jpg 480w, ../img/illust/img-700x480.jpg 700w, ../img/illust/img-1000x480.jpg 1000w" sizes="(min-width: 700px) calc( 100vw / 2 ), 100vw" />
							</div>
							<div class="box-hero__particles"></div>
							<div class="box-hero__content">
								<div class="box-hero__content-inner">
									<h2>Jsme univerzita na celý život</h2>
									<p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</strong></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ut, suscipit quos quo, voluptates optio error explicabo!</p>
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

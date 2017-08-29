<?php
	$title = 'Rozklikávací boxy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.04</strong>
						Boxy – Rozklikávací boxy
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_accordion.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/accordion.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro rozklikávací boxy. Do .box-accordion__inner lze vkládat jakýkoliv obsah (např. typografie, grid, molekuly boxů, molekuly výpisů, formuláře apod.).
						</p>
						<p>
							Pro zobrazení položek slouží javascript. Najednou lze rozkliknout více položek. Pokud chceme některý z boxů mít otevřený při načtení stránky, pak se musí přidat na .box-accordion__item modifikátor is-open
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-accordion">
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Kdy a jak dodávám maturitní vysvědčení?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
							<div class="box-accordion__item is-open">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Zapomněl(a) jsem heslo k e-přihlášce, co mám dělat?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S ohraničením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly s modifikátorem box-accordion--bordered na elementu .box-accordion
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-accordion box-accordion--bordered">
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Kdy a jak dodávám maturitní vysvědčení?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Zapomněl(a) jsem heslo k e-přihlášce, co mám dělat?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velké bez ohraničení</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly s modifikátorem box-accordion--big na elementu .box-accordion
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-accordion box-accordion--big">
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Kdy a jak dodávám maturitní vysvědčení?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Zapomněl(a) jsem heslo k e-přihlášce, co mám dělat?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velké s ohraničením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z velké molekuly s modifikátorem box-accordion--bordered na elementu .box-accordion.box-accordion--big
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-accordion box-accordion--big box-accordion--bordered">
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Kdy a jak dodávám maturitní vysvědčení?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Zapomněl(a) jsem heslo k e-přihlášce, co mám dělat?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title"><a href="#zalozka-1" class="link-slide">S historií</a></h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly a může se kombinovat se vzhledem viz. víše. Navíc je na .box-accordion přídán modifikátor with-history, který naváže události hashchange. Navíc je potřeba přidat ID na .box-accordion__box.
						</p>
						<p>
							 Rozklikávací boxy s historií mohou být pouze jednou na stránce.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-accordion with-history">
							<div class="box-accordion__item">
								<h2 class="box-accordion__title">
									<a href="#zalozka-1" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Kdy a jak dodávám maturitní vysvědčení?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div id="zalozka-1" class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
								</div>
							</div>
							<div class="box-accordion__item is-open">
								<h2 class="box-accordion__title">
									<a href="#zalozka-2" class="box-accordion__title__link">
										<span class="box-accordion__title__name">Zapomněl(a) jsem heslo k e-přihlášce, co mám dělat?</span>
										<span class="icon icon-plus"></span>
									</a>
								</h2>
								<div id="zalozka-2" class="box-accordion__box">
									<div class="box-accordion__inner">
										<p>Kombinovaná (nebo taky distanční) forma studia nevyžaduje každodenní přítomnost ve škole. Výuka většinou probíhá v pátek a v sobotu v blocích. Tuto formu studia snadno skloubíš s prací, ale nebudeš mít nárok na studentské výhody, které jsou jen pro studnety denního studia.</p>
									</div>
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

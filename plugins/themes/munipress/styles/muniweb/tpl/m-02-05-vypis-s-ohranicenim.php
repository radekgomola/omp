<?php
	$title = 'Výpis s ohraničením';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.05</strong>
						Boxy – Výpis s ohraničením
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_grid.scss
					</p>
				</div>


				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Default</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro významné informace. V této molekule se využívá atom <a href="a-02-grid.html">grid</a>, který se stará o zarovnání a počet sloupců.
						</p>
						<p>
							Pokud chceme, aby jednotlivé buňky byly klikatelné pak z .box-grid__inner stačí udělat odkaz.
						</p>
						<p>
							Je možné také definovat velikost nadpisu pomocí modifikátoru h1 - h5.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-grid">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<a href="#" class="box-grid__inner">
										<h2 class="h5 muni">Můžete studovat dva obory současně - ukázka s odkazem</h2>
										<p>v mnoha případech</p>
									</a>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h4 muni">Máme moderní zrekonstruované zázemí</h2>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Špičkový archeologický výzkum</h2>
										<p>na Filosofickej fakulte</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Naučíme vás kriticky myslet</h2>
										<p>a podpoříme vaši celoživotní chuť se vzdělávat</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zarovnání obsahu doleva</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro zarovnání obsahu je potřeba přidat modifikátor box-grid__inner--left na .box-grid__inner.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-grid">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--l--4-12">
									<div class="box-grid__inner box-grid__inner--left">
										<h2 class="h5 muni">Můžete studovat dva obory současně</h2>
										<p>v mnoha případech</p>
									</div>
								</div>
								<div class="grid__cell size--l--4-12">
									<div class="box-grid__inner box-grid__inner--left">
										<h2 class="h5 muni">Máme moderní zrekonstruované zázemí</h2>
										<p>a rozsáhlou knihovnu</p>
									</div>
								</div>
								<div class="grid__cell size--l--4-12">
									<div class="box-grid__inner box-grid__inner--left">
										<h2 class="h5 muni">Špičkový archeologický výzkum</h2>
										<p>na Filosofickej fakulte</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zvýrazněné a ohraničené</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro ohraničení obsahu je potřeba přidat modifikátor box-grid--bordered na .box-grid. Pro zvýraznění nadpisu je potřeba přidat na element nadpisu modifikátor .title-highlighted.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-grid box-grid--bordered">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">83 %</h2>
										<p>Absolventů by znova studovalo na MU</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">23 300,–</h2>
										<p>Průměrný nástupní plat</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">74 %</h2>
										<p>Absolventů našlo práci snadno</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">89 %</h2>
										<p>Je spokojeno se zaměstnáním</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zvýrazněné s pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro přidání pozadí obsahu je potřeba přidat modifikátor box-grid--background na .box-grid. Pro zvýraznění nadpisu je potřeba přidat na element nadpisu modifikátor .title-highlighted.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-grid box-grid--background">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">83 %</h2>
										<p>Absolventů by znova studovalo na MU</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">23 300,–</h2>
										<p>Průměrný nástupní plat</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">74 %</h2>
										<p>Absolventů našlo práci snadno</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">89 %</h2>
										<p>Je spokojeno se zaměstnáním</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Kombinace</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázky různých kombinací
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-grid box-grid--bordered u-mb-30">
							<h2 class="center">Absolventi fakulty v číslech</h2>
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">83 %</h2>
										<p>Absolventů by znova studovalo na MU</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">23 300,–</h2>
										<p>Průměrný nástupní plat</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">74 %</h2>
										<p>Absolventů našlo práci snadno</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="muni title-highlighted">89 %</h2>
										<p>Je spokojeno se zaměstnáním</p>
									</div>
								</div>
							</div>
						</div>
						<div class="box-grid">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Můžete studovat dva obory současně</h2>
										<p>v mnoha případech</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Máme moderní zrekonstruované zázemí</h2>
										<p>a rozsáhlou knihovnu</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Špičkový archeologický výzkum</h2>
										<p>na Filosofickej fakulte</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Naučíme vás kriticky myslet</h2>
										<p>a podpoříme vaši celoživotní chuť se vzdělávat</p>
									</div>
								</div>
							</div>
						</div>

						<div class="box-grid box-grid--background u-mb-30">
							<h2 class="center">Absolventi fakulty v číslech</h2>
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">83 %</h2>
										<p>Absolventů by znova studovalo na MU</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">23 300,–</h2>
										<p>Průměrný nástupní plat</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">74 %</h2>
										<p>Absolventů našlo práci snadno</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--m--1-4 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="white title-highlighted">89 %</h2>
										<p>Je spokojeno se zaměstnáním</p>
									</div>
								</div>
							</div>
						</div>
						<div class="box-grid">
							<div class="grid grid--nogutter">
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Můžete studovat dva obory současně</h2>
										<p>v mnoha případech</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Máme moderní zrekonstruované zázemí</h2>
										<p>a rozsáhlou knihovnu</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Špičkový archeologický výzkum</h2>
										<p>na Filosofickej fakulte</p>
									</div>
								</div>
								<div class="grid__cell size--s--1-2 size--l--3-12">
									<div class="box-grid__inner">
										<h2 class="h5 muni">Naučíme vás kriticky myslet</h2>
										<p>a podpoříme vaši celoživotní chuť se vzdělávat</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">V klasickém boxu s pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázka použití uvnitř <a href="m-02-06-s-pozadim.html">molekuly s pozadím</a>.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-bg box-bg--color-light box-bg--primary box-bg--full">
						<div class="row-main">
							<div class="box-grid">
								<div class="grid grid--nogutter">
									<div class="grid__cell size--s--3-12 size--m--3-12 size--l--6-12">
									    <div class="box-grid__inner">
									        <h2 class="h5 white">Text1</h2>
											<p>Text2</p>
									    </div>
									</div>
									<div class="grid__cell size--s--3-12 size--m--3-12 size--l--6-12">
									    <a class="box-grid__inner" href="#">
									        <h2 class="h5 white">Text3</h2>
											<p>Text3</p>
									    </a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="box-bg box-bg--color-light box-bg--med box-bg--full">
						<div class="row-main">
							<div class="u-mb-30 center">
								<h2>Nadpis</h2>
								<p>Text</p>
							</div>
							<div class="box-grid ">
								<div class="grid grid--nogutter">
									<div class="grid__cell size--l--6-12">
										<div class="box-grid__inner" style="min-height: 83px;">
											<h2 class="primary h5">Text1</h2>
											<p>Text2</p>
										</div>
									</div>
									<div class="grid__cell size--l--6-12">
										<a class="box-grid__inner" href="/ukazky-komponent" style="min-height: 83px;">
											<h2 class="primary h5">Text3</h2>
											<p>Text3</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="box-bg box-bg--grey-light box-bg--full">
						<div class="row-main">
							<div class="u-mb-30 center">
								<h2>Nadpis</h2>
								<p>Text</p>
							</div>
							<div class="box-grid ">
								<div class="grid grid--nogutter">
									<div class="grid__cell size--l--6-12">
										<div class="box-grid__inner" style="min-height: 83px;">
											<h2 class="primary h5">Nadpis</h2>
											<p>Text</p>
										</div>
									</div>
									<div class="grid__cell size--l--6-12">
										<a class="box-grid__inner" href="#" style="min-height: 83px;">
											<h2 class="primary h5">Nadpis</h2>
											<p>Text</p>
										</a>
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

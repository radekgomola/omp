<?php
	$title = 'S pozadím';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.06</strong>
						Boxy – S pozadím
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_bg.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazení nějakého obsahu / molekuly na barevném podkladu. Do .box-bg lze vkládat libovolné komponenty z frameworku.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-bg">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka s větším písmem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejné jako výchozí molekula, jen je uvnitř použita classa big z <a href="a-00-framework.html">SK mini frameworku</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-bg">
							<p class="big">Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka s menším odsazením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro menší odsazení je potřeba přidat modifikátor box-bg--medium na .box-bg.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-bg box-bg--medium">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka s nejmenším odsazením</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro malé odsazení je potřeba přidat modifikátor box-bg--small na .box-bg.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-bg box-bg--small">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka s barevným (primárním) pozadím a bílým textem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro jiný barevný podklad je potřeba přidat modifikátory box-bg--primary a box-bg--color-light na .box-bg. Ukázka je připravena pro všechna nadefinovaná odsazení.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-bg box-bg--color-light box-bg--primary">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--primary box-bg--medium">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--primary box-bg--medium">
							<p class="big">Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>
			</div>

			<div id="full" class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka na celou šířku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro správné zobrazení je potřeba přidat modifikátor box-bg--full na .box-bg a dovnitř vložit .row-main, který se stará o vycentrování obsahu.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-bg box-bg--full">
						<div class="row-main">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row-main">
				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Barevné varianty</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro jiný barevný podklad dle barev fakult je potřeba přidat modifikátor box-bg--* (zkratka fakulty) a případně box-bg--color-light (pro změnu barvy) na .box-bg.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-bg box-bg--color-light box-bg--muni">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--law">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--med">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--sci">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--fi">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--fss">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--fsps">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--phil">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--ped">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--econ">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--dark">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--color-light box-bg--color">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--grey-dark">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
						<div class="box-bg box-bg--grey-light">
							<p>Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. <strong>Donec cursus sapien</strong> et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>

<?php
	$title = 'Pro neslyšící';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.20</strong>
						Pro neslyšící
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_deaf.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/deaf.coffee
					</p>
				</div>


				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s obsahem pro neslyšící. Pro tuto molekulu slouží div.box-deaf
						</p>
						<p>
							Obsah, kde je potřeba tato funkčnost se obalí do div.box-deaf. Jednotlivé části, které  mají audio alternativu se obalí do .box-deaf__content a hned na začátek se vloží odkaz pro přehrátí. V poslední řadě se někde umístí ikonka a.box-deaf__toggle, na kterou je navázán JavaScript, který zobrazuje ikonky s alternativním obsahem, v našem případě je vloženo do nadpisu.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="box-deaf">
							<div class="grid">
								<div class="grid__cell size--l--8-12">
									<h2 class="box-deaf__title">
										Heading 1
										<a href="#" class="box-deaf__toggle" title="Zobrazit videa ve znakovém jazyku">
											<span class="vhide">Zobrazit videa ve znakovém jazyku</span>
											<span class="icon icon-deaf"></span>
										</a>
									</h2>
									<p class="big">
										Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien sagittis a eleifend sed, tristique pretium, enim.
									</p>
									<div class="box-deaf__content">
										<a href="#" class="box-deaf__link" title="Přehrát video ve znakovém jazyku">
											<span class="vhide">Přehrát video ve znakovém jazyku</span>
											<span class="icon icon-play-circle"></span>
										</a>
										<p>
											Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.
										</p>
									</div>
									<div class="box-deaf__content">
										<a href="#" class="box-deaf__link" title="Přehrát video ve znakovém jazyku">
											<span class="vhide">Přehrát video ve znakovém jazyku</span>
											<span class="icon icon-play-circle"></span>
										</a>
										<p>
											Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque.
										</p>
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
